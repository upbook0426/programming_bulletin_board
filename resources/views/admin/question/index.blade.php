<x-layouts.app>
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
                @if ($question->status == 'public')
                <tr>
                    <td>
                        <a href="{{route('admin.questions.show', ['question'=> $question])}}">{{$question->title}}</a>
                        {{--
                        @if ($question->status == 'public')
                            <a href="{{route('admin.questions.show', ['question'=> $question])}}">{{$question->title}}</a>
                        @else
                            <span>{{$question->title}}</span>
                            <span class="badge badge-secondary float-right">非公開</span>
                        @endif-->--}}
                    </td>
                    <td>{{$question->user->name}}</td>

                    <!--差分時間表示_年-->
                    @if(floor($question->timeDifference/(60*60*24*365)) > 0)
                    <td>{{floor($question->timeDifference/(60*60*24*365))}}年前</td>
                    <!--月-->
                    @elseif(floor($question->timeDifference/(60*60*24*30)) > 0)
                    <td>{{floor($question->timeDifference/(60*60*24*30))}}ヶ月前</td>
                    <!--週間-->
                    @elseif(floor($question->timeDifference/(60*60*24*7)) > 0)
                    <td>{{floor($question->timeDifference/(60*60*24*7))}}週間前</td>
                    <!--日-->
                    @elseif(floor($question->timeDifference/(60*60*24)) > 0)
                    <td>{{floor($question->timeDifference/(60*60*24))}}日前</td>
                    <!--時間-->
                    @elseif(floor($question->timeDifference/(60*60)) > 0)
                    <td>{{floor($question->timeDifference/(60*60))}}時間前</td>
                    <!--分-->
                    @elseif(floor($question->timeDifference/(60)) > 0)
                    <td>{{floor($question->timeDifference/(60))}}分前</td>
                    <!--分またはその他-->
                    @else
                    <td>0分前</td>
                    @endif
                    
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </div>
</x-layouts.app>