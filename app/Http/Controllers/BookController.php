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
         'id' => 'required|min:1|max:5',
         'name' => 'required | max:255',
         'mail' => 'required | max:255',
         'password'   => 'required | max:255',
         'age'   => 'required | max:255',
         'location'   => 'required | max:255',
    ]);

    //バリデーション:エラー 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    //以下に登録処理を記述（Eloquentモデル）

  // Eloquentモデル
  $books = new Book;
  $books->id   = $request->id;
  $books->name   = $request->name;
  $books->mail = $request->mail;
  $books->password = $request->password;
  $books->age   = $request->age;
  $books->location   = $request->location;
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
        //
    }

    /**
     * Update the specified resource in storage.
     * 特定の一件のデータを更新するとき
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 特定のデータを削除するとき
     */
    public function destroy(Book $book)
    {
    // 削除処理を行う
    // ...

    // 削除が成功した後に dashboard ページにリダイレクト
    return redirect()->route('dashboard');
    }
}
