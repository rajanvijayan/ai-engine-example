<?php
require 'vendor/autoload.php';

use AIEngine\AIEngine;

// Create an instance of the AIClient class
$ai_client = new AIEngine('API_KEY');

// Define a prompt to send to the AI engine
$prompt = "Ask me some random question about anything. It should be easy to answer.";

// Call the generateContent method to get the response from the Gemini API
$response = $ai_client->generateContent($prompt);

// Check if there's an error or print the generated response
if (isset($response['error'])) {
    echo "Error: " . $response['error'];
} else {
    echo "Generated Content: " . $response;
}