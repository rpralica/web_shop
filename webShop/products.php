<?php include "components/head.php";
include "operations/productsphp.php";
?>

<title>Proizvodi</title>

<body>
    <br><br>
    <div class="container mt-3">

        <div class="mt-4 p-3 bg-primary text-white rounded">
            <h1 style="text-align: center;">Proizvodi</h1>

        </div>
    </div>
    <br>
    <form action="products.php" method="get">
        <div class="container">
            <div class="row ">
                <?php foreach ($results as $result) : ?>
                    <div class="col-md-4 d-inline-block">

                        <ul class="list-group">
                            <li class="list-group-item bg-info text-center text-dark fw-bold">
                                Naziv: <?php echo  $result['name']; ?><br>


                            </li>
                            <li class="list-group-item bg-info text-center text-dark fw-bold">Cijena:
                                <?php echo $result['price']; ?> KM
                                <br>
                                <a href="product.php?id=<?php echo $result["id"] ?>">Pogledaj detaljno</a>
                            </li>

                        </ul>

                        <br>
                        <br>


                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </form>


</body>

</html>