<?php 
include 'prefix.php';
include 'function/action.php';

// var_dump($article);
// echo $article['log_ViewNums'];
// echo $article->ViewNums;
?>
<!DOCTYPE html>
<html lang="zh" class="zh" slick-uniqueid="3">
<head meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="description" content="Global Political Research Center">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8"/>
	<title>世界政治研究中心</title>
	<link rel="icon" href="./favicon.ico" type="/x-icon"/>
	<link rel="stylesheet" type="text/css" media="screen" href="./css/basic.css">
	<link rel="stylesheet" type="text/css" media="screen" href="./css/column2.css">	
		<link rel="stylesheet" type="text/css" media="screen" href="./css/post.css">	
</head>
<body data-mobile-url="/zh/mobile">
<?php 
include 'header.html';
?>
	<div id="container" class="clearfix">
		<div id="column1">	
			<div class="post-block">
				<h1 class="post-head"><?php echo $article->Title;?></h1>
				<p class="post-time"><?php echo $article->Time('Y年m月d日'); ?></p>
				
			
				
				<div class="post-content">
					<?php echo $article->Content;?>
				</div>
				<br><br><br><br>
				<p>统计浏览人数：<?php echo $article->ViewNums;?></p>
				<!--post-content-->
			</div>
			<!--post-block-->
		</div>
		<!--#column1-->
		<div id="column2">
			<div class="box-border">
				<div class="box-border-content">
					<div class="author clearfix">
						<div class="column-head">
							<b>作者</b>
						</div>
						<!--column-head-->
						<div class="author-img">
							<a href="./teacher.php?id=<?php echo $teacherID;?>">
								<img width="100" height="100" src="<?php echo $teaInfo['mem_headPortrait'];?>" alt="教师">
							</a>
						</div>
						<div class="author-info">
							<a href="./teacher.php?id=<?php echo $teacherID;?>"><p class="author-name"><?php echo $teaInfo['mem_Name'];?></p></a>
							<div class="author-intro">
								<p><?php echo $teaInfo['mem_Intro'];?></p>
							</div>
						</div>
					</div>
					<div class="splitline-grey" style="display:none"></div>		
					<div id="label" style="display:none">
						<div class="column-head">
							<b>相关标签</b>
						</div>
						<!--column-head-->
						<div class="clearfix">
							<div class="label-background label-left">
								<a href="./artical_list.html">标签1</a>
							</div>
							<div class="label-background label-left">
								<a href="./artical_list.html">标签2</a>
							</div>
							<div class="label-background">
								<a href="./artical_list.html">标签3</a>
							</div>
							<div class="label-background label-left">
								<a href="./artical_list.html">标签4</a>
							</div>
						</div>
						<!--clearfix-->
					</div>
					<!--label-->
					<div class="splitline-grey"></div>
					<div id="popular-artical">
						<div class="column-head">
							<b>相关文章</b>
						</div>
						<!--column-head-->
						<ul class="popular-artical-title clearfix">
						<?php 
							foreach($reTeaArts as $article)
							{
								?>
								<li><a href="./artical.php?id=<?php echo $article['log_ID'];?>"><?php echo $article['log_Title'];?></a></li>
								<?php 
							}
						?>
						        
<!-- 							<li><a href="./artical.html">自我表述：民族团结的助推器？</a></li> -->
<!-- 							<li><a href="./artical.html">非此或彼 | 恐怖袭击与公众态度：以南北苏丹为例</a></li> -->
<!-- 							<li><a href="./artical.html">小众“教门”是怎样炼成的？</a></li> -->
<!-- 							<li><a href="./artical.html">民生能否换民意?</a></li> -->
<!-- 							<li><a href="./artical.html">高绩效的政府容易获得市民信任</a></li> -->
						</ul>
					</div>
					<!--popular-artical-->
				</div>
				<!--box-border-content-->
			</div>
			<!--box-border-->
		</div>
		<!--#column2-->
	</div>
	<!--#container-->
			<div id="bottomline"></div>
	<footer>
		<div id="footercontent">
			<div id="bottomlogo">
				<img width="300px;"height="70px;" src="./images/politic_logo.png" alt="教师1">
			</div>
			<div id="link">
				<p style="color:#b9b9b9;margin-bottom:10px;">友情链接</p>
				<div style="width:80px;float:left;">
				<a href="#">链接1</a><br>
				<a href="#">链接2</a><br>
				</div>
				<div style="width:150px;float:left;">
				<a href="#">链接4</a><br>
				<a href="#">链接5</a><br>
				</div>

			</div>
		</div>
	</footer>
</body>
</html>
