<?php
    require_once './src/bootstrap.php';
    $linio = new App\Controller;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Linio - Technical Code Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'/>
    <link rel="stylesheet" type="text/css" media="screen" href="/public/style/main.css" />
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Technical code challenge</h1><br>
            <h2>Using JavaScript</h2>
            <hr class="my-4">
            <p><script async src="//jsfiddle.net/denkz8br/13/embed/js,result/"></script></p><br>
            <h2>Using PHP</h2>
            <hr class="my-4">
            <div id="resultsPanel">
                <pre><code><?php $linio->getDisplay(1, 100); ?></code></pre>
            </div>
        </div>
    </div>
</body>
</html>
