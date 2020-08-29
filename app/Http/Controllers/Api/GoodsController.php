<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Goods as GoodsModel;
use App\Model\Category as cateModel;

class GoodsController extends Controller
{
     /**
     * 首页商品
     * @return array 
     */
    public function home()
    {
        $list = GoodsModel::select("goods_id","goods_name","goods_img","goods_price",)->orderBy("goods_id","desc")->limit(9)->get();
        $response = [
            'data'  => [
                'list'  => $list
            ]
        ];
        return $response;
    }
    //商品分类
    public function ation(){
        $list=cateModel::select("cate_id","cate_name","parent_id")->where('parent_id',0)->limit(4)->get();
        // print_r($list);die;
        $response=[
            'data'=>[
                'list'=>$list
            ]
        ];
        return $response;
    }
}
