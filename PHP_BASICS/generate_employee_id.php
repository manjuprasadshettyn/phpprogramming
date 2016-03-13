<?php
	
   function generateid()
	{
          static $id=0;
                $Eid ="13nm00".$id ;
		echo "Employer $id's Id = $Eid<br>";
          $id++;
	}
        $number=10;
        
	echo "Generating 10 Employers ID<br>";
       for($i=1;$i<=$number;$i++)
	generateid();

	
?>