<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model //bookクラスがmodelクラスを継承している。これによりBookクラスはEloquentモデルの機能を利用できるようになる。
//Eloquentモデルはデータベーステーブルとの間でのデータの取得、保存、更新、削除などの操作を行うためのメソッドを提供する。

    use HasFactory; //


}
