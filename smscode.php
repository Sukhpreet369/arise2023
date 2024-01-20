<?php
// Step 1: Generate and send OTP to the user's mobile number
function generateOTP($mobileNumber) {
    $otp = rand(100000, 999999); // Generate a 4-digit OTP

    // Send the OTP to the user's mobile number via SMS (implement this part separately)

    return $otp;
}

// Step 2: Validate the OTP entered by the user
function validateOTP($expectedOTP, $userEnteredOTP) {
    // Compare the expected OTP with the user input
    if ($expectedOTP === $userEnteredOTP) {
        return true; // OTP is valid
    } else {
        return false; // OTP is not valid
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['mobile_number']) && isset($_POST['otp'])) {
        $mobileNumber = $_POST['mobile_number'];
        $userEnteredOTP = $_POST['otp'];

        // Step 3: Retrieve the expected OTP (for demonstration purposes, we use a session variable)
        session_start();
        $expectedOTP = $_SESSION['otp']; // You should store this in a more secure way in a real-world scenario.

        // Step 4: Validate the OTP
        if (validateOTP($expectedOTP, $userEnteredOTP)) {
            echo "OTP is valid.";
            // You can proceed with the user's authentication or other operations here.
        } else {
            echo "OTP is not valid.";
        }
    } else {
        echo "Incomplete data submitted.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mobile OTP Validation</title>
</head>
<body>
    <form method="POST" action="">
        <label for="mobile_number">Mobile Number:</label>
        <input type="text" id="mobile_number" name="mobile_number" required><br>

        <label for="otp">OTP:</label>
        <input type="text" id="otp" name="otp" required><br>

        <input type="submit" value="Validate OTP">
    </form>
</body>
</html>
