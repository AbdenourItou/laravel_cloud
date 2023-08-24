<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'=>'', // will be use for "id", "name", and "for" attributes, and to dynamically control validity and retreive old values
    'class' => "", // will be passed as the outer div`s class
    'placeholder' => "",
    'label_class' => "", // will be added to the label`s class
    'input_class' => "", //  will be added to the label`s class
    'table_data' => [],    // pass old table data to populate with data from the database (when updating)
    'de' => '',  // 🔴 DEPRICATED, use suffix instead // ex: 'de l'employé', 'de l'entreprise', 'de la resource'
    'prefix' => '',
    'suffix' => '',
    'readonly' => '',
    'no_label' => false,
    'end_badge' => '', // shows badge at the end like here https://getbootstrap.com/docs/5.0/forms/input-group/
    // use the slot for the label
    // use the  @slot('footer', null, [])  for elements below the input tag like valid and invalid feedback tags
    // any other attribute will be passed to the input tag
    /**
     * there are two types :
     * - 📄  input with "type" (text, number, tel, ...)
     * - 🔍 input with ":list = '$array'", will become a searchable choice input
    * > see SNIPPETS below
    */
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'=>'', // will be use for "id", "name", and "for" attributes, and to dynamically control validity and retreive old values
    'class' => "", // will be passed as the outer div`s class
    'placeholder' => "",
    'label_class' => "", // will be added to the label`s class
    'input_class' => "", //  will be added to the label`s class
    'table_data' => [],    // pass old table data to populate with data from the database (when updating)
    'de' => '',  // 🔴 DEPRICATED, use suffix instead // ex: 'de l'employé', 'de l'entreprise', 'de la resource'
    'prefix' => '',
    'suffix' => '',
    'readonly' => '',
    'no_label' => false,
    'end_badge' => '', // shows badge at the end like here https://getbootstrap.com/docs/5.0/forms/input-group/
    // use the slot for the label
    // use the  @slot('footer', null, [])  for elements below the input tag like valid and invalid feedback tags
    // any other attribute will be passed to the input tag
    /**
     * there are two types :
     * - 📄  input with "type" (text, number, tel, ...)
     * - 🔍 input with ":list = '$array'", will become a searchable choice input
    * > see SNIPPETS below
    */
]); ?>
<?php foreach (array_filter(([
    'name'=>'', // will be use for "id", "name", and "for" attributes, and to dynamically control validity and retreive old values
    'class' => "", // will be passed as the outer div`s class
    'placeholder' => "",
    'label_class' => "", // will be added to the label`s class
    'input_class' => "", //  will be added to the label`s class
    'table_data' => [],    // pass old table data to populate with data from the database (when updating)
    'de' => '',  // 🔴 DEPRICATED, use suffix instead // ex: 'de l'employé', 'de l'entreprise', 'de la resource'
    'prefix' => '',
    'suffix' => '',
    'readonly' => '',
    'no_label' => false,
    'end_badge' => '', // shows badge at the end like here https://getbootstrap.com/docs/5.0/forms/input-group/
    // use the slot for the label
    // use the  @slot('footer', null, [])  for elements below the input tag like valid and invalid feedback tags
    // any other attribute will be passed to the input tag
    /**
     * there are two types :
     * - 📄  input with "type" (text, number, tel, ...)
     * - 🔍 input with ":list = '$array'", will become a searchable choice input
    * > see SNIPPETS below
    */
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo e($class); ?>">
    <?php
        // retreive old value from previous (incomplete) form submit
        $old_value = old($name);
        // if there's no old value, get the data from the table  (if provided)
        if($old_value == ''){
            if (array_key_exists($name, $table_data)) {
                $old_value = $table_data[$name];
            }
        }

        if ($de){
            if ($suffix)
                throw new \Exception("You can't use 'de' and 'suffix' params at the same time ! use suffix only");
            $suffix = $de;
        }
        // use translations if placeholder and/or label aren't given
        if($placeholder == '')
            $placeholder = trim($prefix.' '.__('validation.attributes.'.$name).' '.$suffix);
    ?>
    <?php if(!$no_label): ?>
    <label for="<?php echo e($name); ?>" class='form-label <?php echo e($label_class); ?>'>
        <?php if($slot->isNotEmpty()): ?>
            <?php echo e($slot); ?>

        <?php else: ?>
            <?php echo e(__('validation.attributes.'.$name)); ?>

        <?php endif; ?>
    </label>
    <?php endif; ?>
    <div <?php if($end_badge): ?> class="input-group has-validation" <?php endif; ?>>
        <input
            name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder); ?>"
            class="form-control <?php echo e(input_validity($errors, $name)); ?> <?php echo e($input_class); ?>"
            value="<?php echo e($old_value); ?>"
            <?php if($attributes->has('list')): ?>
                list="list_<?php echo e($name); ?>"
            <?php endif; ?>
            <?php echo e($attributes->whereDoesntStartWith('list')); ?>

            <?php echo e($readonly); ?>

            <?php if($readonly): ?>
                style="background: #f0f0f0"
            <?php endif; ?>
        >
        <?php if($end_badge): ?>
            <span class="input-group-text" id="<?php echo e($name); ?>-badge"><?php echo e($end_badge); ?></span>
        <?php endif; ?>
        <?php if($attributes->has('list')): ?>
            <datalist id="list_<?php echo e($name); ?>">
                <?php $__currentLoopData = $attributes['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($x); ?>">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </datalist>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.invalid-feedback','data' => ['name' => ''.e($name).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('invalid-feedback'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($name).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        <?php if(isset($footer)): ?>
            <?php echo e($footer); ?>

        <?php endif; ?>
    </div>
</div>


<?php /**PATH D:\Cloud\my-laravel-app\resources\views/components/input.blade.php ENDPATH**/ ?>