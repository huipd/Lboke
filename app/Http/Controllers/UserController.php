<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *添加方法
     * 获取一个添加页面
     * @parm null
     * @return 返回添加页面
     */
    public function add()
    {
        return view('user.add');
    }
    /*
     * @parm表单提交的数据
     * @return返回提交是否成功*/
    public function stort(Request $request)
    {
//        获取表单数据
        $input = $request->except('_token');
        dd($input);
//        return view(view:'');
    }
}   