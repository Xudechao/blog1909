<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\Nee;
use Illuminate\Support\Facades\Redis;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //清除缓存
       // Redis::del('news');
//       Redis::flushall();

        //分页
        $page = request()->page??1;
////        echo $page;
        $new_name = request()->new_name??'';

//        //缓存
        $news = Redis::get('news_'.$page.'_'.$new_name);
        dump('news_'.$page.'_'.$new_name);
//        dd($news);
        //dump($news);
        if(!$news){
        echo "DB ====";

        $where = [];
        if($new_name){
            $where[]=['new_name','like',"%$new_name%"];
        }
        $pageSize = config('app.pageSize');
        $news = News::select('news.*','nee.n_name')
            ->leftjoin('nee','news.n_id','=','nee.n_id')
            ->where($where)
            ->orderby('new_id','desc')
            ->paginate($pageSize);
//            $query = request()->all();

    //分页
//        if(request()->ajax()){
//
//            return  view('news.ajaxpage',['news'=>$news]);
//        }
        $news  = serialize($news);
        Redis::setex('news_'.$page.'_'.$new_name,5*60,$news);
        }
        $news = unserialize($news);
        //dd($news);
        return view('news.index',['news'=>$news,'new_name'=>$new_name]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //分类
        $nee = Nee::all();


        return view('/news/create',['nee'=>$nee]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'new_name'=>'regex:/^[\x{4e00}-\x{9fa5}\w]{2,30}$/u|unique:news',
            'new_zhe'=>'required',

        ],[
            'new_name.regex'=>'新闻标题可以包含中文、数字、字母、下划线长度范围2-30位！',
            'new_name.unique'=>'新闻标题已存在！',
            'new_zhe.required'=>'作者必填！',

        ]);

        $post = $request->except('_token');
        $post['time'] = time();
        $res = News::insert($post);
//        dd($res);
        if($res){
            return redirect('/news/index');
        }
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
