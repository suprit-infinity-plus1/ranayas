<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StarttestController extends Controller
{
    public function testlist()
    {
        $testQuestions = DB::table('test_questions')
            ->orderBy('id', 'desc')
            ->get();
        return view('backend.admin.test.index', compact(['testQuestions']));

    }

    public function testtable(Request $request,$id)
    {
        $testQuestions = DB::table('test_questions')
        ->where('id', $id)
        ->first();
        return view('backend.admin.test.test_table',compact('testQuestions'));
    }
}
