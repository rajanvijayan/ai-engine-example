<?php
require 'vendor/autoload.php';

use AIEngine\AIClient;

// Create an instance of the AIClient class
$ai_client = new AIClient('YOUR_API_KEY');

// Define a prompt to send to the AI engine
$prompt = "Give me a short motivational quote.";

// Call the generateContent method to get the response from the Gemini API
$response = $ai_client->generateContent($prompt);

// Check if there's an error or print the generated response
if (isset($response['error'])) {
    echo "Error: " . $response['error'];
} else {
    echo "Generated Content: " . $response;
}