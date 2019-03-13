<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    

        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <form action="./worker.php" method="post">
                        <div class="form-group">
                            <label for="brand">Brand :</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="model">Model :</label>
                            <input type="text" name="message" id="message" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price :</label>
                            <input type="text" name="text" id="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture :</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                        
                        <button class="btn btn-primary btn-block">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        
        ?>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    </body>
</html>
