<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Stiluri antrenamente</title>
</head>
<div class = "habarnuamcefacaici" >
    <?php $page = 'stiluri';include 'include/header.php'; ?>
    <div class = 'page_content_wrap'>
        <div class = 'content_wrap'>
            <div class = 'custom_header_wrap'>
                <!-- style="background-image: url(style/background.jpg);" -->
                <div class="single_custom_header">
                    <a>single custom header</a>
                </div>
                <div class = 'header_content_wrap'>
                    <h2 class="title_header">Even if You Fall on Your Face, You’re Still Moving Forward.</h2>
                    <h6 class="slogan_header">slogan</h6>
                </div>
            </div>
            <h1>zona de articole</h1>
            <article>TEst</article>
        </div>

        
    </div>

</div>
</html>