<?php
include "connection.php";
require 'login_register.php';
include "data.php";

if (isset($_POST['Asia'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `continent`='Asia' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
                </script>
                ";
    } else {
        echo "
                <script>
                alert('error');
                window.location.href='index.php';
                </script>
                ";
    }
}

if (isset($_POST['Antartica'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `continent`='Antartica' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}

if (isset($_POST['Africa'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `continent`='Africa' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}

if (isset($_POST['Australia'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `continent`='Australia' WHERE `username`='$_SESSION[username]'";

    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}

if (isset($_POST['Europe'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `continent`='Europe' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}

if (isset($_POST['North_America'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `continent`='North America' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}

if (isset($_POST['South_America'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `continent`='South America' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('continent selected sucessfully');
                window.location.href='economy_type.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}

function append_string($str1, $str2)
{

    $str1 .= $str2;

    return $str1;
}

if (isset($_POST['save_new_state'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $name = $_POST['newstate'];
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $name)) {
        echo "
            <script>
            alert('try a valid name without special characters again');
            window.location.href='state_creater.php';
            </script>
            ";
    } elseif ($name == '') {
        echo "
                <script>
                alert('try not leaving name empty again');
                window.location.href='state_creater.php';
                </script>
                ";
    } else {
        $newstatecounter = $user_states['statecounter'] + 1;
        $string1 = "state";
        $string2 = $newstatecounter;
        $string3 = append_string($string1, $string2);

        if ($user_stats['continent'] == 'North America') {
            $stringforstateid = "id";

            $stringstateid = $string3 . "" . $stringforstateid;
            $qstateid = "ALTER TABLE states ADD COLUMN " . $stringstateid . " TEXT UNIQUE AFTER statecounter";
            mysqli_query($con, $qstateid);
            $rannumber = rand() + rand();
            $qup = "UPDATE `states` SET `$stringstateid`='$rannumber' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $qup);

            $stringforfarm = "farms";
            $stringfarm = $string3 . "" . $stringforfarm;
            $qfarm = "ALTER TABLE states ADD COLUMN " . $stringfarm . " TEXT AFTER statecounter";
            mysqli_query($con, $qfarm);

            $stringforoil = "oil_and_natural_gas_mines";
            $stringoil = $string3 . "" . $stringforoil;
            $qoil = "ALTER TABLE states ADD COLUMN " . $stringoil . " TEXT AFTER statecounter";
            mysqli_query($con, $qoil);

            $stringforlumber = "lumbermines";
            $stringlumber = $string3 . "" . $stringforlumber;
            $qlumber = "ALTER TABLE states ADD COLUMN " . $stringlumber . " TEXT AFTER statecounter";
            mysqli_query($con, $qlumber);

            $stringforcoal = "coalmines";
            $stringcoal = $string3 . "" . $stringforcoal;
            $qcoal = "ALTER TABLE states ADD COLUMN " . $stringcoal . " TEXT AFTER statecounter";
            mysqli_query($con, $qcoal);

            $stringforiron = "ironmines";
            $stringiron = $string3 . "" . $stringforiron;
            $qiron = "ALTER TABLE states ADD COLUMN " . $stringiron . " TEXT AFTER statecounter";
            mysqli_query($con, $qiron);

            $stringforbauxite = "bauxitemines";
            $stringbauxite = $string3 . "" . $stringforbauxite;
            $qbauxite = "ALTER TABLE states ADD COLUMN " . $stringbauxite . " TEXT AFTER statecounter";
            mysqli_query($con, $qbauxite);

        } else if ($user_stats['continent'] == 'South America') {
            $stringforstateid = "id";

            $stringstateid = $string3 . "" . $stringforstateid;
            $qstateid = "ALTER TABLE states ADD COLUMN " . $stringstateid . " TEXT UNIQUE AFTER statecounter";
            mysqli_query($con, $qstateid);
            $rannumber = rand() + rand();
            $qup = "UPDATE `states` SET `$stringstateid`='$rannumber' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $qup);

            $stringforfarm = "farms";
            $stringfarm = $string3 . "" . $stringforfarm;
            $qfarm = "ALTER TABLE states ADD COLUMN " . $stringfarm . " TEXT AFTER statecounter";
            mysqli_query($con, $qfarm);

            $stringforoil = "oil_and_natural_gas_mines";
            $stringoil = $string3 . "" . $stringforoil;
            $qoil = "ALTER TABLE states ADD COLUMN " . $stringoil . " TEXT AFTER statecounter";
            mysqli_query($con, $qoil);

            $stringforlumber = "lumbermines";
            $stringlumber = $string3 . "" . $stringforlumber;
            $qlumber = "ALTER TABLE states ADD COLUMN " . $stringlumber . " TEXT AFTER statecounter";
            mysqli_query($con, $qlumber);

            $stringforprecious = "precious_metals_mines";
            $stringprecious = $string3 . "" . $stringforprecious;
            $qprecious = "ALTER TABLE states ADD COLUMN " . $stringprecious . " TEXT AFTER statecounter";
            mysqli_query($con, $qprecious);

            $stringforuranium = "uranium_mines";
            $stringuranium = $string3 . "" . $stringforuranium;
            $quranium = "ALTER TABLE states ADD COLUMN " . $stringuranium . " TEXT AFTER statecounter";
            mysqli_query($con, $quranium);

        } else if ($user_stats['continent'] == 'Europe') {
            $stringforstateid = "id";

            $stringstateid = $string3 . "" . $stringforstateid;
            $qstateid = "ALTER TABLE states ADD COLUMN " . $stringstateid . " TEXT UNIQUE AFTER statecounter";
            mysqli_query($con, $qstateid);
            $rannumber = rand() + rand();
            $qup = "UPDATE `states` SET `$stringstateid`='$rannumber' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $qup);

            $stringforfarm = "farms";
            $stringfarm = $string3 . "" . $stringforfarm;
            $qfarm = "ALTER TABLE states ADD COLUMN " . $stringfarm . " TEXT AFTER statecounter";
            mysqli_query($con, $qfarm);

            $stringforoil = "oil_and_natural_gas_mines";
            $stringoil = $string3 . "" . $stringforoil;
            $qoil = "ALTER TABLE states ADD COLUMN " . $stringoil . " TEXT AFTER statecounter";
            mysqli_query($con, $qoil);

            $stringforcoal = "coalmines";
            $stringcoal = $string3 . "" . $stringforcoal;
            $qcoal = "ALTER TABLE states ADD COLUMN " . $stringcoal . " TEXT AFTER statecounter";
            mysqli_query($con, $qcoal);

            $stringforiron = "ironmines";
            $stringiron = $string3 . "" . $stringforiron;
            $qiron = "ALTER TABLE states ADD COLUMN " . $stringiron . " TEXT AFTER statecounter";
            mysqli_query($con, $qiron);

            $stringforbauxite = "bauxitemines";
            $stringbauxite = $string3 . "" . $stringforbauxite;
            $qbauxite = "ALTER TABLE states ADD COLUMN " . $stringbauxite . " TEXT AFTER statecounter";
            mysqli_query($con, $qbauxite);

            $stringforuranium = "uraniummines";
            $stringuranium = $string3 . "" . $stringforuranium;
            $quranium = "ALTER TABLE states ADD COLUMN " . $stringuranium . " TEXT AFTER statecounter";
            mysqli_query($con, $quranium);

        } else if ($user_stats['continent'] == 'Asia') {
            $stringforstateid = "id";

            $stringstateid = $string3 . "" . $stringforstateid;
            $qstateid = "ALTER TABLE states ADD COLUMN " . $stringstateid . " TEXT UNIQUE AFTER statecounter";
            mysqli_query($con, $qstateid);
            $rannumber = rand() + rand();
            $qup = "UPDATE `states` SET `$stringstateid`='$rannumber' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $qup);

            $stringforfarm = "farms";
            $stringfarm = $string3 . "" . $stringforfarm;
            $qfarm = "ALTER TABLE states ADD COLUMN " . $stringfarm . " TEXT AFTER statecounter";
            mysqli_query($con, $qfarm);

            $stringforoil = "oil_and_natural_gas_mines";
            $stringoil = $string3 . "" . $stringforoil;
            $qoil = "ALTER TABLE states ADD COLUMN " . $stringoil . " TEXT AFTER statecounter";
            mysqli_query($con, $qoil);

            $stringforcoal = "coalmines";
            $stringcoal = $string3 . "" . $stringforcoal;
            $qcoal = "ALTER TABLE states ADD COLUMN " . $stringcoal . " TEXT AFTER statecounter";
            mysqli_query($con, $qcoal);

            $stringforprecious = "precious_metals_mines";
            $stringprecious = $string3 . "" . $stringforprecious;
            $qprecious = "ALTER TABLE states ADD COLUMN " . $stringprecious . " TEXT AFTER statecounter";
            mysqli_query($con, $qprecious);

            $stringforlead = "lead_mines";
            $stringlead = $string3 . "" . $stringforlead;
            $qlead = "ALTER TABLE states ADD COLUMN " . $stringlead . " TEXT AFTER statecounter";
            mysqli_query($con, $qlead);

            $stringforlumber = "lumbermines";
            $stringlumber = $string3 . "" . $stringforlumber;
            $qlumber = "ALTER TABLE states ADD COLUMN " . $stringlumber . " TEXT AFTER statecounter";
            mysqli_query($con, $qlumber);

        } else if ($user_stats['continent'] == 'Africa') {
            $stringforstateid = "id";

            $stringstateid = $string3 . "" . $stringforstateid;
            $qstateid = "ALTER TABLE states ADD COLUMN " . $stringstateid . " TEXT UNIQUE AFTER statecounter";
            mysqli_query($con, $qstateid);
            $rannumber = rand() + rand();
            $qup = "UPDATE `states` SET `$stringstateid`='$rannumber' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $qup);

            $stringforfarm = "farms";
            $stringfarm = $string3 . "" . $stringforfarm;
            $qfarm = "ALTER TABLE states ADD COLUMN " . $stringfarm . " TEXT AFTER statecounter";
            mysqli_query($con, $qfarm);

            $stringforcoal = "coalmines";
            $stringcoal = $string3 . "" . $stringforcoal;
            $qcoal = "ALTER TABLE states ADD COLUMN " . $stringcoal . " TEXT AFTER statecounter";
            mysqli_query($con, $qcoal);

            $stringforprecious = "precious_metals_mines";
            $stringprecious = $string3 . "" . $stringforprecious;
            $qprecious = "ALTER TABLE states ADD COLUMN " . $stringprecious . " TEXT AFTER statecounter";
            mysqli_query($con, $qprecious);

            $stringforiron = "ironmines";
            $stringiron = $string3 . "" . $stringforiron;
            $qiron = "ALTER TABLE states ADD COLUMN " . $stringiron . " TEXT AFTER statecounter";
            mysqli_query($con, $qiron);

            $stringforbauxite = "bauxitemines";
            $stringbauxite = $string3 . "" . $stringforbauxite;
            $qbauxite = "ALTER TABLE states ADD COLUMN " . $stringbauxite . " TEXT AFTER statecounter";
            mysqli_query($con, $qbauxite);

        } else if ($user_stats['continent'] == 'Australia') {
            $stringforstateid = "id";

            $stringstateid = $string3 . "" . $stringforstateid;
            $qstateid = "ALTER TABLE states ADD COLUMN " . $stringstateid . " TEXT UNIQUE AFTER statecounter";
            mysqli_query($con, $qstateid);
            $rannumber = rand() + rand();
            $qup = "UPDATE `states` SET `$stringstateid`='$rannumber' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $qup);

            $stringforfarm = "farms";
            $stringfarm = $string3 . "" . $stringforfarm;
            $qfarm = "ALTER TABLE states ADD COLUMN " . $stringfarm . " TEXT AFTER statecounter";
            mysqli_query($con, $qfarm);

            $stringforbauxite = "bauxitemines";
            $stringbauxite = $string3 . "" . $stringforbauxite;
            $qbauxite = "ALTER TABLE states ADD COLUMN " . $stringbauxite . " TEXT AFTER statecounter";
            mysqli_query($con, $qbauxite);

            $stringforcoal = "coalmines";
            $stringcoal = $string3 . "" . $stringforcoal;
            $qcoal = "ALTER TABLE states ADD COLUMN " . $stringcoal . " TEXT AFTER statecounter";
            mysqli_query($con, $qcoal);

            $stringforprecious = "precious_metals_mines";
            $stringprecious = $string3 . "" . $stringforprecious;
            $qprecious = "ALTER TABLE states ADD COLUMN " . $stringprecious . " TEXT AFTER statecounter";
            mysqli_query($con, $qprecious);

            $stringforlead = "lead_mines";
            $stringlead = $string3 . "" . $stringforlead;
            $qlead = "ALTER TABLE states ADD COLUMN " . $stringlead . " TEXT AFTER statecounter";
            mysqli_query($con, $qlead);

            $stringforuranium = "uranium_mines";
            $stringuranium = $string3 . "" . $stringforuranium;
            $quranium = "ALTER TABLE states ADD COLUMN " . $stringuranium . " TEXT AFTER statecounter";
            mysqli_query($con, $quranium);
        }

        $query = "ALTER TABLE states ADD COLUMN " . $string3 . " TEXT AFTER statecounter";

        mysqli_query($con, $query);
        $q1 = "UPDATE `states` SET `$string3`='$name' WHERE `username`='$_SESSION[username]'";
        $q2 = "UPDATE `states` SET `statecounter`='$newstatecounter' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $q2);
        if (mysqli_query($con, $q1)) {
            echo "
                <script>
                alert('state added sucessfully');
                window.location.href='budget.php';
                </script>
                ";
        } else {
            echo "
                    <script>
                    alert('error');
                    window.location.href='state_creater.php';
                    </script>
                    ";
        }
    }
}
?>




























<?php
if (isset($_POST['attackForeignNation'])) {
    $defendernation=$_POST['defendernation'];
    $wartype=$_POST['warType'];
    $con = new mysqli("localhost", "root", "", "test");
$q1=mysqli_query($con,"SELECT * from `conflicts` WHERE (`attacker`='$_SESSION[username]' AND `defender`='$defendernation') OR (`attacker`='$defendernation' AND `defender`='$_SESSION[username]')");
if(mysqli_num_rows($q1))
{
    echo "
    <script>
    alert('you are already engaged in combat with this nation');
    window.location.href='foreignnation.php?username=$defendernation';
    </script>
    ";
}


else{
    $rannumber = rand() + rand();
<<<<<<< HEAD
    
    $query = "INSERT INTO `conflicts`(`attacker`, `defender`, `wartype`, `conflictid`) VALUES ('$_SESSION[username]','$defendernation','$wartype','$rannumber')";
   $q1="INSERT INTO `warstats`(`conflictid`) VALUES ('$rannumber')";
    $q2= mysqli_query($con,$q1);	

=======
    $query = "INSERT INTO `conflicts`(`attacker`, `defender`, `wartype`, `conflictid`) VALUES ('$_SESSION[username]','$defendernation','$wartype','$rannumber')";
>>>>>>> 6cc7cffab53a173b510ad015b09577ee204084d2
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('successfully engaged in combat');
                window.location.href='foreignnation.php?username=$defendernation';
                </script>
                ";
    } else {
        echo "
                <script>
                alert('error');
                window.location.href='index.php';
                </script>
                ";
    }
}
}

if (isset($_POST['capitalism'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `economic_policy`='capitalism' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('economic policy  selected sucessfully');
                window.location.href='state_creater.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}
if (isset($_POST['socialism'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `economic_policy`='socialism' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('economic policy  selected sucessfully');
                window.location.href='state_creater.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}
if (isset($_POST['communism'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `economic_policy`='communism' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('economic policy  selected sucessfully');
                window.location.href='state_creater.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='index.php';
                    </script>
                    ";
    }
}

if (isset($_POST['budget'])) {
    $con = new mysqli("localhost", "root", "", "test");
    if ($_POST['healthcare'] == "" || $_POST['military'] == "" || $_POST['military'] == "" || $_POST['research'] == "") {
        echo "
        <script>
        alert('yoy have to fill all the spaces');
        window.location.href='budget.php';
        </script>
        ";
    } else {
        $query = "UPDATE `budget` SET `healthcare`='$_POST[healthcare]',`welfare`='$_POST[welfare]',`military`='$_POST[military]',`research`='$_POST[research]' WHERE `username`='$_SESSION[username]'";
        if (mysqli_query($con, $query) && ($_POST['healthcare'] + $_POST['welfare'] + $_POST['military'] + $_POST['research'] == 100)) {
            echo "
                <script>
                alert('budget saved sucessfully');
                window.location.href='army.php';
                </script>
                ";
        } else {
            echo "
                    <script>
                    alert('please make sure the sum is 100%');
                    window.location.href='budget.php';
                    </script>
                    ";
        }
    }
}
if (isset($_POST['forcedMilitaryHiring'])) {
    $con = new mysqli("localhost", "root", "", "test");
    if ($user_forces['forcedMilitaryHiring'] == "1") {
        echo "
        <script>
        alert('I don't know how you did this but please don't');
        window.location.href='army.php';
        </script>
        ";
    } elseif ($user_stats['fear'] < 10) {
        echo "
                    <script>
                    alert('people don't fear you enough to be forced');
                    window.location.href='army.php';
                    </script>
                    ";
    } else {
        $newsoldiers = $user_forces['soldiersLevelOne'] + 10000;
        $query = "UPDATE `forces` SET `forcedMilitaryHiring`='1',`soldiersLevelOne`='$newsoldiers' WHERE `username`='$_SESSION[username]'";
        $newpopularity = $user_stats['popularity']-5;
        mysqli_query($con,"UPDATE `stats` SET `popularity`='$newpopularity' WHERE `username`='$_SESSION[username]'");
        if (mysqli_query($con, $query)) {
            echo "
                <script>
                alert('people forced sucessfully');
                window.location.href='army.php';
                </script>
                ";
        } else {
            echo "
                    <script>
                    alert('people refused bruh.tough luck');
                    window.location.href='army.php';
                    </script>
                    ";
        }
    }
}

if (isset($_POST['createsoldiers'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $soldiers_limit = ($user_forces['numberOfWars'] + 1) * $user_stats['happiness'] * $user_stats['popularity'] * $user_stats['fear'] * 10;

    $soldiers = $_POST['soldiers'];
    if ($soldiers == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='army.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $soldiers);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money'] && $soldiers>($soldiers_limit-$user_forces['soldiersLevelOne'])) {
            echo "
            <script>
            alert('you cannot hire that many soldiers');
            window.location.href='army.php';
            </script>
            ";
        }
        elseif ( $soldiers<0 && abs($soldiers)>$user_forces['soldiersLevelOne']) {
            echo "
                <script>
                alert('you dont have enough soldiers to fire');
                window.location.href='army.php';
                </script>
                ";
        } 
         elseif ($money_needed <= $user_stats['money'] && $soldiers<=($soldiers_limit-$user_forces['soldiersLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_soldiers = $user_forces['soldiersLevelOne'] + $soldiers;
            $query = "UPDATE `forces` SET `soldiersLevelOne`='$new_soldiers' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('soldiers saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('there has been some error');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['trainsoldiers'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $soldiers_limit = round(($user_forces['soldiersLevelOne']*0.3));

    $soldiers = $_POST['soldiers'];
    if ($soldiers == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='army.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $soldiers);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } elseif ( $soldiers<0 && abs($soldiers)>$user_forces['soldiersLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough trained soldiers to fire');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $soldiers>($soldiers_limit-$user_forces['soldiersLevelTwo'])) {
            echo "
            <script>
            alert('you cannot hire that many soldiers');
            window.location.href='army.php';
            </script>
            ";
        } elseif ($money_needed <= $user_stats['money'] && $soldiers <= ($soldiers_limit-$user_forces['soldiersLevelTwo'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($soldiers>0)
            {
            $newLevelOneSoldiers=$user_forces['soldiersLevelOne']-$soldiers;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `soldiersLevelOne`='$newLevelOneSoldiers' WHERE `username`='$_SESSION[username]'");
            }
            $new_soldiers = $user_forces['soldiersLevelTwo'] + $soldiers;
            $query = "UPDATE `forces` SET `soldiersLevelTwo`='$new_soldiers' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('soldiers trained sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('error');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}


if (isset($_POST['researchArtilleryLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchArtilleryLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='army.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='army.php';
                    </script>
                    ";
    }
}






if (isset($_POST['improveartilleries'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $artilleryNumber=$_POST['improveartillerynumber'];

    
    if ($artilleryNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='army.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $artilleryNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money'] &&  $artilleryNumber>($user_forces['artilleryLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many artilleries to improve');
            window.location.href='army.php';
            </script>
            ";
        } 
        elseif ( $artilleryNumber<0 && abs($artilleryNumber)>$user_forces['artilleryLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough improved artillery to sell');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] && $artilleryNumber<=($user_forces['artilleryLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($artilleryNumber>0)
            {
            $newLevelOneArtilleries=$user_forces['artilleryLevelOne']-$artilleryNumber;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `artilleryLevelOne`='$newLevelOneArtilleries' WHERE `username`='$_SESSION[username]'");
            }
            $new_artillery = $user_forces['artilleryLevelTwo'] + $artilleryNumber;
            $query = "UPDATE `forces` SET `artilleryLevelTwo`='$new_artillery' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('artillery improved sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('error');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}















if (isset($_POST['createartillery'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $artillery = $_POST['artillery'];
    if ($artillery == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (10000 * $artillery);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ( $artillery<0 && abs($artillery)>$user_forces['artilleryLevelOne']) {
            echo "
                <script>
                alert('you dont have enough artillery to sell');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_artillery = $user_forces['artilleryLevelOne'] + $artillery;
            $query = "UPDATE `forces` SET `artilleryLevelOne`='$new_artillery' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('artillery saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}






if (isset($_POST['researchVehicleLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchVehicleLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='army.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='army.php';
                    </script>
                    ";
    }
}




if (isset($_POST['improvevehicles'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $vehicleNumber=$_POST['improvevehiclesnumber'];

    
    if ($vehicleNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='army.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $vehicleNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ( $vehicleNumber<0 && abs($vehicleNumber)>$user_forces['vehiclesLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough improved vehicles to sell');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $vehicleNumber>($user_forces['vehiclesLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many vehicles to improve');
            window.location.href='army.php';
            </script>
            ";
        } elseif ($money_needed <= $user_stats['money'] && $vehicleNumber<=($user_forces['vehiclesLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $newLevelOneVehicles=$user_forces['vehiclesLevelOne']-$vehicleNumber;
            if($vehicleNumber>0)
            {
            $q3 = mysqli_query($con,"UPDATE `forces` SET `vehiclesLevelOne`='$newLevelOneVehicles' WHERE `username`='$_SESSION[username]'");
            }
            $new_vehicle = $user_forces['vehiclesLevelTwo'] + $vehicleNumber;
            $query = "UPDATE `forces` SET `vehiclesLevelTwo`='$new_vehicle' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('vehicles improved sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('its yo boi Error ya chump good luck next time');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}





if (isset($_POST['createvehicles'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $vehicles = $_POST['vehicles'];
    if ($vehicles == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='army.php';
            </script>
            ";
    } else {
        $money_needed = (20000 * $vehicles);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ( $vehicles<0 && abs($vehicles)>$user_forces['vehiclesLevelOne']) {
            echo "
                <script>
                alert('you dont have enough weapons to sell');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_vehicles = $user_forces['vehiclesLevelOne'] + $vehicles;
            $query = "UPDATE `forces` SET `vehiclesLevelOne`='$new_vehicles' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('vehicles saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}







if (isset($_POST['researchWeaponsLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchWeaponsLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='army.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='army.php';
                    </script>
                    ";
    }
}









if (isset($_POST['improveweapons'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $weaponsNumber=$_POST['improveweaponsnumber'];

    
    if ($weaponsNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='army.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $weaponsNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ( $weaponsNumber<0 && abs($weaponsNumber)>$user_forces['weaponsLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough improved weapons to sell');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $weaponsNumber>($user_forces['weaponsLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many weapons to improve');
            window.location.href='army.php';
            </script>
            ";
            
        } 
        elseif ($money_needed <= $user_stats['money'] && $weaponsNumber<=($user_forces['weaponsLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($weaponsNumber>0){
            $newLevelOneWeapons=$user_forces['weaponsLevelOne']-$weaponsNumber;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `weaponsLevelOne`='$newLevelOneWeapons' WHERE `username`='$_SESSION[username]'");
            }
            $new_weapons = $user_forces['weaponsLevelTwo'] + $weaponsNumber;
            $query = "UPDATE `forces` SET `weaponsLevelTwo`='$new_weapons' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('weapons improved sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('its yo boi Error ya chump good luck next time');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}










if (isset($_POST['createweapons'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $weapons = $_POST['weapons'];
    if ($weapons == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='army.php';
            </script>
            ";
    } else {
        $money_needed = (500 * $weapons);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ( $weapons<0 && abs($weapons)>$user_forces['weaponsLevelOne']) {
            echo "
                <script>
                alert('you dont have enough weapons to sell');
                window.location.href='army.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_weapons = $user_forces['weaponsLevelOne'] + $weapons;
            $query = "UPDATE `forces` SET `weaponsLevelOne`='$new_weapons' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('weapons saved sucessfully');
            window.location.href='army.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}






if (isset($_POST['researchShipsLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchShipsLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='navy.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='navy.php';
                    </script>
                    ";
    }
}




if (isset($_POST['improveships'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $shipsNumber=$_POST['improveshipsnumber'];

    
    if ($shipsNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $shipsNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ( $shipsNumber<0 && abs($shipsNumber)>$user_forces['shipsLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough upgraded ships to sell');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $shipsNumber>($user_forces['shipsLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many ships to upgrade');
            window.location.href='navy.php';
            </script>
            ";
            
        } 
        elseif ($money_needed <= $user_stats['money'] && $shipsNumber<=($user_forces['shipsLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($shipsNumber>0){
            $newLevelOneShips=$user_forces['shipsLevelOne']-$shipsNumber;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `shipsLevelOne`='$newLevelOneShips' WHERE `username`='$_SESSION[username]'");
            }
            $new_ships = $user_forces['shipsLevelTwo'] + $shipsNumber;
            $query = "UPDATE `forces` SET `shipsLevelTwo`='$new_ships' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('ships upgraded sucessfully');
            window.location.href='navy.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('its yo boi Error ya chump good luck next time');
        window.location.href='navy.php';
        </script>
        ";
        }
    }
}






if (isset($_POST['createships'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $ships = $_POST['ships'];
    if ($ships == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $ships);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ( $ships<0 && abs($ships)>$user_forces['shipsLevelOne']) {
            echo "
                <script>
                alert('you dont have enough ships to sell');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_ships = $user_forces['shipsLevelOne'] + $ships;
            $query = "UPDATE `forces` SET `shipsLevelOne`='$new_ships' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('ships saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='navy.php';
        </script>
        ";
        }
    }
}








if (isset($_POST['researchDestroyersLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchDestroyersLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='navy.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='navy.php';
                    </script>
                    ";
    }
}






if (isset($_POST['improvedestroyers'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $destroyersNumber=$_POST['improvedestroyersnumber'];

    
    if ($destroyersNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $destroyersNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ( $destroyersNumber<0 && abs($destroyersNumber)>$user_forces['destroyersLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough upgraded destroyers to sell');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $destroyersNumber>($user_forces['destroyersLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many destroyers to upgrade');
            window.location.href='navy.php';
            </script>
            ";
            
        } 
        elseif ($money_needed <= $user_stats['money'] && $destroyersNumber<=($user_forces['destroyersLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($destroyersNumber>0){
            $newLevelOnedestroyers=$user_forces['destroyersLevelOne']-$destroyersNumber;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `destroyersLevelOne`='$newLevelOnedestroyers' WHERE `username`='$_SESSION[username]'");
            }
            $new_destroyers = $user_forces['destroyersLevelTwo'] + $destroyersNumber;
            $query = "UPDATE `forces` SET `destroyersLevelTwo`='$new_destroyers' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('destroyers upgraded sucessfully');
            window.location.href='navy.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('its yo boi Error ya chump good luck next time');
        window.location.href='navy.php';
        </script>
        ";
        }
    }
}















if (isset($_POST['createdestroyers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $destroyers = $_POST['destroyers'];
    if ($destroyers == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $destroyers);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        }
        elseif ( $destroyers<0 && abs($destroyers)>$user_forces['destroyersLevelOne']) {
            echo "
                <script>
                alert('you dont have enough destroyers to sell');
                window.location.href='navy.php';
                </script>
                ";
        } 
         elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_destroyers = $user_forces['destroyersLevelOne'] + $destroyers;
            $query = "UPDATE `forces` SET `destroyersLevelOne`='$new_destroyers' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('destroyers saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}







if (isset($_POST['researchSubmarinesLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchSubmarinesLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='navy.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='navy.php';
                    </script>
                    ";
    }
}



if (isset($_POST['improvesubmarines'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $submarinesNumber=$_POST['improvesubmarinesnumber'];

    
    if ($submarinesNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $submarinesNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ( $submarinesNumber<0 && abs($submarinesNumber)>$user_forces['submarinesLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough upgraded submarines to sell');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $submarinesNumber>($user_forces['submarinesLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many submarines to upgrade');
            window.location.href='navy.php';
            </script>
            ";
            
        } 
        elseif ($money_needed <= $user_stats['money'] && $submarinesNumber<=($user_forces['submarinesLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($submarinesNumber>0){
            $newLevelOnesubmarines=$user_forces['submarinesLevelOne']-$submarinesNumber;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `submarinesLevelOne`='$newLevelOnesubmarines' WHERE `username`='$_SESSION[username]'");
            }
            $new_submarines = $user_forces['submarinesLevelTwo'] + $submarinesNumber;
            $query = "UPDATE `forces` SET `submarinesLevelTwo`='$new_submarines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('submarines upgraded sucessfully');
            window.location.href='navy.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('its yo boi Error ya chump good luck next time');
        window.location.href='navy.php';
        </script>
        ";
        }
    }
}





if (isset($_POST['createsubmarines'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $submarines = $_POST['submarines'];
    if ($submarines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $submarines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ( $submarines<0 && abs($submarines)>$user_forces['submarinesLevelOne']) {
            echo "
                <script>
                alert('you dont have enough submarines to sell');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_submarines = $user_forces['submarinesLevelOne'] + $submarines;
            $query = "UPDATE `forces` SET `submarinesLevelOne`='$new_submarines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('submarines saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['createcarriers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $carriers = $_POST['carriers'];
    if ($carriers == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $carriers);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ( $carriers<0 && abs($carriers)>$user_forces['carriersLevelOne']) {
            echo "
                <script>
                alert('you dont have enough carriers to sell');
                window.location.href='navy.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_carriers = $user_forces['carriersLevelOne'] + $carriers;
            $query = "UPDATE `forces` SET `carriersLevelOne`='$new_carriers' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('carriers saved sucessfully');
            window.location.href='navy.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}




if (isset($_POST['researchPlanesLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchPlanesLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='airforce.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='airforce.php';
                    </script>
                    ";
    }
}






if (isset($_POST['improveplanes'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $planesNumber=$_POST['improveplanesnumber'];

    
    if ($planesNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='airforce.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $planesNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ( $planesNumber<0 && abs($planesNumber)>$user_forces['planesLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough upgraded planes to sell');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $planesNumber>($user_forces['planesLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many planes to upgrade');
            window.location.href='airforce.php';
            </script>
            ";
            
        } 
        elseif ($money_needed <= $user_stats['money'] && $planesNumber<=($user_forces['planesLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($planesNumber>0){
            $newLevelOneplanes=$user_forces['planesLevelOne']-$planesNumber;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `planesLevelOne`='$newLevelOneplanes' WHERE `username`='$_SESSION[username]'");
            }
            $new_planes = $user_forces['planesLevelTwo'] + $planesNumber;
            $query = "UPDATE `forces` SET `planesLevelTwo`='$new_planes' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('planes upgraded sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('its yo boi Error ya chump good luck next time');
        window.location.href='airforce.php';
        </script>
        ";
        }
    }
}


if (isset($_POST['createplanes'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $planes = $_POST['planes'];
    if ($planes == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='airforce.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $planes);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='airforce.php';
                </script>
                ";
        }
        elseif ( $planes<0 && abs($planes)>$user_forces['planesLevelOne']) {
            echo "
                <script>
                alert('you dont have enough planes to sell');
                window.location.href='airforce.php';
                </script>
                ";
        }
         elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_planes = $user_forces['planesLevelOne'] + $planes;
            $query = "UPDATE `forces` SET `planesLevelOne`='$new_planes' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('planes saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('yikes');
        window.location.href='airforce.php';
        </script>
        ";
        }
    }
}




if (isset($_POST['researchHelicoptersLevelTwo'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `researchHelicoptersLevelTwo`='1' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('research completed sucessfully');
                window.location.href='airforce.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='airforce.php';
                    </script>
                    ";
    }
}


if (isset($_POST['improvehelicopters'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $helicoptersNumber=$_POST['improvehelicoptersnumber'];

    
    if ($helicoptersNumber == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='airforce.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $helicoptersNumber);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ( $helicoptersNumber<0 && abs($helicoptersNumber)>$user_forces['helicoptersLevelTwo']) {
            echo "
                <script>
                alert('you dont have enough upgraded helicopters to sell');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money'] &&  $helicoptersNumber>($user_forces['helicoptersLevelOne'])) {
            echo "
            <script>
            alert('you dont have that many helicopters to upgrade');
            window.location.href='airforce.php';
            </script>
            ";
            
        } 
        elseif ($money_needed <= $user_stats['money'] && $helicoptersNumber<=($user_forces['helicoptersLevelOne'])) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            if($helicoptersNumber>0){
            $newLevelOnehelicopters=$user_forces['helicoptersLevelOne']-$helicoptersNumber;
            $q3 = mysqli_query($con,"UPDATE `forces` SET `helicoptersLevelOne`='$newLevelOnehelicopters' WHERE `username`='$_SESSION[username]'");
            }
            $new_helicopters = $user_forces['helicoptersLevelTwo'] + $helicoptersNumber;
            $query = "UPDATE `forces` SET `helicoptersLevelTwo`='$new_helicopters' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('helicopters upgraded sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('its yo boi Error ya chump good luck next time');
        window.location.href='airforce.php';
        </script>
        ";
        }
    }
}



























if (isset($_POST['createhelicopters'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $helicopters = $_POST['helicopters'];

    if ($helicopters == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='airforce.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $helicopters);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='airforce.php';
                </script>
                ";
        }
        elseif ( $helicopters<0 && abs($helicopters)>$user_forces['helicoptersLevelOne']) {
            echo "
                <script>
                alert('you dont have enough helicopters to sell');
                window.location.href='airforce.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {

            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_helicopters = $user_forces['helicoptersLevelOne'] + $helicopters;
            $query = "UPDATE `forces` SET `helicoptersLevelOne`='$new_helicopters' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('helicopters saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['createbombers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $bombers = $_POST['bombers'];

    if ($bombers == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='airforce.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $bombers);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ( $bombers<0 && abs($bombers)>$user_forces['bombersLevelOne']) {
            echo "
                <script>
                alert('you dont have enough bombers to sell');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_bombers = $user_forces['bombersLevelOne'] + $bombers;
            $query = "UPDATE `forces` SET `bombersLevelOne`='$new_bombers' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('bombers saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['createmissiles'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $missiles = $_POST['missiles'];

    if ($missiles == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='airforce.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $missiles);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ( $missiles<0 && abs($missiles)>$user_forces['missiles']) {
            echo "
                <script>
                alert('you dont have enough missiles to sell');
                window.location.href='airforce.php';
                </script>
                ";
        } 
        elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_missiles = $user_forces['missiles'] + $missiles;
            $query = "UPDATE `forces` SET `missiles`='$new_missiles' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('missiles saved sucessfully');
            window.location.href='airforce.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['createpropagandists'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $propagandists = $_POST['propagandists'];

    if ($propagandists == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='internal_forces.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $propagandists);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.hrinternal_forces.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_propagandists = $user_forces['propagandists'] + $propagandists;
            $query = "UPDATE `forces` SET `propagandists`='$new_propagandists' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('propagandists saved sucessfully');
            window.location.href='internal_forces.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['createpolice'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $police = $_POST['police'];
    if ($police == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='internal_forces.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $police);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.hrinternal_forces.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_police = $user_forces['police'] + $police;
            $query = "UPDATE `forces` SET `police`='$new_police' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('police saved sucessfully');
            window.location.href='internal_forces.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['createspies'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $spies = $_POST['spies'];
    if ($spies == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='internal_forces.php';
            </script>
            ";
    } else {
        $money_needed = (1000 * $spies);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='navy.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_spies = $user_forces['spies'] + $spies;
            $query = "UPDATE `forces` SET `spies`='$new_spies' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $query);
            mysqli_query($con, $q2);
            echo "
            <script>
            alert('spies saved sucessfully');
            window.location.href='internal_forces.php';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
        </script>
        ";
        }
    }
}

if (isset($_POST['implement_gun_control'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['gun_control'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['gun_control'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `gun_control`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_gun_control'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['gun_control'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['gun_control'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `gun_control`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_gun_control'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['gun_control'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['gun_control'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `gun_control`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_gun_control'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['gun_control'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['gun_control'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `gun_control`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_abortion_law'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['abortion'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['abortion'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `abortion`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_abortion_law'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['abortion'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['abortion'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `abortion`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_religious_freedom'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['religious_freedom'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['religious_freedom'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `religious_freedom`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_religious_freedome'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['religious_freedome'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['religious_freedome'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `religious_freedome`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_privacy_rights'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['privacy_rights'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['privacy_rights'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `privacy_rights`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_privacy_rights'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['privacy_rights'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['privacy_rights'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `privacy_rights`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_climate_change'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['climate_change'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['climate_change'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `climate_change`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_climate_change'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['climate_change'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['climate_change'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `climate_change`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_recreational_drugs'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['recreational_drugs'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['recreational_drugs'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `recreational_drugs`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_recreational_drugs'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['recreational_drugs'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['recreational_drugs'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `recreational_drugs`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_marriage'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['marriage_equality'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['marriage_equality'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `marriage_equality`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_marriage'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['marriage_equality'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['marriage_equality'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `marriage_equality`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_capital_punishment'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['capital_punishment'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['capital_punishment'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `capital_punishment`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_capital_punishment'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['capital_punishment'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['capital_punishment'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `capital_punishment`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_universal_healthcare'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['universal_healthcare'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['universal_healthcare'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `universal_healthcare`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_universal_healthcare'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['universal_healthcare'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['universal_healthcare'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `universal_healthcare`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_universal_education'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['universal_education'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['universal_education'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `universal_education`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_universal_education'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['universal_education'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['universal_education'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `universal_education`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['implement_universal_income'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['universal_income'] == 'implemented') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['universal_income'] != 'implemented') {

        $q2 = "UPDATE `stats` SET `universal_income`='implemented' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['repeal_universal_income'])) {
    $con = new mysqli("localhost", "root", "", "test");

    if ($user_stats['universal_income'] == 'repealed') {
        echo "
                <script>
                alert('you already have done this');
                window.location.href='policies.php';
                </script>
                ";
    } elseif ($user_stats['universal_income'] != 'repealed') {

        $q2 = "UPDATE `stats` SET `universal_income`='repealed' WHERE `username`='$_SESSION[username]'";

        mysqli_query($con, $q2);
        echo "
            <script>
            alert('policy implemented sucessfully');
            window.location.href='policies.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('god help me');
        window.location.href='policies.php';
        </script>
        ";
    }
}

if (isset($_POST['sell_soldiers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $sell_soldiers = $_POST['soldier_sell_number'];
    $soldier_sell_price = $_POST['soldier_sell_price'];
    $query = "INSERT INTO `trade`(`username`, `email`, `sell_soldiers`, `soldier_sell_price`) VALUES ('$_SESSION[username]','$user_data[email]','$sell_soldiers','$soldier_sell_price')";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('trade offered sucessfully');
                window.location.href='trade.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='trade.php';
                    </script>
                    ";
    }
}
if (isset($_POST['buy_soldiers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $buy_soldiers = $_POST['soldier_buy_number'];
    $soldier_buy_price = $_POST['soldier_buy_price'];
    $query = "INSERT INTO `trade`(`username`, `email`, `buy_soldiers`, `soldier_buy_price`) VALUES ('$_SESSION[username]','$user_data[email]','$buy_soldiers','$soldier_buy_price')";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('trade offered sucessfully');
                window.location.href='trade.php';
                </script>
                ";
    } else {
        echo "
                    <script>
                    alert('error');
                    window.location.href='trade.php';
                    </script>
                    ";
    }
}

if (isset($_POST['attack_army_soldiers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_forces = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_forces = mysqli_fetch_assoc($new_forces);
    $new_stats = mysqli_query($con, "SELECT * FROM `stats` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $soldiers_destroyed = 0;
    $newenemysoldiers = 0;
    if ($enemy_stats['popularity'] > 80) {
        $newenemysoldiers = $enemy_forces['soldiersLevelOne'] + 10000;
    } else {
        $newenemysoldiers = $enemy_forces['soldiersLevelOne'];
    }
    if ($user_forces['soldiersLevelOne'] - $newenemysoldiers < 0) {
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='0' WHERE `username`='$user_data[username]'");
        $left_soldiers_for_enemy = $newenemysoldiers - $user_forces['soldiersLevelOne'];
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='$left_soldiers_for_enemy' WHERE `username`='$un'");
        $soldiers_destroyed = $user_forces['soldiersLevelOne'];
    } else {
        $left_soldiers_for_player = $user_forces['soldiersLevelOne'] - $newenemysoldiers;
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='$left_soldiers_for_player' WHERE `username`='$_SESSION[username]'");
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='0' WHERE `username`='$un'");
        $soldiers_destroyed = $newenemysoldiers;
    }
    echo header("location:attackresultpage.php?username=$un&loss=$soldiers_destroyed");
}

if (isset($_POST['attack_army_artillery'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $artillery_destroyed = 0;
    if ($user_forces['artilleryLevelOne'] - $enemy_stats['artillery'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `artillery`='0' WHERE `username`='$user_data[username]'");
        $left_artillery_for_enemy = $enemy_stats['artillery'] - $user_forces['artilleryLevelOne'];
        mysqli_query($con, "UPDATE `forces` SET `artillery`='$left_artillery_for_enemy' WHERE `username`='$un'");
        $artillery_destroyed = $user_forces['artilleryLevelOne'];
    } else {
        $left_artillery_for_player = $user_forces['artilleryLevelOne'] - $enemy_stats['artilleryLevelOne'];
        mysqli_query($con, "UPDATE `forces` SET `artillery`='$left_artillery_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `artillery`='0' WHERE `username`='$un'");
        $artillery_destroyed = $enemy_stats['artillery'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$artillery_destroyed");
}
if (isset($_POST['attack_army_vehicles'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $vehicles_destroyed = 0;
    if ($user_forces['vehicles'] - $enemy_stats['vehicles'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='0' WHERE `username`='$user_data[username]'");
        $left_vehicles_for_enemy = $enemy_stats['vehicles'] - $user_forces['vehicles'];
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='$left_soldiers_for_enemy' WHERE `username`='$un'");
        $vehicles_destroyed = $user_forces['vehicles'];
    } else {
        $left_vehicles_for_player = $user_forces['vehicles'] - $enemy_stats['vehicles'];
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='$left_vehicles_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='0' WHERE `username`='$un'");
        $vehicles_destroyed = $enemy_stats['vehicles'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$vehicles_destroyed");
}
if (isset($_POST['attack_army_weapons'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $weapons_destroyed = 0;
    if ($user_forces['weapons'] - $enemy_stats['weapons'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `weapons`='0' WHERE `username`='$user_data[username]'");
        $left_weapons_for_enemy = $enemy_stats['weapons'] - $user_forces['weapons'];
        mysqli_query($con, "UPDATE `forces` SET `weapons`='$left_soldiers_for_enemy' WHERE `username`='$un'");
        $weapons_destroyed = $user_forces['weapons'];
    } else {
        $left_weapons_for_player = $user_forces['weapons'] - $enemy_stats['weapons'];
        mysqli_query($con, "UPDATE `forces` SET `weapons`='$left_weapons_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `weapons`='0' WHERE `username`='$un'");
        $weapons_destroyed = $enemy_stats['weapons'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$weapons_destroyed");
}

if (isset($_POST['attack_air_planes'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $planes_destroyed = 0;
    if ($user_forces['planes'] - $enemy_stats['planes'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `planes`='0' WHERE `username`='$user_data[username]'");
        $left_planes_for_enemy = $enemy_stats['planes'] - $user_forces['planes'];
        mysqli_query($con, "UPDATE `forces` SET `planes`='$left_planes_for_enemy' WHERE `username`='$un'");
        $planes_destroyed = $user_forces['planes'];
    } else {
        $left_planes_for_player = $user_forces['planes'] - $enemy_stats['planes'];
        mysqli_query($con, "UPDATE `forces` SET `planes`='$left_planes_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `planes`='0' WHERE `username`='$un'");
        $planes_destroyed = $enemy_stats['planes'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$planes_destroyed");
}
if (isset($_POST['attack_air_helicopters'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $helicopters_destroyed = 0;
    if ($user_forces['helicopters'] - $enemy_stats['helicopters'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='0' WHERE `username`='$user_data[username]'");
        $left_helicopters_for_enemy = $enemy_stats['helicopters'] - $user_forces['helicopters'];
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='$left_helicopters_for_enemy' WHERE `username`='$un'");
        $helicopters_destroyed = $user_forces['helicopters'];
    } else {
        $left_helicopters_for_player = $user_forces['helicopters'] - $enemy_stats['helicopters'];
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='$left_helicopters_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='0' WHERE `username`='$un'");
        $helicopters_destroyed = $enemy_stats['helicopters'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$helicopters_destroyed");
}
if (isset($_POST['attack_air_bombers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $bombers_destroyed = 0;
    if ($user_forces['bombers'] - $enemy_stats['bombers'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `bombers`='0' WHERE `username`='$user_data[username]'");
        $left_bombers_for_enemy = $enemy_stats['bombers'] - $user_forces['bombers'];
        mysqli_query($con, "UPDATE `forces` SET `bombers`='$left_bombers_for_enemy' WHERE `username`='$un'");
        $bombers_destroyed = $user_forces['bombers'];
    } else {
        $left_bombers_for_player = $user_forces['bombers'] - $enemy_stats['bombers'];
        mysqli_query($con, "UPDATE `forces` SET `bombers`='$left_bombers_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `bombers`='0' WHERE `username`='$un'");
        $bombers_destroyed = $enemy_stats['bombers'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$bombers_destroyed");
}

if (isset($_POST['attack_navy_ships'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $ships_destroyed = 0;
    if ($user_forces['ships'] - $enemy_stats['ships'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `ships`='0' WHERE `username`='$user_data[username]'");
        $left_ships_for_enemy = $enemy_stats['ships'] - $user_forces['ships'];
        mysqli_query($con, "UPDATE `forces` SET `ships`='$left_ships_for_enemy' WHERE `username`='$un'");
        $ships_destroyed = $user_forces['ships'];
    } else {
        $left_ships_for_player = $user_forces['ships'] - $enemy_stats['ships'];
        mysqli_query($con, "UPDATE `forces` SET `ships`='$left_ships_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `ships`='0' WHERE `username`='$un'");
        $ships_destroyed = $enemy_stats['ships'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$ships_destroyed");
}

if (isset($_POST['attack_navy_submarines'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $submarines_destroyed = 0;
    if ($user_forces['submarines'] - $enemy_stats['submarines'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `submarines`='0' WHERE `username`='$user_data[username]'");
        $left_submarines_for_enemy = $enemy_stats['submarines'] - $user_forces['submarines'];
        mysqli_query($con, "UPDATE `forces` SET `submarines`='$left_submarines_for_enemy' WHERE `username`='$un'");
        $submarines_destroyed = $user_forces['submarines'];
    } else {
        $left_submarines_for_player = $user_forces['submarines'] - $enemy_stats['submarines'];
        mysqli_query($con, "UPDATE `forces` SET `submarines`='$left_submarines_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `submarines`='0' WHERE `username`='$un'");
        $submarines_destroyed = $enemy_stats['submarines'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$submarines_destroyed");
}

if (isset($_POST['attack_navy_destroyers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $destroyers_destroyed = 0;
    if ($user_forces['destroyers'] - $enemy_stats['destroyers'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='0' WHERE `username`='$user_data[username]'");
        $left_destroyers_for_enemy = $enemy_stats['destroyers'] - $user_forces['destroyers'];
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='$left_destroyers_for_enemy' WHERE `username`='$un'");
        $destroyers_destroyed = $user_forces['destroyers'];
    } else {
        $left_destroyers_for_player = $user_forces['destroyers'] - $enemy_stats['destroyers'];
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='$left_destroyers_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='0' WHERE `username`='$un'");
        $destroyers_destroyed = $enemy_stats['destroyers'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$destroyers_destroyed");
}

if (isset($_POST['attack_navy_carriers'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);
    $carriers_destroyed = 0;
    if ($user_forces['carriers'] - $enemy_stats['carriers'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `carriers`='0' WHERE `username`='$user_data[username]'");
        $left_carriers_for_enemy = $enemy_stats['carriers'] - $user_forces['carriers'];
        mysqli_query($con, "UPDATE `forces` SET `carriers`='$left_carriers_for_enemy' WHERE `username`='$un'");
        $carriers_destroyed = $user_forces['carriers'];
    } else {
        $left_carriers_for_player = $user_forces['carriers'] - $enemy_stats['carriers'];
        mysqli_query($con, "UPDATE `forces` SET `carriers`='$left_carriers_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `carriers`='0' WHERE `username`='$un'");
        $carriers_destroyed = $enemy_stats['carriers'];
    }
    echo header("location:attackresultpage.php?username=$un&loss=$carriers_destroyed");
}

if (isset($_POST['host_soccer'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $money_needed = (100000 * ($user_stats['corruption'] / 100));
    $happiness = 0;
    if ($money_needed > $user_stats['money']) {
        echo "
                <script>
                alert('you dont have enough money to host this tounament');
                window.location.href='sports.php';
                </script>
                ";
    } elseif ($money_needed <= $user_stats['money']) {

        $money_generated = (1000 * ($user_stats['happiness'] / 10));
        $actual_money = $money_generated - $money_needed;
        $money_left = $user_stats['money'] + $actual_money;
        $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";

        $happiness = $user_stats['happiness'] + ($user_stats['fear'] / 10) + 3;
        if ($happiness > 100) {
            $happiness = 100;
        }

        $query = "UPDATE `stats` SET `happiness`='$happiness' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $query);
        mysqli_query($con, $q2);
        echo "
            <script>
            alert('soccer match hosted sucessfully');
            window.location.href='sports.php';
            </script>
            ";
    } else {
        echo "
        <script>
        alert('idk');
        window.location.href='sports.php';
        </script>
        ";
    }
}

if (isset($_POST['host_cricket'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $money_needed = (100000 * ($user_stats['corruption'] / 100));
    $happiness = 0;
    if ($money_needed > $user_stats['money']) {
        echo "
                    <script>
                    alert('you dont have enough money to host this tounament');
                    window.location.href='sports.php';
                    </script>
                    ";
    } elseif ($money_needed <= $user_stats['money']) {

        $money_generated = (1000 * ($user_stats['happiness'] / 10));
        $actual_money = $money_generated - $money_needed;
        $money_left = $user_stats['money'] + $actual_money;
        $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";

        $happiness = $user_stats['happiness'] + ($user_stats['fear'] / 10) + 3;
        if ($happiness > 100) {
            $happiness = 100;
        }

        $query = "UPDATE `stats` SET `happiness`='$happiness' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $query);
        mysqli_query($con, $q2);
        echo "
                <script>
                alert('cricket match hosted sucessfully');
                window.location.href='sports.php';
                </script>
                ";
    } else {
        echo "
            <script>
            alert('idk');
            window.location.href='sports.php';
            </script>
            ";
    }
}

if (isset($_POST['host_baseball'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $money_needed = (100000 * ($user_stats['corruption'] / 100));
    $happiness = 0;
    if ($money_needed > $user_stats['money']) {
        echo "
                        <script>
                        alert('you dont have enough money to host this tounament');
                        window.location.href='sports.php';
                        </script>
                        ";
    } elseif ($money_needed <= $user_stats['money']) {

        $money_generated = (1000 * ($user_stats['happiness'] / 10));
        $actual_money = $money_generated - $money_needed;
        $money_left = $user_stats['money'] + $actual_money;
        $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";

        $happiness = $user_stats['happiness'] + ($user_stats['fear'] / 10) + 3;
        if ($happiness > 100) {
            $happiness = 100;
        }

        $query = "UPDATE `stats` SET `happiness`='$happiness' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $query);
        mysqli_query($con, $q2);
        echo "
                    <script>
                    alert('baseball match hosted sucessfully');
                    window.location.href='sports.php';
                    </script>
                    ";
    } else {
        echo "
                <script>
                alert('idk');
                window.location.href='sports.php';
                </script>
                ";
    }
}

if (isset($_POST['host_hockey'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $money_needed = (100000 * ($user_stats['corruption'] / 100));
    $happiness = 0;
    if ($money_needed > $user_stats['money']) {
        echo "
                            <script>
                            alert('you dont have enough money to host this tounament');
                            window.location.href='sports.php';
                            </script>
                            ";
    } elseif ($money_needed <= $user_stats['money']) {

        $money_generated = (1000 * ($user_stats['happiness'] / 10));
        $actual_money = $money_generated - $money_needed;
        $money_left = $user_stats['money'] + $actual_money;
        $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";

        $happiness = $user_stats['happiness'] + ($user_stats['fear'] / 10) + 3;
        if ($happiness > 100) {
            $happiness = 100;
        }

        $query = "UPDATE `stats` SET `happiness`='$happiness' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $query);
        mysqli_query($con, $q2);
        echo "
                        <script>
                        alert('hockey match hosted sucessfully');
                        window.location.href='sports.php';
                        </script>
                        ";
    } else {
        echo "
                    <script>
                    alert('idk');
                    window.location.href='sports.php';
                    </script>
                    ";
    }
}

if (isset($_POST['host_tennis'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $money_needed = (100000 * ($user_stats['corruption'] / 100));
    $happiness = 0;
    if ($money_needed > $user_stats['money']) {
        echo "
                                <script>
                                alert('you dont have enough money to host this tounament');
                                window.location.href='sports.php';
                                </script>
                                ";
    } elseif ($money_needed <= $user_stats['money']) {

        $money_generated = (1000 * ($user_stats['happiness'] / 10));
        $actual_money = $money_generated - $money_needed;
        $money_left = $user_stats['money'] + $actual_money;
        $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";

        $happiness = $user_stats['happiness'] + ($user_stats['fear'] / 10) + 3;
        if ($happiness > 100) {
            $happiness = 100;
        }

        $query = "UPDATE `stats` SET `happiness`='$happiness' WHERE `username`='$_SESSION[username]'";
        mysqli_query($con, $query);
        mysqli_query($con, $q2);
        echo "
                            <script>
                            alert('tennis match hosted sucessfully');
                            window.location.href='sports.php';
                            </script>
                            ";
    } else {
        echo "
                        <script>
                        alert('idk');
                        window.location.href='sports.php';
                        </script>
                        ";
    }
}

if (isset($_POST['createfarms'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $farms = $_POST['farms'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($farms == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $farms);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_farms = $user_states['state' . $statenumber . 'farms'] + $farms;
            $colname = 'state' . $statenumber . 'farms';
            $query = "UPDATE `states` SET `$colname`='$new_farms' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('farms built sucessfully ');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createbauxitemine'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['bauxitemines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_bauxite_mines = $user_states['state' . $statenumber . 'bauxitemines'] + $mines;
            $colname = 'state' . $statenumber . 'bauxitemines';
            $query = "UPDATE `states` SET `$colname`='$new_bauxite_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully ');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createcoalmine'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['coalmines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_coal_mines = $user_states['state' . $statenumber . 'coalmines'] + $mines;
            $colname = 'state' . $statenumber . 'coalmines';
            $query = "UPDATE `states` SET `$colname`='$new_coal_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully ');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createuraniummines'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['uranium_mines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_uranium_mines = $user_states['state' . $statenumber . 'uranium_mines'] + $mines;
            $colname = 'state' . $statenumber . 'uranium_mines';
            $query = "UPDATE `states` SET `$colname`='$new_uranium_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully ');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createoil_and_natural_gas_mine'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['oil_and_natural_gas_mines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_oil_and_natural_gas_mines = $user_states['state' . $statenumber . 'oil_and_natural_gas_mines'] + $mines;
            $colname = 'state' . $statenumber . 'oil_and_natural_gas_mines';
            $query = "UPDATE `states` SET `$colname`='$new_oil_and_natural_gas_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully ');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createlumbermine'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['lumbermines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_lumber_mines = $user_states['state' . $statenumber . 'lumbermines'] + $mines;
            $colname = 'state' . $statenumber . 'lumbermines';
            $query = "UPDATE `states` SET `$colname`='$new_lumber_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully $statenumber');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createironmine'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['ironmines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_iron_mines = $user_states['state' . $statenumber . 'ironmines'] + $mines;
            $colname = 'state' . $statenumber . 'ironmines';
            $query = "UPDATE `states` SET `$colname`='$new_iron_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully $statenumber');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createleadmine'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['leadmines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_lead_mines = $user_states['state' . $statenumber . 'lead_mines'] + $mines;
            $colname = 'state' . $statenumber . 'lead_mines';
            $query = "UPDATE `states` SET `$colname`='$new_lead_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully $statenumber');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

if (isset($_POST['createprecious_metals_mine'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $mines = $_POST['precious_metals_mines'];
    $statenumber = $_POST['statenum'];
    $un = $_POST['statename'];

    if ($mines == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
    } else {
        $money_needed = (1000 * $mines);

        if ($money_needed > $user_stats['money']) {
            echo "
                <script>
                alert('you dont have enough money');
                window.location.href='raws.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_preciousmetals_mines = $user_states['state' . $statenumber . 'precious_metals_mines'] + $mines;
            $colname = 'state' . $statenumber . 'precious_metals_mines';
            $query = "UPDATE `states` SET `$colname`='$new_preciousmetals_mines' WHERE `username`='$_SESSION[username]'";
            mysqli_query($con, $q2);
            mysqli_query($con, $query);
            echo "
            <script>
            alert('mines built sucessfully $statenumber');

            window.location.href='statepage.php?state=" . $un . "';
            </script>
            ";
        } else {
            echo "
        <script>
        alert('please make sure the sum is 100%');
        window.location.href='statepage.php?state=" . $un . "';
        </script>
        ";
        }
    }
}

?>



