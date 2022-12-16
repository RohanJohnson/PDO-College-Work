<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">

    
</head>

<?php
$dark_theme = false;

if (isset($_POST['theme-button'])) {
  $dark_theme = !$dark_theme;
}

$light_theme = false;

if (isset($_POST['theme-light'])) {
  $light_theme = !$light_theme;
}
?>

<form method="post">
  <input type="submit" name="theme-button" value="Dark Mode" />
</form>
<form method="post">
  <input type="submit" name="theme-light" value="Light Mode" />
</form>

<?php if ($dark_theme) { ?>
  <style>
    body {
      background-color: #333;
      color: #fff;
    }
	a{
		color: white;
	}
	a:hover {
		color: yellow;
	}
	button{
		background-color: grey;
		color: white;
	}
  </style>
<?php
}
else { ?>
  <style>
    body {
      background-color: lightblue;
      color: darkred;
    }
	a{
		color: darkred;
	}
	a:hover {
		color:red;
	}
  </style>
<?php
}?>


<body>
            
            <div class="mainsec">
    
    <header>
        <h1>My blog</h1>
    </header>

    <a href="/PDO">Home</a>
    <?php $base = $_SERVER["REQUEST_URI"]; ?>

<nav>
    <ul>
        <?php if (Auth::isLoggedIn()): ?>
            <li>
                <a href="<?= str_replace($base, "/PDO/admin", $base); ?>">Admin</a>
            </li>
            <li>
                <a href="<?= str_replace($base, "/PDO/logout.php", $base); ?>">Log out</a>
            </li>
        <?php
elseif ($base != "/PDO/login.php"): ?>
            <li>
                <a href="<?= str_replace($base, "/PDO/login.php", $base); ?>">Log in</a>
            </li>
        <?php
endif; ?>
    </ul>
</nav>
    <main>