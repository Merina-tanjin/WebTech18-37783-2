<!DOCTYPE html>
<html>

<head>
    <title>LOGIN using PHP</title>
</head>

<body>
    <form method="POST" action="loginchecking.php">
        <fieldset style="width:300px;">
            <legend><b>LOGIN</b></legend>
            <table>
                <tr>
                    <td>User Name :</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password &nbsp; :</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                        <input type="checkbox" name="remember_me" value="YES">Remember Me
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <input type="submit" name="submit" value="Submit">
                        <u style="color:blue;">Forgot Password?</u>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>