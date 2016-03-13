<?php

class item
{
    private $title;
    private $price;


public function __construct($t,$p)
{
    $this->title=$t;
    $this->price=$p;
}
public function displaydata()
{
    echo"title and price is <br>";
    echo "$this->title   $this->price<br>";
}
}

class sales extends item
{
    private $salesfig=array();

    public function __construct($a,$b,$c,$t,$p)
    { 
	    
		parent::__construct($t,$p);
		$this->salesfig[0]=$a;
        $this->salesfig[1]=$b;
        $this->salesfig[2]=$c;
    }

public function displaydata()
{
    parent::displaydata();
	echo"sales figure for 3 months<br>";
    foreach($this->salesfig as $value)
	echo"$value<br>";

}
}

class hwitem extends sales
{

private $category=array();
private $om=array();

public function __construct($a,$b,$c,$t,$p,$cat,$o)
{
    parent::__construct($a,$b,$c,$t,$p);
	$this->category=$cat;
    $this->om=$o;
}
public function displaydata()
{
    
	parent::displaydata();
	echo"category and om is <br>";
    echo "$this->category and $this->om";
}
}  
$h2=new hwitem(50000.00,20000.00,17000.00,"IBM PC/AT",25000,"FG","IBM");
//h1.displaydata();
$h2->displaydata();
?>
