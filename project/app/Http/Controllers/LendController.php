<?php

namespace App\Http\Controllers;

use App\Http\Requests\LendRequest;
use App\Models\Lend;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LendController extends Controller
{
    public function index()
    {
        $lends = Lend::all();
        return view('lends.index',compact('lends'));
    }

    public function create()
    {
        return view('lends.create');
    }

    public function store(LendRequest $request)
    {
        $data = $request->validated();
        Lend::create($data);
    }

    public function edit(Lend $lend)
    {
        return view('lends.edit',compact('lend'));
    }

    public function update(LendRequest $request,Lend $lend)
    {
        $data = $request->validated();
        $lend ->update($data);

        return redirect()->route('lends.index');
    }

    public function show(Lend $lend)
    {
        return view('lends.show',compact('lend'));
    }

    public function destroy(Lend $lend)
    {
        $lend->delete();
        return redirect()->route('lends.index');
    }
}
