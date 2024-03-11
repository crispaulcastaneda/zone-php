<!-- Conditional: Repetition -->

<!-- 
  if...else
  is like you're asking something.
 -->
<?php 
  $name = "the notebook";
  $read = false;

  if ($read) {
    $message = "You have read $name.";
  } else {
    $message = "You haven't read $name.";
  }

  // NOTE
  // If the answer is ALWAYS YES, you must not declare the if...else method
  // If there's more than one condition, you must declare a conditional.
?>

<div class="conditionals">

 <!-- <?php echo $message ?> -->

  <!-- Another method to call the data -->
  <h1><?= $message; ?></h1>
  
</div>