<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include("connection.php");
include("header.php");
include("data.php");

?>
<section class="home-section">
this is the policies 

<?php

    if($user_stats['government']=='dictatorship')
    {
        ?>
        Gun control -> players will have the option to pass the gun control in their country which will make police more effective but negetively impact the economy and easier for someone else to invade you; don't pass = easier for uprisings.
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_gun_control_btn" name="implement_gun_control">implement gun control</button>
        <button type="submit" class="repeal_gun_control_btn" name="repeal_gun_control">repeal gun control</button> <br><br>

        Abortion -> players can choose wether to make abortion illigal or legal. making it legal will positively impact the happiness and healthcare while making it illigal will increase crime and corruption.
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_abortion_law_btn" name="implement_abortion_law">implement abortion control</button>
        <button type="submit" class="repeal_abortion_lawbtn" name="repeal_abortion_law">repeal abortion control</button> <br><br>

        religious freedom -> players can grant their citizens religious freedom which will increase the happiness and satisfaction while negetively impacting fear, they can also choose a national religion as well as keeping religious freedom
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_religious_freedom_btn" name="implement_religious_freedom">implement religious freedom</button>
        <button type="submit" class="repeal_religious_freedom_btn" name="repeal_religious_freedom">repeal religious freedom</button><br><br>

        privacy rights -> players can make the choice to respect the privacy rights of the people which will make people happy and satisfied but will negetively impact the effect of propagandists and police
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_privacy_rights_btn" name="implement_privacy_rights">implement privacy rights</button>
        <button type="submit" class="repeal_privacy_rights_btn" name="repeal_privacy_rights">repeal privacy rights</button><br><br>

        climate change -> players can decide to tackle climate change or ignore it. addressing global change will decrease their budget and economy will take a hit but will make the citizens healthier and more happy with more people willing to fight for their country
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_climate_change_btn" name="implement_climate_change">implement climate change</button>
        <button type="submit" class="repeal_climate_change_btn" name="repeal_climate_change">repeal climate change</button><br><br>

        recreational drugs -> legalising drugs will improve the economy ,lower crime rate and increase effectiveness of police but it will negetively effect the propagandists
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_recreational_drugs_btn" name="implement_recreational_drugs">implement recreational drugs</button>
        <button type="submit" class="repeal_recreational_drugs_btn" name="repeal_recreational_drugs">repeal recreational drugs</button><br><br>

        
        marriage equality -> it will make the people happier and more satified but will decrease fear and effectiveness of propagandists
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_marriage_btn" name="implement_marriage">implement marriage equality</button>
        <button type="submit" class="repeal_marriage_btn" name="repeal_marriage">repeal marriage equality</button><br><br>

        
        capital punishment -> allowing it will decrease corruption but will increase fear and propagandists
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_capital_punishment_btn" name="implement_capital_punishment">implement capital punishment</button>
        <button type="submit" class="repeal_capital_punishment_btn" name="repeal_capital_punishment">repeal capital punishment</button><br><br>


        universal healthcare -> this will make the people healthier , happier and more satisfied but will negetively impact economy and budget
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_universal_healthcare_btn" name="implement_universal_healthcare">implement universal healthcare</button>
        <button type="submit" class="repeal_universal_healthcare_btn" name="repeal_universal_healthcare">repeal universal healthcare</button><br><br>


        universal education -> same as universal healthcare
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_universal_education_btn" name="implement_universal_education">implement universal education</button>
        <button type="submit" class="repeal_universal_education_btn" name="repeal_universal_education">repeal universal education</button><br><br>


        universal income -> same as universal healthcare
        <form method="POST" action="functions.php">
        <button type="submit" class="implement_universal_income_btn" name="implement_universal_income">implement universal income</button>
        <button type="submit" class="repeal_universal_income_btn" name="repeal_universal_income">repeal universal income</button><br><br>



<?php    }
else{
    ?>
    hi main
    <?php
}

?>
</section>
