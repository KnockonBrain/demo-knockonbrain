<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
       <h2>Change Email</h2> 
    </div>
    <form method="post" action="email_change.php">
        <?php include('errors.php');?>
        <div class="input-group">
            <label for="">Current Email</label>
            <input type="email" name="current_email">
        </div>
        <div class="input-group">
            <label for="">New Email</label>
            <input type="email" name="new_email">
        </div>
        <div class="input-group">
            <button type="submit" name="EmailChange" class="btn">Change Email</button>
        </div>
        <p>
             <a href="email_change.php">Go Back</a>
        </p>
    </form>
</body>
</html>