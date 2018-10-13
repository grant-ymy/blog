<?php
namespace app\index\controller;

use app\common\model\Post as PostModel;
use think\Controller;

class Index extends Controller
{
    //博客首页
    public function index()
    {
        $posts=PostModel::order('create_time','desc')->select();
        //halt($posts[0]->title);
        return view('',compact('posts'));
    }

    //阅读某一篇博文
    public function read($id) {
        $post=PostModel::find($id);
        if (!$post) {
            $this->error('该篇文章不存在');
        }
        halt($post);
    }


}
