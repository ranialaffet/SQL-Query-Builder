<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="h-100 d-flex align-items-center justify-content-center" style="background-color: #f8f9f9;">

<div class="card border-light shadow w-50" style="max-width: 40rem; min-width: 20rem;">
    <!-- Corps de la carte contenant le formulaire de connexion -->
    <div class="card-body px-5 py-4">
        <!-- Titre de la carte pour la connexion -->
        <h2 class="card-title text-center">Sign In</h2>
        <!-- Sous-titre de la carte, message de bienvenue -->
        <p class="card-subtitle mb-4 text-center text-body-secondary">Welcome</p>

        <!-- Formulaire de connexion -->
        <form action="<?php echo base_url(); ?>login/validation" method="post">
            
            <!-- Champ pour l'adresse email -->
            <div class="form-floating mb-3">
                <input type="text" placeholder="Email" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control" />
                <label for="email">Email address</label>
                <!-- Message d'erreur pour l'email, si applicable -->
                <span class="text-danger"><?php echo form_error('email'); ?></span>
            </div>

            <!-- Champ pour le mot de passe -->
            <div class="form-floating">
                <input type="password" placeholder="Password" name="password" id="password" value="<?php echo set_value('password'); ?>" autocomplete="off" class="form-control" />
                <label for="password">Password</label>
                <!-- Message d'erreur pour le mot de passe, si applicable -->
                <span class="text-danger"><?php echo form_error('password'); ?></span>
            </div>

            <!-- Bouton de soumission pour le formulaire de connexion -->
            <button type="submit" class="btn btn-primary btn-block mt-4 mb-4 w-100">Sign In</button>

        </form>

        <!-- Lien pour les utilisateurs qui ne sont pas encore membres -->
        <p class="text-center text-body-secondary">Not a Member yet? <a href=<?php echo base_url('signup') ?> class="link-primary" style="text-decoration: none;">Sign up</a></p>
        <br><br>

        <!-- Affichage d'un message d'erreur général si disponible -->
        <?php
        if ($this->session->flashdata('message')) {
            echo '
            <div class="alert alert-danger">
                ' . $this->session->flashdata("message") . '
            </div>
            ';
            $this->session->unset_userdata('message');
        }
        ?>
    </div>
</div>



    <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>