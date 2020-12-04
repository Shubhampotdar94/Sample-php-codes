<?php

$servers = readline("Enter servers");

$minutes = explode(" ",readline());

for($i=0;$i<sizeof($minutes);$i++)
{
    if($minutes[$i] < 50)
    {
        $servers = floor($servers / 2);
    }
    else{
        $servers = 2*$servers + 1;
    }
}

echo $servers;

?>
