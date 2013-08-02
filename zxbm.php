<?php require_once ('header.php'); ?>
<div class="container newsShow"> 
  <!--新闻内容-->
  <div class="article "> 
    <!-- 文章标题 -->
    <h2 class="article_title">在线报名</h2>
    <!-- 文章信息 -->
    <div class="article_info">
      <div class="article_info_l  wzbt"></div>
    </div>
    <!-- 文章内容 -->
    <div class="article_content">
      <form class="form-horizontal">
      <fieldset>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="input01"><span class="xin">*</span>报名网站</label>
          <div class="controls">
            <input type="text" placeholder="优税网" class="input-xlarge">
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="input01"><span class="xin">*</span>真实姓名</label>
          <div class="controls">
            <input type="text" name="username" min="1" max="50" class="input-xlarge">
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="input01"><span class="xin">*</span>报名项目</label>
          <div class="controls">
            <select id="firstdesire" name="firstdesire">
              <option value="" selected="">--请选择学习项目--</option>
              <option value="税务会计师">税务会计师</option>
              <option value="管理会计师">管理会计师</option>
              <option value="信贷分析师">信贷分析师</option>
              <option value="风险管理师">风险管理师</option>
            </select>
            <p class="help-block">如税务会计师</p>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">性别</label>
          <div class="controls">

            <!-- Inline Radios -->
            <label class="radio inline">
              <input type="radio" value="1" checked="checked" name="group">
              男
            </label>
            <label class="radio inline">
              <input type="radio" value="2" name="group">
              女
            </label>

          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="input01"><span class="xin">*</span>民族</label>
          <div class="controls">
            <input type="text"  id="nation" name="nation" min="1" max="20" class="input-xlarge">
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="input01"><span class="xin">*</span>政治面貌</label>
          <div class="controls">
            <input type="text" id="politics" name="politics"class="input-xlarge">
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="input01"><span class="xin">*</span>籍贯</label>
          <div class="controls">
            <select size="1" name="bornfrom" id="bornfrom">
                  <option>北京</option>
                  <option>天津</option>
                  <option>河北</option>
                  <option>山西</option>
                  <option>内蒙古</option>
                  <option>辽宁</option>
                  <option selected="">吉林</option>
                  <option>黑龙江</option>
                  <option>上海</option>
                  <option>江苏</option>
                  <option>浙江</option>
                  <option>安徽</option>
                  <option>福建</option>
                  <option>江西</option>
                  <option>山东</option>
                  <option>河南</option>
                  <option>湖北</option>
                  <option>湖南</option>
                  <option>广东</option>
                  <option>广西</option>
                  <option>海南</option>
                  <option>重庆</option>
                  <option>四川</option>
                  <option>贵州</option>
                  <option>云南</option>
                  <option>西藏</option>
                  <option>陕西</option>
                  <option>甘肃</option>
                  <option>青海</option>
                  <option>宁夏</option>
                  <option>新疆</option>
                  <option>台湾</option>
                  <option>香港</option>
                  <option>澳门</option>
                </select>
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="btime"><span class="xin">*</span>出生日期</label>
          <div class="controls">
            <input type="text"  name="btime" id="btime" class="input-xlarge datetimepicker">
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="usercode"><span class="xin">*</span>身份证号</label>
          <div class="controls">
            <input type="text" id="usercode" name="usercode" min="1" max="20" class="input-xlarge">
            <p class="help-block">学校录取建档用，请务必填写正确</p>
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="bselect"><span class="xin">*</span>学历学位</label>
          <div class="controls">
            <select id="bselect" name="bselect">
                  <option value="">--请选择--</option>
                  <option value="初中">初中</option>
                  <option value="高中">高中</option>
                  <option value="职高">职高</option>
                  <option value="技校">技校</option>
                  <option value="中专">中专</option>
                  <option value="大专">大专</option>
                  <option value="本科">本科</option>
                  <option value="硕士">硕士</option>
                  <option value="其他">其他</option>
                </select>
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="fromschool"><span class="xin">*</span>毕业院校</label>
          <div class="controls">
            <input type="text" id="fromschool" name="fromschool" class="input-xlarge">
          </div>
        </div>

<div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="graduatetime"><span class="xin">*</span>毕业年份</label>
          <div class="controls">
            <input type="text"  id="graduatetime" name="graduatetime" class="input-xlarge">
          </div>
        </div>

<div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="levels"><span class="xin">*</span>职业资格</label>
          <div class="controls">
            <input type="text" id="levels" name="levels" min="1" max="20"  class="input-xlarge">
            <p class="help-block">专业技术职称</p>
          </div>
        </div>

<div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="results"><span class="xin">*</span>目前职位</label>
          <div class="controls">
            <input type="text" id="results" name="results" min="1" max="20" class="input-xlarge"> 
          </div>
        </div>

<div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="addr"><span class="xin">*</span>通信地址</label>
          <div class="controls">
            <textarea id="addr" name="addr" rows="2" cols="58" min="1" max="255" class="input-xlarge"></textarea>
            <p class="help-block">建议填写准确详细的家庭地址，以确保最有效的联系</p>
          </div>
        </div>
        
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="postcode"><span class="xin">*</span>腾讯QQ</label>
          <div class="controls">
            <input type="text" id="postcode" name="postcode" min="1" max="20" class="input-xlarge">
          </div>
        </div>

        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="phone"><span class="xin">*</span>联系电话</label>
          <div class="controls">
            <input type="text" id="phone" name="phone" min="1" max="20"  class="input-xlarge">
            <p class="help-block">填写本人或家长联系电话,如：02781948330</p>
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="mobile">手机号码</label>
          <div class="controls">
            <input type="text" id="mobile" name="mobile" max="20" class="input-xlarge">
            <p class="help-block">填写本人或家长手机,如：13349892332</p>
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="e_mail">E-mail</label>
          <div class="controls">
            <input type="text" id="e_mail" name="e_mail" max="20" class="input-xlarge">
            <p class="help-block">填写本人或家长邮箱,如：dhw2008@163.com</p>
          </div>
        </div>
        <div class="control-group"> 
          
          <!-- Text input-->
          <label class="control-label" for="question">你想咨询的问题</label>
          <div class="controls">
            <textarea id="question" name="question" rows="3" cols="50" max="65535" class="input-xlarge"></textarea>
          </div>
        </div>
<div class="control-group">
<div class="controls">
              <button type="submit" class="btn btn-success">提交</button>
              <button type="reset" class="btn">重填</button>
            </div>
            </div>

<div class="alert">注意：如果按“提交”后没有显示“祝贺您报名成功”的页面，可能是网络故障，请稍后再网上报名，或及时与我们联系用电话报名或E-maill通知我们为你修改。报名电话：400-657-6750</div>
      </fieldset>
      
    </div>
  </div>
</div>
<!--新闻内容结束-->
</div>
<script>
$('.datetimepicker').datetimepicker({
      format: 'yyyy-mm-dd',
    language:  'zh-CN',
    minView: 2,
      autoclose: 1,
      todayHighlight: 1,
      startView: 4,
      forceParse: 0,
    showMeridian: 1
});

</script>
<?php require_once ('footer.php'); ?>
