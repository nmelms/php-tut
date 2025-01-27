<?php require 'views/partials/head.php' ?>
<?php require 'views/partials/nav.php' ?>
<?php require 'views/partials/banner.php' ?>


  <main>
    <a href="/notes">
      go back >

    </a>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <?= htmlspecialchars($note['body'] )?>
    </div>
  </main>

<?php require 'views/partials/footer.php' ?>
