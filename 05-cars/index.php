<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Voiture</title>

</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <ul id="voiture">Chargement en cours...</ul>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $.get('./cars.php').done(function (voitures) {
            $('#voiture').html(''); // supprimer "Chargement en cours..."
            for (cars of voitures) {
                var li = $('<li></li>'); // On créé le li
                li.html(cars.brand + ' ' + cars.model + ' <br /> ' + cars.price + '€'); // On ajoute la marque et le modèle du smartphone dans le contenu du li
                $('#voiture').append(li);
                $('#voiture').append($('<img src=./'+ cars.picture+'>')); // On ajoute le li dans le ul
            }
        });
    </script>
</body>
</html>