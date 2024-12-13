<?php
$pageTitle = "Home";
include "view/header.php"; // This can include opening HTML tags, and the head section
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle; ?></title>
  <style>
    /* Set the background image */
    body {
      background-image: url('https://t3.ftcdn.net/jpg/08/69/38/52/360_F_869385263_KaJukEv4E2qm9vxw27G6uq1aXQcJad9k.jpg');
      background-size: cover; /* Makes sure the image covers the entire screen */
      background-position: center center; /* Centers the image */
      background-attachment: fixed; /* Keeps the image fixed when scrolling */
      margin: 0; /* Removes any default margin */
      padding: 0; /* Removes any default padding */
    }

    .carousel-container {
      max-width: 100%;
      overflow: hidden;
    }

    .carousel {
      display: flex;
      transition: transform 0.5s ease;
    }

    .carousel img {
      width: 100%; /* This ensures that all images are the same size */
      height: auto; /* Maintain aspect ratio */
      object-fit: cover; /* Ensures the image fills the space without distorting */
    }
  </style>
</head>
<body>

<h1>Home</h1>

<!-- Carousel Section -->
<div class="carousel-container">
  <div class="carousel">
    <div><img class="carousel-image" src="https://media-cldnry.s-nbcnews.com/image/upload/rockcms/2024-02/240102-lewis-hamilton-mb-1209-65adb6.jpg" alt="F1 Driver 1"></div>
    <div><img class="carousel-image" src="data:image/jpeg;base64,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
