<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
	 <link rel="stylesheet" href="css/style.css?ver=15">
</head>
<body>
<div class="wrapper">
		<div class="container">
			<header class="header">
				<div class="header__body">
					<div class="header__row">
						<div class="header__logo">
							<a href="index.php"><img src="img/narxoz_logo.png" alt="narxoz_logo"></a>
						</div>
						<nav class="header__menu">
							<ul class="item">
								<li>О НАС</li>
								<li>ПОСТУПАЮЩИМ</li>
								<li>ШКОЛЫ</li>
								<li>RESEARCH</li>
								<li>GLOBAL</li>
								<li>DEVELOPMENT</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<div class="content">
			<div class="main">
				<div class="full__2">
					<div class="main__body">
																			<form action="vendor/signin.php" method="post">
																<input type="text" name="login" placeholder="Введите свой логин">
																<input type="password" name="password" placeholder="Введите пароль">
																<button class="voiti" type="submit">Войти</button>
																<p class="ss">
																		У вас нет аккаунта? - <a class="sl" href="register.php">Зарегистрируйтесь ! </a>
																</p>
																<?php
																		if ($_SESSION['message']) {
																			echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
																		}
																		unset($_SESSION['message']);
																?>
															</form>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>