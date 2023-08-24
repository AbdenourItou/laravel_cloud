<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel='stylesheet'>
    <link href="<?php echo e(asset('css/form2.css')); ?>" rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <title>Form </title>


</head>
<body>

<section class="h-100 bg-dark">
  <form action="<?php echo e(route("validation",$var)); ?>" method="POST">
      <?php echo csrf_field(); ?>

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">

                            <img src="<?php echo e(asset('images/3T2.jpg')); ?>"
                                 alt="Sample photo" class="img-fluid"
                                 style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase">Forumulaire d'inscription </h3>

                                <div class="row">

                                    <div class="col-md-6 mb-4">
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'nom','class' => 'form-outline','inputClass' => 'form-control form-control-lg','labelClass' => 'form-label','placeholder' => ' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'nom','class' => 'form-outline','input_class' => 'form-control form-control-lg','label_class' => 'form-label','placeholder' => ' ']); ?>
                                            Nom
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    <!--
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1m" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m">Nom</label>
                                        </div>
                                        -->
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <!--
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1n" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1n">Prenom</label>
                                        </div>
                                        -->
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'prenom','class' => 'form-outline','inputClass' => 'form-control form-control-lg','labelClass' => 'form-label','placeholder' => ' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'prenom','class' => 'form-outline','input_class' => 'form-control form-control-lg','label_class' => 'form-label','placeholder' => ' ']); ?>
                                            Prenom
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'nom_entreprise','class' => 'form-outline','inputClass' => 'form-control form-control-lg','labelClass' => 'form-label','placeholder' => ' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'nom_entreprise','class' => 'form-outline','input_class' => 'form-control form-control-lg','label_class' => 'form-label','placeholder' => ' ']); ?>
                                            Nom de l'entreprise
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                        <!--
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example1m1">Nom de l'entreprise</label>
                                        </div>
                                        -->
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'num_tel','class' => 'form-outline','inputClass' => 'form-control form-control-lg','labelClass' => 'form-label','placeholder' => ' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'num_tel','class' => 'form-outline','input_class' => 'form-control form-control-lg','label_class' => 'form-label','placeholder' => ' ']); ?>
                                            Numero de telephone
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                        <!--

                                        <div class="form-outline mb-4">
                                            <input type="tel" id="form3Example8" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example8">Numero de telephone</label>
                                        </div>
                                        -->
                                    </div>
                                </div>

                                <!--

                                <div class="form-outline">
                                    <input type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1n1">Adresse</label>
                                </div>
                                  -->
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'adresse','class' => 'form-outline','inputClass' => 'form-control form-control-lg','labelClass' => 'form-label','placeholder' => ' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'adresse','class' => 'form-outline','input_class' => 'form-control form-control-lg','label_class' => 'form-label','placeholder' => ' ']); ?>
                                    Adresse
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                <!--
                                <div class="form-outline mb-4">
                                    <input type="email" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Adresse Email</label>
                                </div>
                                 -->
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'adresse_email','class' => 'form-outline','inputClass' => 'form-control form-control-lg','labelClass' => 'form-label','placeholder' => ' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'adresse_email','class' => 'form-outline','input_class' => 'form-control form-control-lg','label_class' => 'form-label','placeholder' => ' ']); ?>
                                    Adresse Email
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                <!--
                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example8" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example8">Commentaire</label>
                                </div>
-->
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input','data' => ['name' => 'commentaire','class' => 'form-outline','inputClass' => 'form-control form-control-lg','labelClass' => 'form-label','placeholder' => ' ']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'commentaire','class' => 'form-outline','input_class' => 'form-control form-control-lg','label_class' => 'form-label','placeholder' => ' ']); ?>
                                    Commentaire
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                    <h6 class="mb-0 me-4">Quantite d'abonnement: </h6>


                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="vpsOption" value="option1" disabled/>
                                        <label class="form-check-label" for="vpsOption">VPS ou Serveur dédié</label>
                                    </div>

                                    <div class="form-check form-check-inline mb-0 me-4">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sharedOption" value="option2" />
                                        <label class="form-check-label" for="sharedOption">Hébergement mutualisé</label>
                                    </div>

                                </div>

                                <div class="container mt-5">
                                    <div class="input-group">
                                        <span class="input-group-text"> Mois :</span>
                                        <?php if($var=="vps"|| $var=="serveurs"): ?>
                                        <input type="number" class="form-control" id="quantity1" name="quantity1" min="0" max="100" step="1">
                                        <?php endif; ?>
                                        <button class="btn btn-outline-secondary" type="button" id="increment1">+</button>
                                        <button class="btn btn-outline-secondary" type="button" id="decrement1">-</button>
                                    </div>
                                </div>

                                <div class="container mt-5">
                                    <div class="input-group">
                                        <span class="input-group-text">Annee:</span>
                                        <?php if($var=="small"|| $var=="large" || $var=="medium"): ?>



                                        <input type="number" class="form-control" id="quantity2" name="quantity2" min="0" max="100" step="1">

                                        <?php endif; ?>
                                        <button class="btn btn-outline-secondary" type="button" id="increment2">+</button>
                                        <button class="btn btn-outline-secondary" type="button" id="decrement2">-</button>
                                    </div>
                                </div>
                                <br>
                                <div class="row">


                                </div>



                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example9">Prix Total HT</label>
                                    <div class="input-group">
                                        <input type="number" id="form3Example9" class="form-control form-control-lg" step="0.01">
                                        <span class="input-group-text">DA</span>
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example90">Prix Total HTC</label>
                                    <div class="input-group">
                                        <input type="number" id="form3Example90" class="form-control form-control-lg" step="0.01">
                                        <span class="input-group-text">DA</span>
                                    </div>
                                </div>


                                <div class="d-flex justify-content-end pt-3">
                                    <button type="reset" class="btn btn-light btn-lg">rénitialiser</button>
                                    <button type="submit" class="btn btn-warning btn-lg ms-2">Enregistrer</button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </form>
</section>
<script>
    document.getElementById('increment1').addEventListener('click', function() {
        document.getElementById('quantity1').stepUp();
    });

    document.getElementById('decrement1').addEventListener('click', function() {
        document.getElementById('quantity1').stepDown();
    });

    document.getElementById('increment2').addEventListener('click', function() {
        document.getElementById('quantity2').stepUp();
    });

    document.getElementById('decrement2').addEventListener('click', function() {
        document.getElementById('quantity2').stepDown();
    });

    const vpsOption ="<?php echo e($var); ?>"; //small or large or medium or vps or serveurs
    //const sharedOption = document.getElementById('sharedOption');
    const moisInput = document.getElementById('quantity1');
    const anneeInput = document.getElementById('quantity2');
    const prixTotalHtInput = document.getElementById('form3Example9');
    const prixTotalHtcInput = document.getElementById('form3Example90');
    const taux = 1.20; // Example tax rate, change it to your actual value




    function updatePrixTotals() {
        const moisValue = parseFloat(moisInput.value) || 0;
        const anneeValue = parseFloat(anneeInput.value) || 0;

        if (moisValue > 0) {
            const prixTotalHt = moisValue*3999;
            const prixTotalHtc =prixTotalHt* taux;
            prixTotalHtInput.value = prixTotalHt.toFixed(2);
            prixTotalHtcInput.value = prixTotalHtc.toFixed(2);
        } else if (anneeValue > 0) {
            const prixTotalHt = anneeValue * 4999;
            const prixTotalHtc = prixTotalHt * taux;
            prixTotalHtInput.value = prixTotalHt.toFixed(2);
            prixTotalHtcInput.value = prixTotalHtc.toFixed(2);
        } else {
            prixTotalHtInput.value = '';
            prixTotalHtcInput.value = '';
        }
    }


    if (vpsOption=="small"|| vpsOption=="medium"|| vpsOption=="large") {
        moisInput.style.display = 'block';
        anneeInput.style.display = 'none';
        updatePrixTotals();
    }
    if (vpsOption=="vps"|| vpsOption=="serveurs") {
        moisInput.style.display = 'none';
        anneeInput.style.display = 'block';
        updatePrixTotals();
    }
    moisInput.addEventListener('input', updatePrixTotals);
    anneeInput.addEventListener('input', updatePrixTotals);

    vpsOption.addEventListener('change', function() {
        if (vpsOption.checked) {
            moisInput.style.display = 'block';
            anneeInput.style.display = 'none';
            updatePrixTotals();
        }


    });
    updatePrixTotals();








</script>
</body>
</html>
<?php /**PATH D:\Cloud\app\my-laravel-app\resources\views/form2.blade.php ENDPATH**/ ?>