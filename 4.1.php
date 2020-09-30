<?php

echo"Input number of students: ";
fscanf(STDIN,"%d",$n);
echo"Input number of chapters: ";
fscanf(STDIN, "%d",$nchpt);
$format="%s";
for($i=0;$i<$nchpt;$i++){
    $format .=" %f";
}$scores=[];
for($i=0;$i<$n;$i++) {
	echo"Student  ",$i+1," score ( name";
	for($j=0;$j<$nchpt;$j++) {
		echo" chpt",$j+1;
	}echo" ): ";
	$scores[] = fscanf(STDIN, $format);
}echo"\n";
echo"Result:\n";
echo"           ";
for($i=1;$i<=$nchpt;$i++){
	printf("%7d",$i);
}echo"\n";
echo"-----------";
for($i=0;$i<$nchpt;$i++){
	echo"-------";
}echo"---------\n";
foreach($scores as$chpts){
	printf("%-10s:",$chpts[0]);
	$total=0;
	for($i=1;$i<$nchpt+1;$i++){
		$total+=$chpts[$i];
		printf("%7.2f",$chpts[$i]);
	}printf(" =%7.2f",$total);
	echo"\n";
}
?>