<?php
// require_once "services/history-service.php";
$page == "" ? "หน้าแรก" : $page;
?>
<br>
<div class="container">
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>
</div>
<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <p>
    <div class="row">
        <div class="col-lg-2">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <image href="assets/images/หลวงพ่ออ่ำ2.jpg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"></image>
            </svg>
            <h4 class="fw-normal">หลวงพ่ออ่ำ</h4>
            <p>
                <li <?php echo $details == "$name" ? "active" : ""; ?>>
                    <a class="btn btn-secondary" href="components/details-history.php?name=<?php echo urlencode($name); ?>">View details »</a>
                </li>
            </p>
        </div>
    </div><!-- /.row -->
    </p>
</div>