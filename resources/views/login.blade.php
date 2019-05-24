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
            @if (session( 'success'))
                <div class="alert alert-success mb-3" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <h2 class="mb-2 text-white text-center">Login</h2>
            <a class="mb-3 text-white"  href="../">Kembali ke home</a>
            <div class="row mt-0">
                <div class="col-lg-8 col-md-8 ml-auto mr-auto">
                    <form action="../actionuserlogin">
                      <div class="mt-10">
                        <input type="text" name="" placeholder="NRP/NIP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NRP/NIP'"
                        required class="single-input">
                      </div>
                      <div class="mt-10">
                        <input type="password" name="first_name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
                        required class="single-input-secondary">
                      </div>
                      <div class="mt-10">
                          <button type="submit" class="genric-btn primary circle">Login</button>
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
