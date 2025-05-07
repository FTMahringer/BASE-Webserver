<?php
$dir = __DIR__;
$folders = array_filter(scandir($dir), function($item) use ($dir) {
    return $item !== '.' && $item !== '..' && is_dir($dir . DIRECTORY_SEPARATOR . $item);
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Dashboard</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ece9e6, #ffffff);
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        main {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        h1 {
            margin-top: 0;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 15px 0;
        }
        a {
            display: block;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #007bff;
            font-size: 1.1em;
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }
        a:hover {
            text-decoration: none;
            background-color: #f0f8ff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
<header>
    <h1>🚀 My Local Projects</h1>
</header>
<main>
    <h2>Available Projects</h2>
    <ul>
        <?php foreach ($folders as $folder): ?>
            <li><a href="/<?php echo $folder; ?>/public">📁 <?php echo $folder; ?></a></li>
        <?php endforeach; ?>
    </ul>
</main>
</body>
</html>