<?php

session_start();
ob_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hosgeldiniz </title>
	<meta charset="utf-8">pp
	<style type="text/css">
	body {
background-color:#red ;
background-repeat: repeat;
background-attachment: scroll;
background-color: white;s
background-position: top-left;
}
		#wrapper{
			margin: auto;
			width:800px;
		}
		#footer{
			width: 800px;
			height: 300px;
		}
		input[type=text] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}

.btn1 {
background-color:#44c767;
border:1px solid #18ab29;
display:inline-block;
cursor:pointer;
color:#ffffff;
font-family:Arial;
font-size:19px;
padding:20px 63px;
text-decoration:none;
text-shadow:0px 1px 0px #2f6627;
}
.btn1:hover {
background-color:#5cbf2a;
}
.btn1:active {
position:relative;
top:1px;
}
body{ color:white; 
		font-size: 20px;
		}
	</style>
	<script type="text/javascript">
		function uyarı(){ confirm("Çıkmak istediğinize emin misiniz.");}
	</script>

</head>
<body bgcolor="black">
<div id="logo"><img src="logoo.png" width="200"></div>
<div id="wrapper">
	<div id="footer" style="float: left;"><img width=800px height="250" src="h.gif"></div>
<script type="text/javascript">
	alert("hoşgeldiniz");
</script>

<div id="wrapper">

	<div id="article">
	<?php 

		if(isset($_SESSION["kullanici"]))
		{
			echo '<h3 style="color:white;">Hoşgeldiniz '.$_SESSION["kullanici"].'</h3>';
			echo '<a href="index.php">Anasayfa İçin Tıklayınız.</a><br>';
	        echo '<a href="kullanici.php">Kullanıcılar için tıkla</a><br>';
	        echo '<a href="cikis.php" onclick="uyarı();">Çıkış için tıkla</a>';
	        
			
		}
		else {
			echo 
			'<br><br>
			<form action="giris.php" method="POST" name="form1"><br>
				<font color="green">kullanıcı adı:<input type="text" name="kullanici"><br>
                <font color="green">şifre &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :<input type="password" name="sifre"><br><br>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button class="btn1">Giris</button>

			</form><br><br>';

		
		}

	?>
		
	</div>
</div>

</body>
</html>