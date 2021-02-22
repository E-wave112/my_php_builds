<!DOCTYPE html>

<head>
	<title>PHP CALSIO</title>
    <style>
        .form-control {
            display:table;
            margin:auto;
        }
       h1{

           text-align:center;
       }

    </style>
</head>

<?php
$first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];
$math_operator = $_POST['operator'];
$result = '';
//create a php conditional to check for numerical attributes using switch case and perform simple arithmetic operators on them
if (is_numeric($first_number) && is_numeric($second_number)) {
    switch ($math_operator) {
        case "Add":
           $result = $first_number + $second_number;
            break;
        case "Subtract":
           $result = $first_number - $second_number;
            break;
        case "Multiply":
            $result = $first_number * $second_number;
            break;
        case "Divide":
            $result = $first_number / $second_number;
    }
}

?>

<body>
    <div>
	<h1>MY PHP CALCULATOR</h1>
	  <form method="post" class="form-control">
            <p>
            <b>First Number</b><br><br>
                <input type="decimal" name="first_number" id="first_num" required="required" value="<?php echo $first_number; ?>" />
            </p>
            <p>
            <b>Second Number</b><br><br>
                <input type="decimal" name="second_number" id="second_num" required="required" value="<?php echo $second_number; ?>" /> 
            </p>
            <p>
            <b>Resulting Figure</b><br><br>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> 
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>
