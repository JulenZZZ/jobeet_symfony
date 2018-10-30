<?php use_stylesheet('job.css') ?>
<?php use_helper('Text') ?>

<?php slot('title') ?>
<?php end_slot(); ?>

<div id="job">
    <?php foreach($job as $j){ ?>
    <h1><?php echo $j->getCompany() ?></h1>
    <h2><?php echo $j->getLocation() ?></h2>
    <h3>
        <?php echo $j->getPosition() ?>
        <small> - <?php echo $j->getType() ?></small>
    </h3>

    <?php if ($j->getLogo()): ?>
        <div class="logo">
            <a href="<?php echo $j->getUrl() ?>">
                <img src="/uploads/jobs/<?php echo $j->getLogo() ?>" alt="<?php echo $j->getCompany() ?> logo" />
                     alt="<?php echo $j->getCompany() ?> logo" />
            </a>
        </div>
    <?php endif; ?>

    <div class="description">
        <?php echo simple_format_text($j->getDescription()) ?>
    </div>

    <h4>How to apply?</h4>

    <p class="how_to_apply"><?php echo $j->getHowToApply() ?></p>

    <div class="meta">
        <small>posted on <?php echo $j->getDateTimeObject('created_at')->format('m/d/Y') ?></small>
    </div>

    <div style="padding: 20px 0">
        <a href="<?php echo url_for('job/edit?id='.$j->getId()) ?>">
            Edit
            </a>
        <br>
        <a href="<?php echo url_for('@contacto') ?>">
            Formulario de Contacto
        </a>
    </div>
    <?php }?>
</div>