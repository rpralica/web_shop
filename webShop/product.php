<?php include "components/head.php";
include "operations/db.php";
?>
<?php
$id = $_GET['id'];
$query = $conn->query("SELECT * FROM products WHERE id=$id;");
$result = $query->fetch_assoc();
?>
<title><?php echo $result['name'] ?></title>

<body>





    <div class="container">
        <div class="row">
            <div class="col offset-3">
                <br>
                <h1 class="text-center offset-2 fw-bold ">Proizvod: <?php echo $result['name'] ?></h1>
                <br>

                <div class="card  bg"><br>
                    <div class="card-title fw-bold text-center h1"><?php echo $result['name']; ?></div>
                    <div class="card-body">
                        <h3><strong>Opis: </strong> <?php echo $result['description']; ?></h3>
                        <h4><strong>Cijena: </strong><?php echo $result['price']; ?> KM</h4>
                        <h4><strong>Slika : </strong><?php echo $result['image']; ?></h4>
                        <h4><strong>Količina: </strong><?php
                                                        echo $result['quantity'] < 1  ?  "Nema na stanju "  :  $result['quantity']
                                                        ?></h4>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>