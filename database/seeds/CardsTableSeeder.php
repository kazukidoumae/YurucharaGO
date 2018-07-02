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
                'CardName' => 'くまモン',
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/kumamon.png',
                'CardColor' => '#000000',
                'CardDescription' => 'ボクの仕事は、身近にあるサプライズ＆ハッピーを見つけて、全国のみんなに知ってもらうこと。知事から熊本県の営業部長兼しあわせ部長に抜擢されて、ますますはりきってるんだモン。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ひこにゃん',
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/hikonyan.png',
                'CardColor' => '#ff0000',
                'CardDescription' => '彦根藩二代当主である井伊直孝公をお寺の門前で手招きして雷雨から救ったと伝えられる"招き猫”と、井伊軍団のシンボルとも言える赤備えの兜を合体させて生まれたキャラクター。',
                'AttributeID' => 2,
            ],
            [
                'CardName' => 'にしこくん',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/nisikokun.png',
                'CardColor' => '#ffffff',
                'CardDescription' =>'武蔵の国・国分寺跡から発掘された“あぶみ瓦”がモチーフの、丸いグレーの顔からにょきっと出た足がチャームポイントの妖精。',
                'AttributeID' => 3,
                
            ],      
            [
                'CardName' => '人之助',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/ninnosuke.png',
                'CardColor' => '#000000',
                'CardDescription' =>'下町キング人之助！日本橋人形町のヤンチャ坊主です。ピンクの肉球を触ると、子宝・恋愛運アップ、黄色の肉球を触ると、金運アップ。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'ここる',
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/kokoru.png',
                'CardColor' => '#000000',
                'CardDescription' => '狸に憧れるイルカで、頭にホタテをのせている。性別、年齢は不明。おっちょこちょいで、やさしく、ちょっぴり甘えん坊な性格。貝殻集めが趣味。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'あたまがふくしまちゃん',
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/hukusimachan.png',
                'CardColor' => '#ff0000',
                'CardDescription' => '福島が大好きで仕方ない5歳の女の子。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ずーしーほっきー',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/zushihokkie.png',
                'CardColor' => '#f3fffff',
                'CardDescription' =>'北斗市の特産物ホッキ貝とふっくりんこをモチーフとした「ホッキずし」のキャラクター。北海道新幹線函館北斗駅、公式キャラクター。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'バリィさん',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/baliysan.png',
                'CardColor' => '#0000ff',
                'CardDescription' =>'頭に来島海峡大橋をイメージしたクラウンをかぶり、タオル記事の腹巻をし、手には特注の船の形の財布を持っている。',
                'AttributeID' => 1,
            ],
                       [
                'CardName' => 'たかたん',
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/takatan.png',
                'CardColor' => '#000000',
                'CardDescription' => '安芸高田市の里山を守る童子(鬼のこども)。頭は緑いっぱいの安芸高田市の山、たすきは安芸高田市にある江の川・太田川の源流を表しており、背中には毛利元就でおなじみの三本の矢をつけている。',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'とち介',
                'CardIllustrationPath' => 'testimg/test_card_materials/illustration/tochisuke.png',
                'CardColor' => '#ff0000',
                'CardDescription' => '栃木県で生まれた蔵の妖精。蔵のずきんにマントがお気に入り。見た目がキョトンとしていておっとりしておるように見られるが、なんにでも積極的！',
                'AttributeID' => 1,
            ],
            [
                'CardName' => 'ももっち',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/momochi.png',
                'CardColor' => '#f3fffff',
                'CardDescription' =>'岡山を代表するヒーロー「桃太郎」をアレンジして誕生した「ももっち」。髪の色は黄色で後頭部に大きな星形の髷を結い、桃をあしらった陣羽織とはちまき姿をしている。',
                'AttributeID' => 3,
            ],
            [
                'CardName' => 'トクシィ',
                'CardIllustrationPath' =>'testimg/test_card_materials/illustration/tokushi.png',
                'CardColor' => '#0000ff',
                'CardDescription' =>'徳島市の「トク」に、徳島市の「市」、英語で海の「sea」などにつながる「シィ」を組み合わせて「トクシィ」。「トクシマシティ」の略にもなっていて、「妖精 = ピクシィ」ともつながっている。',
                'AttributeID' => 1,
            ],
            
        ]);
    }
}
