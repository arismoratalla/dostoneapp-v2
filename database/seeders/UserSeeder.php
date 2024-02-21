<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Database\Seeders\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // [
            //     'id' => 1,
            //     'name' => 'Aris Moratalla',
            //     'email' => 'dost9ict@gmail.com',
            //     'role' => 'admin',
            //     'active' => true
            // ],
            // [
            //     'id' => 2,
            //     'name' => 'maw-0302',
            //     'email' => 'mawee65@yahoo.com',
            //     'role' => 'employee',
            //     'active' => true
            // ],
            // [
            //     'id' => 3,
            //     'name' => 'mlk-0526',
            //     'email' => 'mahmud.kingking@ro9.dost.gov.ph',
            //     'role' => 'employee',
            //     'active' => true
            // ],
            // [
            //     'id' => 4,
            //     'name' => 'rss-1204',
            //     'email' => 'rosemarie.salazar@ro9.dost.gov.ph',
            //     'role' => 'employee',
            //     'active' => true
            // ],
            [
                'id' => 5,
                'name' => 'nfd-0406',
                'email' => 'dost9ordsecretariat@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 6,
                'name' => 'gra-0506',
                'email' => 'ghioangeles24@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 7,
                'name' => 'jiq0-123',
                'email' => 'jnnryqtl@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 8,
                'name' => 'itac-0107',
                'email' => 'ingridtac.dostro09@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 9,
                'name' => 'jjb1203',
                'email' => 'jali_badiola2005@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 10,
                'name' => 'itac0107-',
                'email' => 'rdba2004@yahoo.com-',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 11,
                'name' => 'rbg-0110',
                'email' => 'ronnelg10@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 12,
                'name' => 'apl-0318',
                'email' => 'allangeionlegaspi@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 13,
                'name' => 'mcb-0107',
                'email' => 'fass.procurement@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 14,
                'name' => 'tmc-0515',
                'email' => 'teffaniecatalya@yahoo.com.ph',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 15,
                'name' => 'cbp-1205',
                'email' => 'crisprieto05@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 16,
                'name' => 'nev-0213',
                'email' => 'neriejaneevidientes@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 17,
                'name' => 'jla-0823',
                'email' => 'jehnneyy.alama@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 18,
                'name' => 'msa-1217',
                'email' => 'graceantonio17@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 19,
                'name' => 'ssb-1121',
                'email' => 'bernardosheila21@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 20,
                'name' => 'ted-0417',
                'email' => 'tedskindness@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 21,
                'name' => 'krs-0127',
                'email' => 'kristinemaesarita27@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 22,
                'name' => 'emm-0715',
                'email' => 'enriquemmariano@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 23,
                'name' => 'hmt-0724',
                'email' => 'halidtamano.dost9@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 24,
                'name' => 'ahj-1022',
                'email' => 'nassefjumlail@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 25,
                'name' => 'mtd-1031',
                'email' => 'michaeldaryllericson@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 26,
                'name' => 'amh0121',
                'email' => 'gieansteven@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 27,
                'name' => 'gaa-1122',
                'email' => 'ellehcterg@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 28,
                'name' => 'mra-1218',
                'email' => 'minimarielleatilano@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 29,
                'name' => 'jbn-0806',
                'email' => 'jpine652001@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 30,
                'name' => 'zfa-0312',
                'email' => 'zorenantonio@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 31,
                'name' => 'zrf-1204',
                'email' => 'zeusczarbeaumonde@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 32,
                'name' => 'adm0808',
                'email' => 'arismoratalla@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 33,
                'name' => 'stg0515',
                'email' => 'sbgecosala@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 34,
                'name' => 'btc-0913',
                'email' => 'b.cutara@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 35,
                'name' => 'jag-0126',
                'email' => 'grapajaneedi@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 36,
                'name' => 'egg-1023',
                'email' => 'gallenoeden09@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 37,
                'name' => 'mdd0611',
                'email' => 'blakadm@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 38,
                'name' => 'lbs0820',
                'email' => 'larrymark2003@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 39,
                'name' => 'jaa-0615',
                'email' => 'jovitaapduhan@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 40,
                'name' => 'slb-0615',
                'email' => 'slbdost9zc@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 41,
                'name' => 'jto0418',
                'email' => 'janice.ong1214@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 42,
                'name' => 'jmm0216',
                'email' => 'engr_jot@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 43,
                'name' => 'jtf-0723',
                'email' => 'schezzo_july@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 44,
                'name' => 'nta-1119',
                'email' => 'protein63nt@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 45,
                'name' => 'ash-0501',
                'email' => 'arleneherbieto@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 46,
                'name' => 'flg-0827',
                'email' => 'flgalabin3@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 47,
                'name' => 'bbb-0703',
                'email' => 'bernadettebucoybelamide@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 48,
                'name' => 'rml-1005',
                'email' => 'rubenjr1005@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 49,
                'name' => 'ses-0118',
                'email' => 'suganobshadam@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 50,
                'name' => 'jjp-0110',
                'email' => 'revinuj.tiuqap@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 52,
                'name' => 'cal-0211',
                'email' => 'freathea2619@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 53,
                'name' => 'jsc-0611',
                'email' => 'junecast12@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 54,
                'name' => 'jap-0108',
                'email' => 'japidor@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 55,
                'name' => 'rja-0624',
                'email' => 'ricardo.apolinario@ro9.dost.gov.ph',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 56,
                'name' => 'lrgl-1112',
                'email' => 'loiserayleona@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 57,
                'name' => 'ehm-0620',
                'email' => 'eisenhowermanuel4@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 58,
                'name' => 'abg-0411',
                'email' => 'gurrea_aileen@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 59,
                'name' => 'svm-0828',
                'email' => 'shamudost9@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 60,
                'name' => 'mda-0206',
                'email' => 'mdalivio2@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 61,
                'name' => 'ett-0522',
                'email' => 'ebenezer22@rocketmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 62,
                'name' => 'gfp-0608',
                'email' => 'pager578@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 63,
                'name' => 'jdc-0605',
                'email' => 'jhaykhaycee@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 64,
                'name' => 'sfj-0919',
                'email' => 'jovenalsheryl@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 65,
                'name' => 'crr-0918',
                'email' => 'cc.rawr.07@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 66,
                'name' => 'edr-0910',
                'email' => 'carlsr.rodemio@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 67,
                'name' => 'jcz-0423',
                'email' => 'jessezuyco48@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 68,
                'name' => 'mmc-0206',
                'email' => 'merilynmcadag@yahoo.com.ph',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 69,
                'name' => 'mgc-0312',
                'email' => 'cachinmarc@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 70,
                'name' => 'nma-0601',
                'email' => 'nuhman.aljani@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 71,
                'name' => 'mhd-0510',
                'email' => 'melodyanne_donio@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 72,
                'name' => 'mkt-0823',
                'email' => 'maryrosekipkip@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 73,
                'name' => 'job-0518',
                'email' => 'jelynobayonas@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 74,
                'name' => 'ftt-0620',
                'email' => 'melanietemonio@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 75,
                'name' => 'clq-1214',
                'email' => 'carlosyl_quinte@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 76,
                'name' => 'jpa-1101',
                'email' => 'jeyzel_aparri@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 77,
                'name' => 'jlb-0705',
                'email' => 'jane.baygas@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 78,
                'name' => 'saa-1230',
                'email' => 'iamsarge83@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 79,
                'name' => 'nca-0705',
                'email' => 'vincentlecrappy@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 80,
                'name' => 'mjb-0401',
                'email' => 'markjayson181@yahoo.com',
                'role' => 'employee',
                'active' => true
            ],
            // [
            //     'id' => 81,
            //     'name' => 'testuser',
            //     'email' => 'testuser@gmail.com',
            //     'role' => 'employee',
            //     'active' => true
            // ],
            [
                'id' => 82,
                'name' => 'sar-0110',
                'email' => 'sherylerico07@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 83,
                'name' => 'markherras2003',
                'email' => 'markherras2003@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 84,
                'name' => 'slb-0611',
                'email' => 'sonorab611@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 85,
                'name' => 'mbm-1122',
                'email' => 'manubay.myrtel@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 86,
                'name' => 'ecc-0515',
                'email' => 'raincelorico@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 87,
                'name' => 'pmd-1201',
                'email' => 'engr.patrickdumdum03123@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 88,
                'name' => 'lpt0928',
                'email' => 'lorenatejero47@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 89,
                'name' => 'jqb0990',
                'email' => 'anecbook@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 90,
                'name' => 'krr-1109',
                'email' => 'kevinkarlramosramiso@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 91,
                'name' => 'vdr-0522',
                'email' => 'akocvince25@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 92,
                'name' => 'bap0523',
                'email' => 'bonpadayhag@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 93,
                'name' => 'njs-0824',
                'email' => 'njsatorre@up.edu.ph',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 94,
                'name' => 'ntr-1005',
                'email' => 'nelvinramirez_7@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 95,
                'name' => 'all-0216',
                'email' => 'alshu080611@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 96,
                'name' => 'kcb-1231',
                'email' => 'benigakristelle@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 97,
                'name' => 'gjb-0630',
                'email' => 'gladysb.1224@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 98,
                'name' => 'als-0205',
                'email' => 'analynsajiin.dost9@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 99,
                'name' => 'jsd-1006',
                'email' => 'gienujsodiod@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 100,
                'name' => 'krc-0108',
                'email' => 'kcarumba043@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 101,
                'name' => 'clu-0303',
                'email' => 'claireuttoh@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 102,
                'name' => 'aaf-0206',
                'email' => 'aaf0206@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 103,
                'name' => 'rpm-1117',
                'email' => 'rickymahilum@gmail.com',
                'role' => 'officer',
                'active' => true
            ],
            [
                'id' => 104,
                'name' => 'rhv-1019',
                'email' => 'reyralphvirtucio@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 105,
                'name' => 'dbl0225',
                'email' => 'davelumbay@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 106,
                'name' => 'cmb0322',
                'email' => 'charisabaitit@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 107,
                'name' => 'rgt-0319',
                'email' => 'cheelle1997@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 108,
                'name' => 'jdm-0728',
                'email' => 'molijeffreybob@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 109,
                'name' => 'jea-1124',
                'email' => 'alvarez.judilyn24@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 110,
                'name' => 'jat-0920',
                'email' => 'torresjames15@yahoo.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 111,
                'name' => 'aea-0710',
                'email' => 'arman.aquino.35@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 113,
                'name' => 'jsr-0403',
                'email' => 'jemzremillete@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 114,
                'name' => 'hsf-0406',
                'email' => 'hersonfernando@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 115,
                'name' => 'ica-0706',
                'email' => 'iancavenido@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 116,
                'name' => 'jbt-0716',
                'email' => 'jayceetangon@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 117,
                'name' => 'ojb-0813',
                'email' => 'omarbutlangan@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 118,
                'name' => 'dbc-0220',
                'email' => 'dorzmacau12@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 119,
                'name' => 'aaf-0826',
                'email' => 'floresargielou@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 120,
                'name' => 'jye-0624',
                'email' => 'johnkenesmas@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 121,
                'name' => 'ojb-0897',
                'email' => 'omarbutlangan13@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 122,
                'name' => 'kkt-0623',
                'email' => 'kylacamille723@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 123,
                'name' => 'abs-0530',
                'email' => 'aljeffrey.sardan30@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 124,
                'name' => 'sva-0308',
                'email' => 'stenelrizza@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 125,
                'name' => 'gca-1029',
                'email' => 'giancarloacejas@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 126,
                'name' => 'cqg-0804',
                'email' => 'chezkadawne.gregorio@uz.edu.ph',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 127,
                'name' => 'eap-1011',
                'email' => 'emapendergat95@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 128,
                'name' => 'jdv-0703',
                'email' => '123janmelvin@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 129,
                'name' => 'tbb-1204',
                'email' => 'mystara.mballa@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 130,
                'name' => 'fss-1121',
                'email' => 'jynx21.fs@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 131,
                'name' => 'jmea-0305',
                'email' => 'jessaandres.jams@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 132,
                'name' => 'hta-0316',
                'email' => 'hermajoycea@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 133,
                'name' => 'jmd-0111',
                'email' => 'dagoyjeaneanne@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 134,
                'name' => 'ngp-0321',
                'email' => 'njpjoepads@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 135,
                'name' => 'jzd-0318',
                'email' => 'jervesdalde93@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 136,
                'name' => 'dps-0615',
                'email' => 'dreamlysumangil6@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 137,
                'name' => 'jrg-0730',
                'email' => 'jguinea78@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 138,
                'name' => 'kvb-1227',
                'email' => 'kcbender97@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 139,
                'name' => 'sba-0801',
                'email' => 'andossheila@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 140,
                'name' => 'njj0427',
                'email' => 'julwadi13@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 141,
                'name' => 'eob-0415',
                'email' => 'elijahbernales102713@gmail.com',
                'role' => 'officer',
                'active' => true
            ],
            // [
            //     'id' => 142,
            //     'name' => 'coa2022',
            //     'email' => 'coa@dost9.ph',
            //     'role' => 'employee',
            //     'active' => false
            // ],
            [
                'id' => 143,
                'name' => 'jba-1006',
                'email' => 'joemar.anghag@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 144,
                'name' => 'jpf-0611',
                'email' => 'joefryfernando@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 145,
                'name' => 'gat-1120',
                'email' => 'geocarl.tibong@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 146,
                'name' => 'jbq-0820',
                'email' => 'querubinjecilisaac@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 147,
                'name' => 'erz-0614',
                'email' => 'eduzaragozajr@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 148,
                'name' => 'slq-1127',
                'email' => 'shekinahquibra98@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 149,
                'name' => 'mbb-0704',
                'email' => 'marvin.basira@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 150,
                'name' => 'das-1203',
                'email' => 'doreneserondo1597@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 151,
                'name' => 'rsa-0405',
                'email' => 'chengcheng031205@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 152,
                'name' => 'aha-0201',
                'email' => 'almafealbarico111@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 153,
                'name' => 'rbl-0128',
                'email' => 'roweecomms@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 154,
                'name' => 'csj-0629',
                'email' => 'cindyjauculan@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 155,
                'name' => 'sbg-0817',
                'email' => 'shiryllgarcia.1983@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 156,
                'name' => 'rbd-0421',
                'email' => 'raiseldumasig@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 157,
                'name' => 'ear-0710',
                'email' => 'albiaroc@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 158,
                'name' => 'ssv-0718',
                'email' => 'shairavillacin7@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 159,
                'name' => 'lft-1127',
                'email' => 'lyletan11@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 160,
                'name' => 'btk-0827',
                'email' => 'kasanbenzar@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 161,
                'name' => 'rfg-0225',
                'email' => 'davegramatica5@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 162,
                'name' => 'eav-0505',
                'email' => 'evamaevilla@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 163,
                'name' => 'rcj-1102',
                'email' => 'jruishnova@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 164,
                'name' => 'lld-1231',
                'email' => 'ljduriman@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 165,
                'name' => 'jol-0917',
                'email' => 'josefkyle12345@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 166,
                'name' => 'caz-0306',
                'email' => 'zamorachristine09@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 167,
                'name' => 'are-0416',
                'email' => 'anjielyn.engano@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 168,
                'name' => 'mac-0906',
                'email' => 'miggyatilano@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 169,
                'name' => 'fsm-1021',
                'email' => 'fahadzmuhaimin21@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 170,
                'name' => 'pkg-0326',
                'email' => 'kateegeerundio@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 171,
                'name' => 'jvp-0315',
                'email' => 'jakesyrelpalma92@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 172,
                'name' => 'fus-1018',
                'email' => 'ftmasheena@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 173,
                'name' => 'tac-1015',
                'email' => 'traodioacuemo@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 174,
                'name' => 'jae-1204',
                'email' => 'jayaee02@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 175,
                'name' => 'crb-0914',
                'email' => 'claudetterbenosa@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 176,
                'name' => 'ece-1204',
                'email' => 'empasemierose@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 177,
                'name' => 'emc-1002',
                'email' => 'ceeyoon1002@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 178,
                'name' => 'scr-1022',
                'email' => 'shielamariramos1@gmail.com',
                'role' => 'employee',
                'active' => false
            ],
            [
                'id' => 179,
                'name' => 'jdn-0727',
                'email' => 'jenny.nerona27@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 180,
                'name' => 'bcc-1009',
                'email' => 'beejaycarpio009@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 181,
                'name' => 'fjh-1202',
                'email' => 'wahidahimpon@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 183,
                'name' => 'mmr-0630',
                'email' => 'ellainerayman@gmail.com',
                'role' => 'employee',
                'active' => true
            ],
            [
                'id' => 184,
                'name' => 'rbt-0213',
                'email' => 'renieltumacas@gmail.com',
                'role' => 'officer',
                'active' => true
            ]
        ];

        foreach($users as $user) {
            $created_user = User::create([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'email_verified_at' => null,
                'password' => '$2y$12$DoeDs7Zr8/UYA5NYULhUaeVKjfG1.eXGy4KunY4nOD26ufHTYGe2a',
                'active' => $user['active']
            ]);

            if($user['active']){
                $role = Role::findByName($user['role'],'web');
                $created_user->assignRole($role);
            }
            
        }
    }
}
