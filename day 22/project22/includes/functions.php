<?php
function e($string){
               return htmlspecialchars($string,ENT_QUOTES,'UTF_8');
               
                              
               }


function greetuser($name){
               return "Hello" .e($name)."!";
}

