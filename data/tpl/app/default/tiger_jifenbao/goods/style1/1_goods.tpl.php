<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('header', TEMPLATE_INCLUDEPATH)) : (include template('header', TEMPLATE_INCLUDEPATH));?>
<link type="text/css" rel="stylesheet" href="../addons/tiger_jifenbao/css/style1.css?v=203" />
<script type="text/javascript" src="../addons/tiger_jifenbao/js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../addons/tiger_jifenbao/css/ui.css?v20151117">
    <link rel="stylesheet" type="text/css" href="../addons/tiger_jifenbao/css/style.css?v20151117">
<title>奖品列表</title>
<style>
  .fansname {
    font-size:20px;
    margin:5px 0px 8px 0px;
  }

  .img-rounded img{ border-radius:50%} 
</style>
<?php  if($cfg['head']==1) { ?>
<?php  if($poster['mbstyle']=='style2') { ?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('style2/css', TEMPLATE_INCLUDEPATH)) : (include template('style2/css', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('style2/head', TEMPLATE_INCLUDEPATH)) : (include template('style2/head', TEMPLATE_INCLUDEPATH));?>
<?php  } ?>
<?php  if($poster['mbstyle']=='style1') { ?>
<link rel="stylesheet" type="text/css" href="<?php  echo $_W['siteroot'];?>addons/tiger_jifenbao/css/ui.css?v20151117">
<link rel="stylesheet" type="text/css" href="<?php  echo $_W['siteroot'];?>addons/tiger_jifenbao/css/style.css?v20151117">
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('style1/head', TEMPLATE_INCLUDEPATH)) : (include template('style1/head', TEMPLATE_INCLUDEPATH));?>
<?php  } ?>
<?php  } ?>
<section class="stay">
        <section class="order_content">
            <section class="order_item">
		<aside>我的积分：<?php  echo number_format($credit)?> </aside>
					<?php  if($my_goods_list) { ?>
					<section class="button">
					<a href="<?php  echo $this->createMobileUrl('request')?>">查看已兑换奖品</a>
					</section>
					<?php  } ?>
			</section>
        </section>
		
        <?php  if(!empty($this->module['config']['description'])) { ?>
        <section class="stay_content">
        <section class="stay_box" style="padding:auto;margin:auto;padding-top:7px">
        <center>
          <?php  echo htmlspecialchars_decode($this->module['config']['description'])?>
        </center>
        </section>
        </section>
        <?php  } ?>
		
       <?php  if(count($goods_list)<=0 ) { ?>
        <section class="stay_content">
        <section class="stay_box">
       您来迟了，奖品已兑换一空。
        </section>
        </section>
        <?php  } ?>

    	<!--content-->
        <section class="stay_content">
			<?php  if(is_array($goods_list)) { foreach($goods_list as $item) { ?>
        	<!--box-->
            <section class="stay_box">
			<aside class="stay_title"><?php  echo $item['title'];?></aside>
                <article class="stay_main">
                <p class="stay_banner">
                <img src="<?php echo (strpos($item['logo'], 'http://') === FALSE) ? $_W['attachurl'].$item['logo'] : $item['logo']?>" /></p>
			        <!--item-->
                    <section class="stay_item">
                        <section class="stay_item_l fl">
                            <section class="stay_lump">
                                <span class="stay_lump_l">剩余数量：</span>
                                <p class="stay_lump_r"><span> <?php  echo $item['amount'];?>份</span></p>
                            </section>
                        </section>
                        <section class="stay_item_r fl">
                            <section class="stay_lump">
                                <span class="stay_lump_l">价值：</span>
                                <p class="stay_lump_r"><span><?php  echo $item['price'];?>元</span></p>
                            </section>
                        </section>
                        <section class="stay_item_r fl">
                            <section class="stay_lump">
                                <span class="stay_lump_l">消耗积分：</span>
                                <p class="stay_lump_r"><span><?php  echo $item['cost'];?>分</span></p>
                            </section>
                        </section>
                    </section>
		    <section class="stay_item">		   
                        <section class="fl">
                            <section class="stay_lump">
                                <span class="stay_lump_l">截止日期：</span>
                                <p class="stay_lump_r"><span><?php  echo date('Y-m-d H:i:s',$item['endtime'])?></span></p>
                            </section>
                        </section>
 		    </section>
                    <!--item end-->
                    <!--item-->
                    <section class="stay_content">
                      <?php  echo htmlspecialchars_decode($item['content'])?>
                    </section>
                    <!--item end-->
			
					<!--btn-->
					<section class="button">
					<?php  if($fans['credit1'] < $item['cost'] ) { ?>
                     <a class="gray" style="background:#cccccc">积分不足</a>
                    <?php  } else if($item['starttime'] > time()) { ?>
                    <a class="gray" style="background:#cccccc"><?php  echo date('Y-m-d H:i:s',$item['starttime'])?>开始</a> 
					<?php  } else if($item['amount'] <= 0 ) { ?>
          <a class="gray" href="#" onclick="alert('您来迟了，已经兑换一空')">兑换(当前剩余数量：<?php  echo $item['amount'];?> 份)</a>
					<?php  } else { ?>
          <a href="<?php  echo $this->createMobileUrl('fillinfo', array('goods_id' => $item['goods_id'],'memberid'=>$member['id']))?>">兑换(消耗余额积分<?php  echo $item['cost'];?>分)</a>
					<?php  } ?>
					</section>
                    <!--btn end-->
                </article>
            </section>
            <!--box end-->
			<?php  } } ?>
        </section>
        <!--content end-->
    </section>
<div style="width:100%; line-height:30px; text-align:center;font-size:12px;">技术支持：<?php  if($cfg['copyright']<>'') { ?><?php  echo $cfg['copyright'];?> <?php  } else { ?><?php  echo $_W['account']['name'];?><?php  } ?></div>
