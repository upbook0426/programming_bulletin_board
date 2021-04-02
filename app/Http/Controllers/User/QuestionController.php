<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Enums\PublishStateType;

class QuestionController extends Controller
{
   	public function index() {
         $status = PublishStateType::toSelectArray();
   		return view('question.index', compact('status'));
   	}

   	public function store(QuestionRequest $request) {

   		$question = new Question();
   		$question->user_id = Auth::user()->id;
   		$question->title = $request->input('title');
   		$question->body = $request->input('body');
   		$question->status = $request->input('status');

         if ($request->input('status') == 'public'){
            $question->released_at = now();
         }

   		$question->save();

   		return redirect()->back()
   			->with('status', '質問を投稿しました。');
   	}
}
