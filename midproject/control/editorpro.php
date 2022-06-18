<?php
$sadd="";
$eaddr="";
$unamer="";
$passr="";
$unamesr="";
$soadd="";





if(isset($_POST["eadd"]))
{ 
    $uname     =$_REQUEST["uname"];
    $password     =$_REQUEST["password"];
    if($uname!="")
    { 

                if($password!="")
                    {
                        if($uname!="" && $password!="")
                    {
                        $formdata = array(
                            'uname'=> $_POST["uname"],
                            'password'=> $_POST["password"]
                            );
                            $existingdata = file_get_contents('../data/editor.json');
                            $tempJSONdata = json_decode($existingdata);
                            $tempJSONdata[] =$formdata;
            
                            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
            
            
                            if(file_put_contents("../data/editor.json", $jsondata)) 
                                {
                                    $sadd= "<br><br>ADD Complete. <br>";
                                }
                            else 
                                {
                                    $soadd= "<br><br>Sorry ! ADDING  faild <br>";
                                    
                                }
                    }
                    else
                    {
                        $soadd= "<br><br>Sorry ! ADDING  faild <br>";
                    }
                }
    else
    {
        $passr="password cannot be  empty <br>";
    }


} 
else
{
    $unamer= "username cannot be empty <br>";
}
}
else
{
    //$eaddr= "unable to add editor";
}




?>