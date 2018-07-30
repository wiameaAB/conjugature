<?php
    include("conDATA.php");

    function conjuger($verbe, $mode, $temps){
        $result="";
        
        $verbe=supp_er($_POST["verbe"]);

        for($i=0;i<6;i++){
            $result+=$PronomPers[i];
            $result+=" ";
            $result+=verb;
            $result+=ter[i];
            $result+="<br>";
        }

        echo $result;
    }

    function supp_er($chaine){
        $i=0; $nchaine="";
        while($i<strlen($chaine)-2){
            $nchaine[$i]=$chaine[$i];
            $i++;
        }
        return $nchaine;
    }

    function terminaison($verbe, $mode, $temps){
        if($)
    }

   
?>