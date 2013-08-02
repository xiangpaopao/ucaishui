<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>优税网</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/bootstrap-datetimepicker.zh-CN.js"></script>

</head>

<body>
<div id="top">
  <div id="topWapper">
    <div id="topCon" class="container clearfix"> <a href="index.php" id="logo" class="fl"></a>
      <div id="topR" class="fr clearfix"> <span class="fl tel">客服热线：400 657 6750</span><span class="fl styleLine">|</span>
        <?php if($_GET['login'] == "suc"){ ?>
        <ul class="fr">
          <li class="dropdown" id="loginContainer"> <a class="dropdown-toggle fr user-lk" data-toggle="dropdown" href="#">陈鸡鸡</a><span class="fr user-lk-l"></span><a class="fr btn-user-icon"><img src="img/user_icon.png" width="24"/></a>
            <ul class="dropdown-menu">
              <li><a href="#">会员中心</a></li>
              <li><a href="#">修改资料</a></li>
              <li class="divider"></li>
              <li><a href="#">注销登陆</a></li>
            </ul>
          </li>
        </ul>
        <?php }else{?>
        <a href="#myModal" role="button" class="btn-login fr" data-toggle="modal"></a>
        <?php }?>
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">会员登陆</h3>
          </div>
          <div class="modal-body">
            <form class="form-signin">
              <fieldset>
                <h2 class="form-signin-heading">请登陆</h2>
                <div class="control-group">
                  <label class="control-label" for="input01">用户名</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" placeholder="用户名" >
                  </div>
                  <label class="control-label" for="input02">密码</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" placeholder="密码" >
                  </div>
                  <div class="controls">
                    <input type="checkbox" value="remember-me">
                    记住密码 </div>
                </div>
              </fieldset>
            </form>
          </div>
          <div class="modal-footer"> <a class="btn" href="reg.php">注册</a>
            <button class="btn btn-success">登陆</button>
          </div>
        </div>
      </div>
    </div>
    <div id="mainNav" class="container">
      <ul class="nav">
        <li><a href="index.php">首页</a></li>
        <li><a href="list.php?class=pxkc" >培训课程</a></li>
        <li><a href="zsxm.php">证书项目</a></li>
        <li><a href="list.php?class=swkc" >商务考察</a></li>
        <li><a href="zjtd.php">专家团队</a></li>
        <li><a href="list.php?class=nxzx" >内训咨询</a></li>
        <li><a href="zxbm.php">在线报名</a></li>
        <li><a href="center.php">会员中心</a></li>
        <li><a href="about.php">关于我们</a></li>
      </ul>
    </div>
  </div>
</div>
