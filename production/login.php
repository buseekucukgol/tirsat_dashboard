<!DOCTYPE html>
<html>
<head>
	<title>Yönetici Giriş Sayfası</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#giris").click(function(){

			if ($("#eposta").val()==""   ||  $("#sifre").val()==""){
				alert ("Lütfen bilgileri giriniz");
			}else{

			$.post("loginx.php",
			{
				eposta:$("#eposta").val(),
				sifre:$("#sifre").val()
			},
			function(data,status){
				if(data==1){
					$(location).attr("href","index.php");
				}else{
					alert("Kullanici adınız veya şifreniz yanlış");
				}
			}
		);
		}
	});
});
</script>
</head>
<body>
	<img src="img/tirsat.png" class="logo" >
<label class="adminLabel"><b> Tır | Sat </b><small>Yönetici</small></label><br>
<div class="girisEkrani"><br><br>
<label class="girisYazi">Giriş İçin Bilgilerinizi Giriniz</label>
<br> 
<input type="email" id="eposta" placeholder="Eposta giriniz.." required="">
<br>
<input type="password" id="sifre" placeholder="Şifre giriniz.." required="">
<br>
<button id="giris">Giriş</button>
<br>

</div>
</body>
</html>
