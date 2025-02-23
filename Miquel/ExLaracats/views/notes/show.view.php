<?php view('partials/head.php') ?>
<?php view('partials/nav.php') ?>
<?php view('partials/banner.php') ?>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes" class="text-blue-500 hover:underline"> Go back ...</a>
            </p>
            <p><?= htmlspecialchars($note['body']) ?></p>


            <footer class="mt-8">
                <a href="/notes/edit?id=<?= $note['id']?>"
                   class="rounded-md bg-gray-500 px-3 py-2
                   text-sm font-semibold text-white
                   shadow-sm hover:bg-indigo-500
                   focus-visible:outline focus-visible:outline-2
                   focus-visible:outline-offset-2 focus-visible:outline-indigo-600">EDIT</a>
            </footer>
        </div>
    </main>
<?php view('partials/footer.php'); ?>