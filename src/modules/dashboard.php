<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duck Cover En Roll</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../css/module.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/icon.css">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <nav class="navbar2">
        <?php include '../data/navbar-data.php';?>
        <input type="checkbox" id="toggle">
        <label for="toggle" class="toggler">
            <i class="pwd-snd-button">=</i>
        </label>
        <div class="logo">
            <h1>Dashboard</h1>
        </div>
        <ul class="navlist">
            <?php foreach ($_navbar2 as $navbar2_item) : ?>
                <li><a href="<?php echo $navbar2_item['link']; ?>">
                <?php echo $navbar2_item['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div class="dashboard1">
        <?php include '../data/sidebar-data.php';?>
        <aside class="sidebar1">
            <ul class="sidebar-list">
                <?php foreach ($_sidebar1 as $sidebar1_item) : ?>
                    <form action="" method="POST">
                    <button name="someAction" value="<?php echo $sidebar1_item['value']; ?>" class="btn5" ><li class="sidebar-item"><?php echo $sidebar1_item['title']; ?></li></button>
                    </form>
                <?php endforeach; ?>
            </ul>
        </aside>
        <main class="content1">
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction']))
            {
                walkmanDashboard();
            }
            function walkmanDashboard()
            {
                switch ($_POST['someAction']) {
                    case 'registration':
                        include './dashboard/registration.php';
                        break;
                    case 'enrollment':
                        include './dashboard/enrollment.php';
                        break;
                    case 'profile':
                        include './dashboard/profile.php';
                        break;
                    case 'viewlist':
                        include './dashboard/viewlist.php';
                        break;
                    case 'policy':
                        include './dashboard/policy.php';
                        break;
                    case 'help':
                        include './dashboard/help.php';
                        break;
                    case 'logout':
                        include './dashboard/logout.php';
                        break;
                    default:
                        include './dashboard/home.php';
                        break;

                }
            }
        ?>
        </main>
    </div>
        
</body>
</html>