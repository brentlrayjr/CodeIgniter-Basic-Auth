<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo(CSS.'theme.css'); ?>">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

  <div class="vert-spacer-md"> </div>

  <div class="container">

  <form action="<?php echo(URL.'accounts/create/');?>" method="post">

    <div class="form-group">
      <label for="input-email">Email address</label>
      <input id="input-email" name="email" type="email" class="form-control">
    </div>
    <div class="form-group">
      <label for="input-password">Password</label>
      <input id="input-password" name="password" type="password" class="form-control">
    </div>
    <div class="form-group">
      <label for="input-firstName">First Name</label>
      <input id="input-firstName" name="firstName" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label for="input-lastName">Last Name</label>
      <input id="input-lastName" name="lastName" type="text" class="form-control">
    </div>

    <button id="button-submit" type="submit" class="btn btn-primary btn-block">Submit</button>
  </form>

  </div>

</body>
</html>
