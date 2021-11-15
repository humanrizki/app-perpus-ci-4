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
            
            background-image: url("img/ff.png");
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-size:100% 100%;
        }
        .main{
            display: flex;
            width: 100%;
            height: 30px;
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
    <div class="container">

    </div>
    <?php foreach($field as $item):?>
    <div class="main">
            <p style="display: inline-block;"><?= $item['title'];?> </p>
        </div>
    <?php endforeach;?>
</body>
</html>