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

  <body class="title-bg">
   
    <!--================ Start About Area =================-->
    <section class="about_area section_gap title-bg" style="height:100%">
        <div class="container text-center"">
            <h2 class="mb-2 text-white text-center">Register</h2>
            <a class="mb-3 text-white"  href="../">Kembali ke home</a>
            <div class="row mt-0">
                <div class="col-lg-8 col-md-8 ml-auto mr-auto">
                    <form action="../registersuccess">
						<div class="mt-10">
							<input type="text" name="" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'"
							 required class="single-input">
						</div>
						<div class="mt-10">
							<input type="email" name="" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
							 required class="single-input">
                        </div>
                        <div class="mt-10">
							<input type="file" name="" placeholder="Kartu Keanggotaan ITS" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kartu Keanggotaan ITS'"
							 required class="single-input">
						</div>
						<div class="input-group-icon mt-10">
                            <div class="icon"><i class="fas fa-school" aria-hidden="true"></i></div>
							<div class="form-select" id="default-select">
								<select>
									<option value="1">Fakultas</option>
									<option value="1">FIA</option>
									<option value="1">FTI</option>
									<option value="1">FTSLK</option>
                                    <option value="1">FTK</option>
                                    <option value="1">FTIK</option>
								</select>
							</div>
						</div>
						<div class="input-group-icon mt-10">
							<div class="icon"><i class="ti-map" aria-hidden="true"></i></div>
							<div class="form-select" id="default-select2">
								<select>
									<option value="1">Departemen</option>
									<option value="1">T. Perkapalan</option>
									<option value="1">T. Sistem Perkapalan</option>
									<option value="1">T. Kelautan</option>
									<option value="1">T. Transportasi Laut</option>
								</select>
							</div>
                        </div>
                        <div class="input-group-icon mt-10">
							<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
							<div class="form-select" id="default-select2">
								<select>
									<option value="1">Jabatan</option>
									<option value="1">Dosen</option>
									<option value="1">Tenaga Didik</option>
									<option value="1">Mahasiswa</option>
								</select>
							</div>
						</div>
						<div class="mt-10">
							<input type="text" name="" placeholder="NRP/NIP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NRP/NIP'"
							 required class="single-input-primary">
						</div>
						<div class="mt-10">
							<input type="text" name="first_name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"
							 required class="single-input-accent">
						</div>
						<div class="mt-10">
							<input type="password" name="first_name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
							 required class="single-input-secondary">
                        </div>
                        <div class="mt-10">
							<input type="password" name="first_name" placeholder="Password Confirmation" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password Confirmation'"
							 required class="single-input-secondary">
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="genric-btn primary circle">Register</button>
                        </div>                        
					</form>
                </div>
            </div>
      </div>
    </section>
    <!--================ End About Area =================-->

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
