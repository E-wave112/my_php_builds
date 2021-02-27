<!DOCTYPE html>

<head>
	<title>PHP FORM</title>
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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email'];
$password = $_POST['password'];
$click_btn = $_POST['click'];
$first = '';
$last = ''; 
$email = '';
$pass = '';

//create a php conditional using the switch case method for which kind of conditional the user makes
    switch ($click_btn) {
        case "Submit":
            $first = $first_name;
            $last = $last_name;
            $email  = $email_address;
            $pass = $password;
            break;

        case "clear":
            $first_name = '';
            $last_name = '';
            $email_address = '';
            $password = '';
            break;
       
    }


?>

<body>
    <div>
	<h1>MY PHP FORMS</h1>
	  <form method="post" class="form-control">
            <p>
            <b>First Name</b><br><br>
                <input type="text" name="first_name" id="first_name" required="required" value="<?php echo $first_name; ?>" />
            </p>
            <p>
            <b>Last Name</b><br><br>
                <input type="text" name="last_name" id="last_name" required="required" value="<?php echo $last_name; ?>" /> 
            </p>

            <p>
            <b>Email Address</b><br><br>
                <input type="email" name="email" id="email" required="required" value="<?php echo $email_address; ?>" /> 
            </p>

            <p>
            <b>Password</b><br><br>
                <input type="password" name="password" id="password" minlength = "8" required="required" value="<?php echo $password; ?>" /> 
            </p>

            <input type="submit" name="click" value="clear" />
            <input type="submit" name="click" value="Submit" />
            <br><br>
        
            <b>Data Collected</b><br><br>
            <ul>
            <li> <?php echo $first; ?> </li>
            <li> <?php echo $last; ?></li>
            <li> <?php echo $email; ?></li>
            <li> <?php echo $pass; ?> </li>
            
            </ul>

	  </form>
    </div>
</body>
</html>