<?php require_once _ROOTPATH_.'\templates\header.php'; 
/* @var $book \App\Entity\Book */
?>

<div class="d-flex align-items-end">
<img src="/uploads/books/<?=$book->getImage();?>" class="me-5 border rounded" style="width: 18rem;" alt="couverture du livre">
<div class="mx-5">
<h1><?=$book->getTitle();?></h1>
<h2><?=$bookAuthor['first_name']?> <?=$bookAuthor['last_name']?></h2>
<h4><?=$bookType['name']?></h4>
<p><?=$book->getDescription();?></p>

</div>


</div>



<?php

require_once _ROOTPATH_.'\templates\footer.php'; ?> 