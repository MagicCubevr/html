<?php defined('IN_IA') or exit('Access Denied');?><div class="block">
                <div class="name-card name-card-directseller clearfix" style="padding: 10px; text-align: center">
                    <a class="thumb">
                        <img id="Image1" src="<?php  echo preg_replace('/\/0$/', '/96', stripslashes($fans['avatar']));?>" style="border-width:0px;"></a>
                    <div class="detail">
                        <p class="font-size-18 c-black">
                            <span id="lbName"><?php  echo $fans['nickname'];?></span></p>
                        <p class="font-size-12 c-gray-dark">
                            <span id="lbNo">关注时间：<?php  if($fans['follow']) { ?><?php  echo date('Y-m-d H:i:s',$fans['followtime'])?><?php  } else { ?>未关注<?php  } ?></span></p>
                    </div>
                </div>
            </div>
            <div class="block" style="background:<?php  if($poster['mbcolor']) { ?><?php  echo $poster['mbcolor'];?><?php  } else { ?>#FF6600<?php  } ?>;">
                <div class="clearfix binary-box binary-box-count" style="padding-top: 15px; padding-bottom: 5px">
                    <div>
                        <a href="<?php  echo $this->createMobileUrl('records',array('pid'=>$pid));?>" id="A1">
                            <p class="font-size-16 c-white">
                                <span id="lbjf"><?php  echo number_format($credit)?></span></p>
                            <p class="font-size-16 c-white">
                                我的<span id="lbrmb"><?php  if($cfg['hztype']<>'') { ?><?php  echo $cfg['hztype'];?><?php  } else { ?>积分<?php  } ?></span></p>
                        </a>
                    </div>
                    <div>
                        <a href="<?php  echo $this->createMobileUrl('mfan1',array('pid'=>$pid,'uid'=>$fans['uid']));?>" id="A2">
                            <p class="font-size-16 c-white">
                                <span id="lbTeam"><?php  echo $sumcount;?></span></p>
                            <p class="font-size-16 c-white">
                                我的团队</p>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="clearfix binary-box binary-box-count" style="padding-top: 5px; padding-bottom: 15px">
                    <div>
                    <?php  if($cfg['AppKey']<>'') { ?>
                        <a href="<?php  echo $this->createMobileUrl('duibagoods');?>" id="A3">
                    <?php  } else { ?>
                        <a href="<?php  echo $this->createMobileUrl('Goods',array('pid'=>$pid));?>" id="A3"> 
                    <?php  } ?>

                            <p class="font-size-16 c-white">
                                兑换中心</p>
                        </a>
                    </div>
                    <div>
                        <a href="<?php  echo $this->createMobileUrl('ranking',array('pid'=>$pid));?>" id="A4">
                            <p class="font-size-16 c-white">
                                <span id="lbSort"><?php  if($cfg['paihang']==0) { ?><?php  if($cfg['hztype']<>'') { ?><?php  echo $cfg['hztype'];?><?php  } else { ?>积分<?php  } ?><?php  } else { ?>兑换<?php  } ?></span>排行</p>
                        </a>
                    </div>
                </div>
            </div>