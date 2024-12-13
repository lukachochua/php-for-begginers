<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

<?php require 'partials/banner.php' ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
            <div class="h-96 rounded-lg">Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?> Welcome to the about page</div>
        </div>
        <!-- /End replace -->
    </div>
</main>

<?php require 'partials/footer.php' ?>