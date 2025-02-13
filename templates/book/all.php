<?php require_once _ROOTPATH_.'\templates\header.php'; 
/* @var $book \App\Entity\Book */
?>

<div class="container d-flex flex-column align-items-center">

    <h1 class="py-5 my-5">Tous les livres</h1>
    <div class="row">
                <?php foreach ($books as $book) { ?>
                <div class="col-md-3 my-2">
                    
                    <div class="card">
                        
                        <img src="uploads/books/<?=$book['image']?>" class="img-fluid border rounded-top"  alt="Couverture du livre <?=$book['title']?>">
                        <div class="card-body">
                            <h4 class="card-title"><?=$book['title']?></h4>
                            <h5 class=""><?=$book['author_first_name']?> <?=$book['author_last_name']?></h5>
                            <h6 class="fw-lighter"><?=$book['type_name']?></h6>
                            <a href="?controller=book&action=show&id=<?=$book['id']?>" class="btn btn-primary">Découvrir</a>
                            
                        </div>
                    </div>
                    
                </div>
            <?php } ?>

</div>

<?php

require_once _ROOTPATH_.'\templates\footer.php'; ?> 