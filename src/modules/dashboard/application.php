<head>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <h1>Application</h1>
    <form action="../modules/dashboard.php" method="POST" class="application">
        <?php include '../data/dashboard-data.php';?>
        <table>
            <tr>
                <td>
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
                <td>
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName">
                </td>
                <td>
                    <label for="dateOfBirth">Date of Birth</label>
                    <input type="date" id="dateOfBirth">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="middleInitial">Middle Initial</label>
                    <input type="text" id="middleInitial">
                </td>
                <td>
                    <label for="birthPlace">Birthplace</label>
                    <input type="text" id="birthPlace">
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
                    <input type="text" id="lastName">
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
                <td>
                    <label for="address1">House/Lot/Unit No.</label>
                    <input type="text" id="address1">
                </td>
                <td>
                    <label for="address2">Street</label>
                    <input type="text" id="address2">
                </td>
                <td>
                    <label for="address3">Building/Subdivision/Village/Barangay</label>
                    <input type="text" id="address3">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address4">City/Municipality</label>
                    <select name="address4" id="address4">
                        <?php foreach ($_address4 as $address4_item) : ?>
                            <option value="<?php echo $address4_item['code']; ?>">
                                <?php echo $address4_item['address4']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <label for="address5">Province</label>
                    <select name="address5" id="address5">
                        <?php foreach ($_address5 as $address5_item) : ?>
                            <option value="<?php echo $address5_item['code']; ?>">
                                <?php echo $address5_item['address5']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td>
                    <label for="address6">Zip Code</label>
                    <input type="text" id="address6">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mobileNumber">Mobile Number:</label>
                    <input type="text" id="mobileNumber">
                </td>
                <td>
                    <label for="eMail">Email:</label>
                    <input type="email" id="eMail">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit" class="btn1">
                </td>
            </tr>
        </table>
        
    </form>
</body>