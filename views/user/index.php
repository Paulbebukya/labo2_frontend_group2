<?php require_once '../layauts/app.php' ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Les clients</h1>
        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajouter un client
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Téléphone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td style="width: 160px;">
                        <button class="btn btn-sm btn-primary">Editer</button>
                        <button class="btn btn-sm btn-danger">Supprimer</button>
                    </td>
                </tr>

            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un client</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form  method="post">
                            <div class="group-form mb-2">
                                <label for="exampleInputEmail1">Designation</label>
                                <input type="text" class="form-control mt-2"  required id="exampleInputEmail1"  placeholder="Entrer designation du client">
                            </div>

                            <div class="group-form mb-2">
                                <label for="exampleInputEmail1">Adresse </label>
                                <input type="text" class="form-control mt-2"  required id="exampleInputEmail1"  placeholder="Entrer l'addresse du client">
                            </div>

                            <div class="group-form mb-2">
                                <label for="exampleInputEmail1">Numero de telephone</label>
                                <input type="number" class="form-control mt-2"  required id="exampleInputEmail1"  placeholder="numbero de telephone">
                            </div>
                        
                            <!-- <button type="submit" class="btn btn-primary">Connexion</button> -->
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php require_once '../layauts/footer.php' ?>