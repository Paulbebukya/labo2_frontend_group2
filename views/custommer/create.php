<?php
session_start();
if ($_SESSION != null) {

    require_once '../layauts/app.php';
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Ajouter un client</h1>
            <a href="index.php" class="btn btn-sm btn-primary">Fermer</a>
        </div>

        <div class="container">
            <div class="row border">
                <div class="col-md-12 col-sm-6 ">
                    <div class="p-3">
                        <h4>Information du client</h4>
                        <form method="POST">
                            <div class="group-form mb-2">
                                <label for="exampleInputEmail1">Designation</label>
                                <input type="text" class="form-control mt-2" name="name" required id="exampleInputEmail1" placeholder="Entrer designation du client">
                            </div>

                            <div class="group-form mb-2">
                                <label for="exampleInputEmail1">Adresse </label>
                                <input type="text" class="form-control mt-2" name="adress" required id="exampleInputEmail1" placeholder="Entrer l'addresse du client">
                            </div>

                            <div class="group-form mb-2">
                                <label for="exampleInputEmail1">Numero de telephone</label>
                                <input type="number" class="form-control mt-2" name="phone_number" required id="exampleInputEmail1" placeholder="numbero de telephone">
                            </div>

                    </div>

                </div>

                <div class="px-4 py-3">
                    <button type="submit" name="save" class="btn w-100 btn-sm btn-success">Enregister</button>
                </div>
                <?php require_once '../../../back-end/controller/custommer.php';

                if (isset($message['success'])) {
                ?>
                    <div class="col-md-12 col-sm-6">
                        <div class="alert alert-success text-center">
                            <span><?= $message['success'] ?></span>
                            <input type="text" value="<?= $message['randomCode'] ?>" class="form-control mt-2 text-center text-uppercase" required id="exampleInputEmail1" disabled>
                        </div>
                    </div>
                <?php
                } elseif (isset($message['error'])) {
                ?>
                    <div class="col-md-12 col-sm-6">
                        <div class="alert alert-danger text-center">
                            <span><?= $message['error'] ?></span>
                              </div>
                    </div>
                <?php
                }
                ?>
                </form>
            </div>
        </div>


    </main>

<?php require_once '../layauts/footer.php';
} else
    header('Location:../../index.php');
exit();

?>