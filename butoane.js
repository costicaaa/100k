	var sum = 0;
	function adunare1() {
		 var a = (Math.round(Math.random() * 99 + 1));
		 sum = sum + a; 
		 document.getElementById("demo").innerHTML = sum;
		if (sum > 100000) { 
			 aratare(); 
		}
		if (sum == 100000) {
			$('#myModal').modal('toggle');
			aratare();
			times_won = timws_won + 1; 
		}
	}
	function adunare2() {
		var b = (Math.round(Math.random() *400 + 100 ));
		sum = sum + b;
		document.getElementById("demo").innerHTML = sum;
		if (sum > 100000) { 
			aratare(); 
		}
		if (sum == 100000) {
			$('#myModal').modal('toggle');
			aratare();
		}
	}
	function adunare3() {
		var c = (Math.round(Math.random() *500 + 500));
		sum = sum + c;
		document.getElementById("demo").innerHTML = sum;
		if (sum > 100000) { 
			aratare(); 
		}
		if (sum == 100000) {
			$('#myModal').modal('toggle');
			aratare();
		}
	}
	function adunare4() {
		var d = (Math.round(Math.random() *4000 + 1000 ));
		sum = sum + 100000;
		document.getElementById("demo").innerHTML = sum;
		if (sum > 100000) { 
			aratare(); 
		}
		if (sum == 100000) {
			$('#myModal').modal('toggle');
			aratare();
			times_won = timws_won + 1; 
		}
	}

	function riload() { 
		location.reload();
	}
	function aratare() {
		document.getElementById("b1").style.visibility="visible";
	}
	
