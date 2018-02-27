<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:35:"./template/default/index_index.html";i:1512904216;s:36:"./template/default/index_header.html";i:1512901472;s:35:"./template/default/index_right.html";i:1512811512;s:35:"./template/default/index_music.html";i:1512824737;s:36:"./template/default/index_footer.html";i:1512901558;}*/ ?>
<!DOCTYPE html>
<html>
<head>  
<title><?php echo config('web.WEB_TIT'); ?></title>
<meta name="keywords" content="<?php echo config('web.WEB_KEY'); ?>">
<meta name="description" content="<?php echo config('web.WEB_DES'); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="__ADMIN__/layui/css/layui.css">
<link rel="stylesheet" href="__HOME__/css/style.css">
<script src="__ADMIN__/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="__ADMIN__/layui/layui.js" type="text/javascript"></script>
</head>
<body>
<div class="blog-header">
	<div class="container cl">
		<div class="blog-logo">
			<a href="__INDEX__"><img src="__HOME__/img/logo3.png" alt=""></a>
		</div>
		<label class="blog-nav-btn" for="nav-btn"></label>
		<ul class="blog-nav layui-nav" lay-filter="">
  			<li class="layui-nav-item">
  				<a href="#">博客首页</a>
  			</li>
  			<li class="layui-nav-item">
			    <a href="javascript:;">文章专栏</a>
			    <dl class="layui-nav-child">
				    <dd><a href="">前端</a></dd>
				    <dd><a href="">PHP</a></dd>
				    <dd><a href="">ThinkPHP</a></dd>
			    </dl>
			</li>
			<li class="layui-nav-item">
			    <a href="javascript:;">资源分享</a>
			    <dl class="layui-nav-child">
				    <dd><a href="">学习笔记</a></dd>
				    <dd><a href="">开源项目</a></dd>
				    <dd><a href="">ThinkPHP</a></dd>
			    </dl>
			</li>
  			<li class="layui-nav-item">
  				<a href="#">点点滴滴</a>
  			</li>
			<li class="layui-nav-item">
  				<a href="#">关于本站</a>
  			</li>
		</ul>

		<div class="blog-status blog-none-768 blog-none-1024">
			<a class="login" href="javascript:void(0)"><i class="iconfont">&#xe606;</i>立即登录</a>
		</div>
	</div>
</div>

<div class="blog-none-1200 blog-none-1920">
	<div class="PathInner" id="PathMenu">
		<div class="PathMain">
			<div onclick="PathRun();">
				<em>登录</em>
			</div>
		</div>
		<div class="PathItem">
			<a class="cola link login" href="javascript:void(0)">
				<i class="iconfont" style="font-size: 22px;"></i>
			</a>
		</div>
		<div class="PathItem"></div>
		<div class="PathItem"></div>
		<div class="PathItem"></div>
	</div>
</div>
<!-- <link rel="stylesheet" href="__HOME__/css/music.css"> -->
<link rel="stylesheet" href="__HOME__/css/index.css">
<link rel="stylesheet" href="__HOME__/css/right.css">
<div class="blog-wp cl">
	<div class="blog-ml-7">
		<div class="blog-con1">
			<!-- 轮播 -->
			<div class="blog-banner blog-none-768 cl">
				<div class="layui-carousel" id="banner">
					<div carousel-item>
						<div>
							<a target="_blank" href="#">
								<img src="__ROOT__/uploads/banner/banner1.png">
							</a>
						</div>
						<div>
							<a target="_blank" href="#">
								<img src="__ROOT__/uploads/banner/banner2.jpg">
							</a>
						</div>
						<div>
							<a target="_blank" href="#">
								<img src="__ROOT__/uploads/banner/banner3.jpg">
							</a>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					layui.use('carousel', function(){
						var carousel = layui.carousel;

						carousel.render({
							elem: '#banner'
							,width: '100%'
							,height: '320px'
							,interval: 3000
							,anim: 'fade'
							,arrow: 'always' //始终显示箭头
						});
					});
				</script>
			</div>
			<!-- 顶置推荐 -->
			<div class="blog-zhiding blog-none-768 blog-none-1024 blog-none-1200 cl">
				<h3>顶置推荐</h3>
				<ul>
					<li>
						<a href="#">
							<img src="__ROOT__/uploads/article/ac1.jpg" alt="">
						</a>
						<h2>
							<a href="#" title="">谷歌如何推动 VR/AR 的生态发展和技术边界</a>
						</h2>
					</li>
					<li>
						<a href="#">
							<img src="__ROOT__/uploads/article/ac2.jpg" alt="">
						</a>
						<h2><a href="#" title="">致力于让机器像人类大脑一样工作的Numenta</a></h2>
					</li>
					<li>
						<a href="#">
							<img src="__ROOT__/uploads/article/ac3.jpg" alt="">
						</a>
						<h2><a href="#" title="">揭秘中国X86 CPU两大阵营，海光、兆芯谁更强？</a></h2>
					</li>
				</ul>
			</div>

			<div class="blog-none-768 blog-none-1024 blog-none-1200 blog-bottom"></div>
			<!-- 最新用户 -->
			<div class="blog-heads blog-none-768 blog-none-1024 blog-none-1200 cl">
				<h3>最新用户</h3>
				<ul>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/default.png" alt=""></a>
						<p><a href="#" title="">李白</a></p>
					</li>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/04.jpg" alt=""></a>
						<p><a href="#" title="">女娲</a></p>
					</li>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/01.jpg" alt=""></a>
						<p><a href="#" title="">项羽</a></p>
					</li>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/03.jpg" alt=""></a>
						<p><a href="#" title="">猴子</a></p>
					</li>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/user.jpg" alt=""></a>
						<p><a href="#" title="">安琪拉</a></p>
					</li>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/04.jpg" alt=""></a>
						<p><a href="#" title="">宫本</a></p>
					</li>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/02.jpg" alt=""></a>
						<p><a href="#" title="">老夫子</a></p>
					</li>
					<li>
						<a href="#"><img src="__ROOT__/uploads/users/01.jpg" alt=""></a>
						<p><a href="#" title="">貂蝉</a></p>
					</li>
				</ul>
			</div>

			<div class="blog-none-768 blog-none-1024 blog-none-1200 blog-bottom"></div>

			<!-- 最新文章 -->
			<div class="blog-article">
				<h3>最新文章</h3>
				<ul class="blog-list">
					<li class="blog-list-li">
						<div class="mod-angle"></div>
						<a href="#" class="blog-list-avatar">
							<img src="__ROOT__/uploads/article/ac1.jpg">
						</a>
						<h2 class="blog-tip"><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></h2>
						<p>
							<span><a href="#"><img src="__ROOT__/uploads/users/03.jpg" alt="">再贱就再见</a></span>
							<span class="blog-none-768">2017-12-09 13:28:19</span>
							<span class="blog-list-hint" style="padding-right: 0;"> 
								<i class="iconfont" title="回答"></i> 13<i class="iconfont" title="人气" style="font-size: 20px;position: relative;top: 2px;"></i> 2018
							</span>
						</p>
						<p class="blog-none-768">
						谷歌的故事一切还要从说起三年前大会上推出纸盒眼镜你可以自己拼装把手机放进去观看度的视频或是玩一款小游戏当时所有人都以为谷歌在跟大家开玩笑后来...
						</p>
						<p style="padding-top: 0;line-height: 20px;">
							<span class="blog-none-768 blog-none-1024 blog-none-1200 fr" style="padding-right: 0;">
								<a href="#">虚拟现实</a>
							</span>
						</p>
					</li>
					<li class="blog-list-li">
						<div class="mod-angle"></div>
						<a href="#" class="blog-list-avatar">
							<img src="__ROOT__/uploads/article/ac2.jpg">
						</a>
						<h2 class="blog-tip"><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></h2>
						<p>
							<span><a href="#"><img src="__ROOT__/uploads/users/03.jpg" alt="">再贱就再见</a></span>
							<span class="blog-none-768">2017-12-09 13:28:19</span>
							<span class="blog-list-hint" style="padding-right: 0;"> 
								<i class="iconfont" title="回答"></i> 13<i class="iconfont" title="人气" style="font-size: 20px;position: relative;top: 2px;"></i> 2018
							</span>
						</p>
						<p class="blog-none-768">
						谷歌的故事一切还要从说起三年前大会上推出纸盒眼镜你可以自己拼装把手机放进去观看度的视频或是玩一款小游戏当时所有人都以为谷歌在跟大家开玩笑后来...
						</p>
						<p style="padding-top: 0;line-height: 20px;">
							<span class="blog-none-768 blog-none-1024 blog-none-1200 fr" style="padding-right: 0;">
								<a href="#">智慧大脑</a>
							</span>
						</p>
					</li>
					<li class="blog-list-li">
						<div class="mod-angle"></div>
						<a href="#" class="blog-list-avatar">
							<img src="__ROOT__/uploads/article/ac3.jpg">
						</a>
						<h2 class="blog-tip"><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></h2>
						<p>
							<span><a href="#"><img src="__ROOT__/uploads/users/03.jpg" alt="">再贱就再见</a></span>
							<span class="blog-none-768">2017-12-09 13:28:19</span>
							<span class="blog-list-hint" style="padding-right: 0;"> 
								<i class="iconfont" title="回答"></i> 13<i class="iconfont" title="人气" style="font-size: 20px;position: relative;top: 2px;"></i> 2018
							</span>
						</p>
						<p class="blog-none-768">
						谷歌的故事一切还要从说起三年前大会上推出纸盒眼镜你可以自己拼装把手机放进去观看度的视频或是玩一款小游戏当时所有人都以为谷歌在跟大家开玩笑后来...
						</p>
						<p style="padding-top: 0;line-height: 20px;">
							<span class="blog-none-768 blog-none-1024 blog-none-1200 fr" style="padding-right: 0;">
								<a href="#">深度学习</a>
							</span>
						</p>
					</li>
					<li class="blog-list-li">
						<div class="mod-angle"></div>
						<a href="#" class="blog-list-avatar">
							<img src="__ROOT__/uploads/article/ac1.jpg">
						</a>
						<h2 class="blog-tip"><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></h2>
						<p>
							<span><a href="#"><img src="__ROOT__/uploads/users/03.jpg" alt="">再贱就再见</a></span>
							<span class="blog-none-768">2017-12-09 13:28:19</span>
							<span class="blog-list-hint" style="padding-right: 0;"> 
								<i class="iconfont" title="回答"></i> 13<i class="iconfont" title="人气" style="font-size: 20px;position: relative;top: 2px;"></i> 2018
							</span>
						</p>
						<p class="blog-none-768">
						谷歌的故事一切还要从说起三年前大会上推出纸盒眼镜你可以自己拼装把手机放进去观看度的视频或是玩一款小游戏当时所有人都以为谷歌在跟大家开玩笑后来...
						</p>
						<p style="padding-top: 0;line-height: 20px;">
							<span class="blog-none-768 blog-none-1024 blog-none-1200 fr" style="padding-right: 0;">
								<a href="#">大数据</a>
							</span>
						</p>
					</li>
					<li class="blog-list-li">
						<div class="mod-angle"></div>
						<a href="#" class="blog-list-avatar">
							<img src="__ROOT__/uploads/article/ac3.jpg">
						</a>
						<h2 class="blog-tip"><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></h2>
						<p>
							<span><a href="#"><img src="__ROOT__/uploads/users/03.jpg" alt="">再贱就再见</a></span>
							<span class="blog-none-768">2017-12-09 13:28:19</span>
							<span class="blog-list-hint" style="padding-right: 0;"> 
								<i class="iconfont" title="回答"></i> 13<i class="iconfont" title="人气" style="font-size: 20px;position: relative;top: 2px;"></i> 2018
							</span>
						</p>
						<p class="blog-none-768">
						谷歌的故事一切还要从说起三年前大会上推出纸盒眼镜你可以自己拼装把手机放进去观看度的视频或是玩一款小游戏当时所有人都以为谷歌在跟大家开玩笑后来...
						</p>
						<p style="padding-top: 0;line-height: 20px;">
							<span class="blog-none-768 blog-none-1024 blog-none-1200 fr" style="padding-right: 0;">
								<a href="#">人工智能</a>
							</span>
						</p>
					</li>
					<li class="blog-list-li">
						<div class="mod-angle"></div>
						<a href="#" class="blog-list-avatar">
							<img src="__ROOT__/uploads/article/ac2.jpg">
						</a>
						<h2 class="blog-tip"><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></h2>
						<p>
							<span><a href="#"><img src="__ROOT__/uploads/users/03.jpg" alt="">再贱就再见</a></span>
							<span class="blog-none-768">2017-12-09 13:28:19</span>
							<span class="blog-list-hint" style="padding-right: 0;"> 
								<i class="iconfont" title="回答"></i> 13<i class="iconfont" title="人气" style="font-size: 20px;position: relative;top: 2px;"></i> 2018
							</span>
						</p>
						<p class="blog-none-768">
						谷歌的故事一切还要从说起三年前大会上推出纸盒眼镜你可以自己拼装把手机放进去观看度的视频或是玩一款小游戏当时所有人都以为谷歌在跟大家开玩笑后来...
						</p>
						<p style="padding-top: 0;line-height: 20px;">
							<span class="blog-none-768 blog-none-1024 blog-none-1200 fr" style="padding-right: 0;">
								<a href="#">智慧大脑</a>
							</span>
						</p>
					</li>
				</ul>
			</div>
			<!-- 页数 -->
			<div class="pages">
				<ul class="pagination">
					<li class="disabled"><span>«</span></li> 
					<li class="active"><span>1</span></li>
					<li><a href="/?page=2">2</a></li> 
					<li><a href="/?page=2">»</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- 右侧 -->
	<div class="blog-mr-3">
	<div class="blog-con2">

		<div class="blog-stat cl">
			<div class="blog-search cl">
				<form action="/search.html">
					<input placeholder="搜索" type="text" name="ks" value="" required="" lay-verify="required" autocomplete="off">
					<button><i class="layui-icon" style="font-size: 18px;"></i></button>
				</form>
			</div>
			<div class="blog-stat-list cl">
				<ul>
					<li><span>6</span>文章总数</li>
					<li style="border-left: 1px solid #f1f1f1;border-right: 1px solid #f1f1f1;"><span>100</span>会员总数</li>
					<li><span>15</span>评论总数</li>
				</ul>
			</div>
			<div class="blog-grid-org cl">
				<h2>欢迎打赏投稿</h2>
				<a class="tougao layui-btn">我要投稿</a>
				<a class="zanzhu layui-btn">我要打赏</a>
			</div>
		</div>

		<!-- 热门标签 -->
		<div class="blog-sidebar cl">
			<h3>热门标签</h3>
			<div class="blog-f cl">
     			<a href="">新媒体</a>
	 			<a href="">iphone8</a>
	 			<a href="">游戏</a>
	 			<a href="">视频</a>
	 			<a href="">淘宝</a>
	 			<a href="">雷军</a>
	 			<a href="">网红</a>
	 			<a href="">人工智能</a>
	 			<a href="">大朋VR</a>
	 			<a href="">机器人</a>
	 			<a href="">小米</a>
	 			<a href="">综艺</a>
	 			<a href="">真人秀</a>
	 			<a href="">自定义</a>
	    	</div>
		</div>

		<!-- 热门推荐 -->
		<div class="blog-sidebar cl">
			<h3>热门推荐</h3>
			<ul class="blog-c cl">
				<li>
					<a href="/thread/2.html">AAAI协会主席 Rao：中国AI研究进步喜人，创业风气无处不在 | GAIR 2017</a>
					<p>2017-12-22 03:02:23</p>
				</li>
				<li>
					<a href="/thread/2.html">AAAI协会主席 Rao：中国AI研究进步喜人，创业风气无处不在 | GAIR 2017</a>
					<p>2017-12-22 03:02:23</p>
				</li>
				<li>
					<a href="/thread/2.html">AAAI协会主席 Rao：中国AI研究进步喜人，创业风气无处不在 | GAIR 2017</a>
					<p>2017-12-22 03:02:23</p>
				</li>
			</ul>
		</div>

		<!-- 精选内容 -->
		<div class="blog-sidebar cl">
			<h3>精选内容</h3>
			<ul class="blog-d cl">
				<li>
					<div>
						<a href="#">
							<img src="__ROOT__/uploads/article/ac1.jpg" alt="">
						</a>
					</div>
					<p><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></p>
				</li>
				<li>
					<div>
						<a href="#">
							<img src="__ROOT__/uploads/article/ac2.jpg" alt="">
						</a>
					</div>
					<p><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></p>
				</li>
				<li>
					<div>
						<a href="#">
							<img src="__ROOT__/uploads/article/ac3.jpg" alt="">
						</a>
					</div>
					<p><a href="#">从 I/O 大会看谷歌如何推动 VR/AR 的生态发展和技术边界 | Google I/O 2017</a></p>
				</li>
			</ul>
		</div>

		<!-- 友情连接 -->
		<div class="blog-sidebar cl">
			<h3>友情连接</h3>
			<ul class="blog-e cl">
				<li><a target="_blank" href="https://www.baidu.com/">百度一下</a></li>
				<li><a target="_blank" href="http://www.thinkphp.cn/">ThinkPHP</a></li>
				<li><a target="_blank" href="http://www.layui.com/">layui</a></li>
				<li><a target="_blank" href="http://layer.layui.com/">layer</a></li>
			</ul>
		</div>
	</div>
</div> 
</div>
<!-- <div id="QPlayer">
	<div id="pContent">
		<div id="player">
			<span class="cover"></span>
			<div class="ctrl">
				<div class="musicTag marquee">
					<strong>歌名</strong>
					<span> - </span>
					<span class="artist">歌手</span>
				</div>
				<div class="progress">
					<div class="timer left">0:00</div>
					<div class="contr">
						<div class="rewind icon"></div>
						<div class="playback icon"></div>
						<div class="fastforward icon"></div>
					</div>
					<div class="right">
						<div class="liebiao icon"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="ssBtn">
	        <div class="adf"></div>
	    </div>
	</div>
	
	<ol id="playlist"></ol>
</div>  -->
<div class="blog-footer footer mt-30 cl">
	<div class="blog-wp cl">
		<div class="blog-mds">

			<p class="bq">	
				<img src="__HOME__/img/logo2.png" alt="" style="display: inline-block; width: 22px;height: 22px;">	 		
				Copyright© <?php echo date('Y') ?>
				<span class="pipe">|</span>
				<a class="banquan" target="_blank" href="http://demo.tpt360.com">Powered by Giant</a>
				<span class="blog-none-768 blog-none-1024">
					<span class="pipe">|</span>
					<a href="http://www.miitbeian.gov.cn/" target="_blank"> 粤ICP备0000xxx号</a>
					<span class="pipe">|</span>	
					<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=1524790154&amp;site=qq&amp;menu=yes" target="_blank">QQ:941192051</a>
				</span>							
			</p>
		</div>
	</div>
</div> 

<!-- <script type="text/javascript" src="__HOME__/js/jquery.min.js"></script>
<script type="text/javascript" src="__HOME__/js/jquery.marquee.min.js"></script>
<script type="text/javascript" src="__HOME__/js/music.js"></script>
<script type="text/javascript" src="__HOME__/js/player.js"></script>
<script>
	function bgChange(){
		var lis= $('.lib');
		for(var i=0; i<lis.length; i+=2)
		lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
	}
	window.onload = bgChange;
</script> -->

<script type="text/javascript" src="__HOME__/js/base.js"></script>
</body>
</html>