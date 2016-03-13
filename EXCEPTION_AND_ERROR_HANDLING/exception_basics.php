<?php
try
{
    
   throw new exception(" Hello world...");


}

catch( exception $e)
{

        echo $e->getmessage();    

}
?>