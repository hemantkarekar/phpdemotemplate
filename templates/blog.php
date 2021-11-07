<!DOCTYPE html>
<?php
?>
<html lang="en">

<head>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_head.php";
    $title = "Blog #".$id." | Hemant Karekar";
    if ($id == 1) {
        $title = $meta["author"]."'s First Blog";
    } 
    $meta["title"] = $title;
    ?>


    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="title" content="<?php echo $meta["title"]; ?>">
    <meta name="author" content="<?php echo $meta["author"]; ?>">
    <meta name="copyright" content="<?php echo $meta["copyright"]; ?>">
    <meta name="description" content="<?php echo $meta["description"]; ?>">
    
    <title><?php echo $title; ?> </title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/components/_nav.php"; ?>
    <main class="blogs">
        <section class="blogs-wrapper">
            <div class="featured-blogs"></div>
            <div class="bloglist">
                <nav class="blog-nav">
                    <ul>
                        <li class="bnav-item"><a href="/blog/1">Blog 1</a></li>
                        <li class="bnav-item"><a href="/blog/2">Blog 2</a></li>
                        <li class="bnav-item"><a href="/blog/3">Blog 3</a></li>
                        <li class="bnav-item"><a href="/blog/4">Blog 4</a></li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>
</body>

</html>
</body>

</html>