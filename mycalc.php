<!DOCTYPE html>
<html>
<head>
	<title>My Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style>
		body {
            background-color: lightgreen;
        }
		.btn {
			margin-right: 4px;
			margin-top: 8px;
			width: 100px;
            color: black;
            background-color: lightblue;
        }
		.result {
			margin: 6px;
			box-shadow: 20px;
			font-size: 16px;
			background-color: pink;
			padding: 15px; 
			border-radius: 50px; 
		}
		b {
			font-size: 20px;
			color: black;
        }
		.mydiv {
			background-color: purple;
			padding: 10px;
			border: outset;
			border-width: 1px;
			margin: 20px;
			border-radius: 10px;
        }
	</style>
</head>
<body>
	<div class='container'>
		<div class="col-md-5">
			<div class="row shadow p-3 mb-5 bg-white rounded mydiv">
				<h1><b>MY CALCULATOR</b></h1>
				<form method="get" action="" class="">
					<input type="text" class='form-control' name="num1" placeholder="Number 1"><br>
					<input type="text" class='form-control' name="num2" placeholder="Number 2"><br>
					<button class='btn btn-primary' type="submit" name="operation" value="add">Add</button>
					<button class='btn btn-primary' type="submit" name="operation" value="sub">Subtract</button>
					<button class='btn btn-primary' type="submit" name="operation" value="multiply">Multiply</button>
					<button class='btn btn-primary' type="submit" name="operation" value="divide">Divide</button>	
					<button class='btn btn-primary' type="submit" name="operation" value="modulus">Modulus</button>	
					<button class='btn btn-primary' type="submit" name="operation" value="sqrt">Sqrt</button>	
					<button class='btn btn-primary' type="submit" name="operation" value="exp">Exponential</button>
					<button class='btn btn-primary' type="submit" name="operation" value="power">Power</button>
                    <button class='btn btn-primary' type="submit" name="operation" value="log">Log</button>
					<button class='btn btn-primary' type="submit" name="operation" value="log10">Log10</button>
                    <button class='btn btn-primary' type="reset">Clear</button>
				</form>
				<br>
				<div class='result'>
					<center>
						<?php
						if (isset($_GET['operation'])) {
							$num1 = isset($_GET['num1']) ? (float)$_GET['num1'] : 0;
							$num2 = isset($_GET['num2']) ? (float)$_GET['num2'] : 0;
							$operation = $_GET['operation'];
							$result = '';

							switch ($operation) {
								case 'add':
									$result = $num1 + $num2;
									break;
								case 'sub':
									$result = $num1 - $num2;
									break;
								case 'multiply':
									$result = $num1 * $num2;
									break;
								case 'divide':
									$result = $num1 / $num2;
									break;
								case 'modulus':
									$result = $num1 % $num2;
									break;
								case 'sqrt':
									$result = sqrt($num1);
									break;
								case 'exp':
									$result = exp($num1);
									break;
								case 'power':
									$result = pow($num1, $num2);
									break;
								case 'log':
									$result = log($num1);
									break;
								case 'log10':
									$result = log10($num1);
									break;
								default:
									$result = 'Invalid Operation';
									break;
							}

							echo "<b>ANS: " . $result . "</b>";
						}
						?>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
