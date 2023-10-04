<?php
function my_get_args(){;
$x = func_num_args();
$y = func_get_args();
$a=[""];
for ($i = 0; $x>0; $x=$x-1){
        $a=[$y($i)];
		$i=$i+1
}
return($a);
}
print_r(my_get_args("Bonjour","ca va", "wsh"));