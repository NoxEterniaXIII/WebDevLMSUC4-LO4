<?php

include('Config/db_connect.php');

//write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER  BY created_at';

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as n array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result from memory
mysqli_free_result($result);

// close connection
mysqli_close($conn);
// print_r($pizzas);

// print_r(explode(',', $pizzas[0]['ingredients']));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>UC4L04</title>

    <h4 class="center grey-text">Pizzas!</h4>

    <div class="container">
        <div class="row">

        <?php foreach($pizzas as $pizza): ?>

        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                    <ul>
                        <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                            <li><?php echo htmlspecialchars($ing); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card-action right-align"><a class="brand-text" href="details.php?id=<?php echo $pizza['id']?>">more info</a></div>
            </div>
        </div>

        <?php endforeach; ?>

        <?php if(count($pizzas) >=3): ?>
        <p>there are 3 or more pizzas</p>
        <?php  else: ?>
            <p>there are less than 3 pizzas</p>
        <?php endif; ?>

        </div>
    </div>
</head>
<body>
    <?php include('UC4L04 Header.php'); ?>
    <?php include('UC4L04 Footer.php'); ?>
</body>
</html>