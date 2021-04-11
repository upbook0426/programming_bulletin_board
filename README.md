# 開発上の注意
## js、cssファイル
jquery, bootstrapなどはnpmを使い管理しています。プロジェクトをgit cloneした後や、resources以下のjs、scssファイルを編集するときには、
`npm run watch`
や
`npm run build`
コマンドを実行してください。

## blade コンポーネント
[readouble component](https://readouble.com/laravel/8.x/ja/blade.html)

resources/views/components以下に配置されたbladeファイルは自動的にコンポーネントとして登録されます。コンポーネントは`x-<ファイル名>`というタグエイリアスでどのbladeファイルからでも呼び出せます。

# 開発環境
## データベース
mysqlを使用。5系でも8系でも問題は起こらないはずです。

## メールサーバ
ローカルではひとまずmailtrapを使用して、メール送信機能を確認してください。
[mailtrap Laravel qiitaの記事](https://qiita.com/ryomaDsakamoto/items/e9d3a2c258dbfc66c524)

## バージョン
- php 7.3^
- composer 2.0^
- node 14.15.4 以上を推奨
