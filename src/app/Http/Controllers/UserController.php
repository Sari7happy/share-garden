<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('MypageView.index', ['user' => Auth::user()]);
    }
    public function edit()
    {
        return view('MypageView.edit', ['user' => Auth::user()]);
    }
    public function update(Request $request)
    {

        $user_form = $request->all();
        // dd($user_form);
        $user = Auth::user();
        // dd($user);
        //不要な「_token」の削除
        unset($user_form['_token']);
        //保存
        $user->fill($request->all())->save();
        //dd($user);
        //リダイレクト
        $request->session()->flash('message', '登録に成功しました。');
        //dd($request);

        return redirect('user/index');
    }
}
