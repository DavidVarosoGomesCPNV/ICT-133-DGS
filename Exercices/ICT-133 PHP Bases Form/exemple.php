<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 16.12.2019
 * Time: 07:47
 */
?>
<html>
<body>
  <form method="POST" action="page.php">
      <input type="text" name="test">
      <input type="submit">
  </form>
  <?php
    if (isset($_POST['test']))
    {
        echo $_POST['test'];
        $result="bonjour ".$_POST['test'];
    }
    else
    {
        echo "bonjour";
        $result="personne";
    }


  ?>
    <a href="page.php?val=<?=$result;?>">test</a>
</body>
</html>