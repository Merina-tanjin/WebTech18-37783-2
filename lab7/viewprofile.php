<!DOCTYPE html>
<html>

<head>
    <title>View Profile</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td>
                <img src="https://c8.alamy.com/comp/2B7E25N/3d-render-of-yellow-emoji-face-with-sunglasses-and-medical-mask-protecting-from-coronavirus-2019-ncov-mers-ncov-2B7E25N.jpg" alt="logo" width="50px" height="50px">
            </td>

            <td align="right">
                Logged in as <a href="home.php">
                    <?php
                    session_start();
                    $user = $_SESSION['user'];
                    echo $user['name'];
                    ?>
                    <!-- | <a href="logout.php">Logout</a> -->
            </td>
        </tr>

        <tr style="height:200px;">
            <td>
                <br>
                <b>Account</b>
                <hr>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="viewProfile.php">View Profile</a></li>
                    <li><a href="editProfile.php">Edit Profile</a></li>
                    <li><a href="profilePicture.php">Change Profile Picture</a></li>

                    <!-- <li><a href="logout.php">Logout</a></li> -->
                </ul>
            </td>

            <td>
                <fieldset>
                    <legend><b>PROFILE</b></legend>
                    <table>
                        <tr>
                            <td>
                                Name: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <?php
                                echo $user['name'];
                                ?>
                                <br>
                                Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <?php
                                echo $user['email'];
                                ?>
                                <br>
                                Gender: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                <?php
                                echo $user['gender'];
                                ?>
                                <br>
                                Date of Birth:
                                <?php
                                echo $user['day'] . "/" . $user['month'] . "/" . $user['year'];
                                ?>
                            </td>

                            <td align="center">
                                <img src="user.png" alt="<?php echo $user['name']; ?>" height="100px" width="100px">
                                <br>
                                <a href="profilePicture.php">Change</a>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                Copyright &#169; 2021
            </td>
        </tr>
    </table>
</body>

</html>