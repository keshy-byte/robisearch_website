<?php
include 'db.php'; // this includes your database connection

if ($conn) {
  echo "✅ Database connection successful!";
} else {
  echo "❌ Connection failed!";
}
?>
