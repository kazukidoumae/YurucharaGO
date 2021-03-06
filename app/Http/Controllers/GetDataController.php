<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class GetDataController extends Controller
{
    // カード一覧へ遷移
    public function refinePrefectures(Request $request)
    {
        $md = new Card();
        $data = $md->prefecturesCardList($request->input('Prefectures'));
        return view('cardList', ['data' => $data]);
    }
    // カード詳細へ遷移
    public function getDetail(Request $request)
    {
        $md = new Card();
        $data = $md->cardDetail($request->input('CardID'));
        $obtain = $request->input('Obtain');
        return view('cardDetail', ['data' => $data,'obtain' => $obtain]);
    }
    // ナビゲーションへ遷移
    public function getNavigationData(Request $request)
    {
        $md = new Card();
        $data = $md->navigationData($request->input('CardID'));
        $obtain = $request->input('Obtain');
        return view('characterNavigation', ['data' => $data,'obtain' => $obtain]);
    }
    // 範囲検索
    public function getRangeData(Request $request)
    {
        $md = new Card();
        $data = $md->rangeData($request->input('lat'),$request->input('lng'));
        return response()->json(['data'=>$data]);
    }
}
