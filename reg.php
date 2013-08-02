<?php require_once ('header.php'); ?>
<div class="container listPage">
<!--新闻内容-->
<div class="article ">
<!-- 文章标题 -->
<h2 class="article_title">会员注册</h2>
<div class="article_info"> </div>
<!-- 文章内容 -->
<div class="article_content">
<form class="form-horizontal">
<fieldset>
  <div class="control-group"> 
    
    <!-- Text input-->
    <label class="control-label" for="username">昵称</label>
    <div class="controls">
      <input type="text" id="username" name="username" max="20" class="input-xlarge">
    </div>
  </div>
  <div class="control-group"> 
    
    <!-- Text input-->
    <label class="control-label" for="e_mail">邮箱</label>
    <div class="controls">
      <input type="text" id="e_mail" name="e_mail" max="20" class="input-xlarge">
    </div>
  </div>
  <div class="control-group"> 
    
    <!-- Text input-->
    <label class="control-label" for="psw">密码</label>
    <div class="controls">
      <input type="password" id="psw" name="psw" max="20" class="input-xlarge">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">注册</button>
      <button type="reset" class="btn">重填</button>
    </div>
  </div>
</fieldset>
</div>
</div>
</div>
<!--新闻内容结束-->
</div>
<?php require_once ('footer.php'); ?>
