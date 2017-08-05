<html>
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   {{ Html::style('assets/css/font-awesome.min.css') }}
   {{ Html::style('assets/css/bootstrap.min.css') }}
   {{ Html::style('assets/dist/css/dashboard.min.css') }}
   {{ Html::style('assets/dist/css/skins/_all-skins.min.css') }}
   {{ Html::script('assets/js/jquery.min.js') }}
   {{ Html::script('assets/js/jquery-ui.js') }}
   {{ Html::style('assets/css/ionicons.min.css') }}

  <title>7Sala</title>
</head>
<body>
<style type="text/css">
.login_form{width: 450px;}
.input-group{margin: 5px;}
.btn-expand{padding:10px 75px;}
</style>

<div style="margin-top:50px;"></div>

{{ Form::open(array('action' => 'home@doRegister', 'class' => 'form')) }}

<center>
<div class="panel panel-info login_form">
  <div class="panel-heading"><center>
<i class="fa fa-user fa-4x"></i><br><h5>عضويه جديده </h5></center>
  </div>
<div class="panel-body">
  @if (Session::has('flash_error'))
    <div class="alert alert-danger" id="flash_error">
        {{ Session::get('flash_error') }}
    </div>
    @endif

  <div class="row">

  </div>
    <center>
    <div class="input-group" style="width:80%">
  <span class="input-group-addon" id="basic-addon1" style="min-width:30px"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
</span>
  <input type="text" class="form-control" placeholder="اسم المستخدم" name="username" aria-describedby="basic-addon1" required>
</div>

<div class="input-group" style="width:80%">
  <span class="input-group-addon" id="basic-addon1" style="min-width:30px"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
</span>
  <input type="password" class="form-control" name="password" placeholder="كلمه المرور" aria-describedby="basic-addon1" required>
</div>
    <div class="input-group" style="width:80%">
  <span class="input-group-addon" id="basic-addon1" style="min-width:30px"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
</span>
  <input type="text" class="form-control" placeholder="رقم التليفون" name="username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group" style="width:80%">
  <span class="input-group-addon" id="basic-addon1" style="min-width:30px"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
</span>
  <input type="number" class="form-control" name="password" placeholder="بطاقه الرقم القومى" aria-describedby="basic-addon1" required>
</div>

</center>
  <div class="row"><br>
  <center>{{ Form::submit('تسجيل',array('class'=>'btn btn-success btn-expand')) }}</center>
  </div>
</div>
</div>
</center>
{{ Form::close() }}
</body></html>