<?php
// require_once "services/history-service.php";
$page == "" ? "พระเครื่อง" : $page;
?>
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h2>พระเครื่องของจังหวัดชัยนาท</h2>
</div>
<div class="container">
    <form action="<?php echo $_SERVER["PHP_SELF"] . "?page=พระเครื่อง"; ?>" method="post" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ค้นหาประวัติพระเกจิอาจารย์" aria-label="Search" name="keyword">
        <button class="btn btn-primary" type="submit">ค้นหา</button>
    </form>
    <br>
    <?php
    $col = getAmulet($_POST["keyword"] ?? "");
    foreach ($col as $key => $value) {
    ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title><?php echo $value["name"]; ?></title>
                        <image href="<?php echo $value["image"]; ?>" width="100%" height="100%" fill="#55595c"></image>
                    </svg>
                    <div class="card-body">
                        <p class="card-text"><?php echo $value["name"]; ?></p>
                        <!-- <div class="d-flex justify-content-end">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View more details</button>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>