<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::orderBy('created_at', 'desc')->get();
        return view('admin.question.index', compact('questions'));
    }

    public function show(Question $question)
    {
        if ($question->status == "public") {
            return view('admin.question.show', compact('question'));
        }else{
            return redirect()->route('admin.questions.index');
        }
    }
}
