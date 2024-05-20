<?require_once 'lib.php'?>

<? $message = get_message($_GET); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="app.css">
    <title>Create account|SEA BATTLE</title>
</head>
<body>
    <div class="container">
          <h1>Create account | SEA BATTLE</h1>
          <? if($message){?>
          <p class="error"><?=$message ?></p>
        <?  }?>
          <form action="/register-action.php" method="POST">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder ="password">
                    <input type="password" name="password_confirm" placeholder ="confirm password">
                    <button>REGISTER</button>
                </form>
        </div>
</body>
</html>