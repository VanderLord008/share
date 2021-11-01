<?php
include("connection.php");
require('login_register.php');
include("data.php");


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


if (isset($_POST['save_first_state'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `states` SET `state1`='$_POST[first]' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('state saved sucessfully');
                window.location.href='budget.php';
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
?>


<?php
if (isset($_POST['increase_army'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `forces` SET `army`='$_POST[increase_army]',`navy`='$_POST[increase_army]',`airforce`='$_POST[increase_army]' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('army updated');
                window.location.href='manage_army.php';
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


if (isset($_POST['capitalism'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $query = "UPDATE `stats` SET `economic_policy`='capitalism' WHERE `username`='$_SESSION[username]'";
    if (mysqli_query($con, $query)) {
        echo "
                <script>
                alert('economic policy  selected sucessfully');
                window.location.href='state_creator.php';
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
                window.location.href='state_creator.php';
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
                window.location.href='state_creator.php';
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


if (isset($_POST['createsoldiers'])) {
    $con = new mysqli("localhost", "root", "", "test");
    $soldiers_limit = ((5 * $user_stats['population']) / 100) - ($number_of_wars * 10000);

    $soldiers = $_POST['soldiers'];
    if ($soldiers == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
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
        } elseif ($money_needed <= $user_stats['money'] && $soldiers < $soldiers_limit) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_soldiers = $user_forces['soldiers'] + $soldiers;
            $query = "UPDATE `forces` SET `soldiers`='$new_soldiers' WHERE `username`='$_SESSION[username]'";
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
        alert('please make sure the sum is 100%');
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
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_artillery = $user_forces['artillery'] + $artillery;
            $query = "UPDATE `forces` SET `artillery`='$new_artillery' WHERE `username`='$_SESSION[username]'";
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

if (isset($_POST['createvehicles'])) {
    $con = new mysqli("localhost", "root", "", "test");


    $vehicles = $_POST['vehicles'];
    if ($vehicles == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
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
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_vehicles = $user_forces['vehicles'] + $vehicles;
            $query = "UPDATE `forces` SET `vehicles`='$new_vehicles' WHERE `username`='$_SESSION[username]'";
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


if (isset($_POST['createweapons'])) {
    $con = new mysqli("localhost", "root", "", "test");


    $weapons = $_POST['weapons'];
    if ($ships == '') {
        echo "
            <script>
            alert('try again with a valid number');
            window.location.href='navy.php';
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
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_weapons = $user_forces['weapons'] + $weapons;
            $query = "UPDATE `forces` SET `weapons`='$new_weapons' WHERE `username`='$_SESSION[username]'";
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
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_ships = $user_forces['ships'] + $ships;
            $query = "UPDATE `forces` SET `ships`='$new_ships' WHERE `username`='$_SESSION[username]'";
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
        window.location.href='army.php';
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
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_destroyers = $user_forces['destroyers'] + $destroyers;
            $query = "UPDATE `forces` SET `destroyers`='$new_destroyers' WHERE `username`='$_SESSION[username]'";
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
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_submarines = $user_forces['submarines'] + $submarines;
            $query = "UPDATE `forces` SET `submarines`='$new_submarines' WHERE `username`='$_SESSION[username]'";
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
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_carriers = $user_forces['carriers'] + $carriers;
            $query = "UPDATE `forces` SET `carriers`='$new_carriers' WHERE `username`='$_SESSION[username]'";
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
                window.location.href='navy.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_planes = $user_forces['planes'] + $planes;
            $query = "UPDATE `forces` SET `planes`='$new_planes' WHERE `username`='$_SESSION[username]'";
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
        alert('please make sure the sum is 100%');
        window.location.href='army.php';
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
                window.location.href='navy.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_helicopters = $user_forces['helicopters'] + $helicopters;
            $query = "UPDATE `forces` SET `helicopters`='$new_helicopters' WHERE `username`='$_SESSION[username]'";
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
                window.location.href='navy.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
            $money_left = $user_stats['money'] - $money_needed;
            $q2 = "UPDATE `stats` SET `money`='$money_left' WHERE `username`='$_SESSION[username]'";
            $new_bombers = $user_forces['bombers'] + $bombers;
            $query = "UPDATE `forces` SET `bombers`='$new_bombers' WHERE `username`='$_SESSION[username]'";
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
                window.location.href='navy.php';
                </script>
                ";
        } elseif ($money_needed <= $user_stats['money']) {
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



if (isset($_POST['attack_land_forces'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);

    if ($user_forces['soldiers'] - $enemy_stats['soldiers'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='0' WHERE `username`='$user_data[username]'");
        $left_soldiers_for_enemy = $enemy_stats['soldiers'] - $user_forces['soldiers'];
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='$left_soldiers_for_enemy' WHERE `username`='$un'");
    } else {
        $left_soldiers_for_player = $user_forces['soldiers'] - $enemy_stats['soldiers'];
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='$left_soldiers_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `soldiers`='0' WHERE `username`='$un'");
    }

    if ($user_forces['artillery'] - $enemy_stats['artillery'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `artillery`='0' WHERE `username`='$user_data[username]'");
        $left_artillery_for_enemy = $enemy_stats['artillery'] - $user_forces['artillery'];
        mysqli_query($con, "UPDATE `forces` SET `artillery`='$left_artillery_for_enemy' WHERE `username`='$un'");
    } else {
        $left_artillery_for_player = $user_forces['artillery'] - $enemy_stats['artillery'];
        mysqli_query($con, "UPDATE `forces` SET `artillery`='$left_artillery_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `artillery`='0' WHERE `username`='$un'");
    }

    if ($user_forces['vehicles'] - $enemy_stats['vehicles'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='0' WHERE `username`='$user_data[username]'");
        $left_vehicles_for_enemy = $enemy_stats['vehicles'] - $user_forces['vehicles'];
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='$left_vehicles_for_enemy' WHERE `username`='$un'");
    } else {
        $left_vehicles_for_player = $user_forces['vehicles'] - $enemy_stats['vehicles'];
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='$left_vehicles_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `vehicles`='0' WHERE `username`='$un'");
    }

    if ($user_forces['weapons'] - $enemy_stats['weapons'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `weapons`='0' WHERE `username`='$user_data[username]'");
        $left_weapons_for_enemy = $enemy_stats['weapons'] - $user_forces['weapons'];
        mysqli_query($con, "UPDATE `forces` SET `weapons`='$left_weapons_for_enemy' WHERE `username`='$un'");
    } else {
        $left_weapons_for_player = $user_forces['weapons'] - $enemy_stats['weapons'];
        mysqli_query($con, "UPDATE `forces` SET `weapons`='$left_weapons_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `weapons`='0' WHERE `username`='$un'");
    }

    echo "
            <script>
            alert('boom');
            window.location.href='attack_page.php?username=$un';
            </script>
            ";
}


if (isset($_POST['attack_air_forces'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);



    if ($user_forces['planes'] - $enemy_stats['planes'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `planes`='0' WHERE `username`='$user_data[username]'");
        $left_planes_for_enemy = $enemy_stats['planes'] - $user_forces['planes'];
        mysqli_query($con, "UPDATE `forces` SET `planes`='$left_planes_for_enemy' WHERE `username`='$un'");
    } else {
        $left_planes_for_player = $user_forces['planes'] - $enemy_stats['planes'];
        mysqli_query($con, "UPDATE `forces` SET `planes`='$left_planes_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `planes`='0' WHERE `username`='$un'");
    }

    if ($user_forces['helicopters'] - $enemy_stats['helicopters'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='0' WHERE `username`='$user_data[username]'");
        $left_helicopters_for_enemy = $enemy_stats['helicopters'] - $user_forces['helicopters'];
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='$left_helicopters_for_enemy' WHERE `username`='$un'");
    } else {
        $left_helicopters_for_player = $user_forces['helicopters'] - $enemy_stats['helicopters'];
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='$left_vehicles_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `helicopters`='0' WHERE `username`='$un'");
    }

    if ($user_forces['bombers'] - $enemy_stats['bombers'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `bombers`='0' WHERE `username`='$user_data[username]'");
        $left_bombers_for_enemy = $enemy_stats['bombers'] - $user_forces['bombers'];
        mysqli_query($con, "UPDATE `forces` SET `bombers`='$left_bombers_for_enemy' WHERE `username`='$un'");
    } else {
        $left_weapons_for_player = $user_forces['bombers'] - $enemy_stats['bombers'];
        mysqli_query($con, "UPDATE `forces` SET `bombers`='$left_bombers_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `bombers`='0' WHERE `username`='$un'");
    }

    echo "
            <script>
            alert('boom');
            window.location.href='attack_page.php?username=$un';
            </script>
            ";
}


if (isset($_POST['attack_navy_forces'])) {
    $con = new mysqli("localhost", "root", "", "test");

    $un = $_POST['enemyusername'];
    $new_stats = mysqli_query($con, "SELECT * FROM `forces` WHERE `username`='$un'");
    $enemy_stats = mysqli_fetch_assoc($new_stats);

    if ($user_forces['ships'] - $enemy_stats['ships'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `ships`='0' WHERE `username`='$user_data[username]'");
        $left_ships_for_enemy = $enemy_stats['ships'] - $user_forces['ships'];
        mysqli_query($con, "UPDATE `forces` SET `ships`='$left_ships_for_enemy' WHERE `username`='$un'");
    } else {
        $left_ships_for_player = $user_forces['ships'] - $enemy_stats['ships'];
        mysqli_query($con, "UPDATE `forces` SET `ships`='$left_ships_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `ships`='0' WHERE `username`='$un'");
    }

    if ($user_forces['destroyers'] - $enemy_stats['destroyers'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='0' WHERE `username`='$user_data[username]'");
        $left_destroyers_for_enemy = $enemy_stats['destroyers'] - $user_forces['destroyers'];
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='$left_destroyers_for_enemy' WHERE `username`='$un'");
    } else {
        $left_destroyers_for_player = $user_forces['destroyers'] - $enemy_stats['destroyers'];
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='$left_destroyers_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `destroyers`='0' WHERE `username`='$un'");
    }

    if ($user_forces['submarines'] - $enemy_stats['submarines'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `submarines`='0' WHERE `username`='$user_data[username]'");
        $left_submarines_for_enemy = $enemy_stats['submarines'] - $user_forces['submarines'];
        mysqli_query($con, "UPDATE `forces` SET `submarines`='$left_submarines_for_enemy' WHERE `username`='$un'");
    } else {
        $left_submarines_for_player = $user_forces['submarines'] - $enemy_stats['submarines'];
        mysqli_query($con, "UPDATE `forces` SET `submarines`='$left_submarines_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `submarines`='0' WHERE `username`='$un'");
    }

    if ($user_forces['carriers'] - $enemy_stats['carriers'] < 0) {
        mysqli_query($con, "UPDATE `forces` SET `carriers`='0' WHERE `username`='$user_data[username]'");
        $left_carriers_for_enemy = $enemy_stats['carriers'] - $user_forces['carriers'];
        mysqli_query($con, "UPDATE `forces` SET `carriers`='$left_carriers_for_enemy' WHERE `username`='$un'");
    } else {
        $left_carriers_for_player = $user_forces['carriers'] - $enemy_stats['carriers'];
        mysqli_query($con, "UPDATE `forces` SET `carriers`='$left_carriers_for_player' WHERE `username`='$user_data[username]'");
        mysqli_query($con, "UPDATE `forces` SET `carriers`='0' WHERE `username`='$un'");
    }

    echo "
            <script>
            alert('boom');
            window.location.href='attack_page.php?username=$un';
            </script>
            ";
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
















































































































































































































































?>



