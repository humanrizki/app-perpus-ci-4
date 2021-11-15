<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            border-radius: 10px;
            font-family: 'Open Sans',sans-serif;
            justify-content: center;
            align-items: center;
        }
        
        .main p{
            font-size: 20px;
            font-weight: 400;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">

    </div>
    <?php foreach($field as $item):?>
        <div class="main">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php $item['title'];?></h5></h5>
                    <p class="card-text"><?php $item['description'];?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    <?php endforeach;?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>