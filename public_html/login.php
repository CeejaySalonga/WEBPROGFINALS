<?php
session_start();
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM tbl_user WHERE USER_EMAIL='$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
        if ($user) {
            if (password_verify($password, $user["USER_PASSWORD"])) {
                // Store user information in session
                $_SESSION["user"] = "yes";
                $_SESSION["user_email"] = $user["USER_EMAIL"];
                $_SESSION["first_name"] = $user["USER_FNAME"];
                header("Location: index.php");
                die();
            } else {
                $errorMessages = "Password does not match!";
            }
        } else {
            $errorMessages = "Email does not match";
        }
        
        echo "<script>
                document.getElementById('login-error-popup').innerHTML = '$errorMessages';
                document.getElementById('login-error-popup').style.display = 'block';
                document.getElementById('login-success-popup').style.display = 'none'; // Hide success popup
                setTimeout(function() {
                    document.getElementById('login-error-popup').style.display = 'none';
                }, 1500); // 1500 milliseconds = 1.5 seconds
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div id="login-error-popup" class="alert alert-danger" style="display: none;"></div>
    <div id="login-success-popup" class="alert alert-success" style="display: none;"></div>
    <div class="container">
        
        <form action="login.php" method="post">
            <div class="registrationform">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>

                <div class="form-btn">
                    <input type="submit" value="Login" name="login" class="submit-button">
                </div>
                <div><p>Not Registered yet? <a href="registration.php"> Register Here</a></p></div>
            </div>
        </form>
    </div>
    <div id="login-error-popup" class="alert alert-danger" style="display: none;"></div>
    <div id="login-success-popup" class="alert alert-success" style="display: none;"></div>
    <script>
        <?php if(isset($errorMessages)) : ?>
            document.getElementById('login-error-popup').innerHTML = '<?php echo $errorMessages; ?>';
            document.getElementById('login-error-popup').style.display = 'block';
            document.getElementById('login-success-popup').style.display = 'none'; // Hide success popup
            setTimeout(function() {
                document.getElementById('login-error-popup').style.display = 'none';
            }, 1500); // 1500 milliseconds = 1.5 seconds
        <?php endif; ?>
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/js/geodatasource-cr.min.js"></script>
    <script type="text/javascript" src="assets/js/Gettext.js"></script>
</body>
</html>