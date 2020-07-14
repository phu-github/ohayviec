<nav class="navbar navbar-expand-md navbar-dark d-flex justify-content-between" style="margin:0; padding: 0">
	<!-- Brand -->
	<img class="navbar_toggler_menu" src="http://ohayviec1.com/images/menu_50px.png" alt="">
	<a class="navbar_logo_name" href="#">Ohayviec</a>
	
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
						@if(Auth::check()&& false)
							<img class="account-box-avatar" src="https://i.pinimg.com/564x/5d/37/23/5d37231bdbad73a26a2d0d3e2ff3e233.jpg" alt="avatar">
							<div class="account-box">
								<div class="account-box-content" >
									<img class="id-avatar" src="https://i.pinimg.com/564x/5d/37/23/5d37231bdbad73a26a2d0d3e2ff3e233.jpg" alt="avatar" style="border-radius: 50%; width: 50px; height: 50px; ">
									<div class="account-box-content-name">
										{{Auth::user()->name}}
									</div>  
								</div>
							</div>
						@else 
						<a href="http://ohayviec.com/account/login" style="" class="btn btn-success btn-login">
							<span >Đăng Nhập</span>
						</a>
						<a href="http://ohayviec.com/account/register" style="" class="btn btn-success btn-register">
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
