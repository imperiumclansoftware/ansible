<html>
    <head>
        <title>Web Server</title>
    </head>
    <body>
        <h1>Welcome to this webserver</h1>
        <p>
            This webserver ({{ ansible_host }}) was installed automaticly by Ansible.
            with php version <?php echo(phpversion()); ?>
        </p>
        <p>
            <?php
                phpinfo(INFO_MODULES);
            ?>
        </p>
    </body>
</html>