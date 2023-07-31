<?php

    $components = SpeedyGonzales::getMarvin()->components;
    sort($components);

?>

<section class="theme-section-middle">

    <div class="container theme-container-lg">

        <div class="row mb-3">
            <div class="pages-home--version col col-12">
                Versão: <?= SpeedyGonzales::getVersion() ?> - Componentes: <?= SpeedyGonzales::getTotalComponents() ?>
            </div>
        </div>

        <div class="pages-home--items row gy-3">

            <?php if($components) : ?>
            <?php foreach($components as $component) : ?>
            <div class="pages-home--items-item col col-12">
                <a target="_blank" class="theme-text-middle" href="<?= SpeedyGonzales::linkComponent($component->name, $component->template) ?>"><?= $component->name ?></a>
            </div>
            <?php endforeach ?>
            <?php endif ?>

        </div>

    </div>

</section>