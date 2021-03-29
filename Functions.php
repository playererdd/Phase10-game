<?php

function createdeck($lastid){
    $height = 90;
    if($lastid == 'false'){
        $gameid = 0;
    }
    else{
    $gameid = $lastid;
    }
    $card_deck = array(
        array("cardid" => '1',"type" => '1',"color" => 'yellow' , "location" => 'deck',"image" => "<img src='images/1y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '2',"type" => '1',"color" => 'yellow' , "location" => 'deck',"image" => "<img src='images/1y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '3',"type" => '1',"color" => 'green', "location" => 'deck',"image" => "<img src='images/1g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '4',"type" => '1',"color" => 'green', "location" => 'deck',"image" => "<img src='images/1g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '5',"type" => '1',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/1b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '6',"type" => '1',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/1b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '7',"type" => '1',"color" => 'red', "location" => 'deck',"image" => "<img src='images/1r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '8',"type" => '1',"color" => 'red', "location" => 'deck',"image" => "<img src='images/1r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '9',"type" => '2',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/2y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '10',"type" => '2',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/2y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '11',"type" => '2',"color" => 'green', "location" => 'deck',"image" => "<img src='images/2g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '12',"type" => '2',"color" => 'green', "location" => 'deck',"image" => "<img src='images/2g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '13',"type" => '2',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/2b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '14',"type" => '2',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/2b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '15',"type" => '2',"color" => 'red', "location" => 'deck',"image" => "<img src='images/2r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '16',"type" => '2',"color" => 'red', "location" => 'deck',"image" => "<img src='images/2r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '17',"type" => '3',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '18',"type" => '3',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '19',"type" => '3',"color" => 'green', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '20',"type" => '3',"color" => 'green', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '21',"type" => '3',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '22',"type" => '3',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '23',"type" => '3',"color" => 'red', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '24',"type" => '3',"color" => 'red', "location" => 'deck',"image" => "<img src='images/3y.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '25',"type" => '4',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/4y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '26',"type" => '4',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/4y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '27',"type" => '4',"color" => 'green', "location" => 'deck',"image" => "<img src='images/4g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '28',"type" => '4',"color" => 'green', "location" => 'deck',"image" => "<img src='images/4g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '29',"type" => '4',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/4b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '30',"type" => '4',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/4b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '31',"type" => '4',"color" => 'red', "location" => 'deck',"image" => "<img src='images/4r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '32',"type" => '4',"color" => 'red', "location" => 'deck',"image" => "<img src='images/4r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '33',"type" => '5',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/5y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '34',"type" => '5',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/5y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '35',"type" => '5',"color" => 'green', "location" => 'deck',"image" => "<img src='images/5g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '36',"type" => '5',"color" => 'green', "location" => 'deck',"image" => "<img src='images/5g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '37',"type" => '5',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/5b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '38',"type" => '5',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/5b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '39',"type" => '5',"color" => 'red', "location" => 'deck',"image" => "<img src='images/5r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '40',"type" => '5',"color" => 'red', "location" => 'deck',"image" => "<img src='images/5r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '41',"type" => '6',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/6y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '42',"type" => '6',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/6y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '43',"type" => '6',"color" => 'green', "location" => 'deck',"image" => "<img src='images/6g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '44',"type" => '6',"color" => 'green', "location" => 'deck',"image" => "<img src='images/6g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '45',"type" => '6',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/6b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '46',"type" => '6',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/6b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '47',"type" => '6',"color" => 'red', "location" => 'deck',"image" => "<img src='images/6r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '48',"type" => '6',"color" => 'red', "location" => 'deck',"image" => "<img src='images/6r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '49',"type" => '7',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/7y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '50',"type" => '7',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/7y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '51',"type" => '7',"color" => 'green', "location" => 'deck',"image" => "<img src='images/7g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '52',"type" => '7',"color" => 'green', "location" => 'deck',"image" => "<img src='images/7g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '53',"type" => '7',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/7b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '54',"type" => '7',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/7b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '55',"type" => '7',"color" => 'red', "location" => 'deck',"image" => "<img src='images/7r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '56',"type" => '7',"color" => 'red', "location" => 'deck',"image" => "<img src='images/7r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '57',"type" => '8',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/8y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '58',"type" => '8',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/8y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '59',"type" => '8',"color" => 'green', "location" => 'deck',"image" => "<img src='images/8g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '60',"type" => '8',"color" => 'green', "location" => 'deck',"image" => "<img src='images/8g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '61',"type" => '8',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/8b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '62',"type" => '8',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/8b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '63',"type" => '8',"color" => 'red', "location" => 'deck',"image" => "<img src='images/8r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '64',"type" => '8',"color" => 'red', "location" => 'deck',"image" => "<img src='images/8r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '65',"type" => '9',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/9y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '66',"type" => '9',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/9y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '67',"type" => '9',"color" => 'green', "location" => 'deck',"image" => "<img src='images/9g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '68',"type" => '9',"color" => 'green', "location" => 'deck',"image" => "<img src='images/9g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '69',"type" => '9',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/9b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '70',"type" => '9',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/9b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '71',"type" => '9',"color" => 'red', "location" => 'deck',"image" => "<img src='images/9r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '72',"type" => '9',"color" => 'red', "location" => 'deck',"image" => "<img src='images/9r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '73',"type" => '10',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/10y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '74',"type" => '10',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/10y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '75',"type" => '10',"color" => 'green', "location" => 'deck',"image" => "<img src='images/10g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '76',"type" => '10',"color" => 'green', "location" => 'deck',"image" => "<img src='images/10g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '77',"type" => '10',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/10b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '78',"type" => '10',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/10b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '79',"type" => '10',"color" => 'red', "location" => 'deck',"image" => "<img src='images/10r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '80',"type" => '10',"color" => 'red', "location" => 'deck',"image" => "<img src='images/10r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '81',"type" => '11',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/11y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '82',"type" => '11',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/11y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '83',"type" => '11',"color" => 'green', "location" => 'deck',"image" => "<img src='images/11g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '84',"type" => '11',"color" => 'green', "location" => 'deck',"image" => "<img src='images/11g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '85',"type" => '11',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/11b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '86',"type" => '11',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/11b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '87',"type" => '11',"color" => 'red', "location" => 'deck',"image" => "<img src='images/11r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '88',"type" => '11',"color" => 'red', "location" => 'deck',"image" => "<img src='images/11r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '89',"type" => '12',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/12y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '90',"type" => '12',"color" => 'yellow', "location" => 'deck',"image" => "<img src='images/12y.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '91',"type" => '12',"color" => 'green', "location" => 'deck',"image" => "<img src='images/12g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '92',"type" => '12',"color" => 'green', "location" => 'deck',"image" => "<img src='images/12g.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '93',"type" => '12',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/12b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '94',"type" => '12',"color" => 'blue', "location" => 'deck',"image" => "<img src='images/12b.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '95',"type" => '12',"color" => 'red', "location" => 'deck',"image" => "<img src='images/12r.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '96',"type" => '12',"color" => 'red', "location" => 'deck',"image" => "<img src='images/12r.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '97',"type" => 'Skip',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/sx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '98',"type" => 'Skip',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/sx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '99',"type" => 'Skip',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/sx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '100',"type" => 'Skip',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/sx.png'; height='$height'>", "gameid" => $gameid),

        array("cardid" => '101',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '102',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '103',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '104',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '105',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '106',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '107',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '108',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid),
        array("cardid" => '109',"type" => 'Wild',"color" => 'n/a', "location" => 'deck',"image" => "<img src='images/wx.png'; height='$height'>", "gameid" => $gameid)
    );
    return $card_deck;
}

function Createplayers($x){
    $playerarray = array();
    for($i = 0; $i < $x; $i++){
        $playerarray[$i] = array(
            "name" => "player$i"
        );
    }
    return $playerarray;  
}
function dealcards(){
    global $card_deck;
    global $playerarray;
    for($i = 0; $i < sizeof($playerarray); $i++){
        for($j = 0; $j < 10; $j++){
            $playerarray[$i][$j] = $card_deck[randomplayercard( $i)];
        }
    }


    return $playerarray;
}

// Random Card Creators
function randomplayercard($i){
    global $card_deck;
    global $playerarray;
    $k =1;
    $random = 0;
    while($k == 1){
        $random = rand(0,108);
        if($card_deck[$random]['location'] == 'deck'){
            $card_deck[$random]['location'] = $playerarray[$i]['name'];
            $k = 0;
        }
    }

    return $random;


}

function randomcard($i){
    global $card_deck;
    $k =1;
    $random = 0;
    while($k == 1){
        $random = rand(0,108);
        if($card_deck[$random]['location'] == 'deck'){
            $card_deck[$random]['location'] = $i;
            $k = 0;
        }
    }

    return $random;


}

// Displaying the page
function displayall($loadorsave){
    global $lastid;
    global $card_deck;

    global $playerarray;

    createheader(1,$loadorsave);

    displayplayers(0);

    displayboard();

    displaypiles($loadorsave);
    displayboard();
    displayplayers(1);
}
function displayplayers($playernumber){
    global $playerarray;
    echo '<div class = "col-1">';
    echo $playerarray[$playernumber][0]['image'];


    for($i = 1; $i < 10; $i++){

        echo $playerarray[$playernumber][$i]['image'];


    }
    echo '</div>';

}
?>
<html>
    <?php function displayboard(){    ?>
    <div class="col-1">
        <img src='images/set1.png' ; height='100'>
    </div>


    <?php } ?>


</html>

<?php

function Displaypiles($loadorsave){
    global $card_deck;
    echo '<div class="col-1">';
    echo "<img src='images/cardbackstack.png' ; height='100'>";

    if($loadorsave == 0){
        echo $card_deck[randomcard('pickup')]['image'];
    }
    else{
        foreach($card_deck as $cards){
            if($cards['location'] == 'pickup'){
                echo $cards['image'];
            }
        }
    }
    echo '</div>';
}

function startnewgame(){
    global $card_deck;
    global $playerarray;
    
    $lastid = retrievegameid();
    $playerarray = Createplayers(2);
    $card_deck = createdeck($lastid);
    $playerarray = dealcards($playerarray);

    displayall(0);


}

// save game functionality
function Savegame(){
    global $card_deck;

    $servername = "localhost";
    $dbname = "Phase10";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // get id

    //input new variables


    foreach($card_deck as $card_deck){
        $id = $card_deck['cardid'];
        $type =$card_deck['type'];
        $color = $card_deck['color'];
        $location = $card_deck['location'];
        $image = $card_deck['image'];
        $gameid = $card_deck['gameid'];
        $query1 ="replace into card(cardid, type, color, location, gameid) values('$id','$type','$color','$location', '$gameid')";

        $conn->query($query1);
    }

    mysqli_close($conn);




}

// Loading a game functionality
function loadgame($gameid){
    global $card_deck;
    global $playerarray;
    $servername = "localhost";
    $dbname = "Phase10";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $query = "select * from card where gameid = $gameid";
    $result = $conn ->query($query);

    while($row = $result->fetch_assoc()){
        $card_deck[$row['cardid']] = $row;
    }
    
    mysqli_close($conn);

    // add images to the cards
    addimages();

    // creates players
    $playerarray = Createplayers(2);

    // deals players out their cards
    $counter =0;
    for($i = 0; $i<sizeof($playerarray); $i++){
        for($j = 1; $j<sizeof($card_deck)+1; $j++)
            if($card_deck[$j]['location'] == "player$i"){
                $playerarray[$i][$counter] = $card_deck[$j];
                $counter++;
            }
        $counter =0;
    }








    displayall(1);
}
function retrievegameid(){
    global $card_deck;
    $servername = "localhost";
    $dbname = "Phase10";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $query = "insert into game values()";
    $conn->query($query);
    
    // Will eventually remove all the globals
    $lastid = $conn->insert_id;
    mysqli_close($conn);
    return $lastid;
}

function addimages(){
    global $card_deck;
    $card_image = createdeck('false');

    for($i = 1; $i<sizeof($card_deck)+1; $i++){
        for($j = 0; $j<sizeof($card_image); $j++){
            if($card_deck[$i]['cardid'] == $card_image[$j]['cardid']){
                $card_deck[$i]['image'] = $card_image[$j]['image'];
            }
        }

    }
}

function createheader($x,$loadorsave){
    global $card_deck;
    global $lastid;
    echo '<p class="title">Welocme to the game of Phase 10</p>';
    if($x == 1){
        echo '<p class = "title">Game ID: ';

        if($loadorsave == 0){
            echo $card_deck[0]['gameid'];
        }
        elseif($loadorsave == 1){
            echo $card_deck[1]['gameid'];
        }
        else{
            echo $lastid;
        }


        echo '</p>';
    }

}

function dcd($x){
    global $card_deck;
    global $playerarray;
    echo '<pre>';
    print_r($x);
    echo '</pre>';
}

?>
