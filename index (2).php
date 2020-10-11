
<?php 
	$header = [
		'link-1' => 'новости',
		'link_2' => 'контакты',
		'link_3' => ' вход / регистрация',
	];

	$auth = [
		'title' => 'АВТОРИЗАЦИЯ',
		'subtitle' => 'У вас еще нет аккаунта? Пройдите регистрацию',	
		'input_1' => 'Логин',
		'input_2' => 'Пароль',
		'button_1' => 'забыли Пароль?',
		'button_2' => 'войти',
		'button_3' => 'я работник',
		'button_4' => 'я работодатель',
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
<div class="container-fluid background">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 header">
            <div class="header-px">
                <a href="/" class="header-logo">
                    <img src="images/Group%201.png" alt="logo">
                </a>
                <a href="#" class="header-button"> вход / регистрация </a>
                <div class="header-links">
                    <a href="#" class="header-link header-link-1"><?php echo $header['link_1']; ?></a>
                    <a href="#" class="header-link header-link-2"><?php echo $header['link_2']; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content">
            <div class="form-auth">
                <form method="post" action="/">
                    <div class="form-auth-title">АВТОРИЗАЦИЯ</div>
                    <label class="form-input">
                        <input type="text" class="input" name="login" placeholder="Логин" required="required">
                        <input type="password" class="input" name="password" placeholder="Пароль"
                               required="required">
                    </label>
                    <input type="button" class="forgot-password-btn" value="забыли пароль?">
                    <input type="submit" class="sign-in" value="войти">
                    <a class="content-subtitle">У вас еще нет аккаунта? Пройдите регистрацию</a>
                    <input type="button" class="work-1" value="я работник">
                    <input type="button" class="work-2" value="я работодатель">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>