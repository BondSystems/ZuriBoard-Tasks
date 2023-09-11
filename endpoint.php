<?php
header('Content-Type: application/json');

// Validate and retrieve GET parameters
$slackName = isset($_GET['slack_name']) ? $_GET['slack_name'] : '';
$track = isset($_GET['track']) ? $_GET['track'] : '';

if (empty($slackName) || empty($track)) {
    // Missing required parameters
    http_response_code(400);
    echo json_encode(["error" => "Missing required parameters"]);
    exit;
}

// Get current day of the week
$currentDay = date('l');

// Get current UTC time
$utcTime = gmdate('Y-m-d\TH:i:s\Z');

// GitHub repository and file URLs
$githubFileUrl = "https://github.com/username/repo/blob/main/file_name.ext";
$githubRepoUrl = "https://github.com/username/repo";

// Response data
$responseData = [
    "slack_name" => $slackName,
    "current_day" => $currentDay,
    "utc_time" => $utcTime,
    "track" => $track,
    "github_file_url" => $githubFileUrl,
    "github_repo_url" => $githubRepoUrl,
    "status_code" => 200
];

// Send the JSON response
echo json_encode($responseData);
