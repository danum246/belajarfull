<html>
<head>
	<title>tes</title>
</head>
<body>
	<form action="<?php echo base_url (); ?>index.php/c_login/login" method="POST" accept-charset="utf-8">
	<p>
      <label for="login">username</label>
      <input type="text" name="username" id="username" value="">
    </p>
    <p>
      <label for="login">Password</label>
      <input type="password" name="password" id="password" value="">
    </p>
    <input type="submit" name="submit" value="submit">
    <p>
	</form>
</body>
</html>