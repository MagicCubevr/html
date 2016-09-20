<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<meta charset="utf-8">
<meta name="keywords" content="VIP中心">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="cleartype" content="on">
<title>我的<?php  if($cfg['hztype']<>'') { ?><?php  echo $cfg['hztype'];?><?php  } else { ?>积分<?php  } ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template($mbstyle.'/css', TEMPLATE_INCLUDEPATH)) : (include template($mbstyle.'/css', TEMPLATE_INCLUDEPATH));?>
</head>
<body>


    <div class="container " style="min-height: 1px;">
        <div class="content">
           <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template($mbstyle.'/head', TEMPLATE_INCLUDEPATH)) : (include template($mbstyle.'/head', TEMPLATE_INCLUDEPATH));?>
            
            
            <div class="js-list-content content">
            <div class="js-list block-order-list block block-list" data-type="payment">
                <?php  if(is_array($records)) { foreach($records as $key => $r) { ?>
                        <a class="block-item block-item-small-padding" href="#">
                            <p class="title-line font-size-14 c-black">
                                <span id="rpBrand_ctl00_Label2"><?php  echo cutstr($r['remark'],10)?></span> 
                                <span id="rpBrand_ctl00_lbFee" class="pull-right c-red"><?php  echo number_format($r['num'])?></span>
                            </p>
                            <p class="font-size-12 c-gray-dark">
                                <span><?php  echo date('Y-m-d H:i',$r['createtime'])?>

                                </span>
                            </p>
                        </a>
                 <?php  } } ?>
            </div>
        </div>
            
                <br>
                <?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template($mbstyle.'/bottom', TEMPLATE_INCLUDEPATH)) : (include template($mbstyle.'/bottom', TEMPLATE_INCLUDEPATH));?>
                <br>
        </div>
    


</div>
</body>
</html>