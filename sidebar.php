<?php 
    if(is_home()){
         dynamic_sidebar('month-sidebar');
        dynamic_sidebar('category-sidebar');
    } else{
       dynamic_sidebar('home-sidebar');
    }
    
    
?>