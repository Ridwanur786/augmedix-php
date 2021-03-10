<?php 
namespace augmedixApp\Test;


class Check
{
    public $array = array();
    public $key = '';
    public function hasItem($array,$key){
        if(array_key_exists($key, $array)){
           // $this->array = $array[$key];
           // return true;
           echo "key is exist";
            echo "<br>";
        }else{
            //return false;
            echo "key doesn't exist";
             echo "<br>";
        }
       // return $this;
    }

    public function only($array,$key){
      //  if(array_key_exists($key, $array)){
           // $this->array = $array[$key];
           // unset($array[$key]);
          //  return $this->array;
           //echo "key is exist";
            //echo "<br>";
             return array_diff_key($array, array_flip((array) $key));  
        }
        
    }

