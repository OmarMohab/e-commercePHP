<?php require base_path('views/partials/header.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a class="mb-6 text-blue-500 underline" href="/notes">Back to Notes</a>
        <p><?= htmlspecialchars($note['body']) ?></p>

        <footer class="mt-6">
            <a href="/notes/edit?id=<?= $note['id'] ?>" class="mt-6 text-gray-500 border border-current px-3 py-1 rounded">Edit</a>
        </footer>
        
        <form method="POST" class="mt-6">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-red-500 text-sm">Delete</button>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>