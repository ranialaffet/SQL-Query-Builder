<?php $this->load->view('header'); ?>

<div class="container py-3">
    <!-- Titre centré de la section -->
    <h3 class="heading text-center mb-md-5 mb-4"> Our address </h3>

    <!-- Carte contenant les informations d'adresse-->
    <div class="card my-3 p-3" style="max-width: 540px; margin:auto; background-color: #f8f9f9;">
        <div class="row g-0">

            <!-- Colonne pour l'image de la lettre -->
            <div class="col-md-4 p-2">
                <img src="<?php echo base_url(); ?>/assets/img/letter.png" class="img-fluid rounded-start" alt="letter image">
            </div>

            <!-- Colonne pour le contenu textuel de la carte -->
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">National Informatics Centre</h5>

                    <p class="card-text">
                        17 Rue Belhassen Ben Chaabane 1005 El-Omrane<br>
                        Tel: +216 71 78 30 55<br>
                        FAX: +216 71 781862<br>
                        E-mail: <a href="mailto:webcni@cni.tn" data-mce-href="mailto:webcni@cni.tn">webcni@cni.tn</a><br>
                        Website: <a href ="www.cni.tn">www.cni.tn</a><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
