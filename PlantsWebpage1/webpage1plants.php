<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylewebpage1.css">
</head>
<body>
	<div class="AlignBoxCenter">
		<div class="title">
			<h1>K'FELY AMIGAS PLANTS</h1>
		</div>
		<div class="LeftBox">
			<div class="bigBoxLeft1">
				<div class="PlantsOrderChoicesBox">
					<center><h3>Plant Lover Summer Promo</h3></center>
					<input type="radio" name="plantsorderchoices" value="indoor" id="indoor" class="selector">
					<label class="selectorLabel" for="indoor">Indoor Plants Bundle</label>	
					<br>
					<input type="radio" name="plantsorderchoices" value="outdoor" id="outdoor" class="selector">
					<label class="selectorLabel" for="outdoor">Outdoor Plants Bundle</label>
				</div>
					<div class=ordersBox>
						<center><h3>Order Details</h3></center>
						<div class=orderslabel>
							<p class="label">
								Price:<br>
								Quantity:<br>
								Discount Amount:<br>
								Discounted Amount:<br>
								Total Bills:<br>
								Total Quantity:<br>
								Cash Given:<br>
								Change:
							</p>
						</div>
						<div class="orderstextfield">
							<input type="text" id="price" name="price" readonly class="textfield"><br>
							<input type="text" id="quantity" name="quantity" class="textfield"><br>
							<input type="text" id="discount_amount" name="discount_amount" readonly class="textfield"><br>
							<input type="text" id="discounted_amount"name="discounted_amount"readonly class="textfield"><br>
							<input type="text" id="total_bills" name="total_bills"readonly class="textfield"><br>
							<input type="text" id="total_quantity" name="total_quantity" readonly class="textfield"><br>
							<input type="text" id="cash" name="cash" class="textfield"><br>
							<input type="text" id="change" name="change"readonly class="textfield">
						</div>
						
				</div>
				
			</div>
			<div class="bigBoxLeft2">
				<div class="indoorBox">
					<h3>Indoor Bundle</h3>
					<label class="container">
						<input type="checkbox" name="plantsorderchoicesindoor" id="indoor1" value="indoor1">
						<label class="checkmark">Sansevieria Bacularis</label>
					</label>
					<p>
						<label class="container">
							<input type="checkbox" name="plantsorderchoicesindoor" id="indoor2" value="indoor2">
							<label class="checkmark">Lucky Bamboo Plants</label>
						</label>
					</p>
				</div>
				<div class="outdoorBox">
					<h3>Outdoor Bundle</h3>
					<p>
						<label class="container">
							<input type="checkbox" name="plantsorderchoicesoutdoor" id="outdoor1" value="outdoor1">
							<label class="checkmark">Corn Plant</label>
						</label>
					</p>
					<p>
						<label class="container">
							<input type="checkbox" name="plantsorderchoicesoutdoor" id="outdoor2" value="outdoor2">
							<label class="checkmark">Areca Palm</label>
						</label>
					</p>
				</div>
				<div class="btnBox">
					<h3>Controls:</h3>
					<button class="button" id="calculate" name="calculate">Calculate</button>
					<button class="button" id="changebutton" name="changebutton">Change</button>
					<button class="button" id="new" name="new">New</button>
					<button class="button" id="print" name="print">Print</button>
					<button class="button" id="exit" name="exit">Exit</button>
				</div>
			</div>


			<div class=summaryBox>
							<div class=inputBox>
								<center>
									<textarea class="receiptBox" id="summary" name="summary" rows="4" cols="50" readonly></textarea><br>
									<label>ORDER SUMMARY</label>
								</center>
							</div>
							<div class=imageBox>
								<center>
									<input type="text" readonly class= productorderImage>
									<label>PLANTS ORDER IMAGE</label>
								</center>
							</div>
			</div>
		</div>
		<div class="bigBoxRight">
			<div class="PlantsChoicesBox">
				<center><h4>Plants Choices</h4></center>
				<label class="product" for="product1">
					<center>
				  		<img src="p1indoor.jpg"><br>
						<input type="checkbox" name="product1"  id="product1">
						<label name="product1label" id="product1label" >Dwarf Sansevieria Snake Plant</label>
					</center>
				</label>
				<label class="product" for="product2">
				<center>	
					<img src="p2indoor.jpg"><br>
					<input type="checkbox" name="product2"  id="product2">
					<label class="checkmark">Peace Lily</label>
				</center>
				</label>
				<label class="product" for="product3">
					<center>
						<img src="p3indoor.jpg"><br>
						<input type="checkbox" name="product3"  id="product3">
						<label class="checkmark">Golden Pothos Plants</label>
					</center>
				</label>
				<label class="product" for="product4">
					<center>
						<img src="p4indoor.jpg"><br>
						<input type="checkbox" name="product4"  id="product4">
						<label class="checkmark">Spider Plant Chlorophytum Comosum</label>
					</center>
				</label>
				<label class="product" for="product5">
					<center>
				  		<img src="p5indoor.jpg"><br>
						<input type="checkbox" name="product5"  id="product5">
						<label class="checkmark">Sansevieria Bacularis</label>
					</center>
				</label>
				<label class="product" for="product6">
					<center>
						<img src="p6indoor.jpg"><br>
						<input type="checkbox" name="product6"  id="product6">
						<label class="checkmark">Zebra Cactus Plant </label>
					</center>
				</label>
				<label class="product" for="product7">
					<center>
						<img src="p7indoor.jpg"><br>
						<input type="checkbox" name="product7"  id="product7">
						<label class="checkmark">Neon Pothos</label>
					</center>
				</label>
				<label class="product" for="product8">
					<center>
						<img src="p8indoor.jpg"><br>
						<input type="checkbox" name="product8"  id="product8">
						<label class="checkmark">Lucky Bamboo Plants</label>
					</center>
				</label>
				<label class="product" for="product9">
					<center>
				  		<img src="p9indoor.jpg"><br>
						<input type="checkbox" name="product9"  id="product9">
						<label class="checkmark">Silver Queen Plant</label>
					</center>
				</label>
				<label class="product" for="product10">
					<center>
						<img src="p10indoor.jpg"><br>
						<input type="checkbox" name="product10"  id="product10">
						<label class="checkmark">Artificial Monstera Plants</label>
					</center>
				</label>
				<label class="product" for="product11">
					<center>
						<img src="p11indoor.jpg"><br>
						<input type="checkbox" name="product11"  id="product11">
						<label class="checkmark">Giganteum</label>
					</center>
				</label>
				<label class="product" for="product12">
					<center>
						<img src="p12indoor.jpg"><br>
						<input type="checkbox" name="product12"  id="product12">
						<label class="checkmark">zz plant</label>
					</center>
				</label>
				<label class="product" for="product13">
					<center>
				  		<img src="p13indoor.jpg"><br>
						<input type="checkbox" name="product13"  id="product13">
						<label class="checkmark">Rhapis Excelsa or Lady Palm</label>
					</center>
				</label>
				<label class="product" for="product14">
					<center>
						<img src="p14indoor.jpg"><br>
						<input type="checkbox" name="product14"  id="product14">
						<label class="checkmark">Livistona Australis</label>
					</center>
				</label>
				<label class="product" for="product15">
					<center>
						<img src="p115indoor.jpg"><br>
						<input type="checkbox" name="product15"  id="product15">
						<label class="checkmark">Aloe Vera</label>
					</center>
				</label>
				<label class="product" for="product16">
					<center>
						<img src="p16.jpg"><br>
						<input type="checkbox" name="product16"  id="product16">
						<label class="checkmark">Pothos</label>
					</center>
				</label>
				<label class="product" for="product17">
					<center>
				  		<img src="p17indoor.jpg"><br>
						<input type="checkbox" name="product17"  id="product17">
						<label class="checkmark">Dracaena</label>
					</center>
				</label>
				<label class="product" for="product18">
					<center>	
						<img src="p18indoor.jpg"><br>
						<input type="checkbox" name="product18"  id="product18">
						<label class="checkmark">Rubber Tree</label>
					</center>
				</label>
				<label class="product" for="product19">
					<center>
						<img src="p19indoor.jpg"><br>
						<input type="checkbox" name="product19"  id="product19">
						<label class="checkmark">Bird’s Nest Fern</label>
					</center>
				</label>
				<label class="product" for="product20">
					<center>		
						<img src="p20indoor.jpg"><br>
						<input type="checkbox" name="product20"  id="product20">
						<label class="checkmark">Selloum</label>
					</center>
				</label>
				<label class="product" for="product21">
				  	<center>
				  		<img src="p21.jpg"><br>
						<input type="checkbox" name="product21"  id="product21">
						<label class="checkmark">Corn Plant</label>
					</center>
				</label>
				<label class="product" for="product22">
					<center>
						<img src="p22.jpg"><br>
						<input type="checkbox" name="product22"  id="product22">
						<label class="checkmark">Areca Palm</label>
					</center>
				</label>
				<label class="product" for="product23">
					<center>	
						<img src="p23.jpg"><br>
						<input type="checkbox" name="product23"  id="product23">
						<label class="checkmark">Begonias</label>
					</center>
				</label>
				<label class="product" for="product24">
					<center>	
						<img src="p24.jpg"><br>
						<input type="checkbox" name="product24"  id="product24">
						<label class="checkmark">Fuchsia</label>
					</center>
				</label>

			</div>
		</div>
	</div>


 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="js/script.js"></script>
 <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
 <script type="text/javascript">

	
// FUNCTIONS FOR THE CHECKBOXES OF ITEMS
	

$(document).ready(function(){
 //for clicking the checkboxes
 document.getElementById("summary").value = "\n";
 //z is for total bills
 var z = 0;
 //y is for total quantity
 var y = 0;

	function price_summary(price,summary) {
		document.getElementById("price").value = price;
		document.getElementById("summary").value += summary;
	}

	function price_summary_empty(summary) {
		document.getElementById("price").value = "";
		var x = document.getElementById("summary").value;
	 	x = x.replace(summary, "");
		document.getElementById("summary").value = x;		
	}

	function calculate(price,quantity){

		 //declaration of variables
		 var discount_amount, discounted_amount, cash, change;


		 // formulation of formula needed for the computation involved.
		 discount_amount = (price * quantity) * 0.25;
		 discounted_amount = (price * quantity) - discount_amount;
		 y += quantity;
		 z += discounted_amount;

		// displaying the javascript variable content to corresponding html input type.
		 document.getElementById("price").value = price;
		 document.getElementById("quantity").value = quantity;
		 document.getElementById("discount_amount").value = discount_amount;
		 document.getElementById("discounted_amount").value = discounted_amount;


	}

	function Change(){

		 //declaration of variables
		 var cash, change;
		 
		 //conversion
		 cash = $("#cash").val() - 0;
		 change = $("#change").val() - 0;
		 
		 //formula
		 change = cash - z;
		 
		 //display
		 document.getElementById("cash").value = cash;
		 document.getElementById("change").value = change;
		 document.getElementById("total_quantity").value = y;
		 document.getElementById("total_bills").value = z;
	}

	 // scripts or codes to be executed when clicking the NEW button
	function NewButton(){
		 document.getElementById("price").value ="";
		 document.getElementById("quantity").value = "";
		 document.getElementById("discount_amount").value = "";
		 document.getElementById("discounted_amount").value = "";
		 
		 document.getElementById("cash").value = "";
		 document.getElementById("change").value = "";


		//product unchecked box 
		 $("#product1").prop( "checked", false );
		 $("#product2").prop( "checked", false );
		 $("#product3").prop( "checked", false );
		 $("#product4").prop( "checked", false );
		 $("#product5").prop( "checked", false );
		 $("#product6").prop( "checked", false );
		 $("#product7").prop( "checked", false );
		 $("#product8").prop( "checked", false );
		 $("#product10").prop( "checked", false );
		 $("#product11").prop( "checked", false );
		 $("#product12").prop( "checked", false );
		 $("#product13").prop( "checked", false );
		 $("#product14").prop( "checked", false );
		 $("#product15").prop( "checked", false );
		 $("#product16").prop( "checked", false );
		 $("#product17").prop( "checked", false );
		 $("#product18").prop( "checked", false );
		 $("#product19").prop( "checked", false );
		 $("#product20").prop( "checked", false );
		 $("#product21").prop( "checked", false );
		 $("#product22").prop( "checked", false );
		 $("#product23").prop( "checked", false );
		 $("#product24").prop( "checked", false );

		 //radiobutton
		 $("#indoor").prop( "checked", false );
		 $("#outdoor").prop( "checked", false );

		 //checkboxes
		 $("#indoor1").prop( "checked", false );
		 $("#indoor2").prop( "checked", false );
		 $("#outdoor1").prop( "checked", false );
		 $("#outdoor2").prop( "checked", false );
	}

  $("#product1").click(function(e){
	 if($(this).prop("checked") == true){
	 	price_summary(250.00,"Dwarf Sansevieria Snake Plant\n");
	 	/*price display when checked
	 	document.getElementById("price").value = 250;
	 	
	 	//add product to summary box/receipt box
		document.getElementById("summary").value += "Dwarf Sansevieria Snake Plant\n";
		*/

	 } else {
	 	price_summary_empty("Dwarf Sansevieria Snake Plant\n");
	 	/*
	 	//price remove when unchecked
	 	document.getElementById("price").value = "";

	 	//remove product to summary/receiptbox
	 	//x is for summary
	 	var x = document.getElementById("summary").value;
	 	x = x.replace("Dwarf Sansevieria Snake Plant\n", "");
	 	document.getElementById("summary").value = x;
	 	*/
	}
});

  $("#product2").click(function(e){
	 if($(this).prop("checked") == true){
	 	price_summary(350.00,"Peace Lily\n");

	 } else {
	 	price_summary_empty("Peace Lily\n");
	 }
});

  $("#product3").click(function(e){
	 if($(this).prop("checked") == true){
	 	price_summary(400.00,"Golden Pothos Plants\n");
	 } else {
	 	price_summary_empty("Golden Pothos Plants\n");
	 }
});

  $("#product4").click(function(e){
	 if($(this).prop("checked") == true){
	 	price_summary(450.00,"Spider Plant Chlorophytum Comosum\n");
	 } else {
	 	price_summary_empty("Spider Plant Chlorophytum Comosum\n");
	 }
});

  $("#product5").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(150.00,"Sansevieria Bacularis\n");
	 } else {
	 	price_summary_empty("Sansevieria Bacularis\n");
	 }
});

  $("#product6").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(280.00,"Zebra Cactus Plant\n");
	 } else {
	 	price_summary_empty("Zebra Cactus Plant\n");
	 }
});

  $("#product7").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(380.00,"Neon Pothos\n");
	 } else {
	 	price_summary_empty("Neon Pothos\n");
	 }
});

  $("#product8").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(650.00,"Lucky Bamboo Plants\n");
	 } else {
	 	price_summary_empty("Lucky Bamboo Plants\n");
	 }
});

  $("#product9").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(480.00,"Silver Queen Plant\n");
	 } else {
	 	price_summary_empty("Silver Queen Plant\n");
	 }
});

  $("#product10").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(750.00,"Artificial Monstera Plants\n");
	 } else {
	 	price_summary_empty("Artificial Monstera Plants\n");
	 }
});

  $("#product11").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(680.00,"Giganteum\n");
	 } else {
	 	price_summary_empty("Giganteum\n");
	 }
});

  $("#product12").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(670.00,"zz plant\n");
	 } else {
	 	price_summary_empty("zz plant\n");
	 }
});

  $("#product13").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(420.00,"Rhapis Excelsa or Lady Palm\n");
	 } else {
	 	price_summary_empty("Rhapis Excelsa or Lady Palm\n");
	 }
});

  $("#product14").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(320.00,"Livistona Australis\n");
	 } else {
	 	price_summary_empty("Livistona Australis\n");
	 }
});

  $("#product15").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(280.00,"Aloe Vera\n");
	 } else {
	 	price_summary_empty("Aloe Vera\n");
	 }
});

  $("#product16").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(350.00,"Pothos\n");
	 } else {
	 	price_summary_empty("Pothos\n");
	 }
});

  $("#product17").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(200.00,"Dracaena\n");
	 } else {
	 	price_summary_empty("Dracaena\n");
	 }
});

  $("#product18").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(1000,"Rubber Tree\n");
	 } else {
	 	price_summary_empty("Rubber Tree\n");
	 }
});

  $("#product19").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(800,"Bird’s Nest Fern\n");
	 } else {
	 	price_summary_empty("Bird’s Nest Fern\n");
	 }
});

  $("#product20").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(850,"Selloum\n");
	 } else {
	 	price_summary_empty("Selloum\n");
	 }
});

  $("#product21").click(function(e){
	 if($(this).prop("checked") == true){
	 	price_summary(1500,"Corn Plant\n");
	 } else {
	 	price_summary_empty("Corn Plant\n");
	 }
});

  $("#product22").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(950,"Areca Palm\n");
	 } else {
	 	price_summary_empty("Areca Palm\n");
	 }
});

  $("#product23").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(780,"Begonias\n");
	 } else {
	 	price_summary_empty("Begonias\n");
	 }
});

  $("#product24").click(function(e){
	 if($(this).prop("checked") == true){
		price_summary(680,"Fuchsia\n");
	 } else {
	 	price_summary_empty("Fuchsia\n");
	 }
});

	$("#calculate").click(function(e) {
	 		e.preventDefault();
	 		var price = $("#price").val() - 0;
		 	var quantity = $("#quantity").val() - 0;
	 		calculate(price,quantity);

	});
	$("#changebutton").click(function(e) {
	 		e.preventDefault();
	 		Change();

	});
	$("#new").click(function(e) {
	 		e.preventDefault();
	 		NewButton();

 	});

		 // scripts or codes to be executed when clicking the Indoor Plants Bundle radiobutton
		 $("#indoor").click(function(){
		 	if($(this).prop("checked") == true){
		 		$("#indoor1").prop( "checked", true );
			 	$("#indoor2").prop( "checked", true );
			 	$("#outdoor1").prop( "checked", false );
			 	$("#outdoor2").prop( "checked", false );
			 	document.getElementById("price").value = 200;
			 	
			 	//add product to summary box/receipt box
				document.getElementById("summary").value += "Sansevieria Bacularis\nLucky Bamboo Plants\n";

				//remove product to summary/receiptbox
			 	var x = document.getElementById("summary").value;
			 	x = x.replace("Corn Plants\nAreca Palm\n", "");
			 	document.getElementById("summary").value = x;
		 	}else {
		 		$("#indoor1").prop( "checked", false );
			 	$("#indoor2").prop( "checked", false );
		 		document.getElementById("price").value = "";
		 		
		 	}
		 });

		 // scripts or codes to be executed when clicking the Outdoor Plants Bundle radiobutton
		 $("#outdoor").click(function(){
		 	if($(this).prop("checked") == true){
		 		$("#outdoor1").prop( "checked", true );
			 	$("#outdoor2").prop( "checked", true );
			 	$("#indoor1").prop( "checked", false );
			 	$("#indoor2").prop( "checked", false );
			 	document.getElementById("price").value = 400;
			 	
			 	//add product to summary box/receipt box
				document.getElementById("summary").value += "Corn Plants\nAreca Palm\n";

				//remove product to summary/receiptbox
			 	var x = document.getElementById("summary").value;
			 	x = x.replace("Sansevieria Bacularis\nLucky Bamboo Plants\n", "");
			 	document.getElementById("summary").value = x;
		 	}
		 	//unchecked product
		 	else {
		 		$("#outdoor1").prop( "checked", false );
			 	$("#outdoor2").prop( "checked", false );
		 		document.getElementById("price").value = "";
		 	}
		 });

});



  
</script>

</body>
</html>