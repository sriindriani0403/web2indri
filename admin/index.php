<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<i><h2>Selamat Datang Di Toko YH Beauty Store </h2></i>
						<br>
						<p>lebih banyak lebih hemat! yuk belanja kebutuhan untuk kecantikan mu, kejar diskon menarik dengan membeli paket skincare atau makeup, untuk dirimu tampil lebih cantik dan percaya diri </p>
						<p><a class="btn btn-warning btn-lg" href="input-user.php" role="button">user</a>
						<a class="btn btn-danger btn-lg" href="contact.php"role="button">contact</a></p>
				</div>
      </div>
		</div>

		<div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="carousel slide" id="contoh-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#contoh-carousel" data-slide-to="1"></li>
            <li data-target="#contoh-carousel" data-slide-to="2"></li>
            </ol>

              <div class="carousel-inner" role="listbox">
         <div class="item active">
              <img src="images/slide4.jpg"> 
              <div class="carousel-caption">
              </div>
            </div>

            <div class="item">
                <img src="images/slide5.jpeg"> 
                <div class="carousel-caption">
                </div>
              </div>

              <div class="item">
                <img src="images/slide6.jpeg">
                <div class="carousel-caption">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<br>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>