<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Register;
use Illuminate\Foundation\Exceptions\RegisterErrorViewPaths;
use Illuminate\Http\Request;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $register_data = Register::all();

        return view('AdminView.index', compact('register_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // アップロードされたファイル名を取得
        $upload_image = $request->file('image_path');
        // storageへの保存
        $path = $upload_image->store('uploads', "public");

        Register::create([
            "prefecture_name" => $request->prefecture_name,
            "genle_name" => $request->genle_name,
            "reservation_number_of_people" => $request->reservation_number_of_people,
            "reservation_date" => $request->reservation_date,
            "image_path" => $path,
        ]);


        return redirect()->route('reservation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $register_data = Register::where('id', $id)->first();
        //dd($register_data);
        return view('AdminView.show', compact('register_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $register_data = Register::where('id', $id)->first();
        return view('AdminView.edit', compact('register_data'));
        //return redirect()->route('reservation.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id, Register $register)
    {

        $register_data = Register::where('id', $id)->first();
        // // アップロードされたファイル名を取得
        // dd($upload_image);

        $upload_image = $request->file('image_path');
        // // storageへの保存

        $path = $register_data->image_path;
        if (!is_null($path)) {
            //     // 現在の画像ファイルの削除
            \Storage::disk('public')->delete($path);
            $path = $upload_image->store('uploads', 'public');
        
        }
        // ddd($register_data);
        $register_data->update([
            "prefecture_name" => $request->prefecture_name,
            "genle_name" => $request->genle_name,
            "reservation_number_of_people" => $request->reservation_number_of_people,
            "reservation_date" => $request->reservation_date,
            "image_path" => $path,

        ]);
        
        return redirect()->route('reservation.index', compact('register_data'));
        //return view('AdminView.index', compact('register_data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        
        $register_data = Register::find($id);
        
        // レコードを削除
        $register_data->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('reservation.index');
    }
}
