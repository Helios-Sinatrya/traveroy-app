<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonecodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('phonecodes')->delete();
        
        DB::table('phonecodes')->insert(array (
            0 => 
            array (
                'id' => 3,
                'code' => '+7 840',
                'name' => 'Abkhazia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'code' => '+93',
                'name' => 'Afghanistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'code' => '+355',
                'name' => 'Albania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'code' => '+213',
                'name' => 'Algeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'code' => '+1 684',
                'name' => 'American Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'code' => '+376',
                'name' => 'Andorra',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'code' => '+244',
                'name' => 'Angola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'code' => '+1 264',
                'name' => 'Anguilla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'code' => '+1 268',
                'name' => 'Antigua and Barbuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'code' => '+54',
                'name' => 'Argentina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'code' => '+374',
                'name' => 'Armenia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'code' => '+297',
                'name' => 'Aruba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'code' => '+247',
                'name' => 'Ascension',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'code' => '+61',
                'name' => 'Australia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'code' => '+672',
                'name' => 'Australian External Territories',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'code' => '+43',
                'name' => 'Austria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'code' => '+994',
                'name' => 'Azerbaijan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'code' => '+1 242',
                'name' => 'Bahamas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'code' => '+973',
                'name' => 'Bahrain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'code' => '+880',
                'name' => 'Bangladesh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'code' => '+1 246',
                'name' => 'Barbados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'code' => '+1 268',
                'name' => 'Barbuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'code' => '+375',
                'name' => 'Belarus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'code' => '+32',
                'name' => 'Belgium',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'code' => '+501',
                'name' => 'Belize',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'code' => '+229',
                'name' => 'Benin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'code' => '+1 441',
                'name' => 'Bermuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 30,
                'code' => '+975',
                'name' => 'Bhutan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 31,
                'code' => '+591',
                'name' => 'Bolivia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 32,
                'code' => '+387',
                'name' => 'Bosnia and Herzegovina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 33,
                'code' => '+267',
                'name' => 'Botswana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 34,
                'code' => '+55',
                'name' => 'Brazil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 35,
                'code' => '+246',
                'name' => 'British Indian Ocean Territory',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 36,
                'code' => '+1 284',
                'name' => 'British Virgin Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 37,
                'code' => '+673',
                'name' => 'Brunei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 38,
                'code' => '+359',
                'name' => 'Bulgaria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 39,
                'code' => '+226',
                'name' => 'Burkina Faso',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 40,
                'code' => '+257',
                'name' => 'Burundi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 41,
                'code' => '+855',
                'name' => 'Cambodia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 42,
                'code' => '+237',
                'name' => 'Cameroon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 43,
                'code' => '+1',
                'name' => 'Canada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 44,
                'code' => '+238',
                'name' => 'Cape Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 45,
                'code' => '+ 345',
                'name' => 'Cayman Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 46,
                'code' => '+236',
                'name' => 'Central African Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 47,
                'code' => '+235',
                'name' => 'Chad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 48,
                'code' => '+56',
                'name' => 'Chile',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 49,
                'code' => '+86',
                'name' => 'China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 50,
                'code' => '+61',
                'name' => 'Christmas Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 51,
                'code' => '+61',
                'name' => 'Cocos-Keeling Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 52,
                'code' => '+57',
                'name' => 'Colombia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 53,
                'code' => '+269',
                'name' => 'Comoros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 54,
                'code' => '+242',
                'name' => 'Congo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 55,
                'code' => '+243',
            'name' => 'Congo, Dem. Rep. of (Zaire)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 56,
                'code' => '+682',
                'name' => 'Cook Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 57,
                'code' => '+506',
                'name' => 'Costa Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 58,
                'code' => '+385',
                'name' => 'Croatia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 59,
                'code' => '+53',
                'name' => 'Cuba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 60,
                'code' => '+599',
                'name' => 'Curacao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 61,
                'code' => '+537',
                'name' => 'Cyprus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 62,
                'code' => '+420',
                'name' => 'Czech Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 63,
                'code' => '+45',
                'name' => 'Denmark',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 64,
                'code' => '+246',
                'name' => 'Diego Garcia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 65,
                'code' => '+253',
                'name' => 'Djibouti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 66,
                'code' => '+1 767',
                'name' => 'Dominica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 67,
                'code' => '+1 809',
                'name' => 'Dominican Republic',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 68,
                'code' => '+670',
                'name' => 'East Timor',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 69,
                'code' => '+56',
                'name' => 'Easter Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 70,
                'code' => '+593',
                'name' => 'Ecuador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 71,
                'code' => '+20',
                'name' => 'Egypt',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 72,
                'code' => '+503',
                'name' => 'El Salvador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 73,
                'code' => '+240',
                'name' => 'Equatorial Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 74,
                'code' => '+291',
                'name' => 'Eritrea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 75,
                'code' => '+372',
                'name' => 'Estonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 76,
                'code' => '+251',
                'name' => 'Ethiopia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 77,
                'code' => '+500',
                'name' => 'Falkland Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 78,
                'code' => '+298',
                'name' => 'Faroe Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 79,
                'code' => '+679',
                'name' => 'Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 80,
                'code' => '+358',
                'name' => 'Finland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 81,
                'code' => '+33',
                'name' => 'France',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 82,
                'code' => '+596',
                'name' => 'French Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 83,
                'code' => '+594',
                'name' => 'French Guiana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 84,
                'code' => '+689',
                'name' => 'French Polynesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 85,
                'code' => '+241',
                'name' => 'Gabon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 86,
                'code' => '+220',
                'name' => 'Gambia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 87,
                'code' => '+995',
                'name' => 'Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 88,
                'code' => '+49',
                'name' => 'Germany',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 89,
                'code' => '+233',
                'name' => 'Ghana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 90,
                'code' => '+350',
                'name' => 'Gibraltar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 91,
                'code' => '+30',
                'name' => 'Greece',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 92,
                'code' => '+299',
                'name' => 'Greenland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 93,
                'code' => '+1 473',
                'name' => 'Grenada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 94,
                'code' => '+590',
                'name' => 'Guadeloupe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 95,
                'code' => '+1 671',
                'name' => 'Guam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 96,
                'code' => '+502',
                'name' => 'Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 97,
                'code' => '+224',
                'name' => 'Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 98,
                'code' => '+245',
                'name' => 'Guinea-Bissau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 99,
                'code' => '+595',
                'name' => 'Guyana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 100,
                'code' => '+509',
                'name' => 'Haiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 101,
                'code' => '+504',
                'name' => 'Honduras',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 102,
                'code' => '+852',
                'name' => 'Hong Kong SAR China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 103,
                'code' => '+36',
                'name' => 'Hungary',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 104,
                'code' => '+354',
                'name' => 'Iceland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 105,
                'code' => '+91',
                'name' => 'India',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 106,
                'code' => '+62',
                'name' => 'Indonesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 107,
                'code' => '+98',
                'name' => 'Iran',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 108,
                'code' => '+964',
                'name' => 'Iraq',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 109,
                'code' => '+353',
                'name' => 'Ireland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 110,
                'code' => '+972',
                'name' => 'Israel',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 111,
                'code' => '+39',
                'name' => 'Italy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 112,
                'code' => '+225',
                'name' => 'Ivory Coast',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 113,
                'code' => '+1 876',
                'name' => 'Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 114,
                'code' => '+81',
                'name' => 'Japan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 115,
                'code' => '+962',
                'name' => 'Jordan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 116,
                'code' => '+7 7',
                'name' => 'Kazakhstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 117,
                'code' => '+254',
                'name' => 'Kenya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 118,
                'code' => '+686',
                'name' => 'Kiribati',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 119,
                'code' => '+965',
                'name' => 'Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 120,
                'code' => '+996',
                'name' => 'Kyrgyzstan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 121,
                'code' => '+856',
                'name' => 'Laos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 122,
                'code' => '+371',
                'name' => 'Latvia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 123,
                'code' => '+961',
                'name' => 'Lebanon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 124,
                'code' => '+266',
                'name' => 'Lesotho',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 125,
                'code' => '+231',
                'name' => 'Liberia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 126,
                'code' => '+218',
                'name' => 'Libya',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 127,
                'code' => '+423',
                'name' => 'Liechtenstein',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 128,
                'code' => '+370',
                'name' => 'Lithuania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 129,
                'code' => '+352',
                'name' => 'Luxembourg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 130,
                'code' => '+853',
                'name' => 'Macau SAR China',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 131,
                'code' => '+389',
                'name' => 'Macedonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 132,
                'code' => '+261',
                'name' => 'Madagascar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 133,
                'code' => '+265',
                'name' => 'Malawi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 134,
                'code' => '+60',
                'name' => 'Malaysia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 135,
                'code' => '+960',
                'name' => 'Maldives',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 136,
                'code' => '+223',
                'name' => 'Mali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 137,
                'code' => '+356',
                'name' => 'Malta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 138,
                'code' => '+692',
                'name' => 'Marshall Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 139,
                'code' => '+596',
                'name' => 'Martinique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 140,
                'code' => '+222',
                'name' => 'Mauritania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 141,
                'code' => '+230',
                'name' => 'Mauritius',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 142,
                'code' => '+262',
                'name' => 'Mayotte',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 143,
                'code' => '+52',
                'name' => 'Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 144,
                'code' => '+691',
                'name' => 'Micronesia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 145,
                'code' => '+1 808',
                'name' => 'Midway Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 146,
                'code' => '+373',
                'name' => 'Moldova',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 147,
                'code' => '+377',
                'name' => 'Monaco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 148,
                'code' => '+976',
                'name' => 'Mongolia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 149,
                'code' => '+382',
                'name' => 'Montenegro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 150,
                'code' => '+1664',
                'name' => 'Montserrat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 151,
                'code' => '+212',
                'name' => 'Morocco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 152,
                'code' => '+95',
                'name' => 'Myanmar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 153,
                'code' => '+264',
                'name' => 'Namibia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 154,
                'code' => '+674',
                'name' => 'Nauru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 155,
                'code' => '+977',
                'name' => 'Nepal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 156,
                'code' => '+31',
                'name' => 'Netherlands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 157,
                'code' => '+599',
                'name' => 'Netherlands Antilles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 158,
                'code' => '+1 869',
                'name' => 'Nevis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 159,
                'code' => '+687',
                'name' => 'New Caledonia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 160,
                'code' => '+64',
                'name' => 'New Zealand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 161,
                'code' => '+505',
                'name' => 'Nicaragua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 162,
                'code' => '+227',
                'name' => 'Niger',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 163,
                'code' => '+234',
                'name' => 'Nigeria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 164,
                'code' => '+683',
                'name' => 'Niue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 165,
                'code' => '+672',
                'name' => 'Norfolk Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 166,
                'code' => '+850',
                'name' => 'North Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 167,
                'code' => '+1 670',
                'name' => 'Northern Mariana Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 168,
                'code' => '+47',
                'name' => 'Norway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 169,
                'code' => '+968',
                'name' => 'Oman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 170,
                'code' => '+92',
                'name' => 'Pakistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 171,
                'code' => '+680',
                'name' => 'Palau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 172,
                'code' => '+970',
                'name' => 'Palestinian Territory',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 173,
                'code' => '+507',
                'name' => 'Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 174,
                'code' => '+675',
                'name' => 'Papua New Guinea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 175,
                'code' => '+595',
                'name' => 'Paraguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 176,
                'code' => '+51',
                'name' => 'Peru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 177,
                'code' => '+63',
                'name' => 'Philippines',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 178,
                'code' => '+48',
                'name' => 'Poland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 179,
                'code' => '+351',
                'name' => 'Portugal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 180,
                'code' => '+1 787',
                'name' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 181,
                'code' => '+974',
                'name' => 'Qatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 182,
                'code' => '+262',
                'name' => 'Reunion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 183,
                'code' => '+40',
                'name' => 'Romania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 184,
                'code' => '+7',
                'name' => 'Russia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 185,
                'code' => '+250',
                'name' => 'Rwanda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 186,
                'code' => '+685',
                'name' => 'Samoa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 187,
                'code' => '+378',
                'name' => 'San Marino',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 188,
                'code' => '+966',
                'name' => 'Saudi Arabia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 189,
                'code' => '+221',
                'name' => 'Senegal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 190,
                'code' => '+381',
                'name' => 'Serbia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 191,
                'code' => '+248',
                'name' => 'Seychelles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 192,
                'code' => '+232',
                'name' => 'Sierra Leone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 193,
                'code' => '+65',
                'name' => 'Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 194,
                'code' => '+421',
                'name' => 'Slovakia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 195,
                'code' => '+386',
                'name' => 'Slovenia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 196,
                'code' => '+677',
                'name' => 'Solomon Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 197,
                'code' => '+27',
                'name' => 'South Africa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 198,
                'code' => '+500',
                'name' => 'South Georgia and the South Sandwich Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 199,
                'code' => '+82',
                'name' => 'South Korea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 200,
                'code' => '+34',
                'name' => 'Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 201,
                'code' => '+94',
                'name' => 'Sri Lanka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 202,
                'code' => '+249',
                'name' => 'Sudan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 203,
                'code' => '+597',
                'name' => 'Suriname',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 204,
                'code' => '+268',
                'name' => 'Swaziland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 205,
                'code' => '+46',
                'name' => 'Sweden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 206,
                'code' => '+41',
                'name' => 'Switzerland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 207,
                'code' => '+963',
                'name' => 'Syria',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 208,
                'code' => '+886',
                'name' => 'Taiwan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 209,
                'code' => '+992',
                'name' => 'Tajikistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 210,
                'code' => '+255',
                'name' => 'Tanzania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 211,
                'code' => '+66',
                'name' => 'Thailand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 212,
                'code' => '+670',
                'name' => 'Timor Leste',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 213,
                'code' => '+228',
                'name' => 'Togo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 214,
                'code' => '+690',
                'name' => 'Tokelau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 215,
                'code' => '+676',
                'name' => 'Tonga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 216,
                'code' => '+1 868',
                'name' => 'Trinidad and Tobago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 217,
                'code' => '+216',
                'name' => 'Tunisia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 218,
                'code' => '+90',
                'name' => 'Turkey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 219,
                'code' => '+993',
                'name' => 'Turkmenistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 220,
                'code' => '+1 649',
                'name' => 'Turks and Caicos Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 221,
                'code' => '+688',
                'name' => 'Tuvalu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 222,
                'code' => '+1 340',
                'name' => 'U.S. Virgin Islands',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 223,
                'code' => '+256',
                'name' => 'Uganda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 224,
                'code' => '+380',
                'name' => 'Ukraine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 225,
                'code' => '+971',
                'name' => 'United Arab Emirates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 226,
                'code' => '+44',
                'name' => 'United Kingdom',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 227,
                'code' => '+1',
                'name' => 'United States',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 228,
                'code' => '+598',
                'name' => 'Uruguay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 229,
                'code' => '+998',
                'name' => 'Uzbekistan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 230,
                'code' => '+678',
                'name' => 'Vanuatu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 231,
                'code' => '+58',
                'name' => 'Venezuela',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 232,
                'code' => '+84',
                'name' => 'Vietnam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 233,
                'code' => '+1 808',
                'name' => 'Wake Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 234,
                'code' => '+681',
                'name' => 'Wallis and Futuna',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 235,
                'code' => '+967',
                'name' => 'Yemen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 236,
                'code' => '+260',
                'name' => 'Zambia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 237,
                'code' => '+255',
                'name' => 'Zanzibar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 238,
                'code' => '+263',
                'name' => 'Zimbabwe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}