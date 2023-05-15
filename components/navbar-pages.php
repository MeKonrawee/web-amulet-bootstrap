<div id="page-content-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="#">Chainat Amulet</a>
            <button class="navbar-toggle collapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item <?php echo $page == "" ? "active" : ""; ?>">
                        <a class="nav-link" href="/">
                            <span>หน้าแรก</span></a>
                    </li>
                    <li class="nav-item <?php echo $page == "ประวัติพระเกจิ" ? "active" : ""; ?>">
                        <a class="nav-link" href="?page=ประวัติพระเกจิ">
                            <span>ประวัติพระเกจิ</span></a>
                    </li>
                    <li class="nav-item <?php echo $page == "หนังสือชีวประวัติ" ? "active" : ""; ?>">
                        <a class="nav-link" href="?pages=หนังสือชีวประวัติ">
                            <span>หนังสือชีวประวัติ</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ติดต่อเรา</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#!">กลุ่ม Facebook</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#!">เครื่องราง พระเครื่อง เมืองไทย</a>
                            <a class="dropdown-item" href="#!">ชัยนาทเมืองพระเกจิ</a>
                            <a class="dropdown-item" href="#!">พระเครื่องยอดนิยมชัยนาท</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>