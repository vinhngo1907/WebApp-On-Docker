<html>
<!-- PHP on Kubernetes
     Use file_get_contents function to
     read entire file and assign return
     value to a string.  Then echo the
     string to the document in formatted
     form using pre tags.
-->

        <head>
                <title>PHP on Kubernetes through docker cloud</title>
                <style>
                body  { background-color: #707070;
                        color:            #600000; }
                h1    { font-family: Forte;
                        font-size: 400%; }
                pre   { font-family: Papyrus;
                        font-size: 90%; }
                </style>

        <body>
                <h1>PHP on Kubernetes</h1>
                <p>
                <?php
                        $temp = file_get_contents("example.txt");
                ?>
                </p>
                <pre>
                <?php
                        echo $temp;
                ?>
                </pre>
                <?php phpinfo(); ?>
        </body>
</html>