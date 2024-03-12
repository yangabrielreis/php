<?php
// Set a cookie
$cookieName = "username";
$cookieValue = "JohnDoe";
$cookieExpiration = time() + (86400 * 30); // 30 days
$cookiePath = "/"; // Cookie is available for the entire website
setcookie($cookieName, $cookieValue, $cookieExpiration, $cookiePath);

// Retrieve a cookie value
if(isset($_COOKIE[$cookieName])) {
  $username = $_COOKIE[$cookieName];
  echo "Welcome back, $username!";
} else {
  echo "Welcome, guest!";
}

// Delete a cookie
setcookie($cookieName, "", time() - 3600, $cookiePath); // Set expiration time in the past
?>