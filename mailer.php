<?php
// Enable error reporting for debugging (remove in production if sensitive)
error_reporting(E_ALL);
ini_set('display_errors', 0); // Don't output errors to standard output, handle them manually

header('Content-Type: text/plain');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // Basic validation
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    // SMTP Credentials
    $smtp_host = "mail.reflexit.com.bd";
    $smtp_port = 465; // SSL Port
    $smtp_user = "no-reply@reflexit.com.bd";
    $smtp_pass = "Rasel@2379";

    // Recipient
    $admin_email = "info@reflexit.com.bd";

    // --- Helper Function for SMTP ---
    function send_smtp_mail($to, $subject, $body, $headers_assoc)
    {
        global $smtp_host, $smtp_port, $smtp_user, $smtp_pass;

        // Context to relax SSL verification (fixes common handshake failures on shared hosting)
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ]);

        $timeout = 30;
        $socket = stream_socket_client("ssl://" . $smtp_host . ":" . $smtp_port, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $context);

        if (!$socket) {
            error_log("Connection failed: $errstr ($errno)");
            return "Connection failed: $errstr ($errno)";
        }

        // Helper to read response
        function read_smtp_response($sock, $expected_code)
        {
            $response = "";
            while (substr($response, 3, 1) != " ") {
                if (!($line = fgets($sock, 512)))
                    return "No response";
                $response .= $line;
            }
            if (substr($response, 0, 3) != $expected_code) {
                return $response; // Return error response
            }
            return true; // Success
        }

        if (($res = read_smtp_response($socket, "220")) !== true)
            return "Connect Error: " . $res;

        fputs($socket, "EHLO $smtp_host\r\n");
        if (($res = read_smtp_response($socket, "250")) !== true)
            return "EHLO Error: " . $res;

        fputs($socket, "AUTH LOGIN\r\n");
        if (($res = read_smtp_response($socket, "334")) !== true)
            return "AUTH LOGIN Error: " . $res;

        fputs($socket, base64_encode($smtp_user) . "\r\n");
        if (($res = read_smtp_response($socket, "334")) !== true)
            return "User Error: " . $res;

        fputs($socket, base64_encode($smtp_pass) . "\r\n");
        if (($res = read_smtp_response($socket, "235")) !== true)
            return "Pass Error (Check credentials): " . $res;

        fputs($socket, "MAIL FROM: <$smtp_user>\r\n");
        if (($res = read_smtp_response($socket, "250")) !== true)
            return "MAIL FROM Error: " . $res;

        fputs($socket, "RCPT TO: <$to>\r\n");
        if (($res = read_smtp_response($socket, "250")) !== true)
            return "RCPT TO Error: " . $res;

        fputs($socket, "DATA\r\n");
        if (($res = read_smtp_response($socket, "354")) !== true)
            return "DATA Error: " . $res;

        // Headers
        $headers_str = "";
        foreach ($headers_assoc as $key => $val) {
            $headers_str .= "$key: $val\r\n";
        }
        $headers_str .= "MIME-Version: 1.0\r\n";

        fputs($socket, "Subject: $subject\r\n");
        fputs($socket, "To: $to\r\n");
        fputs($socket, $headers_str);
        fputs($socket, "\r\n");
        fputs($socket, "$body\r\n");
        fputs($socket, ".\r\n");

        if (($res = read_smtp_response($socket, "250")) !== true)
            return "Send Error: " . $res;

        fputs($socket, "QUIT\r\n");
        fclose($socket);
        return true;
    }

    // 1. Send Email to Admin (Inquiry)
    $site_title = "Reflex IT";
    $admin_subject = "New Contact Inquiry: $subject";
    $admin_body = "You have received a new message from the contact form.\n\n" .
        "Name: $name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Subject: $subject\n\n" .
        "Message:\n$message\n";

    $admin_headers = [
        "From" => "$site_title <$smtp_user>",
        "Reply-To" => "$name <$email>",
        "Content-Type" => "text/plain; charset=UTF-8"
    ];

    $admin_sent_status = send_smtp_mail($admin_email, $admin_subject, $admin_body, $admin_headers);

    // 2. Send Thank You Email to User
    $user_subject = "Thank you for contacting Reflex IT";
    $user_body = "Dear $name,\n\n" .
        "Thank you for contacting us. We have received your inquiry regarding \"$subject\" and our team will get back to you shortly.\n\n" .
        "Best regards,\n" .
        "Reflex IT Team\n" .
        "www.reflexit.com.bd";

    $user_headers = [
        "From" => "$site_title <$smtp_user>",
        "Content-Type" => "text/plain; charset=UTF-8"
    ];

    // We attempt to send user email, but don't fail the whole process if this one fails
    send_smtp_mail($email, $user_subject, $user_body, $user_headers);

    if ($admin_sent_status === true) {
        http_response_code(200);
        echo "Thank You! Your message has been sent successfully.";
    } else {
        http_response_code(500);
        // Output the specific error for debugging
        echo "Message could not be sent. Error: " . $admin_sent_status;
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>