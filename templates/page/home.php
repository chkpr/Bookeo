        <?php require_once _ROOTPATH_.'\templates\header.php';  
        /* @var $book \App\Entity\Book */
        ?>
            
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/images/logo-bookeo.jpg" class="d-block mx-lg-auto img-fluid" alt="Logo Bookeo" width="400" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Ma petite bibliothèque numérique en ligne</h1>
                    <p class="lead">Voici Bookéo, un projet réalisé durant ma formation en développement web chez Studi.
                        Le but de ce projet était de coder une application destinée à organiser des livres en PHP Objet.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Plus d'infos</button>
                            
                        </div>
                </div>
            </div>        

            
            <div class="row text-center">
                <?php foreach ($books as $book) { ?>
                <div class="col-md-4 my-2 d-flex">
                    
                    <div class="card">
                        
                        <img src="uploads/books/<?=$book['image']?>" class="img-fluid border rounded-top" style="height: 30rem;" alt="Couverture du livre <?=$book['title']?>">
                        <div class="card-body">
                            <h5 class="card-title"><?=$book['title']?></h5>
                            <a href="?controller=book&action=show&id=<?=$book['id']?>" class="btn btn-primary">Découvrir</a>
                            
                        </div>
                    </div>
                    
                </div>
            <?php } ?>

            

            </div>

        <?php require_once _ROOTPATH_.'\templates\footer.php'; ?>