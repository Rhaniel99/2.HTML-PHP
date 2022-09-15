<?php
 function fibonacci ($i){
       if($i < 2)
                return $i;
            else
                return fibonacci($i - 1) + fibonacci($i - 2);
}

for($i = 0; $i <= 20; $i++){
        echo fibonacci($i) . "<br>";
}
?>