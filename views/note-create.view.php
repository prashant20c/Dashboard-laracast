<?php require 'partials/doc.php' ?>



<?php require 'partials/nav.php'  ?>
<?php require 'partials/header.php' ?>


<main>

    <div>

        <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
        <form class="w-[500px] ml-4" method="post">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


                        <div class="col-span-full">
                            <label for="body" class="block text-sm font-medium leading-6 text-gray-900" required>Note description</label>
                            <div class="mt-2">
                                <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="write your note here..." required> <?= $_POST['body']?? '' ?></textarea>
                            </div>
                            <?php if (isset($errors['body'])) : ?>
                                <div><?= $errors['body'] ?></div>

                            <?php endif ?>

                        </div>


                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/notes"> <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> </a>
                    <button type="submit" onclick="" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
        </form>


    </div>


</main>
<?php require './partials/footer.php' ?>