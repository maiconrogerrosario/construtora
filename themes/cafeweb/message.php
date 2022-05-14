<?php $v->layout("_theme"); ?>

<article class="optin_page">
    <div class="container content">
        <div class="optin_page_content">
            <img alt="<?= $data->title; ?>" title="<?= $data->title; ?>" src="<?= $data->image; ?>"/>
            <h1><?= $data->title; ?></h1>
            <p><?= $data->desc1; ?></p>
            <p><?= $data->desc2; ?></p>
            <p><?= $data->desc3; ?></p>
        </div>
    </div>
</article>





<?php if (!empty($track)): ?>
    <?php $v->start("scripts"); ?>
    <script>
        fbq('track', '<?= $track->fb;?>');
        gtag('event', 'conversion', {'send_to': '<?= $track->aw;?>'});
    </script>
    <?php $v->end(); ?>
<?php endif; ?>
