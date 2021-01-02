<?php if(count($errors) > 0) :?>
    <div>
    <?php foreach ($errors as $error) : ?>
        <p><h6 style="color: red">
            <?php echo $error ?>
        </h6></p>
        <?php endforeach ?>
    </div>
<?php endif ?>