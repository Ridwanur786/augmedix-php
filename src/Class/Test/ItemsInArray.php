<?php 
namespace augmedixApp\Test;


        class ItemsInArray
        {
            public $array = array();

            public $key = '';

            public function hasItem($array,$key){

                if(array_key_exists($key, $array)){
                
                echo "key is exist";

                    echo "<br>";

                } else{
                    
                    echo "key doesn't exist";
                    
                    echo "<br>";
                }
            
            }

            public function only($array,$key){
        
                    return array_diff_key($array, array_flip((array) $key));  
                }
                
        }

