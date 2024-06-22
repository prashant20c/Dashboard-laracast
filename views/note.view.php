<?php require 'partials/doc.php' ?>



<?php require 'partials/nav.php'  ?>
<?php require 'partials/header.php' ?>


<main>
    <a href="/notes" class="text-blue-600 underline mb-4" >go back</a>
    <div >
        <h2><?= $note['body']  ?></h2>
        <div>cereated date : <?= substr($note['created_at'],0,10)   ?></div>
        
    </div>


</main>
<?php require './partials/footer.php' ?>