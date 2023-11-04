<?php
include "conf/koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$seminggu=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hr=date("w");
$hari=$seminggu[$hr];

function convert_enter ($theword){
	return str_replace(chr(13), "<br />", $theword);
}
$page = (isset($_GET['page']))? $_GET['page'] : "main";
?>
<!DOCTYPE html>
<html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>Sistem Penunjang Keputusan Guru Berprestasi | Marasah Aliyah Syech Mubarok</title>
        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="asset/bootstrap.css" rel="stylesheet">
    	<link href="asset/custom.min.css" rel="stylesheet">
        <link href="plugins/light-gallery/css/lightgallery.css" rel="stylesheet">
        
        <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">
          
        <!--link href="css/style.css" rel="stylesheet"!-->
        
        <script src="js/jquery.js"></script>
<style type="text/css" title="currentStyle">

.bg-red {
  background-color: #F44336 !important;
  color: #fff; }
  .bg-red .content .text,
  .bg-red .content .number {
    color: #fff !important; }

.bg-pink {
  background-color: #E91E63 !important;
  color: #fff; }
  .bg-pink .content .text,
  .bg-pink .content .number {
    color: #fff !important; }

.bg-purple {
  background-color: #9C27B0 !important;
  color: #fff; }
  .bg-purple .content .text,
  .bg-purple .content .number {
    color: #fff !important; }

.bg-deep-purple {
  background-color: #673AB7 !important;
  color: #fff; }
  .bg-deep-purple .content .text,
  .bg-deep-purple .content .number {
    color: #fff !important; }

.bg-indigo {
  background-color: #3F51B5 !important;
  color: #fff; }
  .bg-indigo .content .text,
  .bg-indigo .content .number {
    color: #fff !important; }

.bg-blue {
  background-color: #2196F3 !important;
  color: #fff; }
  .bg-blue .content .text,
  .bg-blue .content .number {
    color: #fff !important; }

.bg-light-blue {
  background-color: #03A9F4 !important;
  color: #fff; }
  .bg-light-blue .content .text,
  .bg-light-blue .content .number {
    color: #fff !important; }

.bg-cyan {
  background-color: #00BCD4 !important;
  color: #fff; }
  .bg-cyan .content .text,
  .bg-cyan .content .number {
    color: #fff !important; }

.bg-teal {
  background-color: #009688 !important;
  color: #fff; }
  .bg-teal .content .text,
  .bg-teal .content .number {
    color: #fff !important; }

.bg-green {
  background-color: #4CAF50 !important;
  color: #fff; }
  .bg-green .content .text,
  .bg-green .content .number {
    color: #fff !important; }

.bg-light-green {
  background-color: #8BC34A !important;
  color: #fff; }
  .bg-light-green .content .text,
  .bg-light-green .content .number {
    color: #fff !important; }

.bg-lime {
  background-color: #CDDC39 !important;
  color: #fff; }
  .bg-lime .content .text,
  .bg-lime .content .number {
    color: #fff !important; }

.bg-yellow {
  background-color: #ffe821 !important;
  color: #fff; }
  .bg-yellow .content .text,
  .bg-yellow .content .number {
    color: #fff !important; }

.bg-amber {
  background-color: #FFC107 !important;
  color: #fff; }
  .bg-amber .content .text,
  .bg-amber .content .number {
    color: #fff !important; }

.bg-orange {
  background-color: #FF9800 !important;
  color: #fff; }
  .bg-orange .content .text,
  .bg-orange .content .number {
    color: #fff !important; }

.bg-deep-orange {
  background-color: #FF5722 !important;
  color: #fff; }
  .bg-deep-orange .content .text,
  .bg-deep-orange .content .number {
    color: #fff !important; }

.bg-brown {
  background-color: #795548 !important;
  color: #fff; }
  .bg-brown .content .text,
  .bg-brown .content .number {
    color: #fff !important; }

.bg-grey {
  background-color: #9E9E9E !important;
  color: #fff; }
  .bg-grey .content .text,
  .bg-grey .content .number {
    color: #fff !important; }

.bg-blue-grey {
  background-color: #607D8B !important;
  color: #fff; }
  .bg-blue-grey .content .text,
  .bg-blue-grey .content .number {
    color: #fff !important; }

.bg-black {
  background-color: #000000 !important;
  color: #fff; }
  .bg-black .content .text,
  .bg-black .content .number {
    color: #fff !important; }

.bg-white {
  background-color: #ffffff !important;
  color: #fff; }
  .bg-white .content .text,
  .bg-white .content .number {
    color: #fff !important; }

.col-red {
  color: #F44336 !important; }

.col-pink {
  color: #E91E63 !important; }

.col-purple {
  color: #9C27B0 !important; }

.col-deep-purple {
  color: #673AB7 !important; }

.col-indigo {
  color: #3F51B5 !important; }

.col-blue {
  color: #2196F3 !important; }

.col-light-blue {
  color: #03A9F4 !important; }

.col-cyan {
  color: #00BCD4 !important; }

.col-teal {
  color: #009688 !important; }

.col-green {
  color: #4CAF50 !important; }

.col-light-green {
  color: #8BC34A !important; }

.col-lime {
  color: #CDDC39 !important; }

.col-yellow {
  color: #ffe821 !important; }

.col-amber {
  color: #FFC107 !important; }

.col-orange {
  color: #FF9800 !important; }

.col-deep-orange {
  color: #FF5722 !important; }

.col-brown {
  color: #795548 !important; }

.col-grey {
  color: #9E9E9E !important; }

.col-blue-grey {
  color: #607D8B !important; }

.col-black {
  color: #000000 !important; }

.col-white {
  color: #ffffff !important; }
  
  .item-slider {
  overflow: hidden;
}

@media (min-width: 960px) {
  .item-slider {
    height: 380px;
  }
}

@media (min-width: 769px) and (max-width:959px) {
  .item-slider {
    height: 580px;
  }
}

@media (max-width: 768px) {
  .item-slider {
    height: 300px;
  }
}

.owl-carousel .owl-controls {
  margin: 0;
}
.owl-carousel .owl-controls .owl-buttons div {
  text-indent: 0;
  font-size: 0;
  background: #343331;
  width: 40px;
  height: 75px;
  line-height: 75px;
  color: #ffffff;
  text-align: center;
  -webkit-border-radius: 0 2px 2px 0;
  -moz-border-radius: 0 2px 2px 0;
  border-radius: 0 2px 2px 0;
  opacity: 0.3;
  filter: alpha(opacity=30);
  position: absolute;
  top: 50%;
  margin-top: -75px;
  right: 0;
  left: auto;
  -webkit-transition: all 220ms ease-out;
  -moz-transition: all 220ms ease-out;
  -o-transition: all 220ms ease-out;
  transition: all 220ms ease-out;
}
.owl-carousel .owl-controls .owl-buttons div:before {
  content: '\f105';
  font-family: 'FontAwesome';
  font-size: 32px;
}
.owl-carousel .owl-controls .owl-buttons div.owl-prev {
  -webkit-border-radius: 2px 0 0 2px;
  -moz-border-radius: 2px 0 0 2px;
  border-radius: 2px 0 0 2px;
  left: 0;
  right: auto;
}
.owl-carousel .owl-controls .owl-buttons div.owl-prev:before {
  content: '\f104';
}
.owl-carousel .owl-controls .owl-buttons div:hover {
  text-decoration: none;
  opacity: 1;
  filter: alpha(opacity=100);
}
.owl-carousel:hover .owl-controls .owl-buttons div {
  opacity: 0.6;
  filter: alpha(opacity=60);
}
.owl-carousel .owl-controls .owl-pagination {
  bottom: 10px;
  right: 5px;
  width: auto;
  position: absolute;
}
.owl-carousel .owl-controls .owl-pagination .owl-page span {
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  opacity: 1;
  filter: alpha(opacity=100);
  height: 16px;
  width: 16px;
  border: 2px solid #ff5821;
  background: transparent;
  margin: 2px 4px;
  -webkit-transition: all 220ms ease-out;
  -moz-transition: all 220ms ease-out;
  -o-transition: all 220ms ease-out;
  transition: all 220ms ease-out;
}
.owl-carousel .owl-controls .owl-pagination .owl-page.active span {
  background: #ff5821;
}
.item-slider .item-caption {
  padding: 2em;
}
@media (min-width: 992px) {
  .item-slider .item-caption {
    padding: 0;
  }
}
.item-carousel .item {
  display: block;
  float: left;
  padding: 0 5px;
}
.item-carousel .item-details {
  padding: 1em;
  background: #f3f3f3;
  border-bottom: 1px solid #bfbfbf;
}
.item-carousel .item-details .item-title {
  font-weight: 600;
}
.item-carousel .item-details .item-title a {
  color: #343331;
}
.item-carousel.owl-carousel .owl-controls .owl-buttons div {
  background-color: #ff5821;
}
.date-wrapper {
  color: #ffffff;
  text-align: center;
  margin: 0 0 1em 0;
  border-bottom: 2px solid #e5e5e5;
  width: 40px;
  font-size: 16px;
  display: block;
}
.date-wrapper .date-m {
  padding: 2px;
  text-transform: none;
  font-weight: 100;
  background: #ff5821;
  font-size: 11px;
  line-height: 1;
  display: block;
}
.date-wrapper .date-d {
  font-size: 16px;
  line-height: 1;
  padding: 4px 0;
  background: #ffffff;
  color: #343331;
  display: block;
}
.overlay-wrapper {
  position: relative;
  display: block;
  overflow: hidden;
}
.overlay-wrapper.overlay-wrapper-bordered {
  border-bottom: 5px solid transparent;
}
.overlay-wrapper.overlay-wrapper-bordered:hover {
  border-bottom: 5px solid #e34619;
}
.overlay-wrapper .overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  z-index: 100;
  display: block;
  top: 100%;
  bottom: 0;
  right: 0;
  left: 0;
  -webkit-transition: all 220ms ease-out;
  -moz-transition: all 220ms ease-out;
  -o-transition: all 220ms ease-out;
  transition: all 220ms ease-out;
  text-align: center;
  padding: 5% 0;
  color: white;
}
.overlay-wrapper .overlay.on {
  top: 0;
}
.overlay-wrapper .overlay .overlay-content {
  display: block;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
}
.overlay-wrapper .underlay {
  z-index: 99;
}
.overlay-wrapper:hover .overlay {
  top: 0;
}
.map-wrapper {
  position: relative;
  margin-bottom: 10px;
}
.map-wrapper .btn-map {
  position: absolute;
  bottom: 10px;
  right: 10px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>

  <body class="page-index has-hero">
	<?php include'menu_header.php';?>
    <div class="container" style="margin-bottom:60px;">    
    	<div class="row">
    		<!--div class="col-lg-3 box" style="margin-left:-100px; margin-top:20px;">
            	<?php include'menu.php'; ?>
            </div!-->
            
            <div class="col-lg-10" style="margin-top:25px;">
<?php $page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'login': include "login.php"; break;
	default : include "login.php";	
}
?>
		</div>
	</div>
    
</div>
<?php include'footer.php';?>
	<script src="asset/jquery-1.10.2.min.js"></script>
    <script src="asset/bootstrap.min.js"></script>
    <script src="asset/custom.js"></script>
    
    
<link href="css/datepicker.css" rel="stylesheet">  
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">  


<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/jquery-1.9.1.js"></script>
<link rel="stylesheet" href="css/bootstrap-datepicker.css">

<link rel="stylesheet" href="css/bootstrap-select.min.css">


<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js" charset="UTF-8"></script>


<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/stellar/stellar.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>

<script src="js/color-switcher.js"></script>
<script src="contactform/contactform.js"></script>

        
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript" language="javascript" src="asset/media/js/jquery.dataTables.js"></script>
<script src="plugins/light-gallery/js/lightgallery-all.js"></script>
	<script src="js/pages/medias/image-gallery.js"></script>


<!--script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.slim.min.js"></script!-->
  </body>

</html>
