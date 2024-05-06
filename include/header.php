<div class="nav">
        <div class="logo">
            <a href="home.php"><img src="style/logo.png" alt="Logo"></a>
            
        </div>

       
        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'><button class='btn'>Change Profile</button></a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
        
        
    </div>
    
    <div class="navbar">
        <a href="home.php" class="<?php if($page=='home'){echo 'active';}?>" >ACASA</a>
        <a href="aboutUs.php" class="<?php if($page=='aboutUs'){echo 'active';}?>" >DESPRE NOI</a>
        <a href="stiluri.php" class="<?php if($page=='stiluri'){echo 'active';}?>" >STILURI DE ARTE MARTIALE</a>
        <a href="primulAntrenament.php" class="<?php if($page=='primulAntrenament'){echo 'active';}?>" >PRIMUL ANTRENAMENT</a>
        <a href="orar.php" class="<?php if($page=='orar'){echo 'active';}?>" >ORAR</a>
        <a href="noutati.php" class="<?php if($page=='noutati'){echo 'active';}?>" >NOUTATI</a>
        <a href="shop.php" class="<?php if($page=='shop'){echo 'active';}?>" >SHOP</a>
    </div>
