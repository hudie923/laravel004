@extends('homes.layout.moban')

@section('title','商户申请页')

@section('content')

<<<<<<< HEAD


<!-- HOME SLIDER -->
=======
<!-- heading-banner start -->
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
<div class="heading-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb">
                    <li><a href="{{url('/homes/index')}}">首页</a></li>
<<<<<<< HEAD
                    
=======
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
                    <li class="active">商户申请</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<!-- heading-banner start -->
=======
<!-- heading-banner end -->

<!-- 商户申请添加 start -->
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
<form class="form-horizontal" action="{{url('/homes/store')}}" method="post" id="box" enctype="multipart/form-data">
    <fieldset>
    <div class="form-group">
        <label for="cinema" class="col-sm-2 control-label">
            电影院名称
        </label>
        <div class="col-sm-5">
<<<<<<< HEAD
            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入影院名字" name="cinema" id="cinema" minlength="4"  required>
        </div>
    </div>
    <div class="form-group">
        <label for="license" class="col-sm-2 control-label">
            电影院法人
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入法人名字" name="legal" required>
=======
            <input type="text" class="form-control" id="inputEmail3" placeholder="请输入影院名字" name="cinema" id="cinema">
        </div>
    </div>
    <div class="form-group">
        <label for="legal" class="col-sm-2 control-label">
            电影院法人
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="legal" placeholder="请输入法人名字" name="legal">
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">
            联系电话
        </label>
        <div class="col-sm-5">
<<<<<<< HEAD
            <input type="phone" class="form-control" id="inputPassword3" placeholder="请输入手机号" name="phone" required>
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">
            密码
        </label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="inputPassword3" placeholder="请输入密码" name="password" required>
=======
            <input type="text" class="form-control" id="phone" placeholder="请输入手机号" name="phone">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">
            密码
        </label>
        <div class="col-sm-5">
            <input type="password" class="form-control" id="password" placeholder="请输入密码" name="password">
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">
            省份
        </label>
        <div class="col-sm-5">
<<<<<<< HEAD
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入省份" name="city" required>
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">
            市/区
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入市/区" name="area" required>
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">
            详细地址
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inputPassword3" placeholder="请输入详细地址" name="address" required>
=======
            <input type="text" class="form-control" id="city" placeholder="请输入省份" name="city">
        </div>
    </div>
    <div class="form-group">
        <label for="area" class="col-sm-2 control-label">
            市/区
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="area" placeholder="请输入市/区" name="area">
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">
            详细地址
        </label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="address" placeholder="请输入详细地址" name="address">
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
        </div>
    </div>
   

    <div class="form-group">
<<<<<<< HEAD
        <label for="inputPassword3" class="col-sm-2 control-label">
            电影院执照
        </label>
        <div class="col-sm-5">
            <input type="file" id="exampleInputFile" name="license" required>
        </div>
    </div>
    
    <div class="form-group">
        <label for="status" class="col-sm-2 control-label">
            电影院状态
        </label>
        <label class="radio-inline">
          <input type="radio" name="status" id="inlineRadio1" value="1" name="status"> 开启
        </label>
        <label class="radio-inline">
          <input type="radio" name="status" id="inlineRadio2" value="0" name="status"> 关闭
        </label>
    </div>
    
=======
        <label for="file" class="col-sm-2 control-label">
            电影院执照
        </label>
        <div class="col-sm-5">
            <input type="file" id="exampleInputFile" name="license">
        </div>
    </div>
    <input type="hidden" id="time" name="time" value="{{time()}}">
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5">
            {{ csrf_field() }}
                
            <button type="submit" id="fun" class="btn btn-danger" >申请</button>
        </div>
    </div>
    </fieldset>
</form>
<<<<<<< HEAD

@endsection

@section('js')

<script type="text/javascript">
    //弹框
    $('#fun').click(function(){

         layer.alert('申请成功，请等待处理', {
            skin: 'layui-layer-molv' //样式类名  自定义样式
            ,closeBtn: 1    // 是否显示关闭按钮
            ,anim: 1 //动画类型
            ,btn: ['确认'] //按钮
            ,icon: 6    // icon
            ,yes:function(){
                layer.msg('跳转中')
            }
            ,btn2:function(){
                layer.msg('跳转中')
            }});
    });

   

    //表单验证
    /*$.validator.setDefaults({
    submitHandler: function() {
      alert("提交事件!");
    }
    });
    $().ready(function() {
        $("#box").validate();
    });*/
   

</script>
@endsection
=======
<!-- 商户申请添加 end -->

@endsection

<!-- js start -->
@section('js')
<script type="text/javascript">

    //弹框
    $('#fun').click(function(){

     layer.alert('申请成功，请等待处理', {
        skin: 'layui-layer-molv' //样式类名  自定义样式
        ,closeBtn: 1    // 是否显示关闭按钮
        ,anim: 1 //动画类型
        ,btn: ['确认'] //按钮
        ,icon: 6    // icon
        ,yes:function(){
            layer.msg('跳转中')
        }
        ,btn2:function(){
            layer.msg('跳转中')
        }});
    });
    
    //表单验证
   $().ready(function() {
    // 在键盘按下并释放及提交后验证提交表单
    $("#box").validate({
        rules: {
              cinema: {
                required: true,
                minlength: 2
              },
              legal: {
                required: true,
                maxlength: 6
                
              },
              phone: {
                required: true,
                minlength: 11
              },
              password: {
                required: true,
                minlength: 6,
                maxlength: 12
              },
              city: {
                required: true
              },
              area: {
                required: true
              },
              address: {
                required: true
              },
              license: {
                required: true
              }
            },
        messages: {
              cinema: {
                required: "请输入影院名",
                minlength: "用户名至少由两个字母组成"
              },
              legal: {
                required: "请输入法人名字",
                maxlength: "用户名最多由六个字符组成"
              },
              phone: {
                required: "请输入手机号",
                minlength: "手机号码格式不正确"
              },
              password: {
                required: "请输入密码",
                minlength: "密码是6~12个字符",
                maxlength: "密码是6~12个字符"
              },
              city: {
                required: "请输入省份"
              },
              area: {
                required: "请输入市/区"
              },
              address: {
                required: "请输入详细地址"
              },
              license: {
                required: "请添加营业执照"
              }
         }
    })
});
</script>
@endsection
<!-- js end -->
>>>>>>> d9a021112ec5828c4de4b5d148256e6e902a16a0
