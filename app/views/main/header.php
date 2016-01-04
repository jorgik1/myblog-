<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My blog</title>
  <link rel="stylesheet" href="http://myblog.loc/app/views/public/css/default.css">
</head>
<body>
<div id="header">
    <h1>My Blog</h1>
</div>
    <div id="content">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php  echo filter_input_array(INPUT_COOKIE) ?  '<li><a href="login.php">logout</a></li>' : '<li><a href="login.php">login</a></li>'; ?>
            </ul>
        </nav>
    </div>

