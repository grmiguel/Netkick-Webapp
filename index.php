<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Netkick, The Network Calculator</title>

	<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="style.css" type="text/css" media="screen">
  
</head>
<body>
	
	<div id="titlearea" >
		<h1  >Netkick</h1>
	</div>
	
	<form id="iprows" method="post" >
		
	<p id="iprow">
		
		
		<label for="ip1" id="iptitle">IP Adress:</label>
		</BR>
		<input type="text" name="ip1" class="ip" id="ip1" onkeyup='updatebinary("ip1")'>
		
		<input type="text" name="ip2" class="ip" id="ip2" onkeyup='updatebinary("ip2")'>
		.
		<input type="text" name="ip3" class="ip" id="ip3" onkeyup='updatebinary("ip3")'>
		.
		<input type="text" name="ip4" class="ip" id="ip4" onkeyup='updatebinary("ip4")'>
		
	</p>

	
	<p id="ipbinrow">
		
		
	
		<label type="text" class="ipbin" id="ipbin1">00000000</label>
		.
		<label type="text" class="ipbin" id="ipbin2">00000000</label>
		.
		<label type="text" class="ipbin" id="ipbin3">00000000</label>
		.
		<label type="text" class="ipbin" id="ipbin4">00000000</label>
		
	</p>
		

		
	</form>



	

<a href="http://www.linkedin.com/in/grmiguel">
      
          <img src="http://www.linkedin.com/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View Miguel Gutiérrez Rodríguez's profile on LinkedIn">
        
	  
	  
	  
	</a>
	
	
	<script src="binary.js"></script>
	
</body>