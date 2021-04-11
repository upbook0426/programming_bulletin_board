<?php

namespace App\Http\Controllers;

use App\Enums\PublishStateType;
use App\Http\Controllers\Controller;
use App\Http\Requests\Question\StoreRequest;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function create()
    {
        $status = PublishStateType::toSelectArray();
        return view('questions.create', compact('status'));
    }

    public function store(StoreRequest $request)
    {
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
