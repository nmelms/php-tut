<?php require 'partials/head.php' ?>
<?php require 'partials/nav.php' ?>
<?php require 'partials/banner.php' ?>


  <main>
    <a href="/notes">
      go back >

    </a>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?= $note['body'] ?>
    </div>
  </main>

<?php require 'partials/footer.php' ?>
