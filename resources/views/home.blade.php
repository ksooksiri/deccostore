@extends('layouts.default.app')

@section('content')
<!-- <div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div> -->


		<div id="content" class="row">

	 		<div class="col-xs-12 nopadding">
				<div id= "menubar" class="col-xs-12 nopadding">
					<div class="col-xs-12 col-sm-3 nopadding">
						<a href="page.php?c=specials"><img src="{{ asset('/images/bar1-off.jpg') }}" class="roll" alt="โปรโมชั่น"/></a>
					</div>
					<div class="col-xs-12 col-sm-3 nopadding">
						<a href="page.php?c=specials"><img src="{{ asset('/images/bar2-off.jpg') }}" class="roll" alt="ข่าวสาร"/></a>
					</div>
					<div class="col-xs-12 col-sm-3 nopadding">
						<a href="page.php?c=idea"><img src="{{ asset('/images/bar3-off.jpg') }}" class="roll" alt="ไอเดียแต่งบ้าน"/></a>
					</div>
					<div class="col-xs-12 col-sm-3 nopadding">
						<a href="page.php?c=customer-service"><img src="{{ asset('/images/bar4-off.jpg') }}" class="roll" alt="ติดต่อสอบถาม"/></a>
					</div>
				</div>

				<div class="col-xs-12 nopadding">
					<div class="separate"></div>
				</div>
	  		</div>

			<div id="productbar" class="col-xs-12 nopadding">
				<div id="productbar-content">
					<div class="col-xs-12 col-sm-3 nopadding">
						<img src="{{ asset('/images/img-viewproduct.gif') }}" class="productbarhead type" alt="ประเภทสินค้า"/>
					</div>
					<div class="col-xs-12 col-sm-9 nopadding" >
						<div class="productbar-menu col-xs-6 col-sm-2 nopadding" >
							<a href="page.php?c=product&cat=door-frame" title="ประตูไม้ ประตูเหล็ก ประตูพัทยา">
								<img src="{{ asset('/images/menu-product-off_01.jpg') }}" class="roll" alt=""/>
							<div>
								ประตู
							</div>
							</a>

						</div>
						<div class="productbar-menu col-xs-6 col-sm-2 nopadding" >	
							<a href="page.php?c=product&cat=wall-floor" title="วอลเปเปอร์และพื้นห้อง">
								<img src="{{ asset('/images/menu-product-off_03.jpg') }}" class="roll" alt=""/>
							<div>
								พื้นหลัง
							</div>
							</a>
						</div>
						<div class="productbar-menu col-xs-6 col-sm-2 nopadding" >	
							<a href="page.php?c=product&cat=led-lighting" title="โคมไฟและหลอดไฟ">
								<img src="{{ asset('/images/menu-product-off_05.jpg') }}" class="roll" alt=""/>
							<div>
								โคมไฟ
							</div>
							</a>
						</div>
						<div class="productbar-menu col-xs-6 col-sm-2 nopadding" >	
							<a href="page.php?c=product&cat=construction-material" title="วัสดุก่อสร้าง">
								<img src="{{ asset('/images/menu-product-off_07.jpg') }}" class="roll" alt=""/>
							<div>
								วัสดุก็สร้าง
							</div>
							</a>
						</div>
						<div class="productbar-menu col-xs-6 col-sm-2 nopadding" >	
							<a href="page.php?c=product&cat=bathroom" title="ห้องน้ำและสุขภัณฑ์">
								<img src="{{ asset('/images/menu-product-off_09.jpg') }}" class="roll" alt=""/>
							<div>
								ห้องน้ำ
							</div>
							</a>
						</div>
						<div class="productbar-menu col-xs-6 col-sm-2 nopadding" >	
							<a href="page.php?c=product&cat=home-decoration" title="ของตกแต่งบ้าน">
								<img src="{{ asset('/images/menu-product-off_11.jpg') }}" class="roll" alt=""/>
							<div>
								ของตกแต่งบ้าน
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 nopadding">
				<div class="separate"></div>
			</div>&nbsp;

			<div id="homepromo" >
			
					<div class="col-lg-12 nopadding">
						<div class="col-md-3 col-xs-12 nopadding">
							<div class="face">
								<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FDECCO-Store-Pattaya%2F124023984458005&amp;width=250&amp;height=210&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:210px;" allowTransparency="true"></iframe>
							</div>
						</div>
						
						<div class="col-md-9 nopadding">
							<div class="col-xs-6 nopadding" >
								<div class="banner1">
									<a href="page.php?c=catalog"><img src="{{ asset('/images/catalog-off.jpg') }}" class="roll banner1" alt="คาตาล็อก"/></a>
								</div>
							</div>
							<div class="col-xs-6 nopadding">
								<div class="banner2">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<img src="{{ asset('/images/my-partner-01.jpg') }}" alt="...">
											</div>
											<div class="item">
												<img src="{{ asset('/images/my-partner-02.jpg') }}" alt="...">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 nopadding"><img src="{{ asset('/images/sale-on-now.gif') }}" class="banner3"/></div>

						</div>



					</div>

						<!-- <div class="spacer">&nbsp;</div> -->
			</div>


<!-- 
					<div id="productbar">
						<img src="{{ asset('/images/img-viewproduct.gif') }}" class="productbarhead" alt="ประเภทสินค้า"/>
						<div id="productbarmenu">
							<a href="page.php?c=product&cat=door-frame" title="ประตูไม้ ประตูเหล็ก ประตูพัทยา">
								<img src="{{ asset('/images/menu-product-off_01.jpg') }}" class="roll" alt=""/>
							</a>
							<a href="page.php?c=product&cat=wall-floor" title="วอลเปเปอร์และพื้นห้อง">
								<img src="{{ asset('/images/menu-product-off_03.jpg') }}" class="roll" alt=""/>
							</a>
							<a href="page.php?c=product&cat=led-lighting" title="โคมไฟและหลอดไฟ">
								<img src="{{ asset('/images/menu-product-off_05.jpg') }}" class="roll" alt=""/>
							</a>
							<a href="page.php?c=product&cat=construction-material" title="วัสดุก่อสร้าง">
								<img src="{{ asset('/images/menu-product-off_07.jpg') }}" class="roll" alt=""/>
							</a>
							<a href="page.php?c=product&cat=bathroom" title="ห้องน้ำและสุขภัณฑ์">
								<img src="{{ asset('/images/menu-product-off_09.jpg') }}" class="roll" alt=""/>
							</a>
							<a href="page.php?c=product&cat=home-decoration" title="ของตกแต่งบ้าน">
								<img src="{{ asset('/images/menu-product-off_11.jpg') }}" class="roll" alt=""/>
							</a>
						</div>
					</div> -->
<!-- 					<div id="homepromo">
						<div class="face">
							<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FDECCO-Store-Pattaya%2F124023984458005&amp;width=250&amp;height=210&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=true&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:210px;" allowTransparency="true"></iframe>
						</div>
						
						<div class="banner1">
							<a href="page.php?c=catalog"><img src="{{ asset('/images/catalog-off.jpg') }}" class="roll banner1" alt="คาตาล็อก"/></a>
						</div>
						<div class="banner2">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="{{ asset('/images/my-partner-01.jpg') }}" alt="...">
									</div>
									<div class="item">
										<img src="{{ asset('/images/my-partner-02.jpg') }}" alt="...">
									</div>
								</div>
							</div>
						</div>
						<img src="{{ asset('/images/sale-on-now.gif') }}" class="banner3"/>

						<div class="spacer">&nbsp;</div>
			        </div> -->

		</div>
@endsection
