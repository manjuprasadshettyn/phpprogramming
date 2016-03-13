<?php
class date{

private $day;
private $month;
private $year;
public  function __construct($d,$m,$y)
{
$this->day=$d;
$this->month=$m;
$this->year=$y;
}
public function show()
{
echo "<br/>$this->day/$this->month/$this->year<br/>";
}
public function isleap()
{
if(($this->year % 4==0 && $this->year %100!=0) ||($this->year % 400==0))
    return 1;
    else return 0;
}
public function thismonthmaxday()
{
  $m=array(31,28,31,30,31,30,31,31,30,31,30,31);
    if($this->month==2 && $this->isleap())
    return 29;
    else
    return $m[$this->month-1];
}

public function nextdate()
{
	++$this->day;
    if($this->day>$this->thismonthmaxday())
    {
        $this->day=1;
        $this->month++;
    }
    if($this->month>12)
    {

        $this->month=1;
        $this->year++;

    }
}
public function nextday()
{
    echo "Given Date :";
    $this->show();
    $this->nextdate();
    echo "on increment becomes ";
    $this->show();
}
}



$d1=new date(14,4,1971);
$d2=new date(29,2,1992);
$d3=new date(28,2,1993);
$d4=new date(31,2,1995);
$d1->nextday();
$d2->nextday();
$d3->nextday();
$d4->nextday();
$t=date("d-m-y");
$t1=explode('-', $t);
echo "<br/>Today :<br/>";
$d5=new date($t1[0],$t1[1],$t1[2]);
$d5->nextday();
?>
