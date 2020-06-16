<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/style.css?ver=25">
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
					    <!-- Профиль -->

    <form">
        <img class="avatarpr" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        <h2 class="namepr" ><?= $_SESSION['user']['full_name'] ?></h2>
        <a class="emailpr" href="#"><?= $_SESSION['user']['email'] ?></a>
		  <a class="linkpr" href="indexjoin.php">Перейти на сайт</a>
		  <a class="linkp" href="plan/index.php">Список дел</a>
		  <a class="linkpp" href="form/index.php">Написать сообщение</a>
		  <a href="vendor/logout.php" class="logout">Выход</a>
    </form>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>