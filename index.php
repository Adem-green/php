
<?php

    $lang = 'en';

    if  ($lang == 'en') {
        echo $headerLangs  = [
            'link_1' => 'News',
            'link_2' => 'Contacts',
            'link_3' => 'Login/Registration',
        ];

        $authLangs = [
            'subtitle' => 'Dont have an account yet? Sign up',
            'input_1' => 'Login',
            'input_2' => 'Password',
            'button_1' => 'Forgot your password?',
            'button_2' => 'To come in',
            'button_3' => 'I am an employee',
            'button_4' => 'I am an employer',
        ];

        $titlePage = 'AUTHORIZATION';
    } elseif ($lang == 'ru') {
		echo $headerLangs = [
            'link_1' => 'новости',
            'link_2' => 'контакты',
            'link_3' => ' вход / регистрация',
        ];

        $authLangs = [
            'subtitle' => 'У вас еще нет аккаунта? Пройдите регистрацию',
            'input_1' => 'Логин',
            'input_2' => 'Пароль',
            'button_1' => 'забыли Пароль?',
            'button_2' => 'войти',
            'button_3' => 'я работник',
            'button_4' => 'я работодатель',
        ];

        $titlePage = 'АВТОРИЗАЦИЯ';
	    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titlePage; ?></title>
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
                <a href="#" class="header-button"><?php echo $headerLangs['link_3']; ?></a>
                <div class="header-links">
                    <a href="#" class="header-link header-link-1"><?php echo $headerLangs['link_1']; ?></a>
                    <a href="#" class="header-link header-link-2"><?php echo $headerLangs['link_2']; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 content">
            <div class="form-auth">
                <form method="post" action="/">
                    <div class="form-auth-title"><?php echo $titlePage; ?></div>
                    <label class="form-input">
                        <input type="text" class="input" name="login" placeholder="<?php echo $authLangs['input_1']; ?>" required="required">
                        <input type="password" class="input" name="password" placeholder="<?php echo $authLangs['input_2']; ?>"
                               required="required">
                    </label>
                    <input type="button" class="forgot-password-btn" value="<?php echo $authLangs['button_1']; ?>">
                    <input type="submit" class="sign-in" value="<?php echo $authLangs['button_2']; ?>">
                    <a class="content-subtitle"><?php echo $authLangs['subtitle']; ?></a>
                    <input type="button" class="work-1" value="<?php echo $authLangs['button_3']; ?>">
                    <input type="button" class="work-2" value="<?php echo $authLangs['button_4']; ?>">
                </form>
            </div>
			<div class="lang" style="width: 45px; height: 25px ; border: 2px solid white;">
				<a href="index.php?$lang=ru" class=lang_ru" style="color: white; float: left; margin-left: 1px">ru</a>
				<a href="index.php?$lang=en" class=lang_en" style="color: white; float: left; margin-left: 10px;">en</a>
			</div>
        </div>
    </div>
</div>
</body>
</html>