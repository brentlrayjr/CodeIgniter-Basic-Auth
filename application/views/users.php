<!DOCTYPE html>
<html>
<head>
<title>Users</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo(CSS.'theme.css'); ?>">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

  <div class="vert-spacer-sm"> </div>

  <div class="container">

    <div class="row">



          <?php foreach ($users as $user): ?>
      <div class="col-xs-1 col-sm-2 col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">

                  <p><?=$user->firstName.' '.$user->lastName?></p>
                  <p><?=$user->dateTimeCreated?></p>

              </div>
            </div>
      </div>
          <?php endforeach; ?>




    </div>

  </div>

</body>
</html>
