<?php require_once '../layauts/app.php' ?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Les comptes</h1>
       
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Matricule du compte</th>
                    <th scope="col">Client</th>
                    <th scope="col">Date de creation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>124ML393LP873467</td>
                    <td>ISC-GOMA</td>
                    <td>le 23.12.2022</td>
                    <td style="width: 160px;">
                        <button class="btn btn-sm btn-primary">Editer</button>
                        <button class="btn btn-sm btn-danger">Supprimer</button>
                    </td>
                </tr>

            </tbody>
        </table>


    </div>
</main>


<?php require_once '../layauts/footer.php' ?>