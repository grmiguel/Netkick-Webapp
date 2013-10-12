


function updateip (whatlabel,event) {
	
	var decimal=document.getElementById(whatlabel).value; //decimal value that the user enters

	if (decimal.length>3){ //block numbers more than 3 digits long
		document.getElementById(whatlabel).value=decimal.substr(0,3);
	}
	else if (decimal>255){ //block numbers bigger than 255
		document.getElementById(whatlabel).value=decimal.substr(0,2);
	}
	else if (whatlabel=='ip1'){ //translate to binary
			document.getElementById("ipbin1").innerHTML = binary(decimal); //update binary value
			if (decimal.length==3 || decimal>25){
				document.getElementById("ip2").focus();//jump to next ip
			}				
	}
	else if (whatlabel=='ip2'){
		if(event.which == 8 && decimal==""){
			document.getElementById("ip1").focus(); //go back to previus ip
		}
		else{
			document.getElementById("ipbin2").innerHTML = binary(decimal); //update binary value
			if (decimal.length==3 || decimal>25){
				document.getElementById("ip3").focus(); //jump to next ip
			}
		}
	} 
	else if (whatlabel=='ip3'){
		if(event.which == 8 && decimal==""){
			document.getElementById("ip2").focus(); //go back to previus ip
		}
		else{
			document.getElementById("ipbin3").innerHTML = binary(decimal); //update binary value
			if (decimal.length==3 || decimal>25){
				document.getElementById("ip4").focus();//jump to next ip
			}
		}
	} 
	else if (whatlabel=='ip4'){
		if(event.which == 8 && decimal==""){
			document.getElementById("ip3").focus(); //go back to previus ip
		}
		else{
			document.getElementById("ipbin4").innerHTML = binary(decimal); //update binary value
		}
	}   
	
	var result=parseInt(document.getElementById(whatlabel).value,10);
	if (result>=0) document.getElementById(whatlabel).value=result;
	else document.getElementById(whatlabel).value="0";
	
}

function binary(value) {
	if (value>0) var result=1;
	else return "00000000";
	for (;value>1;value=Math.floor(value/2)){
		result=result*10
		if (value%2!=0) result++;
	}
	result=result.toString();
	if (result.length<8){
		for (var i=result.length;i<8;i++){
			result="0"+result;
		}	
	}
	return result;
}

function focusadquired(whatlabel){
	
	
	
	if (whatlabel=="ip2"){
		if (document.getElementById("ip1").value==""){
			document.getElementById("ip1").focus();
		}
	}
	else if (whatlabel=="ip3"){
		if (document.getElementById("ip1").value==""){
			document.getElementById("ip1").focus();
		}
		else if (document.getElementById("ip2").value==""){
			document.getElementById("ip2").focus();
		}
	}
	else if (whatlabel=="ip4"){
		if (document.getElementById("ip1").value==""){
			document.getElementById("ip1").focus();
		}
		else if (document.getElementById("ip2").value==""){
			document.getElementById("ip2").focus();
		}
		else if (document.getElementById("ip3").value==""){
			document.getElementById("ip3").focus();
		}
	}
	
	
}
