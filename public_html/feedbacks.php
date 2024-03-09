<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-... (Integrity Hash) ..." crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="profilepic.png" style="border-radius: 20px;">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="feedbacks.css?v=<?php echo time(); ?>">

    </style>
</head>
<body>

<div class="feedback-container">
<div class="text"><h1>Feedback</h1></div>

<?php
    require_once "database.php"; // Make sure to include the database connection file

    // Retrieve feedback from the database
    $getFeedbackSQL = "SELECT USER_EMAIL, USER_FEEDBACK FROM tbl_feedback";
    $feedbackResult = mysqli_query($conn, $getFeedbackSQL);

    if ($feedbackResult) {
        // Check if there are any feedback entries
        if (mysqli_num_rows($feedbackResult) > 0) {
            echo "<div class='container'>";
            while ($row = mysqli_fetch_assoc($feedbackResult)) {
                $userEmail = $row["USER_EMAIL"];
                $userFeedback = $row["USER_FEEDBACK"];

                // Display feedback in a div with class "feedback-item"
                echo "<div class='feedback-item'>";
                echo "<p><strong>Feedback:</strong></p>";
                echo "<p>$userFeedback</p>";
                echo "</div>";
                
                
            }
        } else {
            echo "<p>No feedback available.</p>";
        }
    } else {
        echo "<div class='alert alert-danger'>Error fetching feedback from the database.</div>";
    }
?>
</div>
</body>
</html>
