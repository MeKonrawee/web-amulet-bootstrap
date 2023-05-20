<div id="page-content-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="?page=หน้าแรก">
                <image src="assets/images/logo.png" alt="Chainat Amulet Logo" width="220" height="70"></image>
            </a>
            <ul class="nav nav-pills ms-auto mt-2 mt-lg-0">
                <li class="nav-item <?php echo $page == "" ? "active" : ""; ?>">
                    <a class="nav-link" href="?page=หน้าแรก">
                        <span class="menu-text">หน้าแรก</span></a>
                </li>
                <li class="nav-item <?php echo $page == "ประวัติพระเกจิ" ? "active" : ""; ?>">
                    <a class="nav-link" href="?page=ประวัติพระเกจิ">
                        <span class="menu-text">ประวัติพระเกจิ</span></a>
                </li>
                <li class="nav-item <?php echo $page == "หนังสือชีวประวัติ" ? "active" : ""; ?>">
                    <a class="nav-link" href="?page=หนังสือชีวประวัติ">
                        <span class="menu-text">หนังสือชีวประวัติ</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="menu-text">ติดต่อเรา</span></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item disabled" style="color: #999; cursor: not-allowed;">กลุ่ม Facebook</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">เครื่องราง พระเครื่อง เมืองไทย</a>
                        <a class="dropdown-item" href="#!">ชัยนาทเมืองพระเกจิ</a>
                        <a class="dropdown-item" href="#!">พระเครื่องยอดนิยมชัยนาท</a>
                    </ul>
                </li>
            </ul>
        </div>
</div>
</nav>
</div>