<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use Validator;  //この1行だけ追加！

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * 一覧所得
     */
    public function index()
    {
        //保存されてる本のデータを取得する
        $books = Book::orderBy('created_at', 'asc')->get();
    return view('books', [
        'books' => $books
    ]);
    
    }

    /**
     * Show the form for creating a new resource.
     * 登録画面を表示するための関数
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * データ登録処理
     */
    public function store(Request $request)
    {
              
    //バリデーション
    $validator = Validator::make($request->all(), [
         'item_name' => 'required|min:3|max:255',
         'item_number' => 'required | min:1 | max:3',
         'item_amount' => 'required | max:6',
         'published'   => 'required',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）

  // Eloquentモデル validationエラーなかった場合ここに進む

  $books = new Book;
  $books->item_name   = $request->item_name;
  $books->item_number = $request->item_number;
  $books->item_amount = $request->item_amount;
  $books->published   = $request->published;
  $books->save(); 
  return redirect('/');
  
  
    }

    /**
     * Display the specified resource
     * 特定の一件のデータを表示するとき
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 特定の一件のデータを編集するとき
     */
    public function edit(Book $book)
    {
        
        //{books}id 値を取得 => Book $books id 値の1レコード取得
        return view('booksedit', ['book' => $book]);

    }

    /**
     * Update the specified resource in storage.
     * 特定の一件のデータを更新するとき
     */
    public function update(Request $request, Book $book)
    {
        //
        //バリデーション
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'item_name' => 'required|min:3|max:255',
            'item_number' => 'required|min:1|max:3',
            'item_amount' => 'required|max:6',
            'published' => 'required',
       ]);
       //バリデーション:エラー
        if ($validator->fails()) {
            return redirect('/booksedit/'.$request->id)
                ->withInput()
                ->withErrors($validator);
       }
       
       //データ更新
       $books = Book::find($request->id);
       $books->item_name   = $request->item_name;
       $books->item_number = $request->item_number;
       $books->item_amount = $request->item_amount;
       $books->published   = $request->published;
       $books->save();
       return redirect('/');
       


    }

    /**
     * Remove the specified resource from storage.
     * 特定のデータを削除するとき
     */
    public function destroy(Book $book)
    {
        $book->delete();       //追加
        return redirect('/');  //追加
        
    }
}
