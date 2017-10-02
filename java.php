<!DOCTYPE html>
<html>
	<head> 
		<title>Javascript</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/java.css">

	<body>
		<div class="container">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				    <div class="navbar-header">
				    <img src="img/download.png"> 
				    <a class="navbar-brand" href="#"><em>Wendy's Exchange</em></a>
				    </div>
				    <ul class="nav navbar-nav" style="font-size:18px">
				      <li class="active"><a href="#">Home</a></li>
				      <li><a href="#exchange">Exchange Rates</a></li>
				      <li><a href="#">Currency Converter</a></li>
				      <li><a href="#">Currency List</a></li>
				    </ul>
			  </div>
			</nav>
			
			<div class="content">
				<div class="row first">
				<div class="col-sm-6">
				<h2><em>Foreign Exchange Rates</em></h2>
				<p>Use this form to convert a specific amount from one currency to another using the most recent exchange rates available on this site.
Simply select a primary currency, an amount and a second currency to convert it against. Calculated foreign exchange rates are based on our most recent daily currency market update.</p>
				</div>
				<div class="col-sm-6">
				<h2><em>Currency Converter</em></h2>
				<output id="demo"></output>
				<div class="form-inline">
					<div class="form-group">
						<label for="amount" style="font-size:18px">Input Amount in Naira:</label>
						<input type="text" class="form-control" id="value" placeholder="Amount in Naira">
					</div>
					<div class="btn group">
						<button style="background-color:#ff6600" type="submit" class="btn" id="result">Dollar equivalence $</button><br>
						<br><button style="background-color:#ff6600" type="button" type="submit" class="btn" id="result2">Pounds equivalence</button><br>
						<br><button style="background-color:#ff6600" type="button" type="submit" class="btn" id="result3">Euro equivalence</button><br>
						<br><button style="background-color:#ff6600" type="button" type="submit" class="btn" id="result4">Yen equivalence</button>
					</div>
				</div>
				</div>
				</div>

				<div class="row second">
					<div class="col-sm-6">
						<h2 style="font-size:29px"><em>Fees for Exchanging Currency?</em></h2>
						<p>Banks and other institutions charge consumers a fee for currency conversions. Their fee is built into the exchange rate which is why your real rate will be different from these market rates shown above. Consumers can typically expect to pay between 2 and 4% when exchanging currency in small amounts "over the counter". You'll likely get the best rate from your bank or a foreign exchange company. Converting larger amounts will generally yield better rates though discounts are not generally available for exchanged amounts below $10,000.</p>
					</div>
					<div class="col-sm-6">
						<h2><em>Where is the Forex Market?</em></h2>
						<p>Most of currency exchange takes place between international banks. There is no central exchange like those used to trade equities. The largest three foreign exchange trading centers are in New York, Tokyo and London, of which London is the largest. Other large trading centers are located in Hong Kong, Singapore, Paris, Frankfurt and elsewhere. Since these major centers are located around the world, the FOREX market can operate 24 hours a day during the week.</p>
					</div>
					</div>

	
	<section id="exchange">
		<div class="container">
		  <h2><em>Exchange Table</em></h2>
		  <table class="table" style="font-size:18px">
		    <thead>
		      <tr>
		        <th>Currency</th>
		        <th>Buying(NGN)</th>
		        <th>Selling(NGN)</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>US DOLLAR</td>
		        <td>304.85</td>
		        <td>305.85</td>
		      </tr>
		      <tr>
		        <td>POUNDS STERLING</td>
		        <td>412.8888</td>
		        <td>414.2432</td>
		      </tr>
		      <tr>
		        <td>EURO</td>
		        <td>366.0029</td>
		        <td>367.2035</td>
		      </tr>
		      <tr>
		        <td>YEN</td>
		        <td>2.739</td>
		        <td>2.748</td>
		      </tr>
		    </tbody>
		  </table>
		</div>
		</section>
		</div>
</div>

<footer>
	<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				    <div class="navbar-header">
				    <a style="font-size:13px" class="navbar-brand" href="#"><em>Get the Free Currency Converter for Your Website</em></a>
				    </div>
				    <ul class="nav navbar-nav" style="font-size:13px">
				      <li><a href="#">Privacy Policy and Disclaimer</a></li>
				      <li><a href="#">Existing Users</a></li>
				      <li><a href="#">Currency Converter</a></li>
				      <li><a href="#">Contact Us</a></li>
				    </ul>
			  </div>
			</nav>
</footer>
			<script type="text/javascript">
			var input1 = document.getElementById("value");
			var result = document.getElementById("result");
			result.onclick = function(){
			//console.log(isNaN(input1.value));
				if (isNaN(input1.value) == 1) {
				alert("input a number");
				}else{
					
				document.getElementById("demo").innerHTML = ((input1.value / 305.35).toFixed(2));
				};
			}

			var result2 = document.getElementById("result2");
			result2.onclick = function(){
				if (isNaN(input1.value) == 1) {
				alert("input a number");
				}else{
					
				document.getElementById("demo").innerHTML = ((input1.value / 413.57).toFixed(2));
				};
			}

			var result3 = document.getElementById("result3");
			result3.onclick = function(){
			
				if (isNaN(input1.value) == 1) {
				alert("input a number");
				}else{
					
				document.getElementById("demo").innerHTML = ((input1.value / 366.60).toFixed(2));
				};
			}

			var result4 = document.getElementById("result4");
			result4.onclick = function(){
			
				if (isNaN(input1.value) == 1) {
				alert("not a number");
				}else{
					
				document.getElementById("demo").innerHTML = ((input1.value / 2.74).toFixed(2));
				};
			}
			</script>

			

	</body>
</html>