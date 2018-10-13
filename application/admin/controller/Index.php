<?php

namespace app\admin\controller;

use think\Controller;

class index extends Controller
{
    public function index() {

        return view();
    }
    //layui表格返回数据测试接口,返回格式：{"code":0,'msg':"","count":100,"data":[{},{},{}]}
    public function table() {
        header('content-type:application/json;charset=utf8');
        $data=array('code'=>0,'msg'=>'','count'=>1,'data'=>array(array("id"=>1,"username"=>"user-0","sex"=>"女","city"=>"城市-0","sign"=>"签名-0","experience"=>255,"logins"=>24,"wealth"=>82830700,"classify"=>"作家","score"=>57)));
        $data=json($data);
        return $data;
    }

}
