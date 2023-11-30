<?php foreach ($sushis as $sushi): ?>

<div class="sushi">
    <p><strong>type :<?= $sushi['type'] ?></strong></p>
    <p><strong>description :<?= $sushi['description'] ?></strong></p>
    <p><strong>poisson : <?= $sushi['poisson'] ?></strong></p>
    <a href="sushi.php?id=<?= $sushi['id'] ?>" class="btn btn-success">voir</a>
</div>



<?php endforeach; ?>
