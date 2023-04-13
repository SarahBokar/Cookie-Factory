<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">


        <div class="col-xs-12">
            <h1>Carte</h1>
            <?php if (count($_SESSION['cart']) == 0) { ?>
            <p>Your cart is empty.</p>
            <?php } else { ?>
            <ul>
                <?php foreach ($_SESSION['cart'] as $id => $cookie) { ?>
                <li><?= $cookie['name']; ?></li>
                <?php } ?>
            </ul>
            <?php } ?>
        </div>
git

    </div>
</section>



<?php require 'inc/foot.php'; ?>