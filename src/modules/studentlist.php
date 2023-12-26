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
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/alert.css">
</head>
<body>
    <?php require_once '../process/create-student.php' ?>
        
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
    <br>
    <section class="application">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>School Year</th>
                    <th>Semester</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../data/mysql-connection.php';
                    //read all row from database table
                    $sql = "SELECT * FROM student_profile";
                    $result = $mysqli->query($sql);
                        if (!$result) {
                            die("Invalid query: ". $connection->error);
                    }
                ?>
                        
                <?php
                    include '../process/create-student.php';
                    while ($row = $result->fetch_assoc()):?>

                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td class="list-actions">
                                    <div>
                                        <a href="?deletestudent=<?php echo $row['id']; ?>" class="btn1">Delete</a>
                                    </div>
                                </td>
                            </tr>

                    <?php endwhile ?>
            </tbody>
        </table>
    </section>
</body>
</html>

