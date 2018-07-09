<?php

use Illuminate\Database\Seeder;

class PRsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prs')->insert([
            [
                'CardID' => 1,
                'PRName' => '熊本城1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kumamotojyo1.png',
                'PRDescription' => '熊本城の説明1',
                'latitude' => 32.806186,
                'longitude' => 130.705834,
            ],
            [
                'CardID' => 1,
                'PRName' => '熊本城2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kumamotojyo2.png',
                'PRDescription' => '熊本城の説明2',
                'latitude' => 32.806186,
                'longitude' => 130.699911,
            ],
            [
                'CardID' => 1,
                'PRName' => '熊本城3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kumamotojyo3.png',
                'PRDescription' => '熊本城の説明3',
                'latitude' => 32.809079,
                'longitude' => 130.699825,
            ],
            [
                'CardID' => 2,
                'PRName' => '彦根城1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hikonejyo1.png',
                'PRDescription' => '彦根城の説明1',
                'latitude' => 35.276452,
                'longitude' => 136.251846,
            ],
            [
                'CardID' => 2,
                'PRName' => '彦根城2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hikonejyo2.png',
                'PRDescription' => '彦根城の説明2',
                'latitude' => 35.27463,
                'longitude' => 136.253048,
            ],
            [
                'CardID' => 2,
                'PRName' => '彦根城3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hikonejyo3.png',
                'PRDescription' => '彦根城の説明3',
                'latitude' => 35.281917,
                'longitude' => 136.256567,
            ],
            [
                'CardID' => 3,
                'PRName' => '国分寺駅1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kokubunji1.png',
                'PRDescription' => '国分寺駅の説明1',
                'latitude' => 35.68939,
                'longitude' => 139.691602,
            ],
            [
                'CardID' => 3,
                'PRName' => '国分寺駅2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kokubunji2.png',
                'PRDescription' => '国分寺駅の説明2',
                'latitude' => 35.689516,
                'longitude' => 139.69297,
            ],
            [
                'CardID' => 3,
                'PRName' => '国分寺駅3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/kokubunji3.png',
                'PRDescription' => '国分寺駅の説明3',
                'latitude' => 35.690401,
                'longitude' => 139.692519,
            ],
            [
                'CardID' => 4,
                'PRName' => '人形町1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/ningyotyo1.png',
                'PRDescription' => '人形町の説明1',
                'latitude' => 35.690296,
                'longitude' => 139.691763,
            ],
            [
                'CardID' => 4,
                'PRName' => '人形町2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/ningyotyo2.png',
                'PRDescription' => '人形町の説明2',
                'latitude' => 35.691215,
                'longitude' => 139.69275,
            ],
            [
                'CardID' => 4,
                'PRName' => '人形町3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/ningyotyo3.png',
                'PRDescription' => '人形町の説明3',
                'latitude' => 35.691743,
                'longitude' => 139.693619,
            ],
                        [
                'CardID' => 5,
                'PRName' => '青森 浅虫水族館1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/asamusisuizokukan1.png',
                'PRDescription' => '青森 浅虫水族館2',
                'latitude' => 35.690296,
                'longitude' => 139.691763,
            ],
            [
                'CardID' => 5,
                'PRName' => '青森 浅虫水族館2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/asamusisuizokukan2.png',
                'PRDescription' => '青森 浅虫水族館2',
                'latitude' => 35.691215,
                'longitude' => 139.69275,
            ],
            [
                'CardID' => 5,
                'PRName' => '青森 浅虫水族館3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/asamusisuizokukan3.png',
                'PRDescription' => '青森 浅虫水族館の説明3',
                'latitude' => 35.691743,
                'longitude' => 139.693619,
            ],
            [
                'CardID' => 6,
                'PRName' => '福島県1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hukushima1.png',
                'PRDescription' => '福島県の説明1',
                'latitude' => 35.690296,
                'longitude' => 139.691763,
            ],
            [
                'CardID' => 6,
                'PRName' => '福島県2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hukushima2.png',
                'PRDescription' => '福島県の説明2',
                'latitude' => 35.691215,
                'longitude' => 139.69275,
            ],
            [
                'CardID' => 6,
                'PRName' => '福島県3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/hukushima3.png',
                'PRDescription' => '福島県の説明3',
                'latitude' => 35.691743,
                'longitude' => 139.693619,
            ],
                        [
                'CardID' => 7,
                'PRName' => '北海道新幹線新函館北斗駅1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/shinhakodatehokutoeki1.png',
                'PRDescription' => '北海道新幹線新函館北斗駅1',
                'latitude' => 35.690296,
                'longitude' => 139.691763,
            ],
            [
                'CardID' => 7,
                'PRName' => '北海道新幹線新函館北斗駅2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/shinhakodatehokutoeki2.png',
                'PRDescription' => '北海道新幹線新函館北斗駅2',
                'latitude' => 35.691215,
                'longitude' => 139.69275,
            ],
            [
                'CardID' => 7,
                'PRName' => '北海道新幹線新函館北斗駅3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/shinhakodatehokutoeki3.png',
                'PRDescription' => '北海道新幹線新函館北斗駅3',
                'latitude' => 35.691743,
                'longitude' => 139.693619,
            ],
                        [
                'CardID' => 8,
                'PRName' => 'バリィさん1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/baliysan1.png',
                'PRDescription' => 'バリィさんの説明1',
                'latitude' => 35.690296,
                'longitude' => 139.691763,
            ],
            [
                'CardID' => 8,
                'PRName' => 'バリィさん2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/baliysan2.png',
                'PRDescription' => 'バリィさんの説明2',
                'latitude' => 35.691215,
                'longitude' => 139.69275,
            ],
            [
                'CardID' => 8,
                'PRName' => 'バリィさん3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/baliysan3.png',
                'PRDescription' => 'バリィさんの説明3',
                'latitude' => 35.691743,
                'longitude' => 139.693619,
            ],            [
                'CardID' => 9,
                'PRName' => '安芸高田市1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/akitakatashi1.png',
                'PRDescription' => '安芸高田市の説明1',
                'latitude' => 34.712148,
                'longitude' => 132.722066,
            ],
            [
                'CardID' => 9,
                'PRName' => '安芸高田市2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/akitakatashi2.png',
                'PRDescription' => '安芸高田市の説明2',
                'latitude' => 34.712148,
                'longitude' => 132.722066,
            ],
            [
                'CardID' => 9,
                'PRName' => '安芸高田市3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/akitakatashi3.png',
                'PRDescription' => '安芸高田市の説明3',
                'latitude' => 34.712148,
                'longitude' => 132.722066,
            ],
                        [
                'CardID' => 10,
                'PRName' => '栃木市1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/tochigisi1.png',
                'PRDescription' => '栃木市の説明1',
                'latitude' => 36.382505,
                'longitude' => 179.7342,
            ],
            [
                'CardID' => 10,
                'PRName' => '栃木市2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/tochigisi2.png',
                'PRDescription' => '栃木市の説明2',
                'latitude' => 36.382505,
                'longitude' => 179.7342,
            ],
            [
                'CardID' => 10,
                'PRName' => '栃木市3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/tochigisi3.png',
                'PRDescription' => '栃木市の説明3',
                'latitude' => 36.382505,
                'longitude' => 179.7342,
            ],
                       [
                'CardID' => 11,
                'PRName' => '岡山県1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/okayama1.png',
                'PRDescription' => '岡山県の説明1',
                'latitude' => 34.66167,
                'longitude' => 133.935,
            ],
            [
                'CardID' => 11,
                'PRName' => '岡山県2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/okayama2.png',
                'PRDescription' => '岡山県の説明2',
                'latitude' => 34.66167,
                'longitude' => 133.935,
            ],
            [
                'CardID' => 11,
                'PRName' => '岡山県3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/okayama3.png',
                'PRDescription' => '岡山県の説明3',
                'latitude' => 34.66167,
                'longitude' => 133.935,
            ],
            [
                'CardID' => 12,
                'PRName' => '徳島市1',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/tokusimasi1.png',
                'PRDescription' => '徳島市の説明1',
                'latitude' => 35.276452,
                'longitude' => 136.251846,
            ],
            [
                'CardID' => 12,
                'PRName' => '徳島市2',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/tokusimasi2.png',
                'PRDescription' => '徳島市の説明2',
                'latitude' => 35.27463,
                'longitude' => 136.253048,
            ],
            [
                'CardID' => 12,
                'PRName' => '徳島市3',
                'PRPhotoPath' => 'testimg/test_card_materials/PRPhoto/tokusimasi3.png',
                'PRDescription' => '徳島市の説明3',
                'latitude' => 35.281917,
                'longitude' => 136.256567,
            ],
        ]);
    }
}
