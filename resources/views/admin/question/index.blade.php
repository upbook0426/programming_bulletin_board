<x-layouts.admin>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">プログラミング質問掲示板</a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">質問一覧</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <h4>質問一覧</h4>

        <div>

            <table class="table table-bordered">
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
    </div>
</x-layouts.admin>
