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
    <title>Home</title>
</head>
<body>
    
    <?php $page = 'home';include 'include/header.php'; ?>
    <main>
    
    <!--
       <div class="main-box top">
          <div class="top">
            <div class="box">
                <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
            </div>
            <div class="box">
                <p>Your email is <b><?php echo $res_Email ?></b>.</p>
            </div>
          </div>
          <div class="bottom">
            <div class="box">
                <p>And you are <b><?php echo $res_Age ?> years old</b>.</p> 
            </div>
          </div>
       </div>
     -->
    <div class = "wrapper">
        <div class = "cols cols0">
            <span class = "topline">Hello <b><?php echo $res_Uname ?></b>, Welcome!</span>
            <h1><span class = "multitext"></span></h1>
            <p>You don't have to be great to start</p>
            <div class = "btns"> 
                <a href="primulAntrenament.php"><button>Get started</button></a>
            </div>
        </div>
    </div>

    </main>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typingEffect = new Typed(".multitext",{
            strings : ["Kickbox", "BJJ", "MMA", "Muay-Thay", "Autoaparare"],
            loop : true,
            typeSpeed : 100,
            backSpeed : 80,
            backDelay : 1500
        })
    </script>

</script>
</body>
</html>