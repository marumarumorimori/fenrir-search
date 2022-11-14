# 簡易仕様書サンプル

### 作者

辻詩衣菜

### アプリ名

ハンレス

![ハンレス　のトップ画面](public/images/fenrir7.png)

#### コンセプト

半径選択するだけでレストランを検索できる。

#### こだわったポイント

検索条件が半径選択するだけなので、できる限りシンプルなデザインかつ、少し高みえするようなダークめなデザインにしたところ。

### 公開したアプリの URL（Store にリリースしている場合）

https://apps.apple.com/jp/app/xxxx

### 該当プロジェクトのリポジトリ URL（GitHub,GitLab など Git ホスティングサービスを利用されている場合）

https://github.com/marumarumorimori/fenrir-search

## 開発環境
### 開発環境

macOS Monterey 12.4
Google chrome  107.0.5304.110
Visual Studio Code 1.73.1

### 開発言語

Laravel 9.38.0
PHP 8.0.24
Javascript 
HTML
CSS


## 開発期間

4日間

## アプリケーション機能

### 機能一覧

- レストラン検索：ホットペッパーグルメサーチAPIを使用して、現在地周辺の飲食店を検索する。
- 位置情報取得：Geolocation APIを使用して、現在の位置情報を取得。

### 画面一覧

- 検索画面 ：条件を指定してレストランを検索する。
- 一覧画面 ：検索結果の飲食店を一覧表示する。
- 詳細画面 ：検索結果の飲食店の詳細を表示する。

## 検索画面

### 使用しているAPI,SDK,ライブラリなど

- ホットペッパーグルメサーチAPI
- Geolocation API

### アドバイスして欲しいポイント

今回、はじめてLaravel開発でAPIを使用したのですが、routeフォルダ以下のapi.phpとweb.phpがあり、今回APIを使用したのにも関わらずapi.phpを使用しませんでした。
api.phpを使わずweb.phpを使用したのですが、このやり方に問題はありますか？

