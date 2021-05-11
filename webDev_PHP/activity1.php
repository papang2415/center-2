

<!DOCTYPE html>
<html>

<head>
    <title>Simple Birthday Selector and Save to MySQL Database using PHP/MySQLi</title>
</head>

<body>
    <form method="POST">
        <h2>Birthday Form</h2>
        Name: <input type="text" name="your_name" required><br><br>
        Birthday:
        <select name="month">
            <option value="0">Select Month</option>
            <?php
		for( $m = 1; $m <= 12; $m++ ) {
			$num = str_pad( $m, 2, 0, STR_PAD_LEFT );
            $month =  date("F", mktime(0, 0, 0, $m, 1));
			?>
            <option value="<?php echo $num; ?>"><?php echo $month; ?></option>
            <?php
		}
	?>
        </select>
        <select name="day">
            <option value="0">Select Day</option>
            <?php
		for( $a = 1; $a <= 31; $a++ ) {
			?>
            <option value="<?php echo $a; ?>"><?php echo $a; ?></option>
            <?php
		}
	?>
        </select>
        <select name="year">
            <option value="0">Select Year</option>
            <?php
		for( $y = 1990; $y <= 2100; $y++ ) {
			?>
            <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
            <?php
		}
	?>
        </select>
        <br><br>
        <input type="submit" value="Submit" name="add_birthday">
    </form><br>
    <?php
	if (isset($_POST['add_birthday'])){
 
		if ($_POST['day']==0 or $_POST['month']==0 or $_POST['year']==0){
			echo "Please Complete the Birthday Selection";
		}
		else{
		$name=$_POST['your_name'];
		$m=$_POST['month'];
		$d=$_POST['day'];
		$y=$_POST['year'];

		}
	}
?>
\

</body>

</html>