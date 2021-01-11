<!DOCTYPE html>
<html>
<head>
	<title>Order Form</title>
	<link rel="stylesheet" type="text/css" href="css/styles5.css">
</head>
<body>
<!--Process Form-->
<?php
	echo "<p><h1>Triple Wombo Restaurant</h1></p>";

	$burger = array();
	$pizza = array();
	$fries = '';
	$drink = '';

	if (isset($_POST['submit']))
	{
		$pass = 1;
		
		if (!isset($_POST['burger']) || !is_array($_POST['burger']))
		{
			$pass = 0;
		}
		else
		{
			$burger = $_POST['burger'];
		}
		if (!isset($_POST['pizza']) || !is_array($_POST['pizza']))
		{
			$pass = 0;
		}
		else
		{
			$pizza = $_POST['pizza'];
		}
		if (!isset($_POST['fries']) || $_POST['fries'] == '')
		{
			$pass = 0;
		}
		else
		{
			$fries = $_POST['fries'];
		}
		if (!isset($_POST['drink']) || $_POST['drink'] == '')
		{
			$pass = 0;
		}
		else
		{
			$drink = $_POST['drink'];
		}
		if (!isset($_POST['tc']) || $_POST['tc'] == '')
		{
			$pass = 0;
		}
		if ($pass)
		{
			printf('<p>Your Orders<br><br>
			Burger: %s<br>
			Pizza: %s<br>
			Fries: %s<br>
			Drink: %s<br><br>
			Thank you for your order.<br>
			Enjoy your meal.</p>',
			
			htmlspecialchars(implode(' ', $_POST['burger'])),
			htmlspecialchars(implode(' ', $_POST['pizza'])),
			htmlspecialchars($_POST['fries']),
			htmlspecialchars($_POST['drink']));						
		}		
	}
?>

<form action="OrderForm.php" method="POST">
	<Label>Burger:</Label><br>
		<select name="burger[]" multiple size="3">
		<option value="Cheesy Bacon"  <?php
			if (in_array('Cheesy Bacon', $burger))
			{
				echo 'selected';
			}	
		?>>Cheesy Bacon</option>

		<option value="Tonkatsu" <?php
			if (in_array('Tonkatsu', $burger))
			{
				echo 'selected';
			}	
		?>>Tonkatsu</option>

		<option value="Champu" <?php
			if (in_array('Champu', $burger))
			{
				echo 'selected';
			}	
		?>>Champu</option>

		</select><br><br>

	<Label>Pizza:</Label><br>
		<select name="pizza[]" multiple size="3">
		<option value="Cheese Daisuki"  <?php
			if (in_array('Cheese Daisuki', $pizza))
			{
				echo 'selected';
			}	
		?>>Cheese Daisuki</option>

		<option value="Bacon Daisuki" <?php
			if (in_array('Bacon Daisuki', $pizza))
			{
				echo 'selected';
			}	
		?>>Bacon Daisuki</option>

		<option value="Niku Daisuki" <?php
			if (in_array('Niku Daisuki', $pizza))
			{
				echo 'selected';
			}	
		?>>Niku Daisuki</option>

		</select><br><br>

	<Label>Fries:</Label>
		<input type="radio" name="fries" value="Original"<?php
			if ($fries == 'Original')
			{
				echo 'checked';
			}
		?>>Original

		<input type="radio" name="fries" value="Spicy"<?php
			if ($fries == 'Spicy')
			{
				echo 'checked';
			}
		?>>Spicy<br><br>

	<Label>Drink:</Label>
	<select name="drink">
		<option value="Iced tea" <?php
			if ($drink =='Iced tea')
				{
					echo 'selected';
				}
		?>>Iced tea</option>

		<option value="Coca Cola" <?php
			if ($drink =='Coca Cola')
				{
					echo 'selected';
				}
		?>>Coca Cola</option>

		<option value="Royal" <?php
			if ($drink =='Royal')
				{
					echo 'selected';
				}
		?>>Royal</option>
		<option value="Sprite" <?php
			if ($drink =='Sprite')
				{
					echo 'selected';
				}
		?>>Sprite</option>
	</select><br><br><br>	
	
	<input type="checkbox" name="tc" value="ok">Confirm order<br><br>

	<input type="submit" name="submit" value="Order Now">
	
</form>
</body>
</html>	