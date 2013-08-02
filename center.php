<?php require_once ('header.php'); ?>
<div class="container listPage"> 
  <!--新闻内容-->
  <div class="article "> 
    <!-- 文章标题 -->
    <h2 class="article_title">会员中心</h2>
    <div class="article_info"> </div>
    <div class="tabbable">
      <ul class="nav clearfix">
        <li class="titles tabTitles active"><a href="#tab1" data-toggle="tab">课件下载</a></li>
        <li class="titles tabTitles"><a href="#tab2" data-toggle="tab">文档下载</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <?php for ($i=0; $i<=6; $i++) {?>
          <div class="list-item">
            <h3><a href="show.php">企业课件课件课件<?php echo $i?></a></h3>
            <div class="list-info">发布时间：2012-11-07 08:01 | 发布者：优税网 | 格式:doc 点击：17</div>
          </div>
          <?php } ?>
          </ul>
        </div>
        <div class="tab-pane" id="tab2">
          <?php for ($i=0; $i<=8; $i++) {?>
          <div class="list-item">
            <h3><a href="show.php">企业内部文档<?php echo $i?></a></h3>
            <div class="list-info">发布时间：2012-11-07 08:01 | 发布者：优税网 | 格式:doc 点击：17</div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!--新闻内容结束-->
</div>
<?php require_once ('footer.php'); ?>
