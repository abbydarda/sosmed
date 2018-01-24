<?php $__container->servers(['web' => ['ubuntu@52.74.216.91']]); ?>
 <?php require_once('~/homies/amazon-lightsail.pem'); ?>
<?php $__container->startTask('foo', ['on' => 'web']); ?>
    ls -la
<?php $__container->endTask(); ?>
