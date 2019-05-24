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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header"> 
        <div class="main_menu" style="background-color: maroon">
            <div class="search_input" id="search_input_box">
                <div class="container">
                    <form class="d-flex justify-content-between" method="GET" action="hasil">
						<input
							type="text"
							class="form-control"
							id="search_input"
							placeholder="Search Here"
						/>
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
                    <a class="navbar-brand logo_h" href="../" style="color:white">
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
                            <li class="nav-item">
                                <a class="nav-link" href="../">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../admin-home">Dashboard</a>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="../verifikasi">Verifikasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../admin-login">Logout</a>
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

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
        <div class="container">
            @if (session( 'success'))
                <div class="alert alert-success mb-3" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="mb-3">Daftar buku belum terverifikasi:</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <table style="width: 100%" class="pl-1 pr-1">
                        <tr>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">No.</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Judul</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Tahun Pembuatan</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Author</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Bidang</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Divisi</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Tanggal Upload</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Tanggal Terakhir Diubah</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">File</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Status Verifikasi</th>
                            <th style="border: 1px solid black" class="text-center pl-1 pr-1">Detail</th>
                        </tr> 
                        <tr>
                            <td style="border: 1px solid black" class="pl-1 pr-1">1.</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1"><a href="../detail-verifikasi">Analisis Risk Based Inspection (RBI) Pada Subsea Pipeline Akibat Upheaval Buckling</a></td>
                            <td style="border: 1px solid black" class="pl-1 pr-1">2019</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1">Yumm, Cindy Diniharziany</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1"></td>
                            <td style="border: 1px solid black" class="pl-1 pr-1">FTK - T. Kelautan - S1</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1">19 Maret 2019</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1">19 Maret 2019</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1">FTK_T. Kelautan_2019_ANALISIS RISK BASED INSPECTION (RBI) PADA SUBSEA PIPELINE AKIBAT UPHEAVAL BUCKLING.pdf</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1">Belum</td>
                            <td style="border: 1px solid black" class="pl-1 pr-1"><a href="../detail-verifikasi" class="genric-btn info circle">Detail</a></td>
                        </tr>
                    </table>
                </div>
            </div>
      </div>
    </section>
    <!--================ End About Area =================-->


    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
			<div class="col-lg-4 col-md-6 single-footer-widget">
				<h4>Cari tugas akhir</h4>
				<div class="form-wrap" id="mc_embed_signup">
					<form
						target="_blank"
						action="#"
						method="get"
						class="form-inline"
					>
						<input
						class="form-control"
						name="EMAIL" placeholder="Masukkan kata kunci"
						/>
						<button class="click-btn btn btn-default">
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
