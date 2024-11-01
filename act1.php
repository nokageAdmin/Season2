<?php


if(isset($_POST["btn_1"])){


        echo "1th button";

        
}


if(isset($_POST["btn_2"])){


        echo "2th button";

        
}

if(isset($_POST["btn_3"])){


        echo "Arriba";

        
}

if(isset($_POST["btn_4"])){


        echo "SCST";

        
}

?>


<form method ="POST">



<input type ="submit" name ="btn_1" value="1st Button">

<input type ="submit" name ="btn_2" value="2nd Button">

<input type ="submit" name ="btn_3" value="Press 1">

<input type ="submit" name ="btn_4" value="Press 2">


</form>
