<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statepage</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("connection.php");
    include("header.php");
    include("data.php");

    ?>
    <section class="home-section">
        <?php


        if (!isset($_SESSION['username'])) 
        {
            echo "you must be logged in to see this page";
        }
        else if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
        {
            include("data.php");
        ?>

            this is the page to see each state the user have. <br>
            <?php
            if (!isset($_SESSION['username'])) {
                echo "you must be logged in to see this page";
            } else {
                if (!isset($_GET['state'])) {
                    echo "incorrect way to see this";
                }


                $un = $_GET['state'];
                $statenumber = 0;
                //check to see if the given state exists in the database

                $check = "SELECT * FROM `states`,`stats` WHERE `state1`='$_GET[state]' OR `state2`='$_GET[state]' OR `state3`='$_GET[state]'";
                $state_check = mysqli_query($con, $check);
                if (mysqli_num_rows($state_check) > 0) {
                    //check to see if the given state belongs to the user
                    $ustatecheck = "SELECT * FROM `states` WHERE `username` = '$_SESSION[username]' AND (`state1`='$_GET[state]' OR `state2`='$_GET[state]' OR `state3`='$_GET[state]' )";
                    $user_state_check = mysqli_query($con, $ustatecheck);
                    if (mysqli_num_rows($user_state_check) > 0) {

                        if ($un == $user_states['state1']) {
                            $statenumber = 1;
                        } else if ($un == $user_states['state2']) {
                            $statenumber = 2;
                        } else if ($un == $user_states['state3']) {
                            $statenumber = 3;
                        }
                        echo "this is  $un";
            ?>
                        <br><br>
                        <?php
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////
                        if ($user_stats['continent']=='Europe') {
                        ?>


                            iron mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'ironmines'];
                                        echo " iron mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build an iron mine" name="ironmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createironminebtm" name="createironmine">build the mine</button>

                                <br>
                            </form>


                            <br>

                            farms <br>
                            you have <?php echo $user_states['state' . $statenumber . 'farms'];
                                        echo " farms";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>

                                <br>
                            </form>



                            <br>
                            bauxite mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'bauxitemines'];
                                        echo " bauxite mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxitemines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            uranium mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'uraniummines'];
                                        echo " uranium mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a uranium mine" name="uraniummines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createuraniumminebtm" name="createuraniummine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            coal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'coalmines'];
                                        echo " coal mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coalmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            oil and natural gas mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                        echo " oil and natural gas mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil_and_natural_gas_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createoil_and_natural_gas_minebtm" name="createoil_and_natural_gas_mine">build the mine</button>

                                <br>
                            </form>





                        <?php
                        } 
                        ///////////////////////////////////////////////////////////////////////////////
                        else if ($user_stats['continent'] == 'North America') 
                        {
                            ?>


                            iron mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'ironmines'];
                                        echo " iron mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build an iron mine" name="ironmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createironminebtm" name="createironmine">build the mine</button>

                                <br>
                            </form>


                            <br>

                            farms <br>
                            you have <?php echo $user_states['state' . $statenumber . 'farms'];
                                        echo " farms";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>

                                <br>
                            </form>



                            <br>
                            bauxite mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'bauxitemines'];
                                        echo " bauxite mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxitemines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            coal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'coalmines'];
                                        echo " coal mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coalmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                                <br>
                            </form>

                            
                            <br>
                            <br>
                            lumber mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'lumbermines'];
                                        echo " lumber mills";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a lumber mill" name="lumbermines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createlumberminebtm" name="createlumbermine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            oil and natural gas mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                        echo " oil and natural gas mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil_and_natural_gas_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createoil_and_natural_gas_minebtm" name="createoil_and_natural_gas_mine">build the mine</button>

                                <br>
                            </form>
                            <?php
                        } 
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        else if ($user_stats['continent'] == 'South America') 
                        {
                            ?>


                            


                            <br>

                            farms <br>
                            you have <?php echo $user_states['state' . $statenumber . 'farms'];
                                        echo " farms";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            uranium mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'uranium_mines'];
                                        echo " uranium mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a uranium mine" name="uranium_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createuraniumminebtm" name="createuraniummine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            precious metal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'precious_metals_mines'];
                                        echo " precious metals mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious_metals_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createprecious_metals_minebtm" name="createprecious_metals_mine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>

                            
                            lumber mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'lumbermines'];
                                        echo " lumber mills";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a lumber mill" name="lumbermines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createlumberminebtm" name="createlumbermine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            oil and natural gas mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                        echo " oil and natural gas mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil_and_natural_gas_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createoil_and_natural_gas_minebtm" name="createoil_and_natural_gas_mine">build the mine</button>

                                <br>
                            </form>
                            <?php
                        } 
                        //////////////////////////////////////////////////////////////////////////////////////////
                        else if ($user_stats['continent'] == 'Australia') 
                        {
                            ?>


                            


                            <br>

                            farms <br>
                            you have <?php echo $user_states['state' . $statenumber . 'farms'];
                                        echo " farms";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>

                                <br>
                            </form>
                            <br>
                            <br>
                            bauxite mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'bauxitemines'];
                                        echo " bauxite mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxitemines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>
                            </form>
                                <br>
                                <br>
                           
                            uranium mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'uranium_mines'];
                                        echo " uranium mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a uranium mine" name="uranium_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createuraniumminebtm" name="createuraniummines">build the mine</button>

                                <br>
                            </form>
                            <br>
                            <br>
                            precious metal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'precious_metals_mines'];
                                        echo " precious metals mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious_metals_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createprecious_metals_minebtm" name="createprecious_metals_mine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>

                            
                            coal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'coalmines'];
                                        echo " coal mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coalmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                                <br>
                            </form>

                            
                           
                            <br>
                            <br>
                            
                            lead mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'lead_mines'];
                                        echo " lead mills";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a lead mill" name="leadmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createleadminebtm" name="createleadmine">build the mine</button>

                                <br>
                            </form>

                           
                            </form>
                            <?php
                        } 
                        else if ($user_stats['continent'] == 'Africa') 
                        {
                            ?>


                            


                            <br>

                            farms <br>
                            you have <?php echo $user_states['state' . $statenumber . 'farms'];
                                        echo " farms";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            precious metal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'precious_metals_mines'];
                                        echo " precious metals mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious_metals_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createprecious_metals_minebtm" name="createprecious_metals_mine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>

                            <br>
                            <br>
                            coal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'coalmines'];
                                        echo " coal mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coalmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                                <br>
                            </form>

                            
                           
                            <br>
                            <br>
                            bauxite mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'bauxitemines'];
                                        echo " bauxite mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxitemines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                                <br>
                            </form>
                    
                            <?php
                        } 
                        /////////////////////////////////////////////////////////////////////////////////////////////////////////
                        else if ($user_stats['continent'] == 'Asia') 
                        {
                            ?>


                            


                            <br>

                            farms <br>
                            you have <?php echo $user_states['state' . $statenumber . 'farms'];
                                        echo " farms";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            precious metal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'precious_metals_mines'];
                                        echo " precious metals mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious_metals_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createprecious_metals_minebtm" name="createprecious_metals_mine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>

                            <br>
                            <br>
                            coal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'coalmines'];
                                        echo " coal mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coalmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                                <br>
                            </form>

                            
                            <br>
                            <br>
                            
                            lumber mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'lumbermines'];
                                        echo " lumber mills";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a lumber mill" name="lumbermines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createlumberminebtm" name="createlumbermine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            <br>
                            <br>
                            
                            lead mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'lead_mines'];
                                        echo " lead mills";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a lead mill" name="leadmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createleadminebtm" name="createleadmine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            oil and natural gas mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                        echo " oil and natural gas mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil_and_natural_gas_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createoil_and_natural_gas_minebtm" name="createoil_and_natural_gas_mine">build the mine</button>

                                <br>
                            </form>
                            <?php
                        } 
                        else if ($user_stats['continent'] == 'Africa') 
                        {
                            ?>


                            


                            <br>

                            farms <br>
                            you have <?php echo $user_states['state' . $statenumber . 'farms'];
                                        echo " farms";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a farm" name="farms">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createfarmbtm" name="createfarms">build the farms</button>

                                <br>
                            </form>

                            <br>
                            <br>
                            precious metal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'precious_metals_mines'];
                                        echo " precious metals mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious_metals_mines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createprecious_metals_minebtm" name="createprecious_metals_mine">build the mine</button>

                                <br>
                            </form>

                            <br>
                            <br>

                            <br>
                            <br>
                            coal mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'coalmines'];
                                        echo " coal mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coalmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                                <br>
                            </form>

                            
                            <br>
                            <br>
                            iron mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'ironmines'];
                                        echo " iron mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build an iron mine" name="ironmines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createironminebtm" name="createironmine">build the mine</button>

                                <br>
                            </form>
                            <br>
                            <br>
                            bauxite mines <br>
                            you have <?php echo $user_states['state' . $statenumber . 'bauxitemines'];
                                        echo " bauxite mines";
                                        ?>
                            <br>
                            do you want to build more? if so <br>

                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            and your current state number is <?php echo $statenumber ?>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxitemines">

                                <input type="hidden" name="statenum" value="<?php echo $statenumber ?>">
                                <input type="hidden" name="statename" value="<?php echo $un ?>">
                                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                                <br>
                            </form>
                    
                            <?php
                        }
                    } 
                        
                        
                        
                        else if (mysqli_num_rows($user_state_check) <= 0) {
                            $un = $_GET['state'];
                            $statenumber = 0;
                            $stateownername = mysqli_fetch_assoc($state_check);



                            if ($un == $stateownername['state1']) {
                                $statenumber = 1;
                            } else if ($un == $stateownername['state2']) {
                                $statenumber = 2;
                            } else if ($un == $stateownername['state3']) {
                                $statenumber = 3;
                            }
                            echo "this is not your state this is ";
                            echo $stateownername['username'];
                            echo "'s state but you can still take a look at what this might have";
                            echo $statenumber;
                        ?>

                            <br>
                            <br>
                            <?php
                            if ($stateownername['continent'] == 'Europe') {
                            ?>
                                this state have <?php echo $stateownername['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                                echo " oil and natural gas mines"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'farms'];
                                                echo " farms"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'bauxitemines'];
                                                echo " bauxite mines"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'uranium_mines'];
                                                echo " uranium mines"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'ironmines'];
                                                echo " iron mines"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'coalmines'];
                                                echo " coal mines"; ?>
                                <br>
                                <br>
                            <?php



                            } 
                            else if ($stateownername['continent'] == 'North America') {
                            ?>
                                this state have <?php echo $stateownername['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                                echo " oil and natural gas mines"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'farms'];
                                                echo " farms"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'bauxitemines'];
                                                echo " bauxite mines"; ?>

                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'ironmines'];
                                                echo " iron mines"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'coalmines'];
                                                echo " coal mines"; ?>
                                <br>
                                <br>
        <?php



                            }


                            else if ($stateownername['continent'] == 'South America') {
                                ?>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                                    echo " oil and natural gas mines"; ?>
                                    <br>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'farms'];
                                                    echo " farms"; ?>
                                    <br>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'uranium_mines'];
                                                    echo " uranium mines"; ?>
                                    <br>
                                    <br>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'lumbermines'];
                                                    echo " lumber mills"; ?>
                                    <br>
                                    <br>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'precious_metals_mines'];
                                                    echo " precious metals mines"; ?>
                                    <br>
                                   
                                    <br>
                                    <br>
            <?php
    
    
    
                                }
                                else if ($stateownername['continent'] == 'Asia') {
                                    ?>
                                        this state have <?php echo $stateownername['state' . $statenumber . 'oil_and_natural_gas_mines'];
                                                        echo " oil and natural gas mines"; ?>
                                        <br>
                                        this state have <?php echo $stateownername['state' . $statenumber . 'farms'];
                                                        echo " farms"; ?>
                                        
                                        <br>
                                        this state have <?php echo $stateownername['state' . $statenumber . 'lumbermines'];
                                                        echo " lumber mills"; ?>
                                        <br>
                                        <br>
                                        this state have <?php echo $stateownername['state' . $statenumber . 'precious_metals_mines'];
                                                        echo " precious metals mines"; ?>
                                        <br>
                                        
                                this state have <?php echo $stateownername['state' . $statenumber . 'coalmines'];
                                                echo " coal mines"; ?>
                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'lead_mines'];
                                                echo " lead mines"; ?>
                                <br>
                                        <br>
                                        <br>
                <?php
        
        
        
                                    }
                                    else if ($stateownername['continent'] == 'Africa') {
                                        ?>
                                           
                                            this state have <?php echo $stateownername['state' . $statenumber . 'farms'];
                                                            echo " farms"; ?>
                                            
                                            <br>
                                            <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'bauxitemines'];
                                                echo " bauxite mines"; ?>

                               
                                            <br>
                                            this state have <?php echo $stateownername['state' . $statenumber . 'precious_metals_mines'];
                                                            echo " precious metals mines"; ?>
                                            <br>
                                            <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'ironmines'];
                                                echo " iron mines"; ?>
                                <br>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'coalmines'];
                                                    echo " coal mines"; ?>
                                    <br>
                                   
                                            <br>
                    <?php
            
            
            
                                        }
                                        else if ($stateownername['continent'] == 'Australia') {
                                            ?>
                                               
                                                this state have <?php echo $stateownername['state' . $statenumber . 'farms'];
                                                                echo " farms"; ?>
                                                
                                                <br>
                                                <br>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'bauxitemines'];
                                                    echo " bauxite mines"; ?>
    
                                   
                                                <br>
                                                <br>
                                this state have <?php echo $stateownername['state' . $statenumber . 'lead_mines'];
                                                echo " lead mines"; ?>
                                <br>
                                        <br>
                                                this state have <?php echo $stateownername['state' . $statenumber . 'precious_metals_mines'];
                                                                echo " precious metals mines"; ?>
                                                <br>
                                                <br>
                                    this state have <?php echo $stateownername['state' . $statenumber . 'uranium_mines'];
                                                    echo " uranium mines"; ?>
                                    <br>
                                             
                                        this state have <?php echo $stateownername['state' . $statenumber . 'coalmines'];
                                                        echo " coal mines"; ?>
                                        <br>
                                       
                                                <br>
                        <?php
                
                
                
                                            }
                        } else {
                            echo "this page gives an error";
                        }
                    } else if (mysqli_num_rows($state_check) <= 0) {
                        echo "this state doesnt exist";
                    }
                }
            }
        ?>





    </section>