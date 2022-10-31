<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'fullname' => 'saly',
            'gender' => 2,
            'email' => 'hhhhh@hhhhh',
            'postcode' => '400-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
    }
}
