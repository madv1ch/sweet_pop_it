<?PHP
// API URL
$url = 'https://null-code.ru/slot_logic/Slot.php';
// Create a new cURL resource
$ch = curl_init($url);
// Setup request to send json via POST
$payload = base64_decode($_GET['json']);
// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Execute the POST request
$result = curl_exec($ch);
// Close cURL resource
curl_close($ch);
?>