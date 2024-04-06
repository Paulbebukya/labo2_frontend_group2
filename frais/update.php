<?php
// session_start();
// if ($_SESSION != null) {

require_once '../layauts/app.php';


$id_frais = $_GET['id'];
$designation = $_GET['designation'];
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Modifier le frais</h1>
        <a href="index.php" class="btn btn-sm btn-primary">Fermer</a>
    </div>
    <div class="container">
        <div class="row border">
            <div class="col-md-12 col-sm-6 ">
                <div class="p-1">
                    <h4>Information du frais</h4>
                    <form id="fraisForm_update">
                        <div class="group-form mb-2">
                            <label for="nom">Designation</label>
                            <input type="hidden" value="<?= $id_frais ?>" id="id_frais">

                            <input type="text" class="form-control mt-2" value="<?= $designation ?>" id="designation">
                        </div>
                </div>

                <div class="p-2 d-flex justify-content-between">
                    <button type="submit" name="save" class="btn btn-sm btn-success">Modifier maintenant</button>
                    </form>
                    <form id="fraisForm_delete">
                        <input type="hidden" value="<?= $id_frais ?>" id="id_frais">
                        <button type="submit" name="save" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</main>

<script src="../../assets/bootstrap/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#fraisForm_update').submit(function(e) {
            e.preventDefault(); // Annuler l'événement de soumission par défaut du formulaire

            // Récupérer les données du formulaire et les formater en JSON
            var formData = {
                id_frais: $('#id_frais').val(),
                designation: $('#designation').val()
            };
            var jsonData = JSON.stringify(formData);

            // Faire appel au script PHP via AJAX
            $.ajax({
                type: 'POST',
                url: 'http://api.local/frais/edit_frais.php', // Adresse du serveur sur le réseau local
                contentType: 'application/json', // Indiquer que les données sont en JSON
                data: jsonData,
                success: function(response) {
                    $('#id_frais').val(formData.id_frais),
                    $('#designation').val(formData.designation)
                    // Traiter la réponse ici
                    alert(response.message); // Afficher le message de succès
                },
                error: function(xhr, status, error) {
                    // Gérer les erreurs ici
                    console.log(xhr.status);
                }
            });
        });
    });

    $(document).ready(function() {
        $('#fraisForm_delete').submit(function(e) {
            e.preventDefault(); // Annuler l'événement de soumission par défaut du formulaire

            // Récupérer les données du formulaire et les formater en JSON
            var formData = {
                id_frais: $('#id_frais').val(),
            };
            var jsonData = JSON.stringify(formData);

            // Faire appel au script PHP via AJAX
            $.ajax({
                type: 'POST',
                url: 'http://api.local/frais/delete_frais.php', // Adresse du serveur sur le réseau local
                contentType: 'application/json', // Indiquer que les données sont en JSON
                data: jsonData,
                success: function(response) {
                    // Traiter la réponse ici
                    alert(response.message); // Afficher le message de succès

                    window.location.href = "index.php";
                },
                error: function(xhr, status, error) {
                    // Gérer les erreurs ici
                    console.log(xhr.status);
                }
            });
        });
    });
</script>

<?php require_once '../layauts/footer.php';
// } else
//     header('Location:../../index.php');
// exit();

?>