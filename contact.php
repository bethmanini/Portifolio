<?php
/**
 * Elizabeth E. Manini - Portfolio Contact Form Handler
 * Works smoothly with XAMPP (Apache + PHP)
 * Receives POST requests, validates input, and logs inquiries.
 */

header('Content-Type: application/json; charset=UTF-8');

// Allow POST only
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method Not Allowed. Please submit the form.'
    ]);
    exit;
}

// Sanitize and read input fields
$name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$email   = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
$subject = isset($_POST['subject']) && trim($_POST['subject']) !== '' ? trim(strip_tags($_POST['subject'])) : 'New Portfolio Message';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// Validation
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Tafadhali jaza nafasi zote zinazohitajika (Jina, Barua pepe, na Ujumbe).'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => 'Barua pepe uliyoweka siyo sahihi (Invalid Email).'
    ]);
    exit;
}

// Log message to a local file for XAMPP offline testing
$logEntry = [
    'date'    => date('Y-m-d H:i:s'),
    'name'    => $name,
    'email'   => $email,
    'subject' => $subject,
    'message' => $message,
    'ip'      => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

$logFile = __DIR__ . '/contact_messages.json';
$currentData = [];

if (file_exists($logFile)) {
    $fileContent = file_get_contents($logFile);
    $currentData = json_decode($fileContent, true) ?: [];
}

$currentData[] = $logEntry;
file_put_contents($logFile, json_encode($currentData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Return success JSON
echo json_encode([
    'status' => 'success',
    'message' => "Asante sana, {$name}! Ujumbe wako umepokelewa vizuri. Elizabeth atawasiliana nawe hivi karibuni.",
    'mailto_fallback' => "mailto:elizabethmanini9@gmail.com?subject=" . rawurlencode($subject) . "&body=" . rawurlencode("Hi Elizabeth,\n\nName: {$name}\nEmail: {$email}\n\nMessage:\n{$message}")
]);
exit;

