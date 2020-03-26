<?php
/**
*公共文件
**/

//文件上传
    function upload($img){
    //判断上传
    if(request()->file($img)->isValid()){
        //接收文件
        $file = request()->$img;
        $store_result = $file->store('uploads');
        return $store_result;
    }
    exit('未获取到上传文件或上传过程出错');
}

//多文件上传
    function Moreupload($img){
    //判断上传
    $file = request()->$img;

    foreach($file as $k=>$v){
        if($v->isValid()){
            $store_result[$k] = $v->store('uploads');
        }else{
            $store_result[$k] = '未获取上传信息或上传出错';
        }
    }
    return $store_result;
}

//无限极分类
    function CreateTree($data,$pid=0,$level=1){
        if(!$data){
            return;
        }
        static $newArray=[];
        foreach($data as $v){
            if($v->pid==$pid){
                $v->level = $level;
                $newArray[] = $v;

                //再次调用自身查找符合的
                CreateTree($data,$v->cate_id,$level+1);
            }
        }
        return $newArray;
    }

    function NeeTree($data,$pid=0,$level=1){
    if(!$data){
        return;
    }
    static $newArray=[];
    foreach($data as $v){
        if($v->pid==$pid){
            $v->level = $level;
            $newArray[] = $v;

            //再次调用自身查找符合的
            NeeTree($data,$v->n_id,$level+1);
        }
    }
    return $newArray;
}

?>