<html>
<style>
    <?php include 'style.css';
    ?><?php include 'functions.php';
    ?>

</style>

<header class='title'>
    <?php createheader(0,2); ?>
</header>

<body class='mainpage'>
    <!-- New Game button -->
    <br>
    <form action="index.php" method="get">
        <input class="mainpagebutton" style="background-color: red" type="submit" name="newgame" value="New Game">

    </form>
    <br><br>

    <!-- Load game button -->
    <form action="index.php" method="get">
        <label class="mainpagebutton" for="gameid">Input Game ID</label>
        <input class="inputtext" type="text" name="gameid" value"">
        <br><br>
        <input style="background-color: blue" class="mainpagebutton" type="submit" name="loadgame" value="Load game">

    </form>
    <br><br>

    <!-- Rules -->
    <form action="https://www.unorules.com/phase-10-rules/" method="get">
        <input class="mainpagebutton" style="background-color: yellow" type="submit" name="Rules" value="Rules">
    </form>









</body>









</html>
