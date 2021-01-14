<?php


?>

<!DOCTYPE html>
<html>
	
	<?php include('UC4L04 Header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="" class="white" action="UC4L03 Forms  in PHP.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (Comma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

	<?php include('UC4L03 Footer.php'); ?>

</html>