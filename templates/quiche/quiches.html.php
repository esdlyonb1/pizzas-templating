<?php foreach ($quiches as $quiche) : ?>


<p><strong>nom <?= $quiche['name'] ?> </strong></p>
<p><strong>nom <?= $quiche['description'] ?> </strong></p>
    <form action="quiche.php" method="post">
        <input type="hidden" name="quicheId" value="<?= $quiche['id'] ?>">
        <button type="submit" class="btn btn-success">voir</button>
    </form>

<?php endforeach; ?>
