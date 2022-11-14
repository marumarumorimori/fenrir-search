<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HotpepperController extends Controller
{
    // HTTPリクエストを送るURL
    private const REQUEST_URL = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/';
    /**
    * 検索画面のページを返す
    *
    * @param array なし
    * @return array なし
    */
    public function index()
    {
        return view('index');
    }
    /**
    * 半径から店舗を検索
    *
    * @param array $request 検索条件
    * @return array $restaurants　レストラン
    */
    public function search(Request $request)
    {
        $range = $request->input('range'); //フォームからうけとった半径
        $lat = $request->input('lat'); //緯度
        $lng = $request->input('lng'); //経度
        $start = $request->input('start'); //最初に表示する数字
        $count = 10; // 1ページに表示する数

        //フォームからvalueを受け取らなかったら、１番目の店舗を表示する
        if (!$request->has('start')) {
            $start = 1;
        }
        $client = new Client();
        $options = [
            'query' => [
                'key' => '43159554938a8da6',
                'lat' => $lat,
                'lng' => $lng,
                'range' => $range,
                'count'=>$count,
                'start'=>$start,
                'format' => 'json',
            ],
        ];
        // HTTPリクエストを送信
        $response = $client->request('GET', self::REQUEST_URL, $options);
        //JSONデコード
        $restaurants = json_decode($response->getBody(), true)['results'];
        //list画面（店舗一覧画面）に該当する全レストラン,半径、緯度、経度、ページ始め、１ページあたりに表示する件数を返す
        return view('list', compact('restaurants','range','lat','lng','start','count'));
    }
    /**
    * 店舗詳細を表示
    *
    * @param array $id 店舗ID
    * @return array $restaurant　該当する店舗
    */
    public function show($id)
    {
        $client = new Client();
        $options = [
            'query' => [
                'key' => '43159554938a8da6',
                'id' => $id,
                'format' => 'json',
            ],
        ];
        // HTTPリクエストを送信
        $response = $client->request('GET', self::REQUEST_URL, $options);
        //JSONデコード
        $restaurant = json_decode($response->getBody(), true)['results'];
        //show画面（店舗詳細画面）に該当するレストランを返す
        return view('show', compact('restaurant'));
    }
}