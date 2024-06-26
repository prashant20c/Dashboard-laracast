<?php require 'partials/doc.php' ?>



<?php require 'partials/nav.php'  ?>
<?php require 'partials/header.php' ?>



<main>
   <?php 
   foreach($notes as $note) : ?>
  <li><a href="<?="/note?id=". $note['ID'] ?>" class="text-blue-500"><?= htmlspecialchars($note['body'])?></a> </li>
   <?php endforeach ?>

   <a href="/note-create"> <button class="text-blue-500 mt-3 hover:underline">Add Note +</button></a>
</main>

<?php require './partials/footer.php' ?>