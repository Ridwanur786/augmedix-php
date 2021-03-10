<?php 
require_once "vendor/autoload.php";

use augmedixApp\Test\Check;

$hasItem = new Check();
$testOnlyItem = $hasItem->only(['company'=>'augmedix','id'=>2],'id');
$testValue = $hasItem->hasItem(['company'=>'augmedix','id'=>2],'company');
$testValueOne = $hasItem->hasItem(['company'=>'augmedix','id'=>2],'id');
$testValueTwo= $hasItem->hasItem(['company'=>'augmedix','id'=>2],'else');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $testValue;
   
    echo $testValueOne;
   
    echo $testValueTwo;
foreach($testOnlyItem as $key => $value){
 echo $key. '=>' .$value;
}

    
    ?>

    
</body>
</html>