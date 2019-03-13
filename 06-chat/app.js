var form = $('form'); // Sélectionne le formulaire

form.on('submit', function (event) {
    event.preventDefault(); // On annule la redirection du formulaire

    // On récupère les données du formulaire
    var formData = form.serialize();

    // On exécute la requête AJAX
    $.ajax({
        type: 'post',
        url: form.attr('action'),
        data: formData // On passe les données à message.php
    }).done(function(response){
        console.log(response);
    })
});