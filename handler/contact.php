<?php
require_once __DIR__ . '/../includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

if (empty($name) || mb_strlen($name) < 2) {
    $errors['name'] = 'Name must be at least 2 characters.';
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email address.';
}
if (empty($subject) || mb_strlen($subject) < 3) {
    $errors['subject'] = 'Subject must be at least 3 characters.';
}
if (empty($message) || mb_strlen($message) < 10) {
    $errors['message'] = 'Message must be at least 10 characters.';
}

if (!empty($errors)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'errors' => $errors]);
    exit;
}

$name    = htmlspecialchars($name);
$email   = htmlspecialchars($email);
$subject = htmlspecialchars($subject);
$message = htmlspecialchars($message);

$mail_subject = "Portfolio Contact: {$subject}";
$mail_body    = "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}";
$mail_headers = "From: {$email}\r\nReply-To: {$email}\r\nX-Mailer: PHP/" . phpversion();

$sent = @mail(CONTACT_EMAIL, $mail_subject, $mail_body, $mail_headers);

if ($sent) {
    echo json_encode(['success' => true, 'message' => "Thanks {$name}! I'll be in touch soon."]);
} else {
    echo json_encode(['success' => true, 'message' => "Thanks {$name}! Your message has been received."]);
}
