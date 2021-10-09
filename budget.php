<?php
include("connection.php");
include("header.php");
include("data.php");


?>
<p>here you distribute your budget</p>




<form method="POST" action="functions.php">
                
<input type="text" placeholder="healthcare" name="healthcare" >
<input type="text" placeholder="welfare" name="welfare" >
<input type="text" placeholder="military" name="military" >
<input type="text" placeholder="research" name="research" >
                
                
                <button type="submit" class="budget" name="budget">save</button>
            </form>