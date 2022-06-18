<?php

session_start();
//setcookie('username','cswad', time()+20 );


$ssearch="";
$searchr="";
$bloodr="";




if(isset($_POST["search"]))
{
    $_SESSION["search"] =$search;
    $blood     =$_REQUEST["blood"];

    if($blood!="")
    {
        

                    $filedata = file_get_contents('../data/data.json');
                    $tempjson = json_decode($filedata);

                    foreach($tempjson as $myobj)
                    {
                        $bld= $myobj->blood;

                        if($bld==$blood)
                        {
                            $_SESSION["blood"] =$blood;
                    
                        header("Location: ../view/findresult.php");

                        }
                        else
                        {
                        $searchr= "No found match ! <br>";


                        }

                    }

    }
    else
    {
        $bloodr= "please select blood group <br>";

    }
}
else
{
    //$bloodr= "please select blood group <br>";
}


?>