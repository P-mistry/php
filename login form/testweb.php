Hi <?php echo htmlspecialchars($_POST['name']); ?>.
you are <?php echo (int)$_POST['age']; ?> years old.
<br/>you believe in : <br/> <?php echo htmlspecialchars($_POST['tagline']);?>
