<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/site.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/carousel-fade.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body >
	<div class="container-fluid">
		<div class="row">
	 		<div id="topbar" class="col-xs-12 ">
		 		<div class="col-xs-12 nopadding">
		 			<div style="float: right">
		 				<div id="newsletterbar">
							<form name="newsletterform"><input type="text" id="newsletteremail" name="email" class="newsletter water" value="" title="รับข่าวสารจากเดคโค่" placeholder="Decco newsletter"><input type="image" src="{{ asset('/images/button-go.gif') }}" class="buttongo"></form>
						</div>
						<div id="searchbar">
							<form action="page.php?c=search" method="get">
								<input type="hidden" name="c" value="search"><input type="text" class="search water" value="" id="keyword" name="keyword" title="ค้นหาผลิตภัณฑ์" placeholder="Search Product"><input type="image" src="{{ asset('/images/button-search.gif') }}" class="buttonsearch">
							</form>
						</div>	
					</div>
		 		</div>

				<div id="language">
					<div class="en">
						<a href="../en/index.php"><img src="{{ asset('/images/flags/en/32x32.png') }}" alt="อังกฤษ"></a>
					</div>
					<div class="separate"></div>
					<div class="th">
						<a href="../th/index.php"><img src="{{ asset('/images/flags/th/32x32.png') }}" onclick="window.location.href('../th/index.php')" alt="ไทย"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="mid" class="col-xs-12 nopadding">



<!-- 				<div id="logo"><a href="index.php"><img src="{{ asset('/images/logo-decco.png') }}" title="เดคโค่สโตร์พัทยา"/></a></div>		<div id="nav">
					<ul class="nav">
						<li><a href="who-we-are.html">เกี่ยวกับเรา</a></li>
						<li><a href="page.php?c=specials">สเปเชี่ยล</a></li>
						<li><a href="page.php?c=idea">ไอเดียกิ๊บเก๋</a></li>
						<li><a href="page.php?c=catalog">แค็ตตาล็อก</a></li>
						<li><a href="page.php?c=customer-service">บริการลูกค้า</a></li>
						<li><a href="page.php?c=working-at-decco">ร่วมงานกับเรา</a></li>
						<li><a href="page.php?c=how-to-find-us">ติดต่อเรา</a></li>
					</ul>

				</div> -->

				<div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

				<div id="logo"><a href="index.php"><img src="{{ asset('/images/logo-decco.png') }}" title="เดคโค่สโตร์พัทยา"/></a></div>

				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="{{ asset('/images/slides/slide-1.jpg') }}" alt="..." width="100%">
				      <div class="carousel-caption"></div>
				    </div>
				    <div class="item">
				      <img src="{{ asset('/images/slides/slide-2.jpg') }}" alt="..." width="100%">
				      <div class="carousel-caption"></div>
				    </div>
				    <div class="item">
				      <img src="{{ asset('/images/slides/slide-3.jpg') }}" alt="..." width="100%">
				      <div class="carousel-caption"></div>
				    </div>
				    <div class="item">
				      <img src="{{ asset('/images/slides/slide-4.jpg') }}" alt="..." width="100%">
				      <div class="carousel-caption"></div>
				    </div>
				    <div class="item">
				      <img src="{{ asset('/images/slides/slide-5.jpg') }}" alt="..." width="100%">
				      <div class="carousel-caption"></div>
				    </div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 nopadding">
				

					<nav class="navbar navbar-default">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">

											<li class="active"><a href="{{ public_path('who-we-are') }}">เกี่ยวกับเรา</a></li>
											<li><a href="{{ public_path('special') }}">สเปเชี่ยล</a></li>
											<li><a href="{{ public_path('idea') }}">ไอเดียกิ๊บเก๋</a></li>
											<li><a href="{{ public_path('catalog') }}cat">แค็ตตาล็อก</a></li>
											<li><a href="{{ public_path('customer-service') }}">บริการลูกค้า</a></li>
											<li><a href="{{ public_path('working-at-decco') }}">ร่วมงานกับเรา</a></li>
											<li><a href="{{ public_path('how-to-find-us') }}">ติดต่อเรา</a></li>
					      </ul>
					    </div><!-- /.navbar-collapse -->
					</nav>


			</div>
		</div>

<!-- 				<div id="content">
					<div id="menubar">
						<a href="page.php?c=specials" class="col-xs-3 nopadding"><img src="{{ asset('/images/bar1-off.jpg') }}" class="roll" alt="โปรโมชั่น"/></a>
						<a href="page.php?c=specials" class="col-xs-3 nopadding"><img src="{{ asset('/images/bar2-off.jpg') }}" class="roll" alt="ข่าวสาร"/></a>
						<a href="page.php?c=idea" class="col-xs-3 nopadding"><img src="{{ asset('/images/bar3-off.jpg') }}" class="roll" alt="ไอเดียแต่งบ้าน"/></a>
						<a href="page.php?c=customer-service" class="col-xs-3 nopadding"><img src="{{ asset('/images/bar4-off.jpg') }}" class="roll" alt="ติดต่อสอบถาม"/></a>
					</div>
				</div>--><!-- end content --> 



		@yield('content')



	<!-- 	<div id="footermenu row">	

			<ul class="footmenu">
				<li><a href="who-we-are.html">เกี่ยวกับเรา</a></li>
				<li><a href="/specials">สเปเชี่ยล</a></li>
				<li><a href="/idea">ไอเดียกิ๊บเก๋</a></li>
				<li><a href="/catalog">แค็ตตาล็อก</a></li>
				<li><a href="/customer-service">บริการลูกค้า</a></li>
				<li><a href="/working-at-decco">ร่วมงานกับเรา</a></li>
				<li><a href="/how-to-find-us">ติดต่อเรา</a></li>
			</ul>

			<div class="spacer">&nbsp;</div>

			<div class="footmenupwrap ">
				<ul class="footmenup menubottom">
					<li><a href="/product/door-frame">ประตู &amp; กรอบประตู</a></li>
					<li><a href="/product/led-lighting">โคมไฟ &amp; หลอดไฟ</a></li>
					<li><a href="/product/bathroom">ห้องน้ำ &amp; สุขภัณฑ์</a></li>
					<li><a href="/product/wall-floor">พื้นห้อง &amp; ผนังห้อง</a></li>
					<li><a href="/product/home-decoration">อุปกรณ์ตกแต่งบ้าน</a></li>
					<li><a href="/product/construction-material">วัสดุก่สร้าง</a></li>
				</ul>
				<div class="spacer">&nbsp;</div>
			</div>
		</div>-->
		<div class="row">
			<div class="col-xs-12 nopadding">
				<div class="spacer">&nbsp;</div> 

				<div id="copy">
					<div class="col-xs-6 nopadding">
						<div id="copyl" ><img src="{{ asset('/images/logo-decco-2.gif') }}" align="absmiddle" alt="เดคโค สโตร์ พัทยา"/> <a href="#" class="policylink">เงื่อนไขและข้อตกลง</a>  | <a href="#" class="policylink">นโยบายความเป็นส่วนตัว</a></div>
					</div>
					<div class="col-xs-6 nopadding">
						<div id="copyr">&copy; ลิขสิทธิ์ 2013 | บริษัท โฮม โปรดักส์ เทรดดิ้ง จำกัด สงวนลิขสิทธิ <a href="http://www.belongto.com" target="_blank">ออกแบบโดย Belong-To</a></div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- End container-fluid -->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
