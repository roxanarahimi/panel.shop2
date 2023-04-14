<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = array(
            array('id' => '13','name' => 'گیلان'),
            array('id' => '15','name' => 'مازندران'),
            array('id' => '17','name' => 'گلستان'),
            array('id' => '21','name' => 'تهران'),
            array('id' => '23','name' => 'سمنان'),
            array('id' => '24','name' => 'زنجان'),
            array('id' => '25','name' => 'قم'),
            array('id' => '26','name' => 'البرز'),
            array('id' => '28','name' => 'قزوین'),
            array('id' => '31','name' => 'اصفهان'),
            array('id' => '34','name' => 'کرمان'),
            array('id' => '35','name' => 'یزد'),
            array('id' => '38','name' => 'چهارمحال بختیاری'),
            array('id' => '41','name' => 'آذربایجان شرقی'),
            array('id' => '44','name' => 'آذربایجان غربی'),
            array('id' => '45','name' => 'اردبیل'),
            array('id' => '51','name' => 'خراسان رضوی'),
            array('id' => '54','name' => 'سیستان و بلوچستان'),
            array('id' => '56','name' => 'خراسان جنوبی'),
            array('id' => '58','name' => 'خراسان شمالی'),
            array('id' => '61','name' => 'خوزستان'),
            array('id' => '66','name' => 'لرستان'),
            array('id' => '71','name' => 'فارس'),
            array('id' => '74','name' => 'کهکیلویه و بویراحمد'),
            array('id' => '76','name' => 'هرمزگان'),
            array('id' => '77','name' => 'بوشهر'),
            array('id' => '81','name' => 'همدان'),
            array('id' => '83','name' => 'کرمانشاه'),
            array('id' => '84','name' => 'ایلام'),
            array('id' => '86','name' => 'مرکزی'),
            array('id' => '87','name' => 'کردستان'),

        );
        foreach($states as $item){
            \App\Models\State::create($item);

    }
    }
}
