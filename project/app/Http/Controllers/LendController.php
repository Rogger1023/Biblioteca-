<?php

namespace App\Http\Controllers;

use App\Http\Requests\LendRequest;
use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LendController extends Controller
{
    public function index()
    {
        $lends = Book::query()->whereNotNull('user_id')->get();
        return view('lends.index',compact('lends'));
    }

    public function create()
    {
        $books = Book::query()->whereNull('user_id')->get(['id','title']);
        $users = User::all();
        return view('lends.create',compact('users','books'));
    }

    public function store(LendRequest $request)
    {
        $data = $request->validated();
        $book = Book::find($data['book_id']);
        $book->update($data);
        return redirect()->route('lends.index');
    }

    public function unlink(Book $lend)
    {
        $lend->update(['user_id'=>null]);
        return redirect()->route('lends.index');
    }
}
