

<?php
require('code.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

    <title></title>
  </head>
  <body>
	
	<div class="container">
	  <div class="row">
		<div class="col-sm-6">
		  <h3>Column 1</h3>
		</div>
		<div class="col-sm-6">
		  <h3>Column 2</h3>
		</div>
		
	  </div>
	</div>
	
	<div class="col-md-12">
		<div class="col-md-6" style="margin-top:20px;">
			<form id="putIn" action="forms/action.php" method="post">

					<input type="date" name="date">
					<select name="holiday">
						<option value="">Select Holiday</option>
						<option value="Christmas">Christmas</option>
						<option value="Valentines">Valentines</option>
						<option value="Easter">Easter</option>
					</select><br>
					<textarea style="margin-top:20px;" name="freetext" rows="1" cols="25"></textarea><br>
					<input type="submit" value="submit">

			</form>
		</div>
	</div>
			<div class="col-md-6" style="margin-top:40px;">
				<form id="pullOut" action="forms/retrieve.php" method="post">

					<input type="date" name="date">
					<select name="holiday">
						<option value="">Select Holiday</option>
						<option value="Christmas">Christmas</option>
						<option value="Valentines">Valentines</option>
						<option value="Easter">Easter</option>
					</select><br>
					<input type="submit" value="retrieve">

				</form>
			</div>

		</div>


    <div id="container" class="col-md-10 offset-md-1" align='center'>
      <h1 align="center" class="graphTitle"></h1>

			<select id="itemSelection">
				<option value="beverages">Beverages</option>
				<option value="donuts">Donuts</option>
				<option value="bagels">Bagels</option>
			</select>

			<select id="storeSelection">
				<option value="allStores">All Stores</option>
				<option value="Foxchase">Foxchase</option>
				<option value="Stonewall">Stonewall</option>
        <option value="Warrenton">Warrenton</option>
        <option value="Bristow">Bristow</option>
        <option value="BJ">BJ</option>
        <option value="Heritage">Heritage</option>
        <option value="Eastgate">Eastgate</option>
			</select>

    </div>

    <div id="dateContainers" align='center' style="margin-bottom: 20px;">

      <select id="dateSelection">
        <option value=30>Last 30 Days</option>
        <option value=60>Last 60 Days</option>
        <option value="custom">Custom..</option>
      </select><br>

      <div style="margin-top:10px;">
        <label id="from" hidden>From: <input type="date"></label>
        <label id="to" hidden> To: <input type="date"></label>
        <input id="submitDates" type="submit" value="Submit Dates" hidden>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<script src="js/chartManipulation.js"></script>

    <script src="main.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
