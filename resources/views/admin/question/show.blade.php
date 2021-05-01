<x-layouts.admin>
    <x-header></x-header>
    <br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4>{{$question->title}}</h4>
                <p><a href="#">{{$question->user->name}}</a></p>
                <p>{{$question->created_at}}</p>
                <hr>
                <h5>質問内容</h5>
                <pre>{{$question->body}}</pre>
            </div>
        </div>
    </div>
</x-layouts.admin>

<style>
pre {
    white-space: pre-wrap;
}
</style>
