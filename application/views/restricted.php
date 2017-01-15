<!DOCTYPE html>
<html>
<head>
<title>Error</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo(CSS.'theme.css'); ?>">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

  <div class="vert-spacer-lg"> </div>

  <div class="container center">

    <h1 class="error"> ERROR </h1>
    <p><?php echo($message); ?> </p>

    <a href="<?php echo(URL.'accounts/'); ?>" id="button-submit" class="btn btn-default">Back to login</button>


  </div>

</body>
</html>
