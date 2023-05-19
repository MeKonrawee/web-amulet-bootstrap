<?php
require_once "services/history-service.php";
$page == "" ? "หน้าแรก" : $page;
?>
<br>
<div class="container">
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
<!-- <div class="container">
    <h1 class="mt-4"><input type="search" class="form-control" placeholder="Search..." aria-label="Search"><button class="btn btn-outline-success" type="submit">Search</button></h1>
</div> -->
<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <p>
        <?php
        $col = getHistory();
        foreach ($col as $key => $value) {
        ?>
    <div class="row">
        <div class="col-lg-2">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <image href="<?php echo $value["image"]; ?>" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"></image>
            </svg>
            <h2 class="fw-normal"><?php echo $value["name"]; ?></h2>
            <p> </p>
            <p><a class="btn btn-secondary" href="<?php echo $value["history"]; ?>">View details »</a></p>
        </div>
    <?php } ?>
    </div><!-- /.row -->
    </p>