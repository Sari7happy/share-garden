<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        return view('MypageAdmin.index', ['user' => Auth::user()]);
    }
    public function edit()
    {
        return view('MypageAdmin.edit', ['user' => Auth::user()]);
    }
    public function update(Request $request)
    {

        $admin_form = $request->all();
        // dd($admin_form);
        $admin = Auth::user();
        //dd($admin);
        //不要な「_token」の削除
        unset($admin_form['_token']);
        //保存
        $admin->fill($request->all())->save();
        //dd($user);
        //リダイレクト
        $request->session()->flash('message', '登録に成功しました。');
        //dd($request);

        return redirect('admin-mypage/index');
    }
}