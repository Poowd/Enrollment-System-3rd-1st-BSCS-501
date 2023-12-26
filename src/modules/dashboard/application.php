<head>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <h1>Application</h1>
    <form action="" method="POST" class="application">
        <?php include '../data/dashboard-data.php';?>
        <table>
            <tr>
                <td colspan="3">
                    <label for="program">Program</label>
                    <select name="program" id="program">
                        <?php foreach ($_program as $program_item) : ?>
                            <option value="<?php echo $program_item['code']; ?>">
                                <?php echo $program_item['program']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td  colspan="2">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName" name="firstName">
                </td>
                <td>
                    <label for="dateOfBirth">Date of Birth</label>
                    <input type="date" id="dateOfBirth" name="dateOfBirth">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="middleInitial">Middle Initial</label>
                    <input type="text" id="middleInitial" name="middleInitial">
                </td>
                <td>
                    <label for="birthPlace">Birthplace</label>
                    <input type="text" id="birthPlace" name="birthPlace">
                </td>
                <td>
                    <label for="citizenship">Citizenship</label>
                    <select name="citizenship" id="citizenship">
                        <?php foreach ($_citizenship as $citizenship_item) : ?>
                            <option value="<?php echo $citizenship_item['code']; ?>">
                                <?php echo $citizenship_item['citizenship']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td td>
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName" name="lastName">
                </td>
                <td>
                    <label for="civilStatus">Civil Status</label>
                    <select name="civilStatus" id="civilStatus">
                        <option value=""></option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="complicated">It's Complicated</option>
                    </select>
                </td>
                <td>
                    <label for="sex">Sex</label>
                    <select name="sex" id="sex">
                        <option value=""></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td  colspan="3">
                    <label for="myaddress">Address</label>
                    <input type="text" id="myaddress" name="myaddress">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobileNumber">Mobile Number:</label>
                    <input type="text" id="mobileNumber" name="mobileNumber">
                </td>
                <td  colspan="2">
                    <label for="eMail">Email:</label>
                    <input type="email" id="eMail" name="eMail">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="createstudent" id="submit" class="btn1">Submit</button>
                </td>
            </tr>
        </table>
    </form>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "enrollment_system";
    
        //create connection
            $connection = new mysqli($servername, $username, $password, $database);
        //check connection 
            if ($connection->connect_error) {
                die("Connection failed: ". $connection->connect_error);
            }

            if(isset($_POST['createstudent'])) { 
                if(isset($_POST['firstName'])){
                    $FirstName = $_POST['firstName'];
                    $MiddleName = $_POST['middleInitial'];
                    $LastName = $_POST['lastName'];
                    $Program = filter_input(INPUT_POST, 'program');
                    $Sex = $_POST['sex'];
                    $Citizenship = filter_input(INPUT_POST, 'citizenship');
                    $CivilStatus = $_POST['civilStatus'];
                    $DateofBirth = $_POST['dateOfBirth'];
                    $BirthPlace = $_POST['birthPlace'];
                    $MobileNumber = $_POST['mobileNumber'];
                    $Email = $_POST['eMail'];
                    $MyAddress = $_POST['myaddress'];
                    //read all row from database table
                    $createstudent = "INSERT INTO student_profile VALUES
                            ('', '$FirstName', '$MiddleName', '$LastName', '$Program', '$Sex', '$Citizenship', '$CivilStatus', '$DateofBirth', '$BirthPlace', '$MobileNumber', '$Email', '$MyAddress');";
                    $result = mysqli_query($connection, $createstudent);
                        if (!$result) {
                            die("Invalid query: ". $connection->error);
                    }
                }
            
            }
        
    ?>
</body>