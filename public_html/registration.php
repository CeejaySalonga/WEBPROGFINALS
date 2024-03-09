<?php
    // Initialize variables
    $LastName = isset($_POST["LastName"]) ? $_POST["LastName"] : "";
    $FirstName = isset($_POST["FirstName"]) ? $_POST["FirstName"] : "";
    $email = isset($_POST["Email"]) ? $_POST["Email"] : "";
    $selectedCountry = isset($_POST["Country"]) ? $_POST["Country"] : "";
    $selectedRegion = isset($_POST["Region"]) ? $_POST["Region"] : "";
    $street = isset($_POST["Street"]) ? $_POST["Street"] : "";
    $subdivision = isset($_POST["Subdivision"]) ? $_POST["Subdivision"] : "";
    $baranggay = isset($_POST["Baranggay"]) ? $_POST["Baranggay"] : "";
    $city = isset($_POST["City"]) ? $_POST["City"] : "";
    $contact = isset($_POST["Contact"]) ? $_POST["Contact"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $RepeatPassword = isset($_POST["repeat_password"]) ? $_POST["repeat_password"] : "";

    $errors = array();

    // Check if the form is submitted
    if(isset($_POST["submit"])){
    
        // Validate if all fields are empty
        if (empty($LastName) || empty($FirstName) || empty($email) || empty($password) || empty($RepeatPassword) || empty($selectedCountry) || empty($selectedRegion) || empty($street) || empty($subdivision) || empty($baranggay) || empty($city) || empty($contact)) {
            array_push($errors, "All fields are required!");
        }
    
        // Validate if the email is not validated
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
    
        // Password should not be less than 8 characters
        if(strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters long");
        }
    
        // Check if password is the same
        if ($password != $RepeatPassword) {
            array_push($errors, "Password does not match");
        }

        // Validate contact to allow only numbers and spaces
        if (!preg_match("/^[0-9 ]+$/", $contact)) {
            array_push($errors, "Contact should only contain numbers and spaces");
        }

        require_once "database.php";
        $sql = "SELECT * FROM tbl_user WHERE USER_EMAIL = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount > 0){
            array_push($errors, "Email Already Exists!");
        }

        if (count($errors) > 0) {
            $errorMessages = implode("<br>", $errors);
            echo "<script>
                    document.getElementById('error-popup').innerHTML = '$errorMessages';
                    document.getElementById('error-popup').style.display = 'block';
                    document.getElementById('success-popup').style.display = 'none'; // Hide success popup
                    setTimeout(function() {
                        document.getElementById('error-popup').style.display = 'none';
                    }, 1500); // 1500 milliseconds = 1.5 seconds
                </script>";
        } else {
            // Insert to database
            require_once "database.php";
            $sql = "INSERT INTO tbl_user (USER_FNAME, USER_LNAME, USER_EMAIL, USER_PASSWORD, USER_COUNTRY, USER_REGION, USER_STREET, USER_SUBDIVISION, USER_BARANGGAY, USER_CITY, USER_CONTACT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $preparestmt = mysqli_stmt_prepare($stmt, $sql);
            if ($preparestmt) {
                mysqli_stmt_bind_param($stmt, "sssssssssss", $FirstName, $LastName, $email, $passwordHash, $selectedCountry, $selectedRegion, $street, $subdivision, $baranggay, $city, $contact);
                mysqli_stmt_execute($stmt);
                echo "<script>
                        document.getElementById('error-popup').style.display = 'none'; // Hide error popup
                        document.getElementById('success-popup').innerHTML = 'You are Registered Successfully!';
                        document.getElementById('success-popup').style.display = 'block';
                        setTimeout(function() {
                            document.getElementById('success-popup').style.display = 'none';
                        }, 1500); // 1500 milliseconds = 1.5 seconds
                    </script>";
            } else {
                echo "<script>alert('Something went wrong!');</script>";
            }
        }
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/geodatasource-countryflag.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Strait|Chonburi">
    <link rel="stylesheet" href="build/css/intlTelInput.css" />
    <link rel="gettext" type="application/x-po" href="languages/en/LC_MESSAGES/en.po" />
    
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
</head>
<body>
<div id="error-popup" class="alert alert-danger" style="display: none;"></div>
<div id="success-popup" class="alert alert-success" style="display: none;"></div>

<div class="container">


<!-- Registration Form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="registrationform">
        <div class="Signup">SIGNUP</div>
        <div class="form-group">
            <input type="text" class="form-control" name="FirstName" placeholder="First Name" value="<?php echo $FirstName; ?>">
            <input type="text" class="form-control" name="LastName" placeholder="Last Name" value="<?php echo $LastName; ?>">
        </div>
        <div class="form-group">
            <select id="countrySelection" class="form-control gds-cr gds-countryflag" country-data-region-id="gds-cr-one" data-language="en" name="Country">
                <?php echo isset($selectedCountry) ? "<option value=\"$selectedCountry\" selected>$selectedCountry</option>" : ""; ?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="gds-cr-one" name="Region">
                <?php echo isset($selectedRegion) ? "<option value=\"$selectedRegion\" selected>$selectedRegion</option>" : ""; ?>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Street" placeholder="Street Address" value="<?php echo $street; ?>">
            <input type="text" class="form-control" name="Subdivision" placeholder="Phase/Subdivision" value="<?php echo $subdivision; ?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="Baranggay" placeholder="Baranggay" value="<?php echo $baranggay; ?>">
            <input type="text" class="form-control" name="City" placeholder="City/Municipality" value="<?php echo $city; ?>">
        </div>
        <div class="contact">
            <input class="form-control" id="phone" name="Contact" type="tel" value="<?php echo $contact; ?>">
        </div>
        <div class="form-group">

        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="Email" placeholder="Email" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="repeat_password" placeholder="Confirm Password">
        </div>
        <div class="button">
            <input type="submit" class="submit-button" name="submit" value="Register">
        </div>
        <div>
            <p> Already Registered? <a href="login.php"> Login Here! </a></p>
        </div>
    </div>
</form>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="assets/js/geodatasource-cr.min.js"></script>
<script type="text/javascript" src="assets/js/Gettext.js"></script>
<script src="build/js/intlTelInput.js"></script>
<script>
    <?php if (isset($errors) && count($errors) > 0) : ?>
        document.getElementById('error-popup').innerHTML = '<?php echo implode("<br>", $errors); ?>';
        document.getElementById('error-popup').style.display = 'block';
        document.getElementById('success-popup').style.display = 'none';
        setTimeout(function() {
            document.getElementById('error-popup').style.display = 'none';
        }, 1500);
    <?php endif; ?>

    <?php if (empty($errors) && isset($_POST["submit"])) : ?>
        document.getElementById('error-popup').style.display = 'none';
        document.getElementById('success-popup').innerHTML = 'You are Registered Successfully!';
        document.getElementById('success-popup').style.display = 'block';
        setTimeout(function() {
            document.getElementById('success-popup').style.display = 'none';
        }, 1500);
    <?php endif; ?>
</script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        utilsScript: "build/js/utils.js"
    });
    </script>

</body>
</html>