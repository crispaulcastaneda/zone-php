<?php
// Collection of Books
  $books = [
    "Hail Mary",
    "The Notebook",
    "Sample Book Vol.1",
    "Sample Book Vol.2",
  ];

  $assoc_book = [
    [
      'name' => 'The Notebook',
      'author' => 'Philip S.',
      'year' => 1996,
      'url' => 'http://example.com'
    ],
    [
      'name' => 'Oppenheimer',
      'author' => 'Samuel Etc.',
      'year' => '1920',
      'url' => 'http://example.com'
    ]
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

<section class="associative-array">
  <article> 
    <ul>
      <?php foreach($assoc_book as $assoc_books) : ?>
        <li><a href="<?php echo $assoc_books['url'] ?>"><?= $assoc_books['name']; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </article>
</section>