<?php
    include("conDATA.php");

    function conjuger($verbe, $mode, $temps){
        $result="";
        
        $verbe=supp_er($_POST["verbe"]);
        $ter=terminaison($verbe, $mode, $temps);
        for($i=0;i<6;$i++){
            $result+=$PronomPers[$i];
            $result+=" ";
            $result+=$verb;
            $result+=$ter[i];
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
        if(is_1G($verbe)){
            if($mode=="indicatif"){
                if($temps=="present") return $Ter_Indicatif_Present_1G;
            }
        }
        /*à completer*/
    }

    function is_1G($verbe){
        $l=strlen($verbe);
        if($verbe[$l-3]=="e" $verbe[$l-2]=="r") return true;
        return false;
    }
   
?>