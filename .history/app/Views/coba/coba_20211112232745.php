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
            display: block;
            background-image: url("/img/ff.png");
            background-repeat: no-repeat;
            background-attachment:fixed;
            background-size:100% 100%;
        }
        .main{
            display:block;
            width: 100%;
            height: max-content;
            border-radius: 10px;
            font-family: 'Open Sans',sans-serif;
        }
        
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($field as $item):?>
                <div class="col-md-4 mt-2 p-2">
                    <div class="main">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['title'];?></h5>
                                <p class="card-text"><?= substr($item['description'],0,20).'...';?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>