<?php
/**
 * Created by PhpStorm.
 * User: 明洋
 * Date: 2018/10/13 0013
 * Time: 15:34
 */

namespace app\common\model;
use think\Model;

class Post extends Model
{
    protected $table='posts';
    protected $autoWriteTimestamp=true;

}