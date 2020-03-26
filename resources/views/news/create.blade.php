<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新闻添加表</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<center>
    <h2>
        新闻添加
        <a href="{{url('/news/index')}}" style="float: left;" class="btn btn-default">列表</a>
    </h2>
</center>
<form  action="{{url('/news/store')}}" method="post" class="form-horizontal" role="form">
    @csrf
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">新闻标题</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="firstname" name="new_name"
                   placeholder="请输入新闻标题">
            <b style="color: red">{{$errors->first('new_name')}}</b>

        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">新闻作者</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="firstname" name="new_zhe"
                   placeholder="请输入新闻作者">
            <b style="color: red">{{$errors->first('new_zhe')}}</b>

        </div>
    </div>
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">新闻分类</label>
        <div class="col-sm-8">
            <select name="n_id">
                <option value="">--请选择--</option>
                @foreach($nee as $v)
                    <option value="{{$v->n_id}}">{{str_repeat('|—',$v->level)}}{{$v->n_name}}</option>
                @endforeach
            </select>
            <b style="color: red">{{$errors->first('n_id')}}</b>

        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-8">
            <button type="submit" class="btn btn-default">添加</button>
        </div>
    </div>
</form>

</body>
</html>