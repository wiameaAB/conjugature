<?php

    function conjuger($verbe, $mode, $temps){
        $result="";
        $ter=terminaison($verbe, $mode, $temps);
        $verbe=supp_er($_POST["verbe"]);
        for($i=0;$i<6;$i++){
            include("conDATA.php");
            $result.=$PrenomsPers[$i];
            $result.=" ";
            $result.=$verbe;
            $result.=$ter[$i];
            $result.="<br>";
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
        include("conDATA.php");
        if(is_1G($verbe)){
            if($mode=="indicatif"){
                if($temps=="present")return $Ter_Indicatif_Present_1G;
            }
        }
        /*à completer*/
    }

    function is_1G($verbe){
        $l=strlen($verbe); 
        if($verbe[$l-2]=="e" && $verbe[$l-1]=="r") return true;
        return false;
    }
   
?>