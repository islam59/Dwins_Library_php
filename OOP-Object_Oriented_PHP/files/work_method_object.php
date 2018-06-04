<?php 
	//02. work with method & object..
?>
<?php include 'classes/functions.php'; ?>

	<form action="index.php" method="post">
		<table>
			<tr>
				<td>Enter Number 1 : </td>
				<td><input type="number" name="num1" /></td>
			</tr>
			<tr>
				<td>Enter Number 2 : </td>
				<td><input type="number" name="num2" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="calculate" value="Calculate"/></td>
			</tr>
		</table>
	</form>
<br/><hr/><br/>
<?php 
	if(isset($_POST['calculate'])){
		$numOne = $_POST['num1']; 
		$numTwo = $_POST['num2']; 

		if(empty($numOne) or empty($numTwo)){
			echo "<span style='color:red'>Field Must Not Empty ! </span></br/>"; 
		}

		$cal = new functions; 
		$cal -> add($numOne, $numTwo); 
		$cal -> sub($numOne, $numTwo); 
		$cal -> mul($numOne, $numTwo); 
		$cal -> div($numOne, $numTwo); 
	}
?>