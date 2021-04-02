<x-admin-layout>
    <h2>質問投稿</h2>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                @if (session('status'))
                  <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                  </div>
                @endif
            </div>
         </div>
    </div>
    <form method="POST" action="{{ url('question/input')}}">
    	@csrf

    	<div>
    		{{-- タイトル --}}
    		<input style="width: 50%;" id="title" type="text" name="title" autofocus placeholder="タイトル：解決したいこと書いてください">
    	</div>
    	
    	<div>
    		{{-- 内容 --}}
    		<textarea style="width: 50%; height: 300px;" id="body" type="text" name="body"></textarea>
    	</div>
        <div>
            @foreach($status as $key => $value)
                @if ($loop->first)
                    <label><input class="status" type="checkbox" id="status" name="status" value="{{$key}}" checked="checked">{{$value}}</label>
                @else
                    <label><input class="status" type="checkbox" id="status" name="status" value="{{$key}}">{{$value}}
                    </label>
                @endif
            @endforeach
        </div>
        <button type="submit" class="">
            質問投稿する
         </button>
    </form>
<script type="text/javascript">
jQuery(function($){
    $(function(){
      $('.status').on('click', function() {
        if ($(this).prop('checked')){
            // 一旦全てをクリアして再チェックする
            $('.status').prop('checked', false);
            $(this).prop('checked', true);
        }
      });
    });
});
    </script>
</x-admin-layout>