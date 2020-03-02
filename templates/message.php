<div>
    <h1><?= $title ?? 'No title' ?></h1>
    <p><?= $message  ?? 'No message' ?></p>
<!--  <?php //if(isset($additional)):?>  -->
    <!--    <small><?= isset($additional) ? $additional: '' ?></small>  -->
    <small><?= $additional?? '' ?></small>
<!-- <?php //endif; ?>  -->
</div>