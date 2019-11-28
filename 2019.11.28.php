<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>京东</title>
	<style type="text/css">
		.jdm{
			width: 100%;
			margin: 0 auto;
		}
		.jdm_search{
			width: 100%;
			height: 40px;
			background-color: #c91523;
			position: fixed;
			top: 0;
			left: 0;
		}
		.jdm_search input{
			width: 100%;
			height: 30px;
			border-radius:15px;
			padding-left: 25px;
			box-sizing: border-box; 
		}
		.jdm_search .search{
			position: relative;
			width: 100%;
			height: 100%;
			padding-left: 100px;
			padding-right: 100px;
			box-sizing: border-box; 
			margin: 5px 0;
		}
		.jdm_search .jdm_login{
			display: block;
			position: absolute;
			top: 7px;
			right:10px; 
			text-decoration: none;
			font-size: 16px;
		    color: #fff;
		}
		.jdm_search .search_logo{
			display: block;
			position: absolute;
			background-image: url(./img/jd.png);
			top: 5px;
			left: 5px;
			width: 74px;
			height: 30px;
		}
	</style>
</head>
<body>
	<div class="jdm">
		<header class="jdm_search">
			<a href="#" class="search_logo"></a>
			<div class="search">
				<input type="text" placeholder="100万">
			</div>
			<a href="#" class="jdm_login">登录</a>
		</header>
	</div>

</body>
</html>
