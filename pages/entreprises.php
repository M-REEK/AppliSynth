    <?php require 'menu.php' ?>
<main>

    <section>
        <p>Ajouter une entreprise <i class="fas fa-plus-circle"></i></p>
        <div>Trier par: numéro / date croissante / date décroissante / montant réglé / </div>
        <?php foreach ($allEntreprises as $ent): ?>
            <div class="entreprises">
                <div>
                    <p><span>Nom entreprise : <?= $ent['nom_societe'] ?></span> <span>Numéro : <?= $ent['id_client'] ?></span> <span>Note : <?= $ent['indice_confiance'] ?>/5</span></p><!-- Doit être en display flex puis space-between -->
                    <p>Conventions signées : <?= $ent['nb_contrats'] ?></p>
                </div>
                <div> <!-- Doit être en display flex -->
                    <div><i class="fas fa-pencil-alt"></i> <i class="far fa-eye"></i></div>
                    <div>Montant réglé : <?= $ent['argent_regle'] ?></div>
                    <div>Montant dû : <?= $ent['argent_du'] ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>