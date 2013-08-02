<?php require_once ('header.php'); ?>
<div class="container">
  <div id="banner">
    <div id="mCarousel" class="carousel slide clearfix">
      <div class="carousel-inner">
        <div class="item active"> <img src="img/banner1.jpg" alt=""> </div>
        <div class="item"> <img src="img/banner1.jpg" alt=""> </div>
        <div class="item"> <img src="img/banner1.jpg" alt=""> </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#mCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mCarousel" data-slide-to="1" class=""></li>
        <li data-target="#mCarousel" data-slide-to="2" class=""></li>
      </ol>
    </div>
  </div>
  <h2 class="titles">证书项目</h2>
  <div id="groups" class="clearfix">
    <div class="group groupB">
      <div class="tc"><img src="img/jinrong1.png" alt="证书项目" />
        <h3>税务会计师</h3>
      </div>
      <p>税务会计师是以国家现行税收法律法规为依据，以货币计量为基本形式，运用会计学的基本理论和核算方法，连续、系统、全面地对纳税人应纳税款的形成，计算和缴纳；即税务活动所引... </p>
      <a  class="fr" href="zsxm.php#zs1">&gt;&gt;&gt;详细</a> </div>
    <div class="group groupB">
      <div class="tc"><img src="img/jinrong2.png" alt="证书项目" />
        <h3>管理会计师</h3>
      </div>
      <p>管理会计师在西方发达国家是一个受人尊敬的新兴职业，在现代管理中扮演着决策参与者的重要角色。而在我国，管理会计师未受到应有的重视，阻碍了企业管理水平的提高。从发展的... </p>
      <a  class="fr"  href="zsxm.php#zs2">&gt;&gt;&gt;详细</a> </div>
    <div class="group groupB">
      <div class="tc"><img src="img/jinrong3.png" alt="证书项目" />
        <h3>信贷分析师</h3>
      </div>
      <p>注册信贷分析师是在新的国际金融环境下，运用信贷管理基本机理，广泛吸收国际银行信贷管理与运作中的新规则、新技术、新模式，信贷理论和实践高度统一，国际和国内高度结合的中... </p>
      <a  class="fr"  href="zsxm.php#zs3">&gt;&gt;&gt;详细</a> </div>
    <div class="group">
      <div class="tc"><img src="img/jinrong4.png" alt="证书项目" />
        <h3>风险管理师</h3>
      </div>
      <p>风险管理就是研究风险发生规律并对其进行控制，即采取必要的措施和方法，促使风险事件向有利的方向转化，使风险损失减少到最低程度。它使企业在风险最低的前提下，追求收益最...</p>
      <a  class="fr"  href="zsxm.php#zs4">&gt;&gt;&gt;详细</a> </div>
  </div>
  <div id="conL" class="fl"> 
    <!--新闻-->
    <div class="tabbable">
      <ul class="nav clearfix">
        <li class="titles tabTitles active"><a href="#tab1" data-toggle="tab">最新动态</a></li>
        <li class="titles tabTitles"><a href="#tab2" data-toggle="tab">课程安排</a></li>
        <li class="titles tabTitles"><a href="#tab3" data-toggle="tab">内训咨询</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab1"> <a class="moreLk" href="list.php?class=zxdt">&gt;&gt;&gt;更多</a>
          <ul class="newsList">
            <?php for ($i=0; $i<=3; $i++) {?>
            <li>
              <h4 class="newsTitle">陈冀教授来我网站指导</h4>
              <span class="newsTime">时间：2013年05月</span>
              <div class="btn moreBtn fr">详情</div>
            </li>
            <?php } ?>
          </ul>
        </div>
        <div class="tab-pane" id="tab2"> <a class="moreLk" href="list.php?class=zxdt">&gt;&gt;&gt;更多</a>
          <ul class="newsList">
            <?php for ($i=0; $i<=3; $i++) {?>
            <li>
              <h4 class="newsTitle">税企间常见涉税争议问题与处理技巧</h4>
              <span class="newsTime">时间：2013年05月</span> <span class="newsLocal">地点：长沙</span>
              <div class="btn moreBtn fr">详情</div>
            </li>
            <?php } ?>
          </ul>
        </div>
        <div class="tab-pane" id="tab3"> <a class="moreLk" href="list.php?class=zxdt">&gt;&gt;&gt;更多</a>
          <ul class="newsList">
            <?php for ($i=0; $i<=3; $i++) {?>
            <li>
              <h4 class="newsTitle">商业银行资金管理系列</h4>
              <span class="newsTime">时间：2013年05月</span> <span class="newsLocal">地点：长沙</span>
              <div class="btn moreBtn fr">详情</div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    
    <!--新闻结束--> 
    <!--关于-->
    <div class="tabbable">
      <ul class="nav clearfix">
        <li class="titles tabTitles active"><a href="#tab4" data-toggle="tab">关于我们</a></li>
        <li class="titles tabTitles"><a href="#tab5" data-toggle="tab">联系方式</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab4">
          <h4>优税网简介</h4>
          <p>优税网，国内财税管理咨询行业知名网站，由北京环球中财信息科学研究院创建并运营，专注于财税管理咨询和培训。自成立以来优质的财税培训方案、优秀的财税专家联盟、优质高效的服务团队”这三大优，最大限度地维护和实现客户的合法权益为执业宗旨，凭借着与国内企业界、经济界和有关政府部门的良好合作关系，为企业财务管理人员提供以国家出台的财税法律法规为核心的财税培训、财务咨询、税务咨询、税务顾问、企业内训、纳税健康检查、实时在线答疑、实时财税政策速递等多项服务。</p>
          <h4>优税网旗下核心机构</h4>
          <p> 北京安永智业国际企业管理中心<br />
            长春市汉达企业管理咨询中心<br />
            沈阳市汉文商务管理咨询中心<br />
            呼和浩特市中企研教育信息咨询有限公司 </p>
          <h4>我们的理念</h4>
          <p> 孜孜不倦求发展、与时俱进抢先机。我们愿以真诚、共赢、发展的姿态，携手海内外有志于财税、金融教育的企业、机构和个人，开展全方位、高层次的合作。选择优税网投资未来、优税网与您一起成为时代的主角，携手优税网将是您无悔的选择! </p>
        </div>
        <div class="tab-pane" id="tab5">
          <ul id="contactList">
            <li class="contactLi" id="contact1"><font color="#666">电话： </font>400 657 6750</li>
            <li class="contactLi" id="contact2"><font color="#666">邮箱： </font>xxx@xxx.com</li>
            <li class="contactLi" id="contact3"><font color="#666">Q Q： </font>1325258418</li>
            <li class="contactLi" id="contact4"><font color="#666">地址： </font>长春市南关区财富广场</li>
          </ul>
        </div>
      </div>
    </div>
    
    <!--关于结束--> 
  </div>
  <div id="conR" class="fr"> 
    <!-- 专家团队 -->
    <h2 class="titles">专家团队</h2>
    <div id="zjCarousel" class="carousel slide clearfix">
      <div id="zjNav"> <a class="left fl" href="#zjCarousel" data-slide="prev">&lsaquo;</a>
        <ol class="carousel-indicators">
          <li data-target="#zjCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#zjCarousel" data-slide-to="1" class=""></li>
          <li data-target="#zjCarousel" data-slide-to="2" class=""></li>
          <li data-target="#zjCarousel" data-slide-to="3" class=""></li>
          <li data-target="#zjCarousel" data-slide-to="4" class=""></li>
        </ol>
        <a class="right fr" href="#zjCarousel" data-slide="next">&rsaquo;</a></div>
      <div class="carousel-inner"> 
        <!--item-->
        <div class="item active">
          <div class="zjs"> <img src="img/20.jpg" width="120" alt="专家"/>
            <h4>程小可：管理学博士后</h4>
            <p>管理学博士后、北京交通大学经济管理学院会计学教授、博士生导师、第7届中国会计学会理事、中国注册会计师非执业会员。2009年7月起任北京交通大学教授、博士... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/21.jpg" width="120" alt="专家"/>
            <h4>池国华：管理学博士后</h4>
            <p>管理学博士，厦门大学会计学博士后。曾任东北财经大学会计学院财务管理系副主任，现任中国内部控制研究中心副主任，同时兼任财政部企业内部控制标准委员会咨询... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/22.jpg" width="120" alt="专家"/>
            <h4>高金平：著名税务培训专家</h4>
            <p>著名税务培训专家,国家税务总局扬州税务学院教授, 兼任上海交通大学海外教育学院税务研究所所长、国际税收联合会中国研究员。主讲课程：税收政策与实务、资... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
        </div>
        <!--item over--> 
        <!--item-->
        <div class="item">
          <div class="zjs"><img src="img/23.jpg" width="120" alt="专家"/>
            <h4>郭伟：著名税务风险管理专家</h4>
            <p>著名税务风险管理专家,第三届中国注册税务师协会常务理事，参与中国注册税务师行业“十一五”规划、税务顾问、税务筹划等业务准则的起草，拥有广泛而良好的人脉... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/24.jpg" width="120" alt="专家"/>
            <h4>黄德汉：著名实战派纳税筹划专家</h4>
            <p>我国著名实战派纳税筹划专家，高级会计师、注册税务师,广东省外商投资企业协会与珠海外商投资企业协会特聘主讲专家。从事税务稽查工作十几年，在实际工作中总... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/25.jpg" width="120" alt="专家"/>
            <h4>贾康：著名财经专家</h4>
            <p>著名财经专家，现任财政部财政科学研究所所长、研究员、博士研究生导师，中国财政学会副会长兼秘书长，财政部高级技术职务评审委员会副主任，中国国债协会常... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
        </div>
        <!--item over--> 
        <!--item-->
        <div class="item">
          <div class="zjs"><img src="img/26.jpg" width="120" alt="专家"/>
            <h4>李成诚：清华大学客座教授</h4>
            <p>清华大学客座教授，担任联想集团有限公司财务总监，在联想（包括现在的联想控股、联想集团、神州数码）任职16年，是一位资深的财务经理人，被熟悉他的企业高管... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/27.jpg" width="120" alt="专家"/>
            <h4>刘恒：中央财经大学财政与公共管理学院副院长</h4>
            <p>中央财经大学财政与公共管理学院副院长、教授。负责或参与的重大课题、项目、论著包括：《纳税检查》、《中国税制》、《税收理论与实务》、《财政学》、《政券... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/28.jpg" width="120" alt="专家"/>
            <h4>刘佐：中国税务报社总编辑</h4>
            <p>现任中国税务报社总编辑，历任国家税务总局办公厅副主任、国家税务总局税收科学研究所所长、研究员。曾参与许多税收法规和其他重要税收文件、涉税文件（文... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
        </div>
        <!--item over--> 
        <!--item-->
        <div class="item">
          <div class="zjs"><img src="img/29.jpg" width="120" alt="专家"/>
            <h4>汤云为：安永会计师事务所合伙人</h4>
            <p>现任安永会计师事务所合伙人；上海财经大学兼职博士生导师；中国审计准则咨询专家、上海证券交易所上市公司专家委员会会员。曾任上海财经大学教授、校长，中国... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/30.jpg" width="120" alt="专家"/>
            <h4>温兆文：著名国际财务管理专家</h4>
            <p>著名国际财务管理专家。中国企业财务管理实战派“头牌讲师”，曾担任摩托罗拉（中国）公司、多米诺（中国）有限公司、罗士顿普瑞纳（中国）公司等多家国外著名... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/31.jpg" width="120" alt="专家"/>
            <h4>吴春明：著名企业财务管理专家</h4>
            <p>著名企业财务管理专家。拥有15年以上的财务管理经验，曾在瑞典SKF集团的在华公司任财务总监，世界500强企业美国霍尼韦尔公司任工业自控系统事业部大中国区财... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
        </div>
        <!--item over--> 
        <!--item-->
        <div class="item">
          <div class="zjs"><img src="img/32.jpg" width="120" alt="专家"/>
            <h4>肖宏伟：中国注册税务师</h4>
            <p>中国注册税务师、在职税务稽查资深官员、国家税务总局所得税专家库成员、国际税收研究会理事，税务干部业务培训兼职教师、税务会计师考试委员会专家组成员... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
          <div class="zjs"><img src="img/33.jpg" width="120" alt="专家"/>
            <h4>朱青：中国国际税收研究会常务理事</h4>
            <p>中国国际税收研究会常务理事、中国税务学会理事、中国社会保险学会理事。已在《税务研究》、《中国税务》、《涉外税务》、《财贸经济》、《财政研究》等核心... <a  class="fr"  href="zjtd.php">&gt;&gt;&gt;详细</a></p>
          </div>
        </div>
      </div>
    </div>
    <!--item over--> 
    <!-- 专家团队结束 --> 
  </div>
  <div class="clearfix"></div>
  <div id="friendLk">
    <h2>友情链接</h2>
    <a href="http://www.mof.gov.cn" target="new">中华人民共和国财政部</a> <a href="http://www.chinatax.gov.cn" target="new">国家税务总局</a> <a href="http://www.cettic.gov.cn" target="new"> 中国就业培训指导中心</a> <a href="http://www.chinaccma.org" target="new">注册管理会计师</a> <a href="http://www.cacfo.com" target="new">中国会计师协会</a> <a href="http://www.cec-ceda.org.cn" target="new">中国企业家协会</a><br />
 <a href="http://www.chinactac.org" target="new">税务会计师协会</a> <a href="http://www.cnccia.org" target="new">注册内部审计师</a></div>
</div>
<div id="online_qq_layer">
	<div id="online_qq_tab">
		<a id="floatShow" style="display:block;" href="javascript:void(0);">收缩</a> 
		<a id="floatHide" style="display:none;" href="javascript:void(0);">展开</a>
	</div>
	<div id="onlineService">
		<div class="onlineMenu">
			<h3 class="tQQ">QQ在线客服</h3>
			<ul>
				<li class="tli zixun">在线咨询</li>
				<li><a target=blank href=tencent://message/?uin=409109603&Site=工具啦&Menu=yes><img border="0" SRC=http://wpa.qq.com/pa?p=1:409109603:1 alt="点击这里给我发消息"></a></li>
				<li><a href="tencent://message/?uin=409109603&Site=ucs.ifalone.me&Menu=yes"><img src="img/pa.gif" width="74" height="22" alt="客服001" /></a></li>
				<li class="tli fufei">会员咨询</li>
				<li class="last"><a href="tencent://message/?uin=409109603&Site=ucs.ifalone.me&Menu=yes"><img src="img/pa.gif" width="74" height="22" alt="客服001" /></a></li>
			</ul>
		</div>
		<div class="onlineMenu">
			<h3 class="tele">QQ在线客服</h3>
			<ul>
				<li class="tli phone">400-657-6750</li>
			</ul>
		</div>
		<div class="btmbg"></div>
	</div>
</div>

<script>
$(document).ready(function(e) {
	
	
    $('#mCarousel').carousel({
		interval: 5000
	});
	$('#zjCarousel').carousel({
		interval: 9000	
	});
	

	
	$("#floatShow").mouseover(function(){
	
		$("#onlineService").animate({width:"show", opacity:"show"}, "fast" ,function(){
			$("#onlineService").show();
		});
		
		$("#floatShow").attr("style","display:none");
		$("#floatHide").attr("style","display:block");
		
		return false;
	});
	
	$("#onlineService").mouseleave(function(){
	
		$("#onlineService").animate({width:"hide", opacity:"hide"}, "fast" ,function(){
			$("#onlineService").hide();
		});
		
		$("#floatShow").attr("style","display:block");
		$("#floatHide").attr("style","display:none");
		
		return false;
	});
});
</script>
<?php require_once ('footer.php'); ?>
