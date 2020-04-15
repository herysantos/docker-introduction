<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Introduction</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <?php
        $result = file_get_contents("http://node-container:9001/products");
        $products = json_decode($result);
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr scope="row">
                    <td><?php echo $product->name; ?></td>
                    <td><?php echo $product->price; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    </div>
</body>
</html>