<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>


    <style>
        <?php include 'style.css';?>
        <?php include 'functions.php';?>

    </style>


    <header class='title'>

    </header>



    <body>

        <!-- Inital display build -->
        <?php
        if (isset($_GET["newgame"]) )
        {
            startnewgame();
        }
        if (isset($_GET["loadgame"]) )
        {
            Loadgame($_GET["gameid"]);
        }
        global $card_deck;
















        SaveGame();
        ?>




    </body>


    <test>






    </test>



</html>

<!-- 
echo '<pre>';
print_r($playerarray);

echo '</pre>';
-->
