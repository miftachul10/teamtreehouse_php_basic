<?php 
 $nama="Miftachul Rohman"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/all.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Document <?php echo "$nama" ?></title>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-flex flex-column m-5 ">
                    <img class="d-flex align-self-center" src="img/png1.png" alt="gagal" width="90px">
                </div>
                <div class="d-flex flex-column m-5 ">
                    <p class="h2 text-light"><?php echo "$nama"?></p>
                </div>
            </div>
            <div class="content col-lg-8 p-0 border vh-100">
                <div class="d-flex flex-column">
                    <p class="h2 pt-4 pl-5">my fist pege PHP</p>

                    <section class="pl-4">
                        <p class="h2">Unit</p>
                        <?php include "inc/units.php"; ?>
                        <p class="lead"><?php echo suhu(10); ?></p>
                    </section>
                    <section class="pl-4">
                        <p class="h2">String</p>
                        <?php include "inc/string.php"; ?>
                        <p class="lead"><?php echo askName("MiFtaChul rOhmaN");; ?></p>
                    </section>
                </div>
                <div class="d-flex flex-column ">
                    <p class="h2">
                        
                    </p>
                </div>
                <div class="d-flex flex-column position-absolute fixed-bottom bg-light mb-1">
                        <p class="mx-auto d-blok">&copy; <?php echo $nama; echo " Lasd Modified: " 
                            .date("F d Y H:i:s",getlastmod()); ?></p>
                </div>
            </div>
        </div>
    </div>


    <script src="asset/js/jquery-3.5.1.full.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    
</body>
</html>