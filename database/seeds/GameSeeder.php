<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('games')->truncate();
        \Illuminate\Support\Facades\DB::table('games')->insert([
            [
                'id' => 1,
                'category_id' => 3,
                'name' => 'Diablo |||',
                'price' => 100,
                'thumbnail' => 'https://i.pinimg.com/originals/1d/ae/1a/1dae1ad263fbac22a9296014871cb980.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Counter Strike 7.0',
                'price' => 0,
                'thumbnail' => 'https://media.moddb.com/images/downloads/1/12/11076/splash.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'category_id' => 2,
                'name' => 'Brave Blades',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/26/BraveBlades-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'name' => 'Lunathorn',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/27/Lunathorn-HA-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'category_id' => 1,
                'name' => 'Perfect World Mobile: Thế Giới Hoàn Mỹ Mobile',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/25/2game-the-gioi-hoan-my-mobile-eng-2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Dragon Raja: Long Tộc Huyễn Tưởng',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/20/2game-Dragon-Raja-mobile-anh-dep-5.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'category_id' => 4,
                'name' => 'Luna’s Fate',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/10/LunaFate-4.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 8,
                'category_id' => 5,
                'name' => 'Avabel Lupinus',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/31/AvabelLupinus-2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 9,
                'category_id' => 6,
                'name' => 'Pixel Knights Online',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/24/pixel-knight-online-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 10,
                'category_id' => 2,
                'name' => 'Rappelz Mobile',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/29/Rappelz-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 11,
                'category_id' => 2,
                'name' => 'Đỉnh Phong Tam Quốc',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/31/2game-dinh-phong-tam-quoc-mobile-hinh-anh-dep-3.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 12,
                'category_id' => 3,
                'name' => 'Blade Of God',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/08/07/BladeofGod-2.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => 13,
                'category_id' => 1,
                'name' => 'Witch’s Weapon',
                'price' => 0,
                'thumbnail' => 'http://2game.vn/imgstore/pictures/2game/2019/07/24/WitchWeapon-1.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement("ALTER SEQUENCE games_id_seq RESTART 14");
    }
}
