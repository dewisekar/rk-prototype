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
            <form action="../registersuccess" id="myForm">
						<div class="mt-10 text-left">
              <label class="text-white">Nama Lengkap</label>
							<input type="text" name="" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'"
							 required class="single-input">
						</div>
						<div class="mt-10 text-left">
              <label class="text-white">NRP/NIP</label>
							<input type="text" name="" placeholder="NRP/NIP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NRP/NIP'"
							 required class="single-input-primary">
						</div>
						<div class="mt-10 text-left">
                <label class="text-white">E-Mail</label>
							<input type="email" name="" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
							 required class="single-input">
            </div>            
						<div class="input-group-icon mt-10 text-left">
              <label class="text-white">Fakultas</label>
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
						<div class="input-group-icon mt-10 text-left">
              <label class="text-white">Departemen</label>
							<div class="form-select" id="default-select2">
								<select>
									<option value="1">Departemen</option>
									<option value="1">T. Perkapalan</option>
									<option value="1">T. Sistem Perkapalan</option>
									<option value="1">T. Kelautan</option>
									<option value="1">T. Transportasi Laut</option>
								</select>
							</div>
            </div><div class="mt-10 text-left">
              <label class="text-white">Tanggal Lahir</label>
							<input type="date" name="" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'"
							 required class="single-input">
            </div>
            <div class="input-group-icon mt-10 text-left">
              <label class="text-white">Jenis Anggota</label>
							<div class="form-select" id="default-select2">
								<select>
									<option value="1">Jenis Anggota</option>
									<option value="1">Dosen</option>
									<option value="1">Tenaga Didik</option>
									<option value="1">Mahasiswa</option>
								</select>
							</div>
						</div>
            <div class="mt-10 text-left">
              <label class="text-white">Scan/Foto Kartu Keanggotaan ITS</label>
							<input type="file" id="kartu" name="" placeholder="Kartu Keanggotaan ITS" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kartu Keanggotaan ITS'"
							 required class="single-input">
						</div>
						<div class="mt-10 text-left">
              <label class="text-white">Password</label>
							<input type="password" name="first_name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
							 required class="single-input-secondary">
            </div>
            <div class="mt-10 text-left">
              <label class="text-white">Konfirmasi Password</label>
							<input type="password" name="first_name" placeholder="Password Confirmation" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password Confirmation'"
							 required class="single-input-secondary">
            </div>
            <div class="mt-10 text-center">              
              <button type="submit" class="genric-btn primary circle" onclick="validate()">Register</button>
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
    <script>
      function validate(){
        var myFile = document.getElementById('kartu');
        if(myFile.files[0].size > 1000000)
        {
          alert("File terlalu besar! File maximal 1 mb.")
        }
        else
        {
          document.getElementById("myForm").submit();
        }
      }
    </script>

  </body>
</html>
