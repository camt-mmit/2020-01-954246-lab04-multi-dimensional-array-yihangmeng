<?php

echo"Input data (floor n): ";
fscanf(STDIN,"%d %d",$floor,$n);
$building =[]; 
for($k=0;$k<$floor;$k++){
    $building[$k]=[];
    echo"Floor: ",$k+1,"\n";
    for($j=0;$j<$n;$j++){
        $building[$k][$j]=[];
        for($i=0;$i<$n;$i++){
            echo"    Input number of people in zone ",$j+1,"-",$i+1,": ";
            fscanf(STDIN,"%d",$building[$k][$j][$i]);
        }
    }
}echo"\nPeople on each floor:\n";
for($k=0;$k<$floor;$k++){
    echo"  floor  ",$k+1,":\n";
    $total=0;
    for($j=0;$j<$n;$j++){
        echo"    ";
        for($i=0;$i<$n;$i++){
            printf("%4d", $building[$k][$j][$i]);
            $total+=$building[$k][$j][$i];
        }printf("\n");
    }echo"    Number of people = ",$total,"\n";
}echo"People on each zone:\n";	
for($j=0;$j<$n;$j++){
	for($i=0;$i<$n;$i++){
		$total=0;
		echo"  zone ",$j+1,"-",$i+1,":\n";
		for($k=$floor-1;$k>=0;$k--){
			echo"    ";
		    printf("%4d\n",$building[$k][$j][$i]);
		    $total+=$building[$k][$j][$i];
	    }echo"    Number of people = ",$total,"\n";	
    }
}
?>