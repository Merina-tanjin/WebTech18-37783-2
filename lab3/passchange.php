<!DOCTYPE html>
<html>

<head>
  <title>HTML Form using PHP</title>
</head>

<body>
  <form method="POST" action="passwordchecking.php">
    <fieldset style="width: 400px">
      <legend><b>CHANGE PASSWORD</b></legend>
      <table>
        <tr>
          <td>Current Password &nbsp; &nbsp; &nbsp; &nbsp; :</td>
          <td><input type="password" name="currentPass" value="" /></td>
        </tr>
        <tr>
          <td style="color: green">
            New Password &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
          </td>
          <td><input type="password" name="newPass" value="" /></td>
        </tr>
        <tr>
          <td style="color: red">Retype New Password :</td>
          <td><input type="password" name="rePass" value="" /></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr />
            <input type="submit" name="submit" value="Submit" />
          </td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>

</html>