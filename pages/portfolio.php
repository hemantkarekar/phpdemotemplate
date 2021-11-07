<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php";
    $title = "Portfolio | " . $meta["author"];
    $meta["title"] = $title;
    ?>
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="title" content="<?php echo $meta["title"]; ?>">
    <meta name="author" content="<?php echo $meta["author"]; ?>">
    <meta name="copyright" content="<?php echo $meta["copyright"]; ?>">
    <meta name="description" content="<?php echo $meta["description"]; ?>">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <main class="portfolio">
        <h1>My Portfolio</h1>
    </main>
</body>

</html>