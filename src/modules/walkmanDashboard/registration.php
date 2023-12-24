<head>
    <link rel="stylesheet" href="../css/walkmandashboard.css">
</head>
<body>
    <h1>Register</h1>
    <form action="../modules/dashboard.php" method="POST" class="registration">
        <table>
            <tr>
                <td colspan="6">
                    <label for="program">Program</label>
                    <input type="text" id="program">
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <label for="firstName">First Name</label>
                    <input type="text" id="firstName">
                </td>
                <td colspan="2">
                    <label for="dateOfBirth">Date of Birth</label>
                    <input type="date" id="dateOfBirth">
                </td>
            </tr>
            <tr>
                <td colspan="4">
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
                        <option value=""></option>
                        <option value="filipino">Filipino</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td td colspan="4">
                    <label for="lastName">Last Name</label>
                    <input type="text" id="lastName">
                </td>
                <td>
                    <label for="civilStatus">Civil Status</label>
                    <select name="civilStatus" id="civilStatus">
                        <option value=""></option>
                        <option value="single">Single</option>
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
                <td colspan="3">
                    <label for="address2">Street</label>
                    <input type="text" id="address2">
                </td>
                <td colspan="2">
                    <label for="address3">Building/Subdivision/Village/Barangay</label>
                    <input type="text" id="address3">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="address4">City/Municipality</label>
                    <select name="address4" id="address4">
                        <option value=""></option>
                        <option value="quezoncity">Quezon City</option>
                    </select>
                </td>
                <td colspan="4">
                    <label for="address5">Province</label>
                    <select name="address5" id="address5">
                        <option value=""></option>
                        <option value="ncr">NCR</option>
                    </select>
                </td>
                <td>
                    <label for="address6">Zip Code</label>
                    <input type="text" id="address6">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="mobileNumber">Mobile Number:</label>
                    <input type="text" id="mobileNumber">
                </td>
                <td colspan="3">
                    <label for="eMail">Email:</label>
                    <input type="email" id="eMail">
                </td>
            </tr>
            <tr>
                <td colspan="5"></td>
                <td colspan="1">
                    <input type="submit" name="submit" id="submit" class="btn1">
                </td>
            </tr>
        </table>
        
    </form>
</body>