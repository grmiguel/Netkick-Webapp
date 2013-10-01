function updatebinary(whatlabel) {
	var decimal;
	if (whatlabel=='ip1') decimal=document.getElementById("ip1").value; whatlabel='ipbin1';
    document.getElementById(whatlabel).innerHTML = binary(decimal);
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
