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

<tr><td colspan="6">{{$news->links()}}</td></tr>
