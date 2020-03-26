<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>用户添加</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body> 
<center><h1>用户添加</h1></center><hr/>
<form action="{{url('/user/store')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
{{csrf_field()}}
	<div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">管理员名字</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="user_name"
				   placeholder="请输入管理员名字">
				    <b style="color:red">{{$errors->first('user_name')}}</b>
		</div>
	</div>
    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">密码</label>
		<div class="col-sm-8">
			<input type="text" class="form-control" id="firstname" name="user_pwd"
				   placeholder="请输入密码">
				   <b style="color:red">{{$errors->first('user_pwd')}}</b>
		</div>
    </div>
     <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">邮箱</label>
		<div class="col-sm-8">
			<input type="email" class="form-control" id="firstname" name="user_email"
				   placeholder="请输入邮箱">
				   <b style="color:red">{{$errors->first('user_email')}}</b>
		</div>
    </div>
     <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">手机号</label>
		<div class="col-sm-8">
			<input type="tel" class="form-control" id="firstname" name="user_tel"
				   placeholder="请输入手机号">
				   <b style="color:red">{{$errors->first('user_tel')}}</b>
		</div>
	</div>
    <div class="form-group">
		<label for="firstname" class="col-sm-2 control-label">头像</label>
		<div class="col-sm-4">
			<input type="file" class="form-control" id="firstname" name="user_img"
				   placeholder="请输入品牌LOGO">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">添加</button>
		</div>
	</div>
</form>

</body>
</html>
