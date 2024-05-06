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
                    <h3 class="sc_title sc_title_regular" style="margin-bottom:1em;"><p></p>
                    <p style="text-align: center;">Stiluri de lupta la MMA Transilvania Cluj-Napoca</p>
                    <p></p></h3>
            </div>

            <div class = "content"> 
                <section class = "post content">
                    <h3 class = 'sc_content content_wrap'> 
                        <h6 class = 'sc_item_subtitle'>MMA TRANSILVANIA</h6>
                        <p></p>
                        <p><h3 class = "sc_item_title">STILURI DE LUPTA<h3></p>
                        <p></p>
                    </h3>
                    <div class="filters_post_content">
                        <a href="#" class="theme_button active">All</a>
                        <a href="#" class="theme_button">Autoaparare Copii</a>
                        <a href="#" class="theme_button">Kickboxing Style</a>
                        <a href="#" class="theme_button">MMA - Arte Martiale Mixte</a>
                    </div>
                </section>
            </div>


        </div>

        
    </div>

</div>
</html>