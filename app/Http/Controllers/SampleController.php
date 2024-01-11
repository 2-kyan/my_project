<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $sampleValue = "sample テキストです。";

        $records = DB::connection('mysql')->select("select * from users");
        $email = $records[0]->email;

        // 追加
        //$insertResult =DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'sample3@sample','user3','0101')");
        //dd($insertResult);

        // 更新
        //$updateResult =DB::connection('mysql')->update("update users set name = 'user' where id = 1");
        //dd($updateResult);

        // 削除
        $deleteResult =DB::connection("mysql")->delete("delete from users where name = 'user'");
        dd($deleteResult);

        return view("sample/index", ["sampleValue" => $sampleValue]);
    }
}
