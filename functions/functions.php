<?php

 function validate($input){

//        $whitespace = ctype_space($data);
//        if ($whitespace = true){
//            
//        }
        
        //preg match
//        if (preg_match('/^[A-Za-z0-9_-]*$/', $yourString)) {
//        }       
        
     
       //Strip whitespace (or other characters) from the beginning and end of a string
       $input = trim($input);

       //Un-quotes a quoted string
       $input = stripslashes($input);

       //Convert special characters to HTML entities
       $input = htmlspecialchars($input);

       return $data;

    }
?>

