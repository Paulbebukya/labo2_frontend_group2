<?php
// session_start();
// if ($_SESSION != null) {

require_once '../layauts/app.php';
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajouter un frais
        </button>
    </div>
    <div class="row">
        <div class="col-md-5">
            <h4>Les frais </h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Date Creation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-7">
            <h4>les comptes affectes aux frais</h4>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Matricule compte</th>
                            <th scope="col">Frais</th>
                            <th scope="col">Date Creation</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyCompte">

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un frais</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="fraisForm">
                        <div class="group-form mb-2">
                            <label for="exampleInputEmail1">Designation</label>
                            <input type="text" class="form-control mt-2" required id="designation" placeholder="Entrer designation du client">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</main>



<script src="../../assets/bootstrap/js/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#fraisForm').submit(function(e) {
            e.preventDefault(); // Annuler l'événement de soumission par défaut du formulaire

            // Récupérer les données du formulaire et les formater en JSON
            var formData = {
                designation: $('#designation').val(),
            };
            var jsonData = JSON.stringify(formData);

            // Faire appel au script PHP via AJAX
            $.ajax({
                type: 'POST',
                url: 'http://api.local/frais/add_frais.php', // Adresse du serveur sur le réseau local
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

    // get frais
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: 'http://api.local/frais/get_frais.php', // Assurez-vous de spécifier le chemin correct vers votre fichier PHP
            dataType: 'json',
            success: function(response) {
                // Traiter la réponse ici
                if (response.length > 0) {
                    var html = '';
                    $.each(response, function(index, data) {
                        html += '<tr>';
                        html += '<td>' + (index + 1) + '</td>';
                        html += '<td>' + data.designation + '</td>';
                        html += '<td>' + data.date_creation + '</td>';
                        html += "<td style='width: 50px;'><a href='update.php?id=" + data.id + "&designation=" + data.designation + "' class='btn btn-sm btn-primary me-1'>Voir</a></td>";
                        html += '</tr>';
                    });
                    $('#tbody').html(html); // Remplacez le contenu de tbody par les lignes créées
                } else {
                    $('tbody').html('<tr><td colspan="7">Aucune donnée trouvée dans la base de données.</td></tr>');
                }
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs ici
                alert('Une erreur s\'est produite lors de la récupération des données de la base de données.');
                console.error(error);
            }
        });
    });

    // get compte_frais

    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: 'http://api.local/frais/get_compte_frais.php', // Assurez-vous de spécifier le chemin correct vers votre fichier PHP
            dataType: 'json',
            success: function(response) {
                // Traiter la réponse ici
                if (response.length > 0) {
                    var html = '';
                    $.each(response, function(index, data) {
                        html += '<tr>';
                        html += '<td>' + (index + 1) + '</td>';
                        html += '<td>' + data.matricul + '</td>';
                        html += '<td>' + data.designation + '</td>';
                        html += '<td>' + data.date_creation + '</td>';
                        html += '</tr>';
                    });
                    $('#tbodyCompte').html(html); // Remplacez le contenu de tbody par les lignes créées
                } else {
                    $('tbodyCompte').html('<tr><td colspan="7">Aucune donnée trouvée dans la base de données.</td></tr>');
                }
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs ici
                alert('Une erreur s\'est produite lors de la récupération des données de la base de données.');
                console.error(error);
            }
        });
    });
</script>



<?php require_once '../layauts/footer.php';
// } else
//     header('Location:../../index.php');
// exit();

?>