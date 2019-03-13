<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Tchat Webforce</title>
</head>
<body>
    <div class="container">
        <h1>Tchat Webforce</h1>

        <div id="message">

        <div class="media mt-5">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Hello</h5>
                Hello tout le monde
            </div>
            <img src="./tchat.jpg" class="ml-3" alt="image">
        </div>

        <div class="media mt-5">
            <div class="media-body">
                <h5 class="mt-0 mb-1">Media object</h5>
                Hello tout le monde
            </div>
            <img src="./tchat.jpg" class="ml-3" alt="image">
        </div>
        
        </div>
        <form class="mt-5" action="./message.php" method="post">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" name="pseudo" id="pseudo" class="form-control" placeholder="Votre pseudo">
                    <textarea name="message" id="message" class="form-control" placeholder="Votremessage"></textarea>
                </div>
                <div>
                    <button class="btn btn-primary
                    btn-block">Envoyer</button>
                </div>
            </div>
        
        </form>
    </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="./app.js"></script>

</body>
</html>