<head>
    <link rel="stylesheet" href="../css/dashboard">
</head>
<body>
    <table class="viewsession">
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
                    $sql = "SELECT * FROM session";
                    $result = $connection->query($sql);
                        if (!$result) {
                            die("Invalid query: ". $connection->error);
                        }
                                            
                    //read data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo "
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[schoolyear]</td>
                                <td>$row[semester]</td>
                                <td>$row[created_at]</td>
                                <td class=\"list-actions\">
                                    <div>
                                        <button class=\"btn1\">View</button>
                                    </div>
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
</body>