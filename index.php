<?php 
    require_once "vendor/autoload.php";

    use augmedixApp\Test\ItemsInArray;

    /* Initiate class */

    $hasItem = new ItemsInArray();

    /*  Return boolean  */

    $testOnlyItem = $hasItem->only(['company'=>'augmedix','id'=>2],'id');

    $testOnlyItemOne= $hasItem->only(['company'=>'augmedix','id'=>2],'company');

    $testOnlyItemTwo = $hasItem->only(['company'=>'augmedix','id'=>2],['company','id']);

    /* Return Exculded key value pair */

    $testValue = $hasItem->hasItem(['company'=>'augmedix','id'=>2],'company');

    $testValueOne = $hasItem->hasItem(['company'=>'augmedix','id'=>2],'id');

    $testValueTwo= $hasItem->hasItem(['company'=>'augmedix','id'=>2],'else');

    /* Display the boolean */

    echo $testValue;
    
    echo $testValueOne;
    
    echo $testValueTwo;

    /* Display the Excluded item in Array */

    foreach($testOnlyItem as $key => $value){

                echo $key. '=>' .$value;
                echo "<br>";

    }

    foreach($testOnlyItemOne as $key => $value){

                echo $key. '=>' .$value;
                echo "<br>";

    }

    foreach($testOnlyItemTwo as $key => $value){

                echo $key. '=>' .$value;

    }

?>
