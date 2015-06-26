<?php
include 'HelloWorldClass.php';
?>
<html>
    <body>

<?php

$myHello = new HelloWorld();

if (isset($_POST['name'])){

    $myHello->hello($_POST['name']);

}

?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" placeholder="Please enter name" name="name"  value=""/>
        <input type="submit" name="submit" value="Submit" /> 
        </form>
    </body>
</html>
