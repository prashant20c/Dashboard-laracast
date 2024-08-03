<?php require base_path('views/partials/doc.php') ?>



<?php require base_path('views/partials/nav.php')  ?>
<?php require base_path('views/partials/header.php') ?>


<main class="flex flex-row ">
    <a href="/notes" class=" pl-3 text-blue-600 underline mb-4">go back</a>
    <div class="ml-5 mt-5">
        <h2><?= htmlspecialchars($note['body']) ?></h2>
        <div>cereated date : <?= substr($note['created_at'], 0, 10)   ?></div>

    </div>
    <form class="ml-5" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name='id' value="<?= $note['ID'] ?>">
        <button class="px-4  mt-3 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Delete </button>
    </form>
    <a href="/note/edit?id=<?= $note['ID'] ?>"><button class="px-4 ml-5  mt-3 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Edit </button></a>



</main>
<?php require base_path('views/partials/footer.php') ?>