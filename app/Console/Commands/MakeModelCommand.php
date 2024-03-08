<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeModelCommand extends Command
{
    protected $signature = 'wue:make-model {model} {module}';

    protected $description = 'Create a new model given the module name';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $modelName = $this->argument('model');
        $moduleName = $this->argument('module');
        $modulePath = base_path('modules/'.$moduleName);

        // Check if the module directory already exists
        if (!file_exists($modulePath)) {
            return $this->error('The module does not exist.');
        }

        // Check if the module directory already exists
        if (file_exists($modulePath.'/Models//'.$modelName.'.php')) {
            return $this->error('The model already exist.');
        }

        // Create the module directory
        // if (!mkdir($modulePath, 0755, true)) {
        //     return $this->error('Failed to create the module directory.');
        // }

        $modelFilePath = $modulePath.'/Models//'.$modelName.'.php';
        File::put($modelFilePath, $this->getModelTemplate($moduleName, $modelName));

        $this->info('Model has been created successfully.');
    }

    protected function getModelTemplate($moduleName, $modelName)
    {
        return <<<EOF
<?php

namespace Modules\\{$moduleName}\Models;

use Illuminate\Database\Eloquent\Model;

class {$modelName} extends Model
{
    use HasFactory;

    protected DOLLARfillable = [
        //
    ];
}

EOF;
    }
}
