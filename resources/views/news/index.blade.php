<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新闻展示表</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <script src="/static/admin/js/jquery.min.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
</head>
<body>
<center>
    <h2>
        新闻展示
        <hr>
        <a href="{{url('/news/create')}}" style="float: left;" class="btn btn-default">添加</a>
    </h2>
    <form>
        <input type="text" name="new_name"  placeholder="请输入关键字" value="{{$new_name}}">
        <button>搜索</button>
    </form>
</center>
<table class="table">
    <thead>
    <tr>
        <th>新闻ID</th>
        <th>新闻标题</th>
        <th>新闻作者</th>
        {{--<th>新闻添加时间</th>--}}
        <th>新闻分类</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($news as $v)
        <tr  class="success">
            <td>{{$v->new_id}}</td>
            <td>{{$v->new_name}}</td>
            <td>{{$v->new_zhe}}</td>
            {{--<td>{{$v->time}}</td>--}}
            <td>{{$v->n_name}}</td>


            <td>
                <a href="{{url('/news/edit/'.$v->brand_id)}}" class="btn btn-primary">编辑</a> &nbsp;
                <a href="{{url('/news/destroy/'.$v->brand_id)}}" class="btn btn-danger">删除</a>
            </td>
        </tr>
    @endforeach

    <tr><td colspan="6">{{$news->appends(['new_name'=>$new_name])->links()}}</td></tr>

    </tbody>
</table>
{{--<script>--}}
{{--$(document).on('click','.pagination a',function(){--}}

        {{--var url = $(this).attr('href');--}}
        {{--$.get(url,function(result) {--}}
            {{--$('tbody').html(result);--}}
        {{--});--}}
        {{--return false;--}}
{{--});--}}
{{--</script>--}}
</body>
</html>