</body>
    <script src="js/jquery.min.js"></script>
    <?php
    if(strstr($_SERVER['REQUEST_URI'], 'index.php') !== false || strstr($_SERVER['REQUEST_URI'], 'php') === false) {
    ?>
            <script src="js/login_script.js"></script>
    <?php
    }
    ?>
</html>
