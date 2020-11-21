<?php

if (isset($_POST['pickup']) && isset($_POST['drop']) && isset( $_POST['cabtype'] ))
{
   
$arr=array("Charbagh"=>0,"Indira Nagar"=>10,"BBD"=>30,"Barabanki"=>60,"Faizabad"=>100,"Basti"=>150,"Gorakhpur"=>210);

$distance1=0;
$distance2=0;
$totaldistance=0;
$fare=0;


$pickup=$_POST['pickup'];
$drop=$_POST['drop'];
$cabtype=$_POST['cabtype'];
$luggage=$_POST['luggage'];





foreach($arr as $key=>$value) {
    if($key==$pickup) {
        $distance1=$value;
        
       
    }
    if($key==$drop) {
        $distance2=$value;
        
    }
}

$totaldistance=abs($distance1-$distance2);

if($cabtype=="CedMicro")
{
    if($totaldistance<=10)
    {
        $fare=50+($fare*13.50);
    }
    elseif($totaldistance>=10 && $totaldistance<=60)
    {
        $fare=50+(10*13.50)+(($totaldistance-10)*12);
    }

    elseif($totaldistance>=60 && $totaldistance<=160)
    {
        $fare=50+(10*13.50)+(50*12)+(($totaldistance-60)*10.20);
    }

    elseif($totaldistance>160)
    {
        $fare=50+(10*13.50)+(50*12)+(100*10.20)+(($totaldistance-160)*8.50);
    }
}

elseif($cabtype=="CedMini")
{

    if($totaldistance<=10)
    {
        $fare+=150+($totaldistance*14.50);
    }
    elseif($totaldistance>10 && $totaldistance<=60)
    {
        $fare+=150+(10*14.50)+(($totaldistance-10)*13);
    }

    elseif($totaldistance>60 && $totaldistance<=160)
    {
        $fare+=150+(10*14.50)+(50*13)+(($totaldistance-60)*11.20);
    }

    elseif($totaldistance>160)
    {
        $fare+=150+(10*14.50)+(50*13)+(100*11.20)+(($totaldistance-160)*9.50);
    }

    if($luggage>=1 && $luggage<=10)
    {
        $fare=$fare+50;
    }

    if($luggage>10 && $luggage<=20)
    {
        $fare=$fare+100;
    }
    if($luggage>20)
    {
        $fare=$fare+200;
    }

}


elseif($cabtype=="CedRoyal")
{

    if($totaldistance<=10)
    {
        $fare+=200+($totaldistance*15.50);
    }
    elseif($totaldistance>10 && $totaldistance<=60)
    {
        $fare+=200+(10*15.50)+(($totaldistance-10)*14);
    }

    elseif($totaldistance>60 && $totaldistance<=160)
    {
        $fare+=200+(10*15.50)+(50*14)+(($totaldistance-60)*12.20);
    }

    elseif($totaldistance>160)
    {
        $fare+=200+(10*15.50)+(50*14)+(100*12.20)+(($totaldistance-160)*10.50);
    }

    if($luggage>=1 && $luggage<=10)
    {
        $fare=$fare+50;
    }

    if($luggage>10 && $luggage<=20)
    {
        $fare=$fare+100;
    }
    if($luggage>20)
    {
        $fare=$fare+200;
    }

}


elseif($cabtype=="CedSuv")
{

    if($totaldistance<=10)
    {
        $fare+=250+($totaldistance*16.50);
    }
    elseif($totaldistance>10 && $totaldistance<=60)
    {
        $fare+=250+(10*16.50)+(($totaldistance-10)*15);
    }

    elseif($totaldistance>60 && $totaldistance<=160)
    {
        $fare+=250+(10*16.50)+(50*15)+(($totaldistance-60)*13.20);
    }

    elseif($totaldistance>160)
    {
        $fare+=250+(10*16.50)+(50*15)+(100*13.20)+(($totaldistance-160)*11.50);
    }

    if($luggage>=1 && $luggage<=10)
    {
        $fare=$fare+100;
    }

    if($luggage>10 && $luggage<=20)
    {
        $fare=$fare+200;
    }
    if($luggage>20)
    {
        $fare=$fare+400;
    }

}



echo"Total cost: ".($fare);
}
else
{
    echo "Field cant be empty.";
}

?>