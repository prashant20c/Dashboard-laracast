<?php require base_path('views/partials/doc.php') ?>



<?php require base_path('views/partials/nav.php')  ?>
<?php require base_path('views/partials/header.php') ?>


<main>
    <a href="/notes" class="text-blue-600 underline mb-4">go back</a>
    <div>
        <h2><?= htmlspecialchars($note['body']) ?></h2>
        <div>cereated date : <?= substr($note['created_at'], 0, 10)   ?></div>

    </div>
    <form class="pl-5" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name='id' value="<?= $note['ID']?>">
        <button class=" w-[60px] p-1 pl-1 border border-red-500  rounded-full hover:text-red-500 cursor-pointer hover:bg-red-100 hover:animate-bounce" >Delete</button>
    </form>


</main>
<?php require base_path('views/partials/footer.php') ?>