<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>
    <link href="<?php echo e(asset('/')); ?>admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>admin/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="<?php echo e(asset('/')); ?>admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script src="<?php echo e(asset('/')); ?>admin/ckeditor/ckeditor.js"></script>
    <script src="<?php echo e(asset('/')); ?>admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">

</head>

<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<?php echo $__env->make('admin.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('admin.includes.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </nav>

    <div id="page-wrapper">
       <?php echo $__env->yieldContent('body'); ?>
    </div>
</div>
<script src="<?php echo e(asset('/')); ?>admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/vendor/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/data/morris-data.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/dist/js/sb-admin-2.js"></script>

<script>
    $(document).ready(function () {
        $('#xyz').click(function () {
            $(this).text(' ');
        });
    });
</script>
<script>
</script>

</body>

</html>
