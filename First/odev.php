
<?php 
    error_reporting(E_ALL);

    function UcgenCiz($param){
        $j = 0;
       while( $j < $param){

           for($i=0; $i<$j;){
                print "0";
                $i++;
           }
           print "<br>";
           $j++;
       }
    }

    UcgenCiz(5)
    ?>