<?php
require_once "services/history-service.php";
$page == "" ? "หน้าแรก" : $page;
$search = isset($_GET["name"]) ? $_GET["name"] : '';
?>
<br>
<div class="container">
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ค้นหาพระเกจิอาจารย์" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>
<div class="container marketing">
    <div class="row mt-4">
        <?php
        $col = getHistory();
        foreach ($col as $key => $value) {
        ?>
            <div class="col-lg-2">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <image href="<?php echo $value["image"]; ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"></image>
                </svg>
                <h5 class="fw-normal mt-2"><?php echo $value["name"]; ?></h5>
                <p>
                    <li>
                        <a class="btn btn-secondary" href="#">View details »</a>
                    </li>
                </p>
            </div>
        <?php } ?>
    </div><!-- /.row -->
</div>