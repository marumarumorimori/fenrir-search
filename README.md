# 簡易仕様書サンプル

### 作者

辻詩衣菜

### アプリ名

ハンレス

![ハンレス　のトップ画面](public/images/fenrir7.png)

#### コンセプト

半径を選択するだけでレストランを検索できる。

#### こだわったポイント

検索条件が半径を選択するだけなので、できる限りシンプルなデザインかつ、少し高みえするようなダークめなデザインにしたところ。

### 公開したアプリの URL（Store にリリースしている場合）

https://fenrir.shinaportfolio.tk/

### 該当プロジェクトのリポジトリ URL（GitHub,GitLab など Git ホスティングサービスを利用されている場合）

https://github.com/marumarumorimori/fenrir-search

## 開発環境
### 開発環境

- macOS Monterey 12.4
- Google chrome  107.0.5304.110
- Visual Studio Code 1.73.1

### 開発言語

- Laravel 9.38.0
- PHP 8.0.24
- Guzzle 7.5.0
- Javascript 
- HTML
- CSS


## 開発期間

7日間

## アプリケーション機能

### 機能一覧

- レストラン検索：ホットペッパーグルメサーチAPIを使用して、現在地周辺の飲食店を検索する。
- 位置情報取得：Geolocation APIを使用して、現在の位置情報を取得。

### 画面一覧

- 検索画面 ：条件を指定してレストランを検索する。
- 一覧画面 ：検索結果の飲食店を一覧表示する。
- 詳細画面 ：検索結果の飲食店の詳細を表示する。

### コンセプト

条件指定を半径指定することによって、できる限りシンプルな設計で開発した。

### こだわったポイント

今回の課題選考の要件仕様で検索条件を追加してもいいということだったが、半径条件に特化したかったので、フォームを画面の中央にし、誰が見てもわかりやすい設計にした。
位置情報を取得するまで、検索ボタンを押せないようにするなどの工夫もした。

### デザイン面でこだわったポイント

AdobeのIllustratorを使用し、どんなアプリなのかを一目でわかるようなロゴを作成しました。
レスポンシブ対応するなど、ユーザビリティを意識し、高みえするように黒を基調としました。

### 使用しているAPI,SDK,ライブラリなど

- ホットペッパーグルメサーチAPI
- Geolocation API

### アドバイスして欲しいポイント

今回、はじめてLaravel開発でAPIを使用したのですが、routeフォルダ以下のapi.phpとweb.phpがあり、今回APIを使用したのにも関わらずapi.phpを使用しませんでした。
api.phpを使わずweb.phpを使用したのですが、このやり方に問題はありますか？

### 自己評価

今回、初めてLaravelでAPIを使用して開発しました。
Laravelでの開発は2週間ぐらいだが、PHPでの開発は得意で基礎はマスターしているので最初予定していた期間よりもかなり早く開発することができました。
つまづいたところはデプロイで、サーバ構築、ドメイン取得、ssl化するのはあまりやってこなかったので、かなり時間を費やしてしまいました。
今回の課題選考で個人的な課題（サーバー構築あたり）が見えたので、そこを重点的に勉強していきたいと思いました。
gitの使い方は理解しているつもりだったが、今回の制作を通じてgitに関してのエラーが出たときに、まだまだ知らないことが多いなと感じました。
