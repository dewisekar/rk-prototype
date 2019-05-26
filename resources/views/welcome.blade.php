<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Sistem Informasi Tugas Akhir ITS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="GET" action="hasil">
						<input
							type="text"
							class="form-control"
							id="search_input"
							placeholder="Search Here"
						required/>
						<button type="submit" class="btn"></button>
						<span
							class="ti-close"
							id="close_search"
							title="Close Search"
						></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="../">
						Sistem Informasi Tugas Akhir ITS</a>
					<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
					>
					<span class="icon-bar"></span> <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div
					class="collapse navbar-collapse offset"
					id="navbarSupportedContent"
					>
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="../">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../tentang">Tentang</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a
									href="#"
									class="nav-link dropdown-toggle"
									data-toggle="dropdown"
									role="button"
									aria-haspopup="true"
									aria-expanded="false"
									>Pencarian</a
								>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="../lihat-tahun">Tahun</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="lihat-bidang"
										>Bidang</a
									>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../lihat-fakultas-departemen">Fakultas dan Departemen</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../register">Register</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../login">Login</a>
							</li>							
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="ti-search"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
					Selamat datang!
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
					Sistem Informasi Pencarian Tugas Akhir Terintegrasi ITS
                </h2>
                <div>
					<a href="../terbaru" class="primary-btn2 mb-1 mb-sm-0">Edisi Terbaru</a>
					<a href="../pencarian" class="primary-btn mb-1 mb-sm-0">Pencarian</a>
					<a href="../login" class="primary-btn2 mb-1 mb-sm-0">Unggah Tugas Akhir</a>
					<a href="../login" class="primary-btn mb-1 mb-sm-0">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
			<div class="col-lg-4 col-md-6 single-footer-widget">
				<h4>Cari tugas akhir</h4>
				<div class="form-wrap" id="mc_embed_signup">
					<form
						action="hasil"
						method="get"
						class="form-inline"
					>
						<input
						class="form-control"
						name="" placeholder="Masukkan kata kunci" type="text"
						 required>
						<button type="submit" class="click-btn btn btn-default">
						<span>Cari</span>
						</button>
					</form>
				</div>
			</div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
			<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
