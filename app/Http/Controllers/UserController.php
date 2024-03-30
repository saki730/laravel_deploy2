<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowUserForm(){
        return view('userprofileform');
        
    }
    
    public function destroy($id)
{
    // IDでユーザーを取得して削除
    $user = User::find($id);
    $user->delete();

    // 削除成功後に特定のルートにリダイレクト
    return redirect()->route('dashboard');
}


}
