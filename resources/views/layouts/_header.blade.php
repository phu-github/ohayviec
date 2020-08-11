<nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between" style="margin:0; padding: 0">
	<!-- Brand -->
	<img class="navbar_toggler_menu" src="http://ohayviec1.com/images/menu_50px.png" alt="">
	<div id="navbar_logo">
		<img id="navbar_logo_img" src="{{asset('images/logo-web.png')}}">
	</div>
	
  	<!-- Navbar links -->
  	<div class="navbar_menu_list">
	    <ul class="navbar-nav">
			<li class="nav-item">
			<a class="nav-link" href="#"><i class="fa fa-home navbar_menu_icon"></i>Trang chủ</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#"><i class="fa fa-envira navbar_menu_icon"></i> Blog</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#"><i class="fa fa-map navbar_menu_icon"></i> Liên hệ</a>
			</li>
	      	<li class="nav-item dropdown">
				<a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-magic navbar_menu_icon"></i>
					Tiện ích free
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
					<a class="dropdown-item" href="/docs/4.1/">Tải sách</a>
					<a class="dropdown-item active" href="/docs/4.0/">Sách cũ giá rẻ</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="https://v4-alpha.getbootstrap.com/">Khóa học free</a>
					<a class="dropdown-item" href="https://getbootstrap.com/docs/3.3/">Nghệ thuật sống</a>
					<a class="dropdown-item" href="https://getbootstrap.com/2.3.2/">Lộ trình học</a>
				</div>
			</li>
	    </ul>
  	</div>
  	<div class="account_header">
			<ul>
				<li class="nav-item">
					<div class="nav-item-avatar">
						@if(Auth::check())
							<a href="{{route('personal-info', ['priority' => Auth::user()->priority, 'user_id'=> Auth::user()->id])}}" style="margin-right: 25px" class="">
							<img src="https://i.pinimg.com/280x280_RS/eb/68/4f/eb684fdefb1b8014d20c12c6da20ebcc.jpg" width="32" height="32" style="background-color: red">
							</a> 
						@else 
						<a href="/account/login" style="" class="btn btn-success btn-login">
							<span >Đăng Nhập</span>
						</a>
						<a href="/account/register" style="" class="btn btn-success btn-register">
							<span>Đăng Kí</span>
						</a> 
						
							<i class="fa fa-times navbar_menu_icon navbar_toggler_menu_close"></i> 
						@endif
					</div>
				</li>	
			</ul>
		</div>
		
		<img class="navbar_toggler_menu_open" src="http://ohayviec1.com/images/menu_3_50px.png" alt="">
		
</nav>	
