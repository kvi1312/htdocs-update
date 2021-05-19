<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/htdocs-update/css/general.css">
    <link rel="stylesheet" href="/htdocs-update/css/mybag.css">
</head>


<body>

<?php include dirname(__DIR__).'/views/common/header.php'; ?>

<main>
        <h1>Product detail</h1>
        <p>
            <?php print_r($product); ?>
        </p>

        <form action="" method="POST">
            <input type="hidden" name="type" value="choose-size">
            <select>
                <?php 
                    foreach ($listSizeProduct as $product) {
                        echo "<option productId='$product->id'>$product->size";
                    }
                ?>    
            </select>
            <button type="submit">MUA</button>
        </form>

        <ul class="list-group">
            <?php 
                foreach ($listSizeProduct as $product) {
                    echo "<li productId='$product->id' class='list-group-item'>$product->name size $product->size có giá là $product->price, chịu không chịu thoi :)</li>";
                }
            ?>
        </ul>
        
    </main>

<?php include dirname(__DIR__).'/views/common/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/htdocs-update/script/common.js"></script>
<script src="/htdocs-update/script/shopping-cart.js"></script>
</body>

</html>