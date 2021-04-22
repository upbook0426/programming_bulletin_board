<x-layouts.admin>
    <x-header></x-header>
    <br>
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h4>{{$question->title}}</h4>
                <p><a href="#">{{htmlspecialchars($question->user->name, ENT_QUOTES, "UTF-8")}}</a></p>
                <p>{{$question->created_at}}</p>
            </div>

            <hr>

            <x-label>
                <h5>質問内容</h5>
                <pre>{{$question->body}}</pre>
            </x-label>
        </div>

        

    </div>
</x-layouts.admin>

<style>
pre {
    white-space: pre-wrap;
}
</style>
