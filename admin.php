<?php

include 'admin/phpMailer.php';
function generateOTP($length = 6) {
    $characters = '0123456789';
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= $characters[random_int(0, strlen($characters) - 1)];
    }
    return $otp;
}
function sendOTPEmail($to, $otp) {
    $subject = 'Your OTP Code';
    $message = 'Your OTP code is: ' . $otp;
    $headers = 'From: no-reply@example.com' . "\r\n" .
               'Reply-To: no-reply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // mail($to, $subject, $message, $headers);
}

$otp = generateOTP();
$_SESSION['otp'] = $otp;
$_SESSION['otp_expiry'] = time() + 300; // OTP valid for 5 minutes

// Send OTP to the user
sendOTPEmail('user@example.com', $otp);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedOTP = $_POST['otp'];
    $storedOTP = $_SESSION['otp'];
    $otpExpiry = $_SESSION['otp_expiry'];

    if ($submittedOTP === $storedOTP && time() <= $otpExpiry) {
        echo 'OTP is valid!';
        // Proceed with the authenticated action
    } else {
        echo 'Invalid OTP or OTP has expired.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter OTP</title>
</head>
<body>
    <form action="verify_otp.php" method="POST">
        <label for="otp">Enter OTP:</label>
        <input type="text" id="otp" name="otp" required>
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>

