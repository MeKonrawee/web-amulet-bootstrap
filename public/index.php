<?php
// session_start();

$page = isset($_GET["page"]) ? $_GET["page"] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/header.php'; ?>
</head>

<body>
    <script src="js/scripts.js"></script>
    <div id="app">
        <?php include 'components/navbar-pages.php'; ?>
        <div id="main">
            <?php
            switch ($page) {
                case 'ประวัติพระเกจิ':
                    include 'pages/expertHistory.php';
                    break;
                case 'หนังสือชีวประวัติ':
                    include 'pages/historyBooks.php';
                    break;
                default:
                    include 'pages/homepage.php';
                    break;
            }
            include 'components/footer.php';
            ?>
        </div>
    </div>
</body>

</html>