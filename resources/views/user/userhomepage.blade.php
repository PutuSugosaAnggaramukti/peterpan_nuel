<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Ruangan UKDW</title> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="asset/images/logoukdw.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('calendarasset/css/style.css')}}"">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-white">
  

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">
  <!-- Avatar image in top left corner -->
  <a href="/homepage" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="/pageruangan" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-building w3-xxlarge"></i>
    <p>DAFTAR RUANGAN</p>
  </a>
  <a href="/loginmahasiswa" class="w3-bar-item w3-button w3-padding-large w3-hover-orange">
    <i class="fa fa-sign-out w3-xxlarge"></i>
    <p>LOGOUT</p>
  </a>
</nav>



<!-- Page Content -->
<div class="w3-padding-xlarge" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <h3 class="w3-jumbo"><span class="w3-hide-small">SISTEM PEMINJAMAN RUANGAN UKDW</span></h3>
    <h4>Selamat Datang di Sistem Peminjaman Ruangan UKDW</h4>
    <div class="container">
    <h2 class="heading-section text-center">Foto Ruangan</h2> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="asset\images\didaktos.jpg" alt="Didaktos" style="width:100%;">
      </div>

      <div class="item">
        <img src="asset\images\tasdik.jpg" alt="Tasdik" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="asset\images\baru.jpg" alt="D3.1" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-black w3-padding-64" id="about">
    <h2 class="heading-section text-center">Informasi Ruangan</h2> 
    <hr style="width:240px" class="w3-opacity">  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="asset/images/ruangan.jpg" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Ruang Seminar Tasdik</b></p>
        <p>Ruang Seminar ini memiliki kapasitas 50 orang dengan fasilitas LCD dan Sound System</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="asset/images/didaktos.jpg" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Atrium Didaktos</b></p>
        <p>Atrium Didaktos memiliki kapasitas 100 orang dan sangat cocok untuk dijadikan ruang pameran</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="asset/images/baru.jpg" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Ruang D.3.1</b></p>
        <p>Salah satu ruang kelas yang dapat dipinjam. Ruangan ini memiliki kapasitas 70 orang dengan fasilitas
        Komputer, LCD,Sound System, White Board, Wifi 
        </p>
      </div>
    </div>
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Cek Ketersediaan Ruangan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="content w-100">
				    <div class="calendar-container">
				      <div class="calendar"> 
				        <div class="year-header"> 
				          <span class="left-button fa fa-chevron-left" id="prev"> </span> 
				          <span class="year" id="label"></span> 
				          <span class="right-button fa fa-chevron-right" id="next"> </span>
				        </div> 
				        <table class="months-table w-100"> 
				          <tbody>
				            <tr class="months-row">
				              <td class="month">Jan</td> 
				              <td class="month">Feb</td> 
				              <td class="month">Mar</td> 
				              <td class="month">Apr</td> 
				              <td class="month">May</td> 
				              <td class="month">Jun</td> 
				              <td class="month">Jul</td>
				              <td class="month">Aug</td> 
				              <td class="month">Sep</td> 
				              <td class="month">Oct</td>          
				              <td class="month">Nov</td>
				              <td class="month">Dec</td>
				            </tr>
				          </tbody>
				        </table> 
				        
				        <table class="days-table w-100"> 
				          <td class="day">Sun</td> 
				          <td class="day">Mon</td> 
				          <td class="day">Tue</td> 
				          <td class="day">Wed</td> 
				          <td class="day">Thu</td> 
				          <td class="day">Fri</td> 
				          <td class="day">Sat</td>
				        </table> 
				        <div class="frame"> 
				          <table class="dates-table w-100"> 
			              <tbody class="tbody">             
			              </tbody> 
				          </table>
				        </div> 
				        <button class="button" id="add-button">Pinjam Ruangan</button>
				      </div>
				    </div>
				   
				    <div class="dialog" id="dialog">
				        <h2 class="dialog-header"> Form Pengajuan</h2>
				        <form class="form" id="form">
				          <div class="form-container" align="center">
				            <label class="form-label" id="valueFromMyButton" for="name">Nama</label>
				            <input class="input" type="text" id="name" maxlength="255">
                            <label class="form-label" id="valueFromMyButton" for="name">NIM</label>
				            <input class="input" type="text" id="name" maxlength="255">
                            <label class="form-label" id="valueFromMyButton" for="name">Ruangan</label>
				            <input class="input" type="text" id="name" maxlength="255">
				            <input type="button" value="Cancel" class="button" id="cancel-button">
				            <input type="button" value="OK" class="button button-white" id="ok-button">
				          </div>
				        </form>
				      </div>
				  </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('calendarasset/js/jquery.min.js')}}"></script>
  <script src="{{asset('calendatrasset/js/popper.js')}}"></script>
  <script src="{{asset('calendarasset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('calendarasset/js/main.js')}}"></script>
 



</body>
</html>