<?php if(count($errors) > 0) : ?>

<div>
    <?php foreach($errors as $error) : ?>

        <p><?php echo $error ?></p>

    <?php endforeach ?>
</div>
<?php endif ?>

<!--- This file will help us to fix any errors very easily --->