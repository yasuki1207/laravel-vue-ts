<?php

namespace Database\Seeders;

use App\Models\SoccerLeague;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoccerTeamSeeder extends Seeder
{
    const J1TEAMS2023 = [
        '北海道コンサドーレ札幌',
        '鹿島アントラーズ',
        '浦和レッズ',
        '柏レイソル',
        'FC東京',
        '川崎フロンターレ',
        '横浜F・マリノス',
        '横浜FC',
        '湘南ベルマーレ',
        'アルビレックス新潟',
        '名古屋グランパス',
        '京都サンガF.C.',
        'ガンバ大阪',
        'セレッソ大阪',
        'ヴィッセル神戸',
        'サンフレッチェ広島',
        'アビスパ福岡',
        'サガン鳥栖',
    ];
    const J2TEAMS2023 = [
        'ベガルタ仙台',
        'ブラウブリッツ秋田',
        'モンテディオ山形',
        'いわきFC',
        '水戸ホーリーホック',
        '栃木SC',
        'ザスパクサツ群馬',
        '大宮アルディージャ',
        'ジェフユナイテッド千葉',
        '東京ヴェルディ',
        'FC町田ゼルビア',
        'ヴァンフォーレ甲府',
        'ツエーゲン金沢',
        '清水エスパルス',
        'ジュビロ磐田',
        '藤枝MYFC',
        'ファジアーノ岡山',
        'レノファ山口FC',
        '徳島ヴォルティス',
        'V・ファーレン長崎',
        'ロアッソ熊本',
        '大分トリニータ',
    ];
    const J3TEAMS2023 = [
        'ヴァンラーレ八戸',
        'いわてグルージャ盛岡',
        '福島ユナイテッドFC',
        'Y.S.C.C.横浜',
        'SC相模原',
        '松本山雅FC',
        'AC長野パルセイロ',
        'カターレ富山',
        'アスルクラロ沼津',
        'FC岐阜',
        'FC大阪',
        '奈良クラブ',
        'ガイナーレ鳥取',
        'カマタマーレ讃岐',
        '愛媛FC',
        'FC今治',
        'ギラヴァンツ北九州',
        'テゲバジャーロ宮崎',
        '鹿児島ユナイテッドFC',
        'FC琉球',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::J1TEAMS2023 as $j1TeamName) {
            SoccerLeague::findOrFail(1)->soccerTeams()->create([
                'name' => $j1TeamName,
            ]);
        }
        foreach (self::J2TEAMS2023 as $j2TeamName) {
            SoccerLeague::findOrFail(2)->soccerTeams()->create([
                'name' => $j2TeamName,
            ]);
        }
        foreach (self::J3TEAMS2023 as $j3TeamName) {
            SoccerLeague::findOrFail(3)->soccerTeams()->create([
                'name' => $j3TeamName,
            ]);
        }
    }
}
