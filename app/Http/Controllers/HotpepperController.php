<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HotpepperController extends Controller
{

    // HTTPリクエストを送るURL
    private const REQUEST_URL = 'http://webservice.recruit.co.jp/hotpepper/gourmet/v1/';

    // APIキー
    private $api_key;

    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {

        $range = $request->input('range');
        $lat = $request->input('lat');
        $lng = $request->input('lng');
        $start = $request->input('start');
        $count = 10;

        if (!$request->has('start')) {
            $start = 1;
        }

        // インスタンス生成
        $client = new Client();

        // HTTPリクエストメソッド
        $method = 'GET';

        // APIキーを取得
        $this->api_key = config('hotpepper.api_key');

        // APIキーや検索ワードなどの設定を記述
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

        // $response = Http::get(self::REQUEST_URL,$options);

        // HTTPリクエストを送信
        $response = $client->request('GET', self::REQUEST_URL, $options);

        // 'format' => 'json'としたのでJSON形式でデータが返ってくるので、連想配列型のオブジェクトに変換
        $restaurants = json_decode($response->getBody(), true)['results'];
        return view('list', compact('restaurants','range','lat','lng','start','count'));
    }
    public function show($id)
    {
        // インスタンス生成
        $client = new Client();

        // HTTPリクエストメソッド
        $method = 'GET';

        // APIキーを取得
        $this->api_key = config('hotpepper.api_key');

        // APIキーや検索ワードなどの設定を記述
        $options = [
            'query' => [
                'key' => '43159554938a8da6',
                'id' => $id,
                'format' => 'json',
            ],
        ];

        // HTTPリクエストを送信
        $response = $client->request($method, self::REQUEST_URL, $options);

        // 'format' => 'json'としたのでJSON形式でデータが返ってくるので、連想配列型のオブジェクトに変換
        $restaurant = json_decode($response->getBody(), true)['results'];

        // index.blade.phpを表示する
        return view('show', compact('restaurant'));
    }
}