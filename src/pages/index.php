<?php require('01_init.php');

$_page = [
    'title' => "Template"
];

?>
<!doctype html>

<head>
    <?php require('02_header.php'); ?>
</head>

<body>
    <?php require('03_navigation.php'); ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div id="picklist-hoerbuecher"></div>
        </div>
    </div>
</body>

<?php require('04_scripts.php'); ?>
<script>
    $(document).on('app:ready', function() {
        var list = new Picklist("#picklist-hoerbuecher", "hoerbuecher", {

        });

    });
</script>

</html>