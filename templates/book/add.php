<?php

require_once _ROOTPATH_.'\templates\header.php'; ?>

<h1>Gérer la bibliothèque</h1>
<h2>Ajouter un livre</h2>

<form method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Titre</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    
    <div class="mb-3">
        <select class="form-select" aria-label="Default select example" id="author_id" name="author_id">
            <option selected>Auteur</option>
            <?php foreach ($authors as $author) { ?>
            <option value="<?=$author['id']?>"><?=$author['first_name']?> <?=$author['last_name']?></option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <select class="form-select" aria-label="Default select example" id="type_id" name="type_id">
            <option selected>Catégorie</option>
            <?php foreach ($types as $type) { ?>
            <option value="<?=$type['id']?>"><?=$type['name']?></option>
            <?php } ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input class="form-control" type="file" id="image" name="image">
    </div>

    
    <input type="submit" name="addBook" class="btn btn-primary" value="Ajouter">

</form>

<?php

require_once _ROOTPATH_.'\templates\footer.php'; ?>