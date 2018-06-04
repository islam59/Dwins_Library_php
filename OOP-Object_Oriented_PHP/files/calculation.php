<!-- Calculation with class, method & object example..-->
<form action="" method="post">
	<table>
		<tr>
			<td>Enter The First Number</td>
			<td><input type="number" name="num1"></td>
		</tr>
		<tr>
			<td>Enter The Second Number</td>
			<td><input type="number" name="num2"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="Calculation"></td>
		</tr>
	</table>
</form>
<?php 
	if(isset($_POST['calculation'])){
		$numOne = $_POST['num1'];
		$numTwo = $_POST['num2'];

		if(empty($numOne) or empty($numTwo)){
			echo "<span style='color:red;'>Field Must Not Empty</span><br/>"; 
		}else{
			echo "First Number is: ".$numOne." & Second Number is: ".$numTwo."<br/>"; 

			$cal = new Calculation;
			$cal->add($numOne,$numTwo); 		
			$cal->sub($numOne,$numTwo); 
			$cal->mul($numOne,$numTwo); 
			$cal->div($numOne,$numTwo); 
		}


	}
?>