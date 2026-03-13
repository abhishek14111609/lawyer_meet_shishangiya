<?php
if (!isset($site_title)) $site_title = "Advocate Meet S Shishangiya";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " | " . $site_title : $site_title; ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
</head>
<body class="<?php echo isset($body_class) ? $body_class : ''; ?>">

    <nav class="<?php echo isset($nav_class) ? $nav_class : 'scrolled'; ?>">
        <a href="index.php" class="logo">
            <span class="logo-main">MEET S SHISHANGIYA</span>
            <span class="logo-sub">Advocate & Legal Consultant</span>
        </a>
        
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Expertise</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>

        <div class="mobile-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
