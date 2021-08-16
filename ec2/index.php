#!/usr/bin/php
<?php
$instance_id = file_get_contents("http://instance-data/latest/meta-data/instance-id");
$ipv4_address = file_get_contents("http://169.254.169.254/latest/meta-data/public-ipv4");
?>
<html>
    <head>
        <title>EC2 testing</title>
    </head>
    <body>
        <h2>Welcome from EC2 testing webpage.</h2>
        <p>
            This message is reponse from...
        </p>
        <pre>
            Instance Id: <?php echo $instance_id; ?>
            IPv4 address: <?php echo $ipv4_address; ?>
        </pre>
    </body>
</html>
