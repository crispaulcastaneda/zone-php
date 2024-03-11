<?php
// Collection of Books
  $books = [
    "Hail Mary",
    "The Notebook",
    "Sample Book Vol.1",
    "Sample Book Vol.2"
  ];
?>
<section class="array-section">
  <article>
    <ul>

      <!-- foreach($iterable_operation as $value) { statement } -->
      <?php foreach ($books as $book): ?>
        <li>
          <?= $book ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </article>
</section>