<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
        <script defer src="https://pyscript.net/alpha/pyscript.js"></script>
        <py-env>
            - numpy
            - matplotlib
        </py-env>
    </head>
    <body style="margin: 0px 25px;">
            <pre>
            <?php include 'pyscripts/hello-world.py.php' ?>

            <p>
                <b>Today is</b>
                <u><label id='today'></label></u>
            </p>

            <div id="pi" class="alert alert-primary"></div>
            <?php include 'pyscripts/today.py.php' ?>

            <div id="version"></div>
            <?php include 'pyscripts/version.py.php' ?>

            <div id="bar-chart"></div>
            <?php include 'pyscripts/bar-chart.py.php' ?>
        </pre>
    </body>
</html>