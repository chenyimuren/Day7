<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx4bc51c2f896f65eb", "0430130fab18ed36fe46f5dbf9688292");
<!--$signPackage = $jssdk-?>>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
  <title></title>
  <link rel="stylesheet" href="css/weui.css" />
  <link rel="stylesheet" href="css/weui.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/iconfont.css" />
	<link rel="stylesheet" href="css/swiper.min.css" />
  
  <style type="text/css">
  	
  		body{
  			
  			 padding: 20px 20px;
  			 background-color: #EEF1F6;
  			
  		}
  		
  		body button{
  			margin-bottom: 20px;
  		}
  	
  	.weui-cell__ft{
  		/*border: 1px solid #F1F1F1 ;*/
  	}
  	
  	.weui-textarea{
				text-align: left;
				margin-top: 20px;
		}	
		#startRecord{
				margin-top: 20px;
				border-radius: 30px;
				/*width: 250px;*/
  		background-color: #F7FBFF;
  		color: #4BA0F7;
  		border: 1px solid #FFFF;
				
				
		}
  	
  	.content{
  		
  		background-color: white;
  	}
  	
  	#submit{
  		position: fixed;
  		bottom: 0px;
  		background-color: blue;
  	}
  	#uploadImage{
  		background-color: #F7FBFF;
  		color: #E7E7E7;
  		width: 100px;
  		height:100px;
  	}
  	
  </style>
</head>
<body>
	 <div class="weui-cells">
			<a class="weui-cell weui-cell_access" href="javascript:;">
				<div class="weui-cell__bd">
					<p>接收人</p>
				</div>
				<div class="weui-cell__ft">初三数学集体冲刺五班6名学生</div>
			</a>
		</div>

		<div class="weui-cells">
			<div class="weui-cell">
				<div class="weui-cell__bd">
					<p>标题</p>
				</div>
				<div class="weui-cell__ft">5.9日随堂测试</div>
			</div>
		</div>
		
		
	<div class="content">
			
		
		<textarea class="weui-textarea" placeholder="" rows="4" id="ldest" name="ldest"  maxlength="100" style="border: 1px solid #F1F1F1; text-align: left;">  请同学完成以下试卷，并与明天上午上课前提交老师。
		</textarea>
<div class="weui-textarea-counter"><span id="cnt">0</span>/100</div>
	 
	 
	  
	   
	   <button id="startRecord" class="weui-btn weui-btn_primary">点击录制语音</button>
	   
	   <button id="uploadImage" class="weui-btn weui-btn_primary">添加图片</button>
	   

	   
  </div>
  
	   <button id="submit" class="weui-btn weui-btn_primary">点击提交</button>
  	
</body>
<script type="text/javascript" src="js/weui.min.js"></script>
<script src="https://res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script>
  /*
   * 注意：
   * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
   * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
   * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
   *
   * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
   * 邮箱地址：weixin-open@qq.com
   * 邮件主题：【微信JS-SDK反馈】具体问题
   * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
   */
  
  var localId = null;
  var serverId = null;
  
  
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: ["startRecord","updateAppMessageShareData","updateTimelineShareData","uploadImage"]
  });

  
  
  wx.error(function(res){
    console.log(res)
	});
	

		
		document.querySelector("#uploadImage").onclick = function(){
				wx.uploadImage({
						localId: localId, // 需要上传的图片的本地ID，由chooseImage接口获得
						isShowProgressTips: 1, // 默认为1，显示进度提示
						success: function (res) {
								serverId = res.serverId; // 返回图片的服务器端ID
						}
				});
		}
		
		
		
		document.querySelector("#startRecord").onclick = function(){
			wx.startRecord();
		}
		
		document.querySelector("#submit").onclick = function(){
			
		}
		
	
</script>
</html>
