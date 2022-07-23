<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;


class TestController extends Controller {
    //
    public function index() {
        $values = Test::all();

        $tests = DB::table('tests')
            ->select('id')
            ->get();

        $tests2 = DB::table('tests')
            ->whereRaw('`id` = ? OR `text` = ?', ['1', 'bbb'])
            ->get();
        dd($tests2);
        $collection = collect([1, 2, 3, 4, 5, 6, 7]);
        $chunks = $collection->chunk(4);
        $chunks->all();

        dd($values, $tests, $chunks);
        return view('tests.test', compact('values'));
    }
}
