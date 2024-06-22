<?php require 'partials/doc.php' ?>



<?php require 'partials/nav.php'  ?>
<?php require 'partials/header.php' ?>



<main>
   <?php 
   foreach($notes as $note) : ?>
  <li><a href="<?="/note?id=". $note['ID'] ?>" class="text-blue-500"><?=$note['body']?></a> </li>
   <?php endforeach ?>
</main>

<?php require './partials/footer.php' ?>