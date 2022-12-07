<?php

namespace App\Http\Controllers\Place;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Register;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $register_data = Register::paginate(10);
        $search = $request->input('search');
        $query = Register::query();
        if ($search) {
            
            // 全角スペースを半角に変換
            $spaceConversion = mb_convert_kana($search, 's');
          
            // 単語を半角スペースで区切り、配列にする
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
          

            // 単語をループで回し、部分一致するものがあれば、$queryとして保持される
            foreach ($wordArraySearched as $value) {
                $query->where('prefecture_name', 'like', '%' . $value . '%')
                    ->orwhere('genle_name', 'like', '%' . $value . '%');
            }
           
            $register_data = $query->paginate(10);
            
            
        }
      
        return view('UserView.index', compact('register_data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserView.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('UserView.show', compact('register_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
