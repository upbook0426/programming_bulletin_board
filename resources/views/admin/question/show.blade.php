<x-layouts.admin>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">プログラミング質問掲示板</a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.questions.index')}}">質問一覧</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4>{{htmlspecialchars($question->title, ENT_QUOTES,"UTF-8")}}</h4>
                <p><a href="#">{{htmlspecialchars($question->user->name, ENT_QUOTES, "UTF-8")}}</a></p>
                <p>{{$question->created_at}}</p>
            </div>

            <div class="card-body  bg-light">
                <h5>質問内容</h5>
                <pre class="container-fluid card">{{htmlspecialchars($question->body, ENT_QUOTES,"UTF-8")}}</pre>
            </div>
        </div>

    </div>
</x-layouts.admin>

<style>
pre {
    white-space: pre-wrap;
}
</style>
