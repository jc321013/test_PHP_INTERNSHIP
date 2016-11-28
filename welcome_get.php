<html>
<body>

Welcome <?php echo $_POST[$name]; ?><br>
Your email address is: <?php echo $_POST[$email]; ?>
<?php //include("test_form.php"); ?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
</body>
</html>