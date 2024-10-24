<?php $this->load->view('header'); ?>
<div class="container py-3">
    <!-- En-tête de la section Profil -->
    <h3 class="heading text-center mb-md-5 mb-4"> My Profile </h3>

    <div class="card p-4" style="background-color: #f8f9f9;">
        <div class="row">
            <div class="col-md-10">

                <!-- Titre des informations personnelles -->
                <h5>Personal Info</h5>
                <!-- Ligne de séparation stylisée -->
                <hr style="border: 1px solid #f2994a; width: 10%" class="ml-0 rounded my-2">

                <!-- Affichage du nom -->
                <div class="row my-3">
                    <div class="col-4 col-lg-2">Name : </div>
                    <div class="col-8 col-lg-10"><?php echo $name ?></div>
                </div>

                <!-- Affichage de l'email -->
                <div class="row my-3">
                    <div class="col-4 col-lg-2">Email : </div>
                    <div class="col-8 col-lg-10"><?php echo $email ?></div>
                </div>

                <!-- Bouton pour afficher le formulaire de changement de mot de passe -->
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                    </svg>
                    Change Password
                </button>

                <!-- Formulaire de changement de mot de passe -->
                <div class="collapse" id="collapseExample">
                    <form method="post" action="<?php echo base_url(); ?>/profile/change">
                        
                        <!-- Champ pour le mot de passe actuel -->
                        <div class="row my-3">
                            <div class="col-4 col-lg-2">Current Password </div>
                            <div class="col-8 col-lg-4"><input type="password" id="current-password" name="current-password" class="form-control"></div>
                        </div>

                        <!-- Champ pour le nouveau mot de passe -->
                        <div class="row my-3">
                            <div class="col-4 col-lg-2">New Password </div>
                            <div class="col-8 col-lg-4"><input type="password" id="new-password" name="new-password" class="form-control"></div>
                        </div>

                        <!-- Champ pour confirmer le nouveau mot de passe -->
                        <div class="row my-3">
                            <div class="col-4 col-lg-2">Confirm Password </div>
                            <div class="col-8 col-lg-4"><input type="password" id="password-confirmation" name="password-confirmation" class="form-control"></div>
                        </div>

                        <!-- Bouton pour soumettre le formulaire de changement de mot de passe -->
                        <div class="row">
                            <div class="col-4 col-lg-2">
                                <button type="submit" class="btn btn-primary btn-block mt-3">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Affichage du message du changement de mot de passe -->
                <div class="row my-3">
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo '<div class="alert alert-info" role="alert">' . $this->session->flashdata("message") . '</div>';
                        $this->session->unset_userdata('message');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->load->view('footer'); ?>