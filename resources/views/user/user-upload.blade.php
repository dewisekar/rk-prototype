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
        <div class="main_menu" style="background-color: orange">
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
                                <a class="nav-link" href="../home">Dashboard</a>
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
                                <a class="nav-link" href="../upload">Upload Tugas Akhir</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../login">Logout</a>
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
    <section class="about_area section_gap title-bg" style="height:100%">
        <div class="container text-center"">
            <h2 class="mb-2 text-white text-center">Upload Tugas Akhir</h2>
            <div class="row mt-0">
                <div class="col-lg-8 col-md-8 ml-auto mr-auto">
                    <form action="../uploadsuccess" id="myForm">
						<div class="mt-10 text-left ">
                            <label class="text-white"> Judul </label>
							<input type="text" name="" placeholder="Judul" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'"
							 required class="single-input">
						</div>
                        <div class="mt-10 text-left ">
                            <label class="text-white"> Abstrak </label>
                            <input type="text" name="" placeholder="Abstrak" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Abstrak'"
                             required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                           
                            <div class="form-select" id="default-select">
                                <div class="mt-10 text-left ">
                                <label class="text-white"> Program Studi </label>
                                 <!-- <div class="icon"><i class="fas fa-school" aria-hidden="true"></i></div> -->
                                <select>
                                   <!--  <option value="1">Program Studi</option> -->
                                    <option value="1">Diploma</option>
                                    <option value="1">Sarjana</option>
                                    <option value="1">Pascasarjana</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mt-10 text-left ">
                            <label class="text-white"> Nama Penulis </label>
                            <input type="text" name="" placeholder="Nama Depan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Depan'"
                             required class="single-input">
                        </div>
                        <div class="mt-10 text-left ">
                            <input type="text" name="" placeholder="Nama Belakang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Belakang'"
                             required class="single-input">
                        </div>
						 <div class="mt-10 text-left ">
                            <label class="text-white"> Dosen Pembimbing 1 </label>
                            <input type="text" name="" placeholder="Nama Depan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Depan'"
                             required class="single-input">
                        </div>
                        <div class="mt-10 text-left ">
                            <input type="text" name="" placeholder="Nama Belakang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Belakang'"
                             required class="single-input">
                        </div>
                        <div class="mt-10 text-left ">
                            <label class="text-white"> Dosen Pembimbing 2 </label>
                            <input type="text" name="" placeholder="Nama Depan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Depan'"
                             required class="single-input">
                        </div>
                        <div class="mt-10 text-left ">
                            <input type="text" name="" placeholder="Nama Belakang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Belakang'"
                             required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">                           
                            <div class="form-select" id="default-select">
                                <div class="mt-10 text-left ">
                                <label class="text-white"> Bidang </label>
                                 <!-- <div class="icon"><i class="fas fa-school" aria-hidden="true"></i></div> -->
                                <select>
                                   <!--  <option value="1">Program Studi</option> -->
                                    <option value="1">Struktur Air</option>
                                    <option value="1">Teknologi Lepas Pantai</option>
                                    <option value="1">Pengelasan</option>
                                    <option value="1">Energi Laut</option>
                                    <option value="1">Pengelasan</option>
                                    </select>
                            </div>
                        </div>
                        <div class="input-group-icon mt-10 text-left">
                            <label class="text-white">Tahun</label>
							<div class="form-select" id="default-select2">
								<select>
									<option value="1">Tahun</option>
									<option value="1">2019</option>
									<option value="1">2018</option>
									<option value="1">2017</option>
								</select>
							</div>
                        </div>
                        <div class="input-group-icon mt-10 text-left">
                            <label class="text-white">Bulan</label>
							<div class="form-select" id="default-select2">
								<select>
                                    <option value="1">Bulan</option>
                                    <option value="1">Januari</option>
                                    <option value="1">Feburari</option>
                                    <option value="1">Maret</option>
								</select>
							</div>
                        </div>
                        <div class="input-group-icon mt-10 text-left">
                            <label class="text-white">Fakultas</label>
							<div class="form-select" id="default-select2">
								<select>
                                    <option value="1">Fakultas</option>
                                    <option value="1">FS</option>
                                    <option value="1">FTI</option>
								</select>
							</div>
						</div>
                         <div class="input-group-icon mt-10 text-left">
                            <label class="text-white">Departemen</label>
							<div class="form-select" id="default-select2">
								<select>
                                    <option value="1">Departemen</option>
                                    <option value="1">T. Perkapalan</option>
                                    <option value="1">T. Sistem Perkapalan</option>
                                    <option value="1">T. Kelautan</option>
								</select>
							</div>
						</div>
                        <div class="mt-10 text-left ">
                            <label class="text-white">Jumlah Halaman</label>
                            <input type="text" name="" placeholder="Jumlah Halaman" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jumlah Halaman'"
                             required class="single-input">
                        </div>	
                        <div class="mt-10 text-left ">
                            <label class="text-white">File Tugas Akhir</label>
                            <input type="file" id="kartu" name="" placeholder="Kartu Keanggotaan ITS" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kartu Keanggotaan ITS'"
							 required class="single-input">
                        </div>
                        <div class="mt-10 text-left ">
                            <label class="text-white">Kata Kunci</label>
                            <input type="text" name="" placeholder="Kata Kunci 1" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Kunci 1'"
                             required class="single-input">
                            <input type="text" name="" placeholder="Kata Kunci 2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Kunci 2'"
                             required class="single-input">
                            <input type="text" name="" placeholder="Kata Kunci 3" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Kunci 3'"
                              class="single-input">
                            <input type="text" name="" placeholder="Kata Kunci 4" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Kunci 4'"
                            class="single-input">
                            <input type="text" name="" placeholder="Kata Kunci 5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kata Kunci 5'"
                              class="single-input">
                        </div>					
                        <div class="mt-10">
                            <button type="submit"  class="genric-btn primary circle" onclick="validate()">Unggah</button>
                        </div>                        
					</form>
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
    <script>
        function validate()
        {
            var myFile = document.getElementById('kartu');
            var eks = myFile.value.split('.')[1];
            if(eks != "pdf")
            {
                alert("File harus berekstensi PDF!");
            }
            else
            {
                document.getElementById("myForm").submit();
            }
            
        }
    </script>
  </body>
</html>
