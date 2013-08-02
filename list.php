<?php require_once ('header.php'); ?>
<div class="container listPage"> 
<h2 class="article_title">
<?php
$class = $_GET['class'];
switch ($class)
{
case "pxkc":
  echo "培训课程";
  break;
case "swkc":
  echo "商务考察";
  break;
case "nxzx":
  echo "内训咨询";
  break;
default:
  echo "新闻中心";
}
?>
</h2>
<div class="article_info">
    </div>
  <!--列表内容-->
  <?php for ($i=0; $i<=4; $i++) {?>
  <div class="list-item">
    <h3><a href="show.php">企业内部控制、风险管理与内部审计<?php echo $i?></a></h3>
    <div class="list-info">发布时间：2012-11-07 08:01 发布者：优税网 来源:优税网 点击：17</div>
    <p> 2009年税收专项检查工作已全面启动，为了保证中央和地方合计22万亿投资，“严稽查”势在必行。大力实施科学化、精细化管理，实施经常性税收专项检查（税务稽查）是税务部门贯彻落实“严征管”要求的具体举措。目前各级各地税务机关已经开始部署、实施税务专项检查工作，目前不少企业由于种种原因，财务核算极...</p>
  </div>
  <?php } ?>
  <!--列表内容结束--> 
  <div class="pagination">
  <ul>
    <li><a href="#">Prev</a></li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</div>
</div>
<?php require_once ('footer.php'); ?>
