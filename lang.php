


              
<?php

if (function_exists('pll_current_language')) {
    $current_language = pll_current_language(); 
} elseif (defined('ICL_LANGUAGE_CODE')) {
    $current_language = ICL_LANGUAGE_CODE; 
} else {
    $current_language = ''; 
}

if ($current_language == 'en') { 
    ?>
    
    Ijas
  
    <?php
} elseif ($current_language == 'ar') { 
    ?>
   Ijas
    <?php
}

?>



