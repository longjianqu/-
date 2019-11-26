<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
	<style type="text/css">
		body{
			background: url(./img/bd-bg.png) repeat-x;

		}
		

		.nav{
			float: right;
			margin-top: 15px;
		}
		.nav li{
			float: left;
			padding:0 10px;
			border-left: 1px #d6d6d6 dotted;
		}
		.logo{
			margin-left: 15px;
		}
		.nav a{
			font: bold 14px Georgia;
			color: #666;
			text-decoration: none;
		}
		.nav p{
			color: #b7b7b7;
			font: 11px tahoma;
		}
		.header{
			width: 940px;
			margin: 0 auto;
			padding-top:37px;/*上内边距*/
			padding-bottom:46px;/*下内边距*/
		}
		.logo{
			margin-left: 15px;
		}
		.nav a:hover{
			color: #a1a1a1;
		}
		.banner{
			height: 355px;
			width: 940px;
			margin: 0 auto;
			background:url(./img/shadow.png) no-repeat bottom center;
		}
		.pointerDiv{
              position:absolute;
              top: 485px; 
              left: 500px;
		}
		.pointerDiv a{
			display: block;
			float: left;
			margin-left:4px;
			width: 17px;
			height: 17px;
			background:url(./img/pointer.png);
		}
		.pointerDiv .active,
		.pointerDiv a:hover{
			background:url(./img/pointer-active.png);
		}
		.content{
			width: 940px;
			margin: 0 auto;
		}
		.content h1{
			text-align: center;
			font: bold 24px Georgia;
			padding: 6px 0 20px 0;
			margin-bottom: 38px;
			background:url(./img/line.png) no-repeat bottom center;

		}
		.content .pl,.content .cs,.content .uc,.contact .sc,.contact .co,.contact .nu{
			float: left;
			width: 300px;
		}
		.content .cs,.contact .co{
			margin: 0 ;
		}
		.content h2{
			color: #11719e;
			font: 21px Georgia;
		}
		.centent .p1{
			color: #949494;
			font: 12px Helvetica; 
		}
		.content .imgDiv{
			width: 300px;
			height: 190px;
			margin: 16px 0px 10px 0px;
			padding-top: 12px;
		}
		.content .p2{
			height: 95px;
			color: #3e3e3e;
			font: 13px Helvetica;
			word-spacing: 4px;
		}
		.content .lm{
			display: block;
			width: 163px;
			height: 40px;
			text-decoration:none;
			color: yellow;
			font: 12px Helvetica;
			line-height: 40PX;
			text-indent: 1em;
			margin-bottom: 35px;
			background: url(./img/btn1.png) no-repeat;
		}
		.contact{
		 	width: 900px;
			margin: 0 auto;
			background:url() no-repeat center;
		 }
		 .contact .txt{
		 	width: 276px;
		 	height: 33px;
		 	line-height: 33px;
		 	background: url(./img/input.png) no-repeat;
		    border: none;
		    padding: 0px 10px;
		    margin: 0px 0px 16px;
		 }
		 .contact .tarea{
		 	width: 276px;
		 	height: 114px;
		 	background: url(./img/btn1.png) no-repeat;
		 	border: none;
		 	overflow: auto;
		 	resize: none;
		 	padding: 10px;
		 	margin: 0;
		 }
		 .contact.btn{
		 	width: 150px;
		 	height: 32px;
		 	background:url(./img/btn2.png)no-repeat;
		 }
		 .contact h2{
		 	color: #444;
		 	font: 18px Georgia;
		 	line-height: 18px;
		 	border-bottom: 1px dashed #d3d3d3;
		 	padding: 44px 0px 10px;
		 	margin-bottom: 15px;



		 }
		 .sc .p1{
		 	color: #444;
		 	font: 12px Helvetica;
		 	line-height: 12px;
		 }
		 .sc .icon{
		 	font-size: 0;/*去除空格*/
		 	margin-top: 4px;

		 }
		 .sc .icon a{
		 	margin-left: 6px;
		 }
         .sc .nl{
         	font: 18px "Gill Sans MT";
         	line-height: 18PX;
         	padding: 34px 0px 10px;
         }
         .sc .txt{
         	margin-top: 15px;
         	margin-bottom: 0px;
         }
         .nu p{
         	color: #444;
         	font: 12px Helvetica;
         	line-height: 12px;
         	height: 58px;
         	border-bottom:1px dashed #d3d3d3;
         	margin-bottom: 14px;
         	padding-bottom: 9px;
         }
         .nu img{
         	float: left;
         	margin-left: 8px;
         }

         .footer a,.footer p{
         	color: #999;
         	font: 11px Helvetica;
         	text-decoration: none;
         }
         .footer p{
         	margin-left: 8px;
            margin-right: 23px;
            margin-bottom: 6px;
         }
         .footer .w{
         	padding-top:18px;
         	width: 940px;
         	margin: 0 auto;

         }
         .footer .copy{
         	float:left;
         	
         }

	</style>
</head>
<body>

    <div class="header">
    	
    	<ul class="nav">
    		<li>
    			<a href="#">HOWE</a>
    			<p>back to home</p>
    		</li>
    		<li>
    			<a href="#">HOWE</a>
    			<p>back to home</p>
    		</li>
    		<li>
    			<a href="#">HOWE</a>
    			<p>back to home</p>
    		</li>
    		<li>
    			<a href="#">HOWE</a>
    			<p>back to home</p>
    		</li>
    		<li>
    			<a href="#">HOWE</a>
    			<p>back to home</p>
    		</li>
    		
    	</ul>
    	<div class="logo">
    		<a href="#" title="这是logo">
    			<img src="img/bd-bg2.png" alt="网站logo">
    		</a>
    	</div>
    </div>
    <div class="banner">
    	<img src="img/banner.png" alt="这是轮播图">
    	<div class="pointerDiv">
    		<a href="#"></a>
    		<a class="active" href="#"></a>
    		<a href="#"></a>
    		<a href="#"></a>
    		<a href="#"></a>
    	</div>
    </div>
    <div class="content clearfix">
    	<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1>
    	<div class="pl">
    		<h2>Perfect Logic</h2>
    		<p class="pl">All yuo want your website to do.</p>
    		<div class="imgDiv">
    			<img src="./img/pic1.jpg" alt="花无缺">
    		</div>
    		<p class="p2"> 
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
    		</p>
    		<a class="lm" href="#">lear more</a>
    	</div>
    	<div class="cs">
    	<h2>Perfect Logic</h2>
    	<p class="cs">All yuo want your website to do.</p>
    		<div class="imgDiv">
    			<img src="./img/pic2.jpg" alt="花无缺">
    		</div>
    		<p class="p2"> 
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
    		</p>
    		<a class="lm" href="#">lear more</a>
    	</div>
    	<div class="uc">
    	<h2>Perfect Logic</h2>
    	<p class="uc">All yuo want your website to do.</p>
    		<div class="imgDiv">
    			<img src="./img/pic3.jpg" alt="花无缺">
    		</div>
    		<p class="p2"> 
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
    		</p>
    		<a class="lm" href="#">lear more</a>
    	</div>
    </div>
    	<div class="contact clearfix">
    		<div class="sc">
    			<h2>social connection</h2>
    			<!--段落-->
    			<p class="p1">
    			At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
    		    </p>x
    		    <!--小图标-->
    		    <div class="icon">
    		    	<a href="#"><img src="./img/rss.png"></a>
    		    	<a href="#"><img src="./img/fb.png"></a>
    		    	<a href="#"><img src="./img/in.png"></a>
    		    	<a href="#"><img src="./img/yt.png"></a>
    		    	<a href="#"><img src="./img/tw.png"></a>
    		    </div>
    		    <h2 class="nl">News letter</h2>
    		    <p class="p1">At vero eos et accusamus</p>
    		    <form action="#">
    		    	<input calss="txt" type="text" placeholder="your email address">
    		    	<button class="btn">subscribe</button>
    		    </form>
    		</div>  
    		<!--中间-->
    		<div class="co">
    			<h2>contact</h2>
    			<form>
    				<input class="txt" type="text" placeholder="your name">
    				<input class="txt" type="text" placeholder="your email address">
    				<textarea class="tarea" placeholder="message"></textarea>
    				<button class="btn">send it</button>
    			</form>
    		</div>
    		<div class="nu">
    			<h2>News Updates</h2>
    			<p>
    				<img src="./img/1.gif">
    				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    			</p>
    			<p>
    				<img src="./img/2.gif">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
    			</p>
    			<p>
    				<img src="./img/3.gif">
    				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
    			</p>
    		</div>  		
    	</div>
    <div class="footer">
    	<div class="w">
    		<p class="copy">Copyright 2010. Studio VIVROCKS. All Rights Reserved.
    		</p>
    		<p>Copyright 2010. Studio VIVROCKS. All Rights Reserved.</p>
    		<p><a href="">Home</a><a href=""> About</a><a href="">Products</a><a href="">Services</a><a href="">Contact</a></p>
    		<p><a href="">Privacy Policy</a><a href="">Terms of use</a></p>
    	</div>
    </div>
</body>
</html>
