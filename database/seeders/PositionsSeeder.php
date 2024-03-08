<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            // Plantilla positions
            'REGIONAL DIRECTOR' => 'Plantilla',
            'CHIEF SCIENCE RESEARCH SPECIALIST' => 'Plantilla',
            'CHIEF ADMINISTRATIVE OFFICER' => 'Plantilla',
            'SUPERVISING SCIENCE RESEARCH SPECIALIST' => 'Plantilla',
            'SENIOR SCIENCE RESEARCH SPECIALIST' => 'Plantilla',
            'ADMINISTRATIVE OFFICER V' => 'Plantilla',
            'SCIENCE RESEARCH SPECIALIST II' => 'Plantilla',
            'SCIENCE RESEARCH SPECIALIST I' => 'Plantilla',
            'SCIENCE RESEARCH ASSISTANT' => 'Plantilla',
            'ADMINISTRATIVE ASSISTANT III' => 'Plantilla',
            'ADMINISTRATIVE AIDE IV' => 'Plantilla',
            // COS positions
            'PROJECT TECHNICAL SPECIALIST IV' => 'COS',
            'PROJECT TECHNICAL SPECIALIST I' => 'COS',
            'PROJECT TECHNICAL ASSISTANT VI' => 'COS',
            'PROJECT TECHNICAL ASSISTANT IV' => 'COS',
            'PROJECT ADMINISTRATIVE ASSISTANT IV' => 'COS',
            'PROJECT TECHNICAL ASSISTANT III' => 'COS',
            'PROJECT ADMINISTRATIVE ASSISTANT III' => 'COS',
            'PROJECT TECHNICAL ASSISTANT II' => 'COS',
            'PROJECT ADMINISTRATIVE ASSISTANT II' => 'COS',
            'PROJECT TECHNICAL ASSISTANT I' => 'COS',
            'PROJECT ADMINISTRATIVE ASSISTANT I' => 'COS',
            'PROJECT TECHNICAL AIDE VI' => 'COS',
            'PROJECT ADMINISTRATIVE AIDE VI' => 'COS',
            'PROJECT TECHNICAL AIDE V' => 'COS',
            'PROJECT ADMINISTRATIVE AIDE V' => 'COS',
            'PROJECT TECHNICAL AIDE IV' => 'COS',
            'PROJECT ADMINISTRATIVE AIDE IV' => 'COS',
            'PROJECT TECHNICAL AIDE III' => 'COS',
            'PROJECT ADMINISTRATIVE AIDE III' => 'COS',
            'PROJECT TECHNICAL AIDE I' => 'COS',
            'PROJECT ADMINISTRATIVE AIDE I' => 'COS',
            'PROJECT ADMINISTRATIVE I' => 'COS',
            'PROJECT UTILITY AIDE II' => 'COS',
        ];

        foreach ($positions as $position => $type) {
            $properCasePosition = preg_replace_callback('/\b([IVXLCDM]+)\b/', function($matches) {
                return strtoupper($matches[1]);
            }, strtolower($position));
            
            DB::table('positions')->insert([
                'name' => ucwords($properCasePosition),
                'type' => $type,
            ]);
        }
    }
}
