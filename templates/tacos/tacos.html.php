

<div class="tacos">

    <?php foreach ($tacos as $unTacos): ?>


    <img src="" alt="">
    <p><strong>Nom : <?= $unTacos['name'] ?></strong></p>
    <p><strong>description : <?= $unTacos['description'] ?> </strong></p>
        <form action="ficheTacos.php" method="post">
            <input type="hidden" name="tacosId" value="<?= $unTacos['id'] ?>">
            <button type="submit" class="btn btn-primary">Voir</button>
        </form>

    <?php endforeach; ?>

</div>