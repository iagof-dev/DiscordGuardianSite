<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiscordGuardian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./Assets/css/main.css">
</head>

<body>
    <div class="container">
        <div class="box position-absolute top-50 start-50 translate-middle center">
            <div class="boxes">
                <div class="box-title title">
                    <h1>DiscordGuardian</h1><br>
                </div>
                <div class="box-content form">
                    <form action="./process.php" method="post">
                        <label>Nick:</label><br>
                        <input name="nickname" type="text" placeholder="João"><br>
                        <input class="btn btn-primary enviar" type="submit" value="Enviar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>