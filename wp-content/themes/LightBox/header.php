<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Light Box</title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>"/>
	</head>
	<body>
		<div id="wrapper">
			<div id="header_area">
				<div id="header" class="inner_wrapper">
					<ul id="nav" class="float_right">
						<?php 
						/*
						<li class="selected">
							<a href="#" >HOME</a>
						</li>
						<li>
							<a href="work.html">WORK</a>
						</li>
						<li>
							<a href="about.html">ABOUT</a>
						</li>
						<li>
							<a href="contact.html">CONTACT</a>
						</li>
						*/
						wp_nav_menu(array('menu' => 'menu'));
						
						?>
					</ul>
					<div id="logo">
						<a href=" # "></a>
					</div>

					<div id="slogan" >
						<div id="logo_text" class="float_left">
							<a href="#" ></a>
						</div>
						<div id="border_image" class="float_left">

						</div>
						<div class="float_left">
							<p >
								Hi, we are LightBox a completely made up design agency that specializes in fresh, clean web design and graphics.
								<br />
								<a href="">Find out more</a>
							</p>
						</div>
					</div><!--slogan-->

				</div><!--header-->
			</div><!--header_area-->