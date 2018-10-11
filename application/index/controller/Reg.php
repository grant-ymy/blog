<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Validate;

class Reg extends Controller
{
    //加载注册模板
    public function create() {
        return view();
    }
    public function post(Request $request) {
        //halt($request->post());
        $validate=Validate::make(
            [
               'content'=>'require|min:3|confirm',
            ],['ad','dsds']
        );
        $status=$validate->check($request->post());
        halt($validate->getError());
    }
}
