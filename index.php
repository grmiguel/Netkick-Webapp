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
	
	<form method="post" >
		
	<p id="iprow">
		
		
		<label for="ip1">IP:</label>
		</BR>
		<input type="text" name="ip1" class="ip" id="ip1" onkeyup="updateip(ip1)">
		
		<input type="text" name="ip2" class="ip" id="ip2">
		<input type="text" name="ip3" class="ip" id="ip3">
		<input type="text" name="ip4" class="ip" id="ip4">
		
	</p>
	
	<p id="ipbinrow">
		
		
	
		<label type="text" class=ipbin id="ipbin1">00000000</label>
		<label type="text" class=ipbin id="ipbin2">00000000</label>
		<label type="text" class=ipbin id="ipbin3">00000000</label>
		<label type="text" class=ipbin id="ipbin4">00000000</label>
		
	</p>
		

		
	</form>



	

<a href="http://www.linkedin.com/in/grmiguel">
      
          <img src="http://www.linkedin.com/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View Miguel Gutiérrez Rodríguez's profile on LinkedIn">
        
	  
	  
	  
	</a>
	
	
	<script type="text/javascript">
	function updateip(whatlabel) {
		
		
		var labeltoupdate="ipbin1";
		
		//if (whatlabel == ip1) labeltoupdate="ipbin1";
	
		//var test = binary(document.getElementById("ip1").value)
	    document.getElementById(labeltoupdate).innerHTML = binary(document.getElementById("ip1").value);
	}
	
	
	function binary(value) {
		if (value>0) var result=1;
		else return 0;
		
		for (;value>1;value=Math.floor(value/2)){
			result=result*10
			if (value%2!=0) result++;
		}
		console.log("=");
	  	console.dir(result);
		return result;
	}
	
	
	</script>
	
	
</body>