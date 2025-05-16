<?php require 'partials/head.php'; ?>
<?php require 'partials/nav.php'; ?>
<?php require 'partials/banner.php'; ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4 w-1/3">
                <class="px-4 py-5 sm:px-6">
                    <p class="mt-1 max-w-2xl text-sm text-gray-500"><a class="underline text-blue-500" href="note.php?id=<?= $note['id']; ?>"><?= $note['body']; ?></a>"</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php require 'partials/footer.php'; ?>