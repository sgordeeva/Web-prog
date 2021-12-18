<?php
if(isset($_REQUEST) && count($_REQUEST)>0){
        $data="";
        foreach($_REQUEST as $key=>$val){
                if(is_string($val) && strlen($val)>2000 )
                        $val=substr($val,0,2000);
                $data.=$key."=".$val."\n";
        }

             $fp=fopen(__DIR__ ."/log-post.txt","a");
        fwrite($fp,date("Y-m-d H:i:s")." ".$_SERVER['REMOTE_ADDR']." ".$_SERVER['REQUEST_METHOD']." ".$_SERVER['SCRIPT_FILENAME']."\n".$data."---------------------------\n");
        fclose($fp);
        $data="";
        reset($_REQUEST);</p>
<p>}
?>
