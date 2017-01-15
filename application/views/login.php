<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo(CSS.'theme.css'); ?>">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

  <div class="vert-spacer-lg"> </div>

  <div class="container">

  <form action="<?php echo(URL.'accounts/verify/');?>" method="post">

    <div class="form-group">
      <label for="email">Email address</label>
      <input id="input-email" name="email" type="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="pwd">Password</label>
      <input id="input-password" name="password" type="password" class="form-control">
    </div>

    <button id="button-submit" type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>
  <p class="center"><a href="<?php echo(URL.'accounts/register/');?>">...or register.</a></p>

  </div>

</body>
</html>
