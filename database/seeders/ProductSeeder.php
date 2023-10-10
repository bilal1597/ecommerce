<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert(
            [

                [
                    "name" => 'Samsung bean Buds',
                    "price" => '30,000',
                    "category" => 'Earbuds',
                    "details" => 'Samsung-Galaxy-Buds-Live-TWS-Bluetooth-Earbuds',
                    "gallery" => 'https://digicool.in/wp-content/uploads/2020/08/Samsung-Galaxy-Buds-Live-TWS-Bluetooth-Earbuds-.jpg'
                ],
                [
                    "name" => 'Samsung TV',
                    "price" => '100,000',
                    "category" => 'TV',
                    "details" => 'Samsung 42 inch high tech resolution, bluetooth, andriod box, wifi etc',
                    "gallery" => 'https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6213/6213270_rd.jpg'
                ],

                [
                    "name" => 'S22 ultra samsung',
                    "price" => '600,000',
                    "category" => 'Mobile',
                    "details" => 'Samsung Galaxy S22 Ultra 5G Released 2022, February 25 228g / 229g (mmWave), 8.9mm thickness Android 12, up to Android 13, One UI 5.1 128GB/256GB/1TB storage',
                    "gallery" => 'https://www.pricepony.com.ph/blog/wp-content/uploads/2021/07/S22-Ultra-1-1024x536.jpg'
                ],

                [
                    "name" => 'Fridge Samsung',
                    "price" => '100,000',
                    "category" => 'Fridge',
                    "details" => 'Front-Open-With-Food_Black_Steel',
                    "gallery" => 'https://img.us.news.samsung.com/us/wp-content/uploads/2016/05/14185110/RF22K9581SG_005_Front-Open-With-Food_Black_Steel-e1462383844634.jpg'
                ],

                [
                    "name" => 'Sony TV',
                    "price" => '90,000',
                    "category" => 'TV',
                    "details" => '85-inch-led-4k-ultra-hd-high-dynamic-range-hdr-smart-tv-android-tv-with-voice-remote-black-2020-model/',
                    "gallery" => 'https://media.fozdoo.com/2020/03/91hAh3ejkML._AC_SL1500_.jpg'
                ]
            ]
        );
    }
}
