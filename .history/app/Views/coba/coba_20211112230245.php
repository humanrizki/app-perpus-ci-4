<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <style>
        *{
            padding: 0px;
            margin: 0px;
        }
        body{
            display: inline-flex;
            height: 100vh;
            width: 100vw;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-image: url("img/ff.png");
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-size:100% 100%;
        }
        .main{
            display: flex;
            width: 80%;
            height: 80px;
            background-color: white;
            border-radius: 10px;
            font-family: 'Open Sans',sans-serif;
            box-shadow: 0px 0px 10px grey;
            justify-content: center;
            align-items: center;
        }
        
        .main p{
            font-size: 20px;
            font-weight: 400;
            text-align: center;
            margin-left: 8px;
        }
    </style>
</head>
<body>
    <div class="main">
        <?php foreach($field as $item):?>
            <p style="display: inline-block;"><?= $item['title'];?> </p>
        <?php endforeach;?>
    </div>
</body>
</html>