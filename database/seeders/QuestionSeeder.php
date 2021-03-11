<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        DB::table('questions')->insert($this->data());
    }

    private function data()
    {
        // ['id' => , 'user_id' => , 'title' => '', 'body' => '', 'status' => 'public', 'released_at' => now(), 'created_at' => now(), 'updated_at' => now()]
        return [
            ['id' => 1, 'user_id' => 1, 'title' => 'Laravelのページネーション機能のページ数上限を設定したい', 'body' => '現在データベースからデータを取得してページネーションを行っているのですがLaravelのホームページに記載されているような方法で試すとデータベースのテーブルデータを全てもってきてしまいます
            100件以上のデータがあるので最初に100件データをとってきてそれを10件づつ区切り、ページネーションを行えるようにしたいです

            追記：コードで誤解を招く恐れがあるのでやりたいことを例えで出すとスーパー（データベース）で一人当たり100個限定の商品（今回のページネーションでとるデータ）がとして、買ってもらったらそれを10個づつわける（ページ）ように指示しています。今回の質問での問題点は一人当たり100個限定にも関わらずもう一度データベースに入ると違う100個の商品を入手出来てしまうことです。希望としては最初に買った100個の商品を使いまわしてもらいたいのです。それ以上のデータの取得はできません', 'status' => 'public', 'released_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'user_id' => 1, 'title' => 'Laravel、Vue.jsでSPAを作る際のエラー', 'body' => 'Laravel、Vue.jsを使用し、SPAを作成したい
            そのためにまずは投稿一覧ページを正常に表示させたい

            https://www.positronx.io/create-laravel-vue-js-crud-single-page-application/
            こちらのサイトを参考にしています。

            ', 'status' => 'public', 'released_at' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'user_id' => 1, 'title' => 'Laravelのテストでバリデーションによるテスト失敗の原因を出力する方法', 'body' => 'PHPUnitでテストを行い、FormRequestによるバリデーションエラーが原因でテストに失敗した場合、
            どの値が原因で失敗したのかがテスト結果に具体的に示せる方法はわかりますでしょうか？

            たとえば以下ですが、おそらくFactoryで生成した値がバリデーションに引っかかっているのですが、
            結果には何が原因かが示されていないため、すぐに原因がわからなくて困ります。', 'status' => 'public', 'released_at' => now(), 'created_at' => now(), 'updated_at' => now()],
        ];
    }
}
