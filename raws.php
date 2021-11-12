<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raws</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include("connection.php");
    include("header.php");
    include("data.php");

    ?>
    <section class="home-section">

        <p>this is the raw page. I am putting the types of raws available to the player according to their continent</p>
        this is <?php echo $user_data['username'] ?>'s page so he will only see the raws availabe to mine in <?php echo $user_stats['continent'] ?>

        <br>
        <br>
        <p>so the raws availabe to mine <?php echo $user_stats['continent'] ?> are:</p>
        <br>
        <br>






        <?php
        if ($user_stats['continent'] == 'Europe') {
        ?>
            <p>this is for Europe</p>
            <br>
            <p> so this the stuff Europe is supposed to produced = food, bauxite, uranium, iron, coal, natural oil and gas.</p>
            <p>Bauxite will get the buff in Europe</p>

            <br>
            farm
            <br>
            <br>
            <p>cost of creating one farm is 1000</p>
            <br>
            your current farms are <?php echo $user_stats['farms'] ?>
            <br>
            your current money is <?php echo $user_stats['money'] ?>
            <br>
            <form method="POST" action="functions.php">
                <input type="number" min="-10000000000000" max="100000000000" placeholder="create a farm" name="farm">

                <button type="submit" class="createfarmbtm" name="createfarm">create farm</button>
            </form>
                <br>
            
                <br>
<br>


bauxite mine
<br>
<br>
<p>cost of creating one bauxite mine is 1000</p>
<br>
your current bauxite mines are <?php echo $user_stats['bauxite mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxite_mine" >

                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                <br>
</form>
<br>
<br>
coal mine
<br>
<br>
<p>cost of creating one coal mine is 1000</p>
<br>
your current coal mines are <?php echo $user_stats['coal mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coal_mine" >

                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                <br>
</form>

<br>
<br>
uranium mine
<br>
<br>
<p>cost of creating one uranium mine is 1000</p>
<br>
your current uranium mines are <?php echo $user_stats['uranium mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a uranium mine" name="uranium_mine" >

                <button type="submit" class="createuraniumminebtm" name="createuraniummine">build the mine</button>

                <br>
</form>

<br>
<br>
<br>
<br>
iron mine
<br>
<br>
<p>cost of creating one iron mine is 1000</p>
<br>
your current iron mines are <?php echo $user_stats['iron mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build an iron mine" name="iron_mine" >

                <button type="submit" class="createironminebtm" name="createironmine">build the mine</button>

                <br>
</form>

<br>
<br>
oil and natural gas
<br>
<br>
<p>cost of creating one oil and natural mine is 1000</p>
<br>
your current oil and natural mines are <?php echo $user_stats['oil and natural gas mine']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil and natural gas mine" >
<button type="submit" class="createoilandnaturalgasminebtm" name="createoilandnaturalgasmine">build the mine</button>
</form>




<?php
        }
            ?>







            <?php
            if ($user_stats['continent'] == 'Africa') {
            ?>
                <p>this is for Africa</p>
                <br>
                <p>Africa = food, precious metals, bauxite, iron , coal</p>
                <p>precious metals will get the buff in Africa</p>
                <br>
                farm
                <br>
                <br>
                <p>cost of creating one farm is 1000</p>
                <br>
                your current farms are <?php echo $user_stats['farms'] ?>
                <br>
                your current money is <?php echo $user_stats['money'] ?>
                <br>
                <form method="POST" action="functions.php">
                    <input type="number" min="-10000000000000" max="100000000000" placeholder="create a farm" name="farm">

                    <button type="submit" class="createfarmbtm" name="createfarm">create farm</button>
                </form>
                <br>
<br>
precious metals
<br>
<br>
<p>cost of creating one forestry mine is 1000</p>
<br>
your current precious metal mines are <?php echo $user_stats['precious metal mines']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious metal mine" >
<button type="submit" class="createpreciousmetalminebtm" name="createpreciousmetalmine">build the mine</button>
</form>
                            <br>


bauxite mine
<br>
<br>
<p>cost of creating one bauxite mine is 1000</p>
<br>
your current bauxite mines are <?php echo $user_stats['bauxite mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxite mine" >

                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                <br>
</form>
<br>
<br>
iron mine
<br>
<br>
<p>cost of creating one iron mine is 1000</p>
<br>
your current iron mines are <?php echo $user_stats['iron mines']?>
<br>
your curren money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a iron mine" name="iron mine" >
<button type="submit" class="createironminebtm" name="createironmine">build the mine</button>
</form>
<br>
coal mine
<br>
<br>
<p>cost of creating one coal mine is 1000</p>
<br>
your current coal mines are <?php echo $user_stats['coal mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coal mine" >

                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                <br>
</form>
                <?php
            }
                ?>






                <?php
                if ($user_stats['continent'] == 'Australia') {
                ?>
                    <p>this is for Australia</p>
                    <br>
                    <p>Australia = bauxite, coal , food ,precious metals ,uranium and lead</p>
                    <p>coal will get the buff in Australia</p>
                    <br>
                    farm
                    <br>
                    <br>
                    <p>cost of creating one farm is 1000</p>
                    <br>
                    your current farms are <?php echo $user_stats['farms'] ?>
                    <br>
                    your current money is <?php echo $user_stats['money'] ?>
                    <br>
                    <form method="POST" action="functions.php">
                        <input type="number" min="-10000000000000" max="100000000000" placeholder="create a farm" name="farm">

                        <button type="submit" class="createfarmbtm" name="createfarm">create farm</button>
                    </form>
                    <br>
<br>
uranium mine
<br>
<br>
<p>cost of creating one uranium mine is 1000</p>
<br>
your current uranium mines are <?php echo $user_stats['uranium mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a uranium mine" name="uranium mine" >

                <button type="submit" class="createuraniumminebtm" name="createuraniummine">build the mine</button>

                <br>
</form>
<br>
<br>
lead
<br>
<br>
<p>cost of creating one lead mine is 1000</p>
<br>
your current lead mines are <?php echo $user_stats['lead mines']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a lead mine" name="lead mine" >
<button type="submit" class="createleadminebtm" name="createleadmine">build the mine</button>
</form>
<br>
<br>
precious metals
<br>
<br>
<p>cost of creating one forestry mine is 1000</p>
<br>
your current precious metal mines are <?php echo $user_stats['precious metal mines']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious metal mine" >
<button type="submit" class="createpreciousmetalminebtm" name="createpreciousmetalmine">build the mine</button>
</form>
<br>
<br>
bauxite
<br>
<br>
<p>cost of creating one bauxite mine is 1000</p>
<br>
your current bauxite mines are <?php echo $user_stats['bauxite mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxite mine" >

                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                <br>
</form>
<br>
coal mine
<br>
<br>
<p>cost of creating one coal mine is 1000</p>
<br>
your current coal mines are <?php echo $user_stats['coal mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coal mine" >

                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                <br>
</form>
                    <?php
                }
                    ?>








                    <?php
                    if ($user_stats['continent'] == 'Asia') {
                    ?>
                        <p>this is for Asia</p>
                        <br>
                        <p>Asia = food,oil and natural gas, forestry, coal, lead ,precious metals</p>
                        <p>food will get the buff in Asia</p>
                        <br>
                        <br>
            farm
            <br>
            <br>
            <p>cost of creating one farm is 1000</p>
            <br>
            your current farms are <?php echo $user_stats['farms'] ?>
            <br>
            your current money is <?php echo $user_stats['money'] ?>
            <br>
            <form method="POST" action="functions.php">
                <input type="number" min="-10000000000000" max="100000000000" placeholder="create a farm" name="farm">

                <button type="submit" class="createfarmbtm" name="createfarm">create farm</button>
            </form>
                <br>
<br>
coal mine
<br>
<br>
<p>cost of creating one coal mine is 1000</p>
<br>
your current coal mines are <?php echo $user_stats['coal mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coal mine" >

                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                <br>
</form>
<br>
<br>
oil and natural gas
<br>
<br>
<p>cost of creating one oil and natural mine is 1000</p>
<br>
your current oil and natural mines are <?php echo $user_stats['oil and natural gas mine']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil and natural gas mine" >
<button type="submit" class="createoilandnaturalgasminebtm" name="createoilandnaturalgasmine">build the mine</button>
</form>

<br>
<br>
forestry
<br>
<br>
<p>cost of creating one forestry mine is 1000</p>
<br>
your current forestry mines are <?php echo $user_stats['lumbermine']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a forestry mine" name="forestry mine" >
<button type="submit" class="createforestryminebtm" name="createforestrymine">build the mine</button>
</form>
<br>
<br>
lead
<br>
<br>
<p>cost of creating one lead mine is 1000</p>
<br>
your current lead mines are <?php echo $user_stats['lead mines']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a lead mine" name="lead mine" >

                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                <br>
</form>


<br>
<br>
precious metals
<br>
<br>
<p>cost of creating one forestry mine is 1000</p>
<br>
your current precious metal mines are <?php echo $user_stats['precious_metal_mines']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious metal mine" >
<button type="submit" class="createpreciousmetalminebtm" name="createpreciousmetalmine">build the mine</button>
</form>

<?php
                    }
                        ?>










                        <?php
                        if ($user_stats['continent'] == 'North America') {
                        ?>
                            <p>this is for North America</p>
                            <br>
                            <p>North America = Food, oil and natural gas ,forestry ,coal ,iron , bauxite</p>
                            <p>oil and natural gas will get the buff in North America</p>
                            <br>
                            farm
                            <br>
                            <br>
                            <p>cost of creating one farm is 1000</p>
                            <br>
                            your current farms are <?php echo $user_stats['farms'] ?>
                            <br>
                            your current money is <?php echo $user_stats['money'] ?>
                            <br>
                            <form method="POST" action="functions.php">
                                <input type="number" min="-10000000000000" max="100000000000" placeholder="create a farm" name="farm">

                                <button type="submit" class="createfarmbtm" name="createfarm">create farm</button>
                            </form>

                            <br>


bauxite mine
<br>
<br>
<p>cost of creating one bauxite mine is 1000</p>
<br>
your current bauxite mines are <?php echo $user_stats['bauxite mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a bauxite mine" name="bauxite mine" >

                <button type="submit" class="createbauxiteminebtm" name="createbauxitemine">build the mine</button>

                <br>
</form>
<br>
<br>
iron mine
<br>
<br>
<p>cost of creating one iron mine is 1000</p>
<br>
your current iron mines are <?php echo $user_stats['iron mines']?>
<br>
your curren money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a iron mine" name="iron mine" >
<button type="submit" class="createironminebtm" name="createironmine">build the mine</button>
</form>
<br>
coal mine
<br>
<br>
<p>cost of creating one coal mine is 1000</p>
<br>
your current coal mines are <?php echo $user_stats['coal mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a coal mine" name="coal mine" >

                <button type="submit" class="createcoalminebtm" name="createcoalmine">build the mine</button>

                <br>
</form>
<br>
<br>
oil and natural gas
<br>
<br>
<p>cost of creating one oil and natural mine is 1000</p>
<br>
your current oil and natural mines are <?php echo $user_stats['oil and natural gas mine']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil and natural gas mine" >
<button type="submit" class="createoilandnaturalgasminebtm" name="createoilandnaturalgasmine">build the mine</button>
</form>
<br>
<br>
forestry
<br>
<br>
<p>cost of creating one forestry mine is 1000</p>
<br>
your current forestry mines are <?php echo $user_stats['forestry mine']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a forestry mine" name="forestry mine" >
<button type="submit" class="createforestryminebtm" name="createforestrymine">build the mine</button>
</form>

                            <?php
                        }
                            ?>












                            <?php
                            if ($user_stats['continent'] == 'South America') {
                            ?>
                                <p>this is for South America</p>
                                <br>
                                <p>South America = food, oil and natural gas,precious metals, forestry, uranium </p>
                                <p>forestry will get the buff in South America</p>
                                <br>
                                farm
                                <br>
                                <br>
                                <p>cost of creating one farm is 1000</p>
                                <br>
                                your current farms are <?php echo $user_stats['farms'] ?>
                                <br>
                                your current money is <?php echo $user_stats['money'] ?>
                                <br>
                                <form method="POST" action="functions.php">
                                    <input type="number" min="-10000000000000" max="100000000000" placeholder="create a farm" name="farm">

                                    <button type="submit" class="createfarmbtm" name="createfarm">create farm</button>
                                </form>
                                <br>
<br>
uranium mine
<br>
<br>
<p>cost of creating one uranium mine is 1000</p>
<br>
your current uranium mines are <?php echo $user_stats['uranium mines'] ?>
<br>
your current money is <?php echo $user_stats['money'] ?>
<br>
<form method="POST" action="functions.php">
<input type="number" min="-10000000000000" max="100000000000" placeholder="build a uranium mine" name="uranium mine" >

                <button type="submit" class="createuraniumminebtm" name="createuraniummine">build the mine</button>

                <br>
</form>
<br>
<br>
oil and natural gas
<br>
<br>
<p>cost of creating one oil and natural mine is 1000</p>
<br>
your current oil and natural mines are <?php echo $user_stats['oil and natural gas mine']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a oil and natural gas mine" name="oil and natural gas mine" >
<button type="submit" class="createoilandnaturalgasminebtm" name="createoilandnaturalgasmine">build the mine</button>
</form>
<br>
precious metals
<br>
<br>
<p>cost of creating one forestry mine is 1000</p>
<br>
your current precious metal mines are <?php echo $user_stats['precious metal mines']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a precious metal mine" name="precious metal mine" >
<button type="submit" class="createpreciousmetalminebtm" name="createpreciousmetalmine">build the mine</button>
</form>
                            <br>
                            <br>
<br>
forestry
<br>
<br>
<p>cost of creating one forestry mine is 1000</p>
<br>
your current forestry mines are <?php echo $user_stats['forestry mine']?>
<br>
your current money is <?php echo $user_stats['money']?>
<br>
<form method="POST" action="functions.php">
<input type="number" min ="-10000000000000" max="100000000000" placeholder="build a forestry mine" name="forestry mine" >
<button type="submit" class="createforestryminebtm" name="createforestrymine">build the mine</button>
</form>
                                <?php
                            }
                                ?>











    </section>