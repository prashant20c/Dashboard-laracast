<?php require 'partials/doc.php' ?>


    <?php require 'partials/nav.php'  ?>
    <?php require 'partials/header.php' ?>



        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?= 'hi ' ,  $_SESSION['user']['fName']?? 'guest' ?>
            </div>
        </main>

        <?php require 'partials/footer.php'?>