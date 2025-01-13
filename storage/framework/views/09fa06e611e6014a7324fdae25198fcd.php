<h1>Új Kategória</h1>

<form action="<?php echo e(route('categories.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <fieldset>
        <label for="name">Kategória név</label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form><?php /**PATH D:\Gábor\Iskola\12.Osztály\Webprogramozás\Laravel_gyorstalpalo\resources\views/categories/create.blade.php ENDPATH**/ ?>