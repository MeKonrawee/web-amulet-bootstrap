<?php
require_once "services/history-service.php";
$page == "" ? "หน้าแรก" : $page;
?>
<br>
<div class="container">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ค้นหาพระเกจิอาจารย์" aria-label="Search" name="keyword">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>
<div class="container marketing">
    <div class="row mt-4">
        <?php
        $col = getHistoryV2($_POST["keyword"] ?? "");
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
                        <a class="btn btn-secondary" href="<?php echo "?page=ประวัติพระเกจิ"; ?>">ข้อมูลเพิ่มเติม »</a>
                    </li>
                </p>
            </div>
        <?php } ?>
    </div><!-- /.row -->
</div>