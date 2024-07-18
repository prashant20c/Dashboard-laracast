<?php require base_path('views/partials/doc.php') ?>



<?php require base_path('views/partials/nav.php')  ?>
<?php require base_path('views/partials/header.php') ?>


<main>
   <?php 
   foreach($notes as $note) : ?>
  <li><a href="<?="/note?id=". $note['ID'] ?>" class="text-blue-500"><?= htmlspecialchars($note['body'])?></a> </li>
   <?php endforeach ?>

   <a href="/note-create"> <button class="text-blue-500 mt-3 hover:underline">Add Note +</button></a>
</main>

<?php require base_path('views/partials/footer.php') ?>