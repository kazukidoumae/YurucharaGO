<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            [
                'CardName' => 'Meronguma',
                'PrefecturesID' => 1,
                'CardIllustrationPath' => 'Hokkaido/Hokkaido/meronguma.png',
                'CardDescription' => 'A fruit animal transformed by devouring Yubari is delicious melon.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Kokoru',
                'PrefecturesID' => 2,
                'CardIllustrationPath' => 'Tohoku/Aomori/kokoru.png',
                'CardDescription' => 'It is a dolphin longing for raccoon dogs, a little spoiled personality. Shell harvest is a hobby.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Sobacchi',
                'PrefecturesID' => 3,
                'CardIllustrationPath' =>'Tohoku/Iwate/sobatti.png',
                'CardDescription' =>'One of the "Wanko siblings". A main character with a wankosoba as a motif.',
                'AttributeID' => 2,

            ],
            [
                'CardName' => 'Musubimaru',
                'PrefecturesID' => 4,
                'CardIllustrationPath' =>'Tohoku/Miyagi/musubimaru.png',
                'CardDescription' =>'I like to have photos taken with children. I am not good at hotness.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Yakippi',
                'PrefecturesID' => 5,
                'CardIllustrationPath' => 'Tohoku/Akita/yakippi.png',
                'CardDescription' => 'Yokote Yakisoba character and Yukispi, Yokote yakisoba research group member.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Cherin',
                'PrefecturesID' => 6,
                'CardIllustrationPath' => 'Tohoku/Yamagata/cherin.png',
                'CardDescription' => 'It is a cherry fairy and has a cherry on its head.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'AtamagahukushimaChan',
                'PrefecturesID' => 7,
                'CardIllustrationPath' =>'Tohoku/Fukushima/atamagafukushima.png',
                'CardDescription' =>'A hobby is a walk, a girl who loves to play with everyone.',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'KouChan',
                'PrefecturesID' => 8,
                'CardIllustrationPath' =>'Kanto/Ibaraki/koutyan.png',
                'CardDescription' =>'Bright and exciting Noko will make everyone is  heart calm.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Tochinosuke',
                'PrefecturesID' => 9,
                'CardIllustrationPath' => 'Kanto/Tochigi/totisuke.png',
                'CardDescription' => 'Born in the Tochigi city, Kura is fairy was born in Tochigi.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'GunmaChan',
                'PrefecturesID' => 10,
                'CardIllustrationPath' => 'Kanto/Gunma/gunmatyan.png',
                'CardDescription' => 'World cultural heritage, Tomioka Silk industry and Silk industrial heritage group, and Gunma prefecture advertising department manager.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'MiinaChan',
                'PrefecturesID' => 11,
                'CardIllustrationPath' =>'Kanto/Saitama/mi-natyan.png',
                'CardDescription' =>'The mountain of beauty in Minano Town, clear stream, cherry blossoms are included in the hat and it stands as the initial M letter.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'ChiibaKun',
                'PrefecturesID' => 12,
                'CardIllustrationPath' =>'Kanto/Chiba/ti-bakun.png',
                'CardDescription' =>'The figure is colored red, and when viewed from the side it has the shape of Chiba prefecture.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'NishikoKun',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Kanto/Tokyo/nisikokun.png',
                'CardDescription' => 'The feet of a charm point that crawls out from a round gray face is a fairy.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'EbinaSan',
                'PrefecturesID' => 14,
                'CardIllustrationPath' => 'Kanto/Kanagawa/ebinasan.png',
                'CardDescription' => 'Ebina village secretly existed for the purpose of preventing invasion from Sagamihara Town.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ReruhiSan',
                'PrefecturesID' => 15,
                'CardIllustrationPath' =>'Chubu/Niigata/reruhisan.png',
                'CardDescription' =>'Mr. Rehi, the real great man came back to Niigata beyond 100 years.',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'Miratan',
                'PrefecturesID' => 16,
                'CardIllustrationPath' =>'Chubu/Toyama/miratan.png',
                'CardDescription' =>'Temperature and calm. I am always boarding.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'WakutamaKun',
                'PrefecturesID' => 17,
                'CardIllustrationPath' => 'Chubu/Ishikawa/wakutamakun.png',
                'CardDescription' => 'An egg brought on by a white birch who is said to have found Wakura Onsen.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'HeshikoChan',
                'PrefecturesID' => 18,
                'CardIllustrationPath' => 'Chubu/Fukui/hesikotyan.png',
                'CardDescription' => 'With the head of the mackerel jumped out of the barrel, there is a ribbon on the head.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'TakedaRyomaru',
                'PrefecturesID' => 19,
                'CardIllustrationPath' =>'Chubu/Yamanashi/takedaryoumaru.png',
                'CardDescription' =>'Brave and brain-riddled, gentle to everyone. It is strong against heat and cold in winter.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Arukuma',
                'PrefecturesID' => 20,
                'CardIllustrationPath' =>'Chubu/Nagano/arukuma.png',
                'CardDescription' =>'Coldly, always on my head, I like traveling, always backpack on my back.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'GunjyoRara',
                'PrefecturesID' => 21,
                'CardIllustrationPath' => 'Chubu/Gifu/gunjourara.png',
                'CardDescription' => 'Summer dance, winter sports, nature rich Gujo top.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Unagiinu',
                'PrefecturesID' => 22,
                'CardIllustrationPath' => 'Chubu/Shizuoka/unagiimo.png',
                'CardDescription' => 'Eel has been born from the field and also daily as a king of the kingdom cafe.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Morizo & Kikkoro',
                'PrefecturesID' => 23,
                'CardIllustrationPath' =>'Chubu/Aichi/morizo-kikkoro.png',
                'CardDescription' =>'Morizo is a grandpa in the forest. Kikkoro is a forest child.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Meihime',
                'PrefecturesID' => 24,
                'CardIllustrationPath' =>'Kinki/Mie/meihime.png',
                'CardDescription' =>'As he kept longing for him, his thoughts became the appearance of Princess Princess.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Kyaffi',
                'PrefecturesID' => 25,
                'CardIllustrationPath' => 'Kinki/Shiga/kyaffi.png',
                'CardDescription' => 'Specific species of Biwa Lake Biwa Cooper.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Kinukakesan',
                'PrefecturesID' => 26,
                'CardIllustrationPath' => 'Kinki/Kyoto/kinukakesan.png',
                'CardDescription' => 'Kinkaku-ji, Ryoanji, Ninna-ji Temple, youkai of the way he walked around the three world heritage.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Yumemarukun',
                'PrefecturesID' => 27,
                'CardIllustrationPath' =>'Kinki/Osaka/yumemarukun.png',
                'CardDescription' =>'Mascot character in History · Culture · Commercial town, Osaka city Chuo Ward.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Habatan',
                'PrefecturesID' => 28,
                'CardIllustrationPath' =>'Kinki/Hyogo/habatan.png',
                'CardDescription' =>'He is a spiritual cheerleader and has a strong spirit of challenge.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Sikamaro',
                'PrefecturesID' => 29,
                'CardIllustrationPath' => 'Kinki/Nara/shikamaro.png',
                'CardDescription' => 'A gentle boy with a relaxed personality. Mamoru eyebrow and smiley eyes are characterized.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Hashibou',
                'PrefecturesID' => 30,
                'CardIllustrationPath' => 'Kinki/Wakayama/hashibou.png',
                'CardDescription' => 'If you touch the stomach of fluffy pork, you may feel happy.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Misasaradon',
                'PrefecturesID' => 31,
                'CardIllustrationPath' =>'Chugoku/Tottori/misasaradon.png',
                'CardDescription' =>'Happy encounters with everyone, hot water of stomach is Pokkapoka, excited every day.',
                'AttributeID' => 3,

            ],
            [
                'CardName' => 'Simanekko',
                'PrefecturesID' => 32,
                'CardIllustrationPath' =>'Chugoku/Shimane/shimanekko.png',
                'CardDescription' =>'You can get better at once with anyone, so please call out when you see it.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Hesoppi',
                'PrefecturesID' => 33,
                'CardIllustrationPath' => 'Chugoku/Okayama/hesoppi.png',
                'CardDescription' => 'I am modeling a bird that made a colorful blue feather called Buposau.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'KaguyaPanda',
                'PrefecturesID' => 34,
                'CardIllustrationPath' => 'Chugoku/Hiroshima/kaguyapanda.png',
                'CardDescription' => 'I am helping you to have a fan for cheering and a bamboo shop with business prosperity to live with peace of mind.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Choruru',
                'PrefecturesID' => 35,
                'CardIllustrationPath' =>'Chugoku/Yamaguchi/choruru.png',
                'CardDescription' =>'A little shy and dirty.',
                'AttributeID' => 3,

            ],
            [
                'CardName' => 'Matsushigekakarichou',
                'PrefecturesID' => 36,
                'CardIllustrationPath' =>'Shikoku/Tokushima/matsushigekakaricho.png',
                'CardDescription' =>'The moon rabbit is in Matsushige-cho as a matter of concern about Matsushige-cho.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Sanudon',
                'PrefecturesID' => 37,
                'CardIllustrationPath' => 'Shikoku/Kagawa/sanudon.png',
                'CardDescription' => 'She plays a pride bowl pocket on her back, aiming at a udon noodle kamiyama.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Mikyan',
                'PrefecturesID' => 38,
                'CardIllustrationPath' => 'Shikoku/Ehime/mikyan.png',
                'CardDescription' => 'I was born in the citrus kingdom Ehime. I value chess with everyone.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'BunChan',
                'PrefecturesID' => 39,
                'CardIllustrationPath' =>'Shikoku/Kochi/buntyan.png',
                'CardDescription' =>'A lovely round form and a smile is a trademark.',
                'AttributeID' => 4,

            ],
            [
                'CardName' => 'Kuruppa',
                'PrefecturesID' => 40,
                'CardIllustrationPath' =>'Kyushu/Fukuoka/kuruppa.png',
                'CardDescription' =>'I like going for a walk, I am leaving for various places.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Koihime',
                'PrefecturesID' => 41,
                'CardIllustrationPath' => 'Kyushu/Saga/kohime.png',
                'CardDescription' => 'I love playing water at Shimizu waterfall. I have a secret feeling to the princess.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Omuranchan',
                'PrefecturesID' => 42,
                'CardIllustrationPath' => 'Kyushu/Nagasaki/omuranchan.png',
                'CardDescription' => 'Run cheerfully with roughly mottled roses (run) Cherry fairies.',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'Kumamon',
                'PrefecturesID' => 43,
                'CardIllustrationPath' =>'Kyushu/Kumamoto/kumamon.png',
                'CardDescription' =>'I ate too much of Kumamoto is delicious food and it became the current fat mass.',
                'AttributeID' => 1,

            ],
            [
                'CardName' => 'Mejiron',
                'PrefecturesID' => 44,
                'CardIllustrationPath' =>'Kyushu/Oita/mejiron.png',
                'CardDescription' =>'The prefecture bird of Oita prefecture, Mejiro is a motif.',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'Otsuruchan',
                'PrefecturesID' => 45,
                'CardIllustrationPath' => 'Kyushu/Miyazaki/otsuruchan.png',
                'CardDescription' => 'Shiiba Village Make a rhododendron for hair ornaments, a pretty girl that is cute.',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Ochamurai',
                'PrefecturesID' => 46,
                'CardIllustrationPath' => 'Kyushu/Kagoshima/ochamurai.png',
                'CardDescription' => 'The tea cup and the sunflower belt, on the back there is a family crest of Fudo.',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'Agomagocha',
                'PrefecturesID' => 47,
                'CardIllustrationPath' =>'Kyushu/Okinawa/agomagochan.png',
                'CardDescription' =>'I love fruits and I am a little worried about having a long ago.',
                'AttributeID' => 2,

            ],
            [
                 'CardName' => 'Kouichi',
                 'PrefecturesID' => 13,
                 'CardIllustrationPath' => 'Test/Ebata/ebata.png',
                 'CardDescription' => 'While engaged in education in information engineering / information processing field, he also served as an expert in programming technology. IT professionals who have been active in front lines such as contracting individuals to train employees of IT companies.',
                 'AttributeID' => 5,
            ],
            [
                 'CardName' => 'Sorakarachan',
                 'PrefecturesID' => 13,
                 'CardIllustrationPath' => 'Kanto/Tokyo/sorakarachan.png',
                 'CardDescription' => 'Tokyo Sky Tree Official Characters "Solakara" "Teppenpen" "Scolburble".',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'Po-po',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Kanto/Tokyo/pi-bokun.png',
                'CardDescription' => 'I took the initials of the police greeting "police", and hoped that it would be a bridge between the Tokyo Metropolitan Police and the Metropolitan Police Department and was named "Peep Kun."',
                'AttributeID' => 4,
            ],
            [
                'CardName' => 'MiyaChan',
                'PrefecturesID' => 44,
                'CardIllustrationPath' => 'Kyushu/Oita/miya.gif',
                'CardDescription' => 'It is a fairy who lives in Kokonoe-cho, but how this "Miya-chan" It is said that happiness will come when you meet during climbing.',
                'AttributeID' => 5,
            ],
            [
                'CardName' => 'NishikoKun',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Kanto/Tokyo/nisikokun.gif',
                'CardDescription' => 'The feet of a charm point that crawls out from a round gray face is a fairy.',
                'AttributeID' => 5,
            ],
            [
                'CardName' => 'Pisuke',
                'PrefecturesID' => 13,
                'CardIllustrationPath' => 'Test/YurucharaGO/Pisuke.gif',
                'CardDescription' => 'Thank you for playing',
                'AttributeID' => 5,
            ],
        ]);
    }
}
