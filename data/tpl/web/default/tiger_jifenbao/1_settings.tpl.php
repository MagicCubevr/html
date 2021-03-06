<?php defined('IN_IA') or exit('Access Denied');?>﻿<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<form action="" method="post" class="form-horizontal form" id="setting-form">
    <input type="hidden" name="id" value="<?php  echo $set['id'];?>">
		<div class="panel panel-default">
			<div class="panel-heading">参数设置</div>
			<div class="panel-body">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active" ><a href="#tab_basic">提现设置</a></li>
					<li><a href="#tab_share">积分商城设置</a></li>
					<li><a href="#tab_param">地区设置</a></li>
					<li><a href="#tab_param1">关注提醒设置</a></li>
                    <li><a href="#tab_param2">兑吧设置</a></li>
                    <li><a href="#tab_param3">海报生成限制</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane  active" id="tab_basic">
                        <!--提现设置-->
                        <div class="panel-body">
                          <!--div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信支付证书</label>
                                <div class="col-sm-9 col-xs-12">
                                    <div class="col-md-2" style="padding:5px;"><span class="label <?php  if($settings['nbfwxpaypath'] == "") { ?>label-default<?php  } else { ?>label-info<?php  } ?>"> <?php  if($settings['nbfwxpaypath'] == "") { ?>未上传<?php  } else { ?>已上传<?php  } ?></span><br/></div>
                                    <input type="file" class="custom-file-input" name="nbfwpaycert">
                                    <div class="help-block">请上传您的微信支付证书，文件格式应为<code>zip</code><br>内部文件应包含apiclient_cert.pem，apiclient_key.pem，rootca.pem，apiclient_cert.p12等几个文件</div>
                                </div>
                          </div-->
                          <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">提现类型</label>
                                    <div class="col-xs-12 col-sm-9">
                                       <label class="checkbox-inline">
                                          <input type="radio" name="txtype"  value="0" <?php  if($settings['txtype'] == 0) { ?>checked<?php  } ?>> 红包提现
                                       </label>
                                       <label class="checkbox-inline">
                                          <input type="radio" name="txtype"  value="1" <?php  if($settings['txtype'] == 1) { ?>checked<?php  } ?>> 企业零钱支付
                                       </label>
                                        <span class="help-block" style="color:#ff0000"></span>
                                    </div>
                           </div>

                           <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">余额提现是否开启</label>
                                    <div class="col-xs-12 col-sm-9">
                                       <label class="checkbox-inline">
                                          <input type="radio" name="txon"  value="0" <?php  if($settings['txon'] == 0) { ?>checked<?php  } ?>> 否
                                       </label>
                                       <label class="checkbox-inline">
                                          <input type="radio" name="txon"  value="1" <?php  if($settings['txon'] == 1) { ?>checked<?php  } ?>> 是
                                       </label>
                                        <span class="help-block" style="color:#ff0000">如果没有用到余额，建议关闭</span>
                                    </div>
                           </div>


                          <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否借权</label>
                                        <div class="col-xs-12 col-sm-9">
                                           <label class="checkbox-inline">
                                              <input type="radio" name="jiequan" id="optionsRadios4" value="0" <?php  if($settings['jiequan'] == 0) { ?>checked<?php  } ?>> 关闭
                                           </label>
                                           <label class="checkbox-inline">
                                              <input type="radio" name="jiequan" id="optionsRadios4" value="1" <?php  if($settings['jiequan'] == 1) { ?>checked<?php  } ?>> 开启
                                           </label>
                                            <span class="help-block" style="color:#ff0000">如果要使用兑换红包必须开启</span>
                                        </div>
                           </div>

                           

                          <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">AppID(应用ID)</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input type="text" name="appid" value="<?php  echo $settings['appid'];?>" class="form-control" placeholder="微信公众平台APPID" >
                                            <span class="help-block">微信公众平台APPID</span>
                                        </div>
                           </div>
                           <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">AppSecret(应用密钥)</label>
                                <div class="col-sm-9 col-xs-12">
                                    <input type="text" value="<?php  echo $settings['secret'];?>" class="form-control" name="secret">
                                     <div class="help-block">认证服务号secret</div>
                                </div>
                            </div>

                          <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">MCHID(商户号)</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input type="text" name="mchid" value="<?php  echo $settings['mchid'];?>" class="form-control" placeholder="微信支付商户号(MchId)" >
                                            <span class="help-block">输入微信MCHID参数</span>
                                        </div>
                           </div>

                           <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">PARTNERKEY</label>
                                        <div class="col-xs-12 col-sm-9">
                                            <input type="text" name="apikey" value="<?php  echo $settings['apikey'];?>" class="form-control" placeholder="商户支付密钥(API密钥)" >
                                            <span class="help-block">商户支付密钥(API密钥)</span>
                                        </div>
                           </div>
                           <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">商户支付证书</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea class="form-control" name="cert" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_cert.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付证书私钥</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea class="form-control" name="key" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_key.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付根证书</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea class="form-control" name="ca" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
                                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>rootca.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
                                    </div>
                                </div>


                               <div class="form-group">
                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">client_ip</label>
                                            <div class="col-xs-12 col-sm-9">
                                                <input type="text" name="client_ip" value="<?php  echo $settings['client_ip'];?>" class="form-control" placeholder="服务器IP" >
                                                <span class="help-block">发放红包接口需要服务器IP. 程序将自动获取你的服务器IP, 如果获取失败, 请手动指定，这里填写你的服务器IP：<?php  echo $_SERVER["SERVER_ADDR"]?></span>
                                            </div>
                               </div>   
                       </div>
                       
                        <!---->
                        <!---->
                        <div class="panel panel-default">
   <div class="panel-heading">
      <h3 class="panel-title">
         余额提现设置
      </h3>
   </div>
   <div class="panel-body">
       <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">最少几元起提现</label>
            <div class="col-sm-9 col-xs-12">
                    <input min="0" type="text" class="form-control" placeholder="例如：2" name="tx_num" value="<?php  echo $settings['tx_num'];?>">
                    <div class="help-block">最少几元起提现</div>
            </div>
        </div>
       <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">一天最多提现次数</label>
            <div class="col-sm-9 col-xs-12">
                    <input min="0" type="text" class="form-control" placeholder="例如：2" name="day_num" value="<?php  echo $settings['day_num'];?>">
                    <div class="help-block">1天内最多提现几次（从0点开始计算）</div>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">一人提现总额</label>
            <div class="col-sm-9 col-xs-12">
                    <input min="0" type="text" class="form-control" placeholder="例如:320" name="rmb_num" value="<?php  echo $settings['rmb_num'];?>">
                    <div class="help-block">一个粉丝最多提现总额</div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-2 control-label">提现规则(内容介绍)</label>
            <div class="col-sm-9 col-xs-12">
                    <textarea style="height:150px;" name="txinfo" class="form-control" cols="60"><?php  echo $settings['txinfo'];?></textarea>
                    <div class="help-block"><code>&lt;br&gt;</code>为换行，这里写规则，如，每个人一天可以提现几次等！</div>
            </div>
        </div>
   </div>
</div>
                        <!---->
					</div>

                    <div class="tab-pane" id="tab_share">
						<!--积分商城设置-->
                        
                               <div class="form-group">
                                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">积分不够跳转链接</label>
                                  <div class="col-xs-12 col-sm-9">
                                      <input type="text" name="szurl" value="<?php  echo $settings['szurl'];?>" class="form-control" placeholder="http://去  赚取更多积分" >
                                      <span class="help-block">积分商城如果粉丝积分不够，提示，去赚取更多积分，连接内容可以写怎么赚取积分的方法</span>
                                  </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">积分商城整体颜色</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <?php  echo tpl_form_field_color('szcolor',$settings['szcolor'])?>
                                            <span class="help-block">主要是按钮和文字的颜色</span>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">积分商城是否开启head</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="radio-inline"><input type="radio" name="head" value="1" 
                                         <?php  if($settings['head']==1) { ?> checked="checked" <?php  } ?>>是</label>
                                        <label class="radio-inline"><input type="radio" name="head" value="0"
                                         <?php  if(empty($settings['head'])) { ?> checked="checked" <?php  } ?>>否</label>
                                          <span class="help-block">开启后就会有排行榜一样的头部</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">积分商城模版</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="radio-inline"><input type="radio" name="style" value="style1" 
                                         <?php  if($settings['style']=='style1') { ?> checked="checked" <?php  } ?>>模版1(大图经典版)</label>
                                        <label class="radio-inline"><input type="radio" name="style" value="style2"
                                         <?php  if($settings['style']=='style2') { ?> checked="checked" <?php  } ?>>模版2(小图)</label>
                                          <span class="help-block"></span>
                                    </div>
                                </div>
                                <input type="hidden" name='paihang' value='0'><!--排行榜选择-->
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">类型自定义</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input type="text" name="hztype" value="<?php  echo $settings['hztype'];?>" class="form-control" placeholder="如：积分" >
                                        <span class="help-block">如：积分、欢乐豆</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">版权设置</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <input type="text" name="copyright" value="<?php  echo $settings['copyright'];?>" class="form-control" placeholder="不设置默认公众号名称" >
                                        <span class="help-block">不设置默认公众号名称</span>
                                    </div>
                                </div> 
                        <!---->
					</div>

                    <div class="tab-pane" id="tab_param">
						<!--地区设置-->
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              地区限制
                           </div>
                           <div class="panel-body">
                              <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">地区定位类型</label>
                                    <div class="col-xs-12 col-sm-9">
                                        <label class="radio-inline"><input type="radio" name="locationtype" value="3" 
                                         <?php  if($settings['locationtype']==3) { ?> checked="checked" <?php  } ?>>不限制</label>
                                        <label class="radio-inline"><input type="radio" name="locationtype" value="0"
                                         <?php  if(empty($settings['locationtype'])) { ?> checked="checked" <?php  } ?>>ip定位</label>
                                        <label class="radio-inline"><input type="radio" name="locationtype" value="1" 
                                         <?php  if($settings['locationtype']==1) { ?> checked="checked" <?php  } ?>>gps定位</label>
                                         <label class="radio-inline"><input type="radio" name="locationtype" value="2" 
                                         <?php  if($settings['locationtype']==2) { ?> checked="checked" <?php  } ?>>两者同时定位(两个获取到的地址一样能才参加)</label>
                                        
                                          <span class="help-block">在非wifi网络下，利用ip地址定位地区的话，不准确。利用gps定位更准确，不过页面会弹出获取用户地理信息的提示</span>
                                    </div>
                                </div>
                              <div class="form-group">
                                <label class="col-xs-12 col-sm-3 col-md-2 control-label">地区限制</label>
                                <div class="col-xs-12 col-sm-9">
                                    <input type="text" name="city" value="<?php  echo $settings['city'];?>" class="form-control" placeholder="杭州市,北京市" >
                                    <span class="help-block">输入杭州市就杭州地区的能参加,多地区请用 , 逗号隔开</span>
                                </div>
                             </div>
                           </div>
                        </div>
                        
                        <!---->
					</div>

                    <div class="tab-pane" id="tab_param1">
						<!--关注提醒设置-->
                        <div class="panel panel-default">
                           <div class="panel-heading">
                              关注提醒设置
                           </div>
                           <div class="panel-body">
                              <div class="form-group">
                                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">自定义粉丝基数</label>
                                            <div class="col-sm-9 col-xs-12">
                                                    <input min="0" type="number" class="form-control" placeholder="" name="tiger_jifenbao_fansnum" value="<?php  echo $settings['tiger_jifenbao_fansnum'];?>">
                                                    <div class="help-block">自定义粉丝基数+现有的微信粉丝数量的总和</div>
                                            </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">关注提示信息</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea style="height:150px;" name="tiger_jifenbao_usr" class="form-control" cols="60"><?php  echo $settings['tiger_jifenbao_usr'];?></textarea>
                                        <input type="text" name="reply" id="reply">
                                        <a href="javascript:" id="emotion">QQ表情</a>
                                        <div class="help-block" style="line-height:30px;">
                                        <b>参数设置：</b>
                                        <br>认证订阅号设置：#领取积分#
                                        <br>链接设置例如:<code>&lt;a href=\"#领取积分#\"&gt;点我领取积分&lt;/a&gt;</code>
                                        <br>粉丝昵称：#昵称#
                                        <br>粉丝姓别：#性别#
                                        <br>粉丝积分：#积分#
                                        <br>粉丝余额：#余额#
                                        <br>公众号名称：#公众号名称#
                                        <br>虚拟总粉丝：#假粉丝数# (粉丝基数+微信系统里面的粉丝总数)
                                        <br>国家：#国家#
                                        <br>省份：#省#
                                        <br>市/县：#市#
                                        <br>链接:<code>&lt;a href=\"http://www.baidu.com\"&gt;点击进入&lt;/a&gt;</code></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">例如：</label>
                                    <div class="col-sm-9 col-xs-12">
                                        <textarea style="height:150px;" class="form-control" cols="60">#昵称#你好
                        你是#国家#-#省#-#市#的粉丝
                        你是第#假粉丝数#位关注者
                        感谢关注#公众号名称#！
                        <a href="http://www.baidu.com">免费兑换礼品</a></textarea>
                        <div class="help-block">表情获取地址：http://bj.96weixin.com/emoji/</div>
                                    </div>
                              </div>
                           </div>
                        </div>

                        <div class="panel panel-default setting">
                            <div class="panel-heading">关注提醒（图文）</div>
                            <div class="panel-body">
                                    
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">标题</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="gztitle" value="<?php  echo $settings['gztitle'];?>">
                                        </div>
                                    </div>	
                                     <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">图片</label>
                                        <div class="col-sm-9">
                                            <?php  echo tpl_form_field_image('gzpicurl',$settings['gzpicurl'])?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">概述</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="gzdescription" value="<?php  echo $settings['gzdescription'];?>">
                                        </div>
                                    </div>	
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">链接</label>
                                        <div class="col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="gzurl" value="<?php  echo $settings['gzurl'];?>">
                                            <span class="help-block">认证订阅号链接设置：#领取积分# </span>
                                        </div>
                                    </div>	
                                    
                             </div>
                             </div>



                       
                        <!---->
					</div>
                    <!--兑吧开始-->
                    <div class="tab-pane" id="tab_param2">
                       <div class="form-group">
                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">AppKey：</label>
                            <div class="col-sm-9 col-xs-12">
                                    <input min="0" type="text" class="form-control" placeholder="" name="AppKey" value="<?php  echo $settings['AppKey'];?>">
                                    <div class="help-block">注册兑吧：http://www.duiba.com.cn/  登录-->添加应用->添加好后进入应用->基本配置->应用信息获取</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">appSecret：</label>
                            <div class="col-sm-9 col-xs-12">
                                    <input min="0" type="text" class="form-control" placeholder="" name="appSecret" value="<?php  echo $settings['appSecret'];?>">
                                    <div class="help-block">仔细填写，不要有空格</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">接口配置：</label>
                            <div class="col-sm-9 col-xs-12" style="line-height:30px;">
                                  积分消费：<code><?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('duibaxf'))?></code><br>
                                  结果通知：<code><?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('duibatz'))?></code><br>
                                  直达页面接口：<code><?php  echo $_W['siteroot'].str_replace('./','app/',$this->createMobileurl('duibagoods'))?></code><br>
                            </div>
                        </div>
                     
                    </div>
                    <!---->
                    <!--兑吧开始-->
                    <div class="tab-pane" id="tab_param3">
                       <div class="form-group">
                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">生成海报限制时间：</label>
                            <div class="col-sm-9 col-xs-12">
                                    <input min="0" type="text" class="form-control" placeholder="60" name="hbsctime" value="<?php  echo $settings['hbsctime'];?>">
                                    <div class="help-block">几分钟生成1次海报，比如:1分钟只有生成1次海报，就填 60 ，秒为单位</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-xs-12 col-sm-3 col-md-2 control-label">不能生成海报提示：</label>
                            <div class="col-sm-9 col-xs-12">
                                    <input min="0" type="text" class="form-control" placeholder="" name="hbcsmsg" value="<?php  echo $settings['hbcsmsg'];?>">
                                    <div class="help-block">如：尊敬的粉丝：\n1分钟之内只能生成1次海报\n请稍后在试，感谢您的参与！</div>
                            </div>
                        </div>
                    </div>
                    <!---->

				</div>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</form>
</div>
<script>
require(['jquery', 'util'], function($, u){
	$(function(){
		u.editor($('.richtext')[0]);
	});
});
$(function () {
		window.optionchanged = false;
		$('#myTab a').click(function (e) {
			e.preventDefault();//阻止a链接的跳转行为
			$(this).tab('show');//显示当前选中的链接及关联的content
		})
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>