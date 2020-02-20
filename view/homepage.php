<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PriceCalculator</title>
</head>
<body>
<?php require 'includes/header.php'?>
<section>
    <h4>Hello Peasants </h4>
    <img id="queen" src="../assets/images/8c1b95154cbf96634852af8f503ece22.jpg">
</section>
<form method="post">
    <section>
        <label for="Products">Products</label>
         <select id="Products">
            <?php
            foreach ($productDataArray as $product){ ?>

                <option value="<?php echo $product->getProductsId();?>"><?php echo $product->getProductName()."<br />\n". $product-> getPrice()."£";?> </option>
<option><?php echo $product->getDescription();?></option>
            <?php } ?>
</select>
    </section>
    <section>
        <label for="Customers">Customers</label>
        <select id="Customers">
    <?php
    foreach ($userDataArray as $user){ ?>

    <option value="<?php echo $user->getId();?>"><?php echo $user->getName();?> </option>

<?php } ?>
</select>
    </section>
    <input type="submit" value="Submit" id="submit">
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

