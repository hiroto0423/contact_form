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
        Contact::factory()->count(24)->create();
        $param = [
            'fullname' => 'saly',
            'gender' => 2,
            'email' => 'hhhhh@hhhhh',
            'postcode' => '400-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '携帯電話の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'alice',
            'gender' => 2,
            'email' => 'hhhhh@hhfff',
            'postcode' => '400-0004',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル205',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'taro',
            'gender' => 1,
            'email' => 'hsshh@hhhhh',
            'postcode' => '422-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'james',
            'gender' => 1,
            'email' => 'hhddh@hhhhh',
            'postcode' => '400-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'hina',
            'gender' => 2,
            'email' => 'hhhhh@hrrrh',
            'postcode' => '400-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'rana',
            'gender' => 2,
            'email' => 'hhhhh@schhh',
            'postcode' => '111-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'aoi',
            'gender' => 2,
            'email' => 'hhhhh@lakjhh',
            'postcode' => '400-1230',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'ryo',
            'gender' => 1,
            'email' => 'dehhh@hhhhh',
            'postcode' => '430-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'mai',
            'gender' => 2,
            'email' => 'lkijh@hhhhh',
            'postcode' => '400-1234',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'chihiro',
            'gender' => 2,
            'email' => 'hhhhh@hsed',
            'postcode' => '400-4321',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
        $param = [
            'fullname' => 'rina',
            'gender' => 2,
            'email' => 'hrfbg@hhhhh',
            'postcode' => '470-0000',
            'address' => '東京都世田谷区朝日町11-1',
            'building_name' => '朝日ビル201',
            'opinion' => '～～の使い方が分かりません'
        ];
        Contact::create($param);
    }
}
