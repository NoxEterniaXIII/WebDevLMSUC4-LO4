<?php

    include('Config/db_connect.php');

    // check GET request id parameter
    if(isset($GET['id'])){
        
        $id = mysqli_escape_string($conn, $_GET['id']);

        // make sql
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        // get the query result
        $result = mysqli_query($conn, $sql);

        // fetch result in array format
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        print_r($pizza);
       
    }

?>

<!DOCTYPE html>
<html>

    <?php include('UC4L04 Header.php'); ?>

    <div class="container center">
        <?php if($pizza): ?>

            <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
            <p>Created by: <?php htmlspecialchars($pizza['email']); ?></p>
            <p><?php echo date($pizza['created_at']); ?></p>
            <h5>Ingredients:</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

        <?php else: ?>

        <?php endif; ?>
    </div>

    <?php include('UC4L04 Footer.php'); ?>

</html>