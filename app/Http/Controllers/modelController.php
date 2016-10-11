<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class modelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //遍历首页

        //遍历热门视频
        $hotList = \DB::table('wb_video')->join('wb_userdetail','wb_userdetail.id','=','wb_video.uid')->orderby('count','desc')->limit(8)->get();
        //遍历分区
        $typeList = \DB::table('wb_vType')->get();
        //遍历分区内视频
        $list = \DB::table('wb_video')->join('wb_userdetail','wb_userdetail.id','=','wb_video.uid')->orderby("wb_video.id","desc")->get();
        //遍历分区内分类列表
        $tList = \DB::table('wb_tList')->get();
        //遍历轮播图片
        $lunbo = \DB::table('wb_lunbo')->where('status',"1")->get();
        //遍历分区内排行
        $listP = \DB::table('wb_video')->join('wb_userdetail','wb_userdetail.id','=','wb_video.uid')->orderby("count","desc")->get();
        //遍历视频作者信息
                return view('index',["hotList"=>$hotList,"list"=>$list,"typeList"=>$typeList,"tList"=>$tList,"lunbo"=>$lunbo,"listP"=>$listP]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
