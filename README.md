# 開発
## 作業の流れ
### マージまで
1 issueに対し、1ブランチを作り、そのブランチで作業します。コマンドでも、GUIツール(VScode Source Controlなど)でも行えます。
1. gitlab上で対応するissueを決定します
2. ローカルでブランチを作成します。名前はissue-9やissue-9-list-questionsなど。
3. 作成したブランチに切り替えて作業を行います。
4. gitlab上でマージリクエストを作成します。これは作業中であっても大丈夫です。その場合、'Mark as Draft'ボタンを押して、タイトルの先頭に、Draftを付けます。
5. 作業が完了したら、Draftを外し、レビューを依頼します。
6. 修正点があればコメントします。修正が完了したら、再びレビューを依頼してください。
7. LGTMでしたらマージします。

### マージ後
1. 作業中のブランチからmasterブランチに移動し、pullして変更を取り込みます。
2. 次のissueに対応するブランチを作成し作業を行います。

## 開発上の注意点
### js、cssファイル
jquery, bootstrapなどはnpmを使い管理しています。プロジェクトをgit cloneした後や、resources以下のjs、scssファイルを編集するときには、
`npm run watch`
や
`npm run build`
コマンドを実行してください。

### blade コンポーネント
[readouble component](https://readouble.com/laravel/8.x/ja/blade.html)

resources/views/components以下に配置されたbladeファイルは自動的にコンポーネントとして登録されます。コンポーネントは`x-<ファイル名>`というタグエイリアスでどのbladeファイルからでも呼び出せます。

# 環境
## データベース
mysqlを使用。5系でも8系でも問題は起こらないはずです。

## メールサーバ
ローカルではひとまずmailtrapを使用して、メール送信機能を確認してください。
[mailtrap Laravel qiitaの記事](https://qiita.com/ryomaDsakamoto/items/e9d3a2c258dbfc66c524)

## バージョン
- php 7.3^
- composer 2.0^
- node 14.15.4 以上を推奨
