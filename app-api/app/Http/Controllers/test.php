<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class test extends Controller
{
    public function show(Book $book)
    {
        $approvedprograms =  DB::table('books')->where('id', '1')->get();
        return $approvedprograms;
    }
}
