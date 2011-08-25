<?php

	include("header.php");

?>

<div id="login">
<h2>Please use the form below to login to the system</h2></br>
<form id="loginForm" name="loginForm" method="post" action="login-exec.php">
  <table width="300" border="0" align="center" cellpadding="10" cellspacing="10">
    <tr>
      <td width="112"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="188"><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form>
</div>