<?php include('../../../_inc/settings.php');?>

<?php include('../../../_inc/header.php'); ?>

<body id="changelog">

    <?php include('../../../_inc/navigation.php'); ?>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="tiny">
                    <h1>Gridder <?php echo $latestBuild; ?> Changelog</h1>
                    <h3>Keep up with the latest changes to Gridder.</h3>
                    <p>Download the latest version <a href="/documentation/">here</a>.</p>
                </div>
            </div>
        </div>
    </header>

    <main class="container">

        <div class="row">
            <div class="tiny">

            <h2>Version 2.2.0 <span class="tag">latest</span></h2>
            <p><span class="tag success">NEW</span> Add masonry grid option.</p>
            <p><span class="tag info">IMPROVEMENT</span> Optimize readability of src files for better costumization.</p>
            <p><span class="tag info">IMPROVEMENT</span> Change the default "huge" breakpoint from 125em to 122em.</p>
            <p><span class="tag error">FIX</span> Fix bug where the eleventh column wouldn't take up the correct amount of space on some breakpoints.</p>
            <hr>

            <h2>Version 2.1.0</h2>
            <p><span class="tag success">NEW</span> New huge breakpoint to support wide monitors.</p>
            <hr>

            <h2>Version 2.0.0</h2>
            <p><span class="tag success">NEW</span> New base flexgrid layout containing 4 breakpoints.</p>

            </div>
        </div>

    </main>

    <?php include('../../../_inc/footer.php'); ?>
<?php include('../../../_inc/scripts.php'); ?>