<x-admin-layout>
    <h2>質問一覧</h2>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>質問者</th>
                    <th>投稿日時</th>
                </tr>
            </thead>
            @foreach ($questions as $question)
                <tr>
                    <td>{{$question->title}}</td>
                    <td>{{$question->user->name}}</td>
                    <td>{{$question->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</x-admin-layout>
