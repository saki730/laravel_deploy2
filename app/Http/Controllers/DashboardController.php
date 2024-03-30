<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ここで $books を使用して必要なデータを取得し、ビューに渡す
        // 例：$books = Book::all();
        $books = Book::all(); // Bookモデルを使用して全ての本を取得
        
      
        // ビューに $books 変数を渡す
        return view('dashboard', ['books' => $books]);
    }

    public function destroy(Book $book) {
        //** ↓ 下をコピー ↓ **    
         
         $book->delete();       //追加
         return redirect('/');  //追加
         
          //** ↑ 上をコピー ↑ **
     }


}

