<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		#d1
		{
               border: 3px solid white;
               margin: 1px 500px 1px 151px;
               padding: 20px;
               background-color: #9ACD32;
               border-radius: 10px;

		}

		#d2
		{
               border: 3px solid white;
               margin: 1px 20px 1px 1px;
               padding:5px;
               background-color: #e6ff99;
               border-radius: 5px;


		}
		input[type=submit]{
			height: 30px;
			width: 100px;
			background-color: black;
			color: white;
			border-radius: 40px;
			opacity: .7;
		}


       </style>
</head>
<body>
	<div id="d1">
			<h2>STEP 1: Your Details</h2>
	<form>
		<div id="d2">
			<tr>
				<td><label>Name:</label></td>
				<td><input type="text" name="Name" placeholder="first and last name"></td>
			</tr>
		</div>
		<div id="d2">
			<tr>
				<td><label>Email:</label></td>
				<td><input type="Email" name="Email" placeholder="example@domain.com"></td>
			</tr>
		</div>
		<div id="d2">
			<tr>
				<td><label>Phone:</label></td>
				<td><input type="tel" name="Phone" placeholder="eg. 9879797979"></td>
			</tr>
		</div>
	</form>
	<h2>STEP 2:Delivery Address</h2>
	<form>
		<tr>
			<div id="d2">
				<td><label>Address:</label></td>
				<td>
					<textarea name="Address" rows="5" cols="40"></textarea>
							</tr>
		             </div>
		
			<tr>
				<div id="d2">
                <td><label>Post code:</label></td>
				<td><input type="Number" name="Post code" placeholder=""></td>
			</div>
			</tr>
			
			<tr>
				<div id="d2">
				<td><label>Country:</label></td>
				<td><input type="text" name="Country" placeholder=""></td>
			</div>
			</tr>
			</form>
		
			
			<h2>STEP 3: Card Details</h2>
<form>
	<tr>
		<div id="d2">
		<td>
			<label>Card Type</label>
			<input type="radio" name="card" value="VISA"> <img src="images.jpg" height="30px" width="40px"> VISA
            <input type="radio" name="card" value="AmEx"><img src="americanExcard.webp" height="30px" width="40px"> AmEx 
            <input type="radio" name="card" value="Mastercard"><img src="mastercard.jpg" height="30px" width="40px"> Mastercard
		</td>
	</div>
	</tr>
	
	<div id="d2">
		<label>Card number</label>
		<input type="number" name="Card number">
	</div>

	<div id="d2">
	 <label>Security Code</label>
	 <input type="number" name="Security code">
	</div>
	 
	 <div id="d2">
	 <label>Name on Card</label>
	 <input type="name" name="Name on Card" placeholder="Exact name as on card">
</div>
	
	<div id="d3">
		<br>
	<center>	<input type="submit" name="BUY IT!" value="BUY IT!"></center>
	
	</div>
</form>
</div>		
</body>
</html>