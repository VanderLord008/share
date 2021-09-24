<?php
include("connection.php");
include("header.php");
include("data.php");

?>
<link rel="stylesheet" href="style.css">
<style>
*{
    background-color: pink;
}
</style>

<?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {
?>

<p>Choose your government type</p>

<div class="democracychoice">

    <p>this is the democray Lorem ipsum dolor sit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet harum libero nihil accusantium delectus aperiam sint, sunt vitae laborum fuga pariatur illo officia. Explicabo tempora autem porro suscipit ut necessitatibus neque a, ducimus sunt magni accusamus error? Eum, aspernatur provident. amet consectetur adipisicing elit. Quae, quidem. Voluptatem Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro mollitia impedit iure delectus facere vero a iste quibusdam voluptatibus animi consequatur quaerat aut hic, reprehenderit distinctio nisi ut repudiandae similique at, cumque accusamus. Nobis aspernatur, quidem totam quae earum ducimus molestias voluptatibus blanditiis fugit! Repellat id voluptatibus cum ullam numquam. magnam quo, nam in, porro autem tempora esse dolore cumque delectus natus vel inventore earum repudiandae magni nihil labore.</p>


<form method="POST" action="functions.php">
               
               <button type="submit" class="democracybtn" name="democracy">democracy</button>
               


           </form>

</div>
<div class="dictatorshipchoice">
    <p>this is the dictator Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quas voluptates maiores, facilis eius exercitationem, veniam ducimus similique nisi libero quod omnis iste neque consectetur harum magnam delectus soluta vel vitae mollitia ratione. Tenetur. choice</p>
<form method="POST" action="functions.php">
                
             
                <button type="submit" class="dictatorbtn" name="dictatorship">dictatorship</button>
              


</form>
</div>
<div class="autocracychoice">
    <p>this is the autocrats choice Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt commodi temporibus debitis ea fuga qui hic quasi quisquam mollitia est praesentium, atque cum dolores ex ad perferendis et odit, nihil dolorum dolorem velit numquam nobis! Odio quasi autem alias dolore.</p>
<form method="POST" action="functions.php">
                
              
                <button type="submit" class="autocracybtn" name="autocracy">autocracy</button>


</form>

</div>
<?php

echo $user_data['password'];
echo $_SESSION['verified'];
echo $user_data['verified'];
// $user_forces['army']+=50;
// $query=mysqli_query($con,"UPDATE `forces` SET `army`='".$user_forces['army']."',`navy`='10',`airforce`='10' WHERE `username`='$_SESSION[username]'");



} else {
?>
<?php 
echo "log in first to see this page";
echo $_SESSION['verified'];
echo $user_data['verified'];
}
?>