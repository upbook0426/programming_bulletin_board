<x-layouts.app>
    <x-header></x-header>
    <div class="container-fluid mt-4">
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
                    </td>
                    <td>{{$question->user->name}}</td>
                    <td><x-relative-time :timeDifference="$question->time_difference"></x-relative-time></td>
                </tr>
                @endif
                @endforeach
            </table>
        </div>
    </div>
</x-layouts.app>
