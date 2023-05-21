<?php
require_once "services/history-service.php";
$page == "" ? "ประวัติพระเกจิ" : $page;
?>
<div class="text-center">
    <p>—————— <i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gem" viewBox="0 0 16 16">
                <path d="M3.1.7a.5.5 0 0 1 .4-.2h9a.5.5 0 0 1 .4.2l2.976 3.974c.149.185.156.45.01.644L8.4 15.3a.5.5 0 0 1-.8 0L.1 5.3a.5.5 0 0 1 0-.6l3-4zm11.386 3.785-1.806-2.41-.776 2.413 2.582-.003zm-3.633.004.961-2.989H4.186l.963 2.995 5.704-.006zM5.47 5.495 8 13.366l2.532-7.876-5.062.005zm-1.371-.999-.78-2.422-1.818 2.425 2.598-.003zM1.499 5.5l5.113 6.817-2.192-6.82L1.5 5.5zm7.889 6.817 5.123-6.83-2.928.002-2.195 6.828z" />
            </svg></i> ——————</p>
    <h2>ประวัติพระเกจิ</h2>
    <p>ประวัติพระเกจิอาจารย์ ประวัติพระคณาจารย์ พระเครื่องพระเกจิ</p>
</div>
<div class="container">
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="ค้นหาประวัติพระเกจิอาจารย์" aria-label="Search">
        <button class="btn btn-primary" type="submit">ค้นหา</button>
    </form>
    <br>
    <?php
    $col = getHistory();
    foreach ($col as $key => $value) {
    ?>
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="300" height="350" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <image href="<?php echo $value["image"]; ?>" width="100%" height="100%"></image>
                    </svg>
                </div>
                <div class="col p-4 d-flex flex-column position-static">
                    <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
                    <h3 class="mb-0"><?php echo $value["name"]; ?></h3>
                    <!-- <div class="mb-1 text-body-secondary">Nov 12</div> -->
                    <p class="card-text mb-auto"><?php echo $value["details"]; ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>