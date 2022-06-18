<?php

session_start();


$haserror=0;


$unamer     ="";
$passr     ="";
$logr="";



if(isset($_POST["alogin"]))
{
    //$_SESSION["alogin"] =$alogin;

    $uname     =$_REQUEST["uname"];
    $password    =$_REQUEST["password"];
    if($uname=="")
    {
        $unamer= "username cannot be empty. <br>";
        $haserror=1;
    }
    else
    {
        if($password=="")
        {
            $passr= "password cannot be empty. <br>";
            $haserror=1;
        }
        else
        {
            //$auname     =$_REQUEST["uname"];
            //$apass    =$_REQUEST["password"];
                if($uname=="rusho" && $password=="1234")
                {
                    echo "login as admin Rusho <br>";
                    $_SESSION["uname"] =$uname;
                    $_SESSION["password"] =$password;

                    if(!empty($_POST["remember"])) {
                        setcookie ("uname",$_POST["uname"],time()+ 36000);
                        setcookie ("password",$_POST["password"],time()+ 36000);
                        echo "Cookies Set Successfuly";
                    } else {
                        setcookie("uname","");
                        setcookie("password","");
                        echo "Cookies Not Set";
                    }

                    header("Location: ../view/profile.php");
                }
                else
                {
                if($uname=="arif" && $password=="1234")
                {
                    echo "login as  admin Arif <br>";
                    $_SESSION["uname"] =$uname;
                    $_SESSION["password"] =$password;
                    if(!empty($_POST["remember"])) {
                        setcookie ("uname",$_POST["uname"],time()+ 36000);
                        setcookie ("password",$_POST["password"],time()+ 36000);
                        echo "Cookies Set Successfuly";
                    } else {
                        setcookie("uname","");
                        setcookie("password","");
                        echo "Cookies Not Set";
                    }

                    header("Location: ../view/profile.php");
                }
                else
                {
                if($uname=="towhid" && $password=="1234")
                {
                    echo "login as  admin Towhid <br>";
                    $_SESSION["uname"] =$uname;
                    $_SESSION["password"] =$password;

                    if(!empty($_POST["remember"])) {
                        setcookie ("uname",$_POST["uname"],time()+ 36000);
                        setcookie ("password",$_POST["password"],time()+ 36000);
                        echo "Cookies Set Successfuly";
                    } else {
                        setcookie("uname","");
                        setcookie("password","");
                        echo "Cookies Not Set";
                    }


                    header("Location: ../view/profile.php");
                }
                else
                {
                if($uname=="fuad" && $password=="1234")
                {
                    echo "login as  admin Fuad <br>";
                    $_SESSION["uname"] =$uname;
                    $_SESSION["password"] =$password;

                    if(!empty($_POST["remember"])) {
                        setcookie ("uname",$_POST["uname"],time()+ 36000);
                        setcookie ("password",$_POST["password"],time()+ 36000);
                        echo "Cookies Set Successfuly";
                    } else {
                        setcookie("uname","");
                        setcookie("password","");
                        echo "Cookies Not Set";
                    }


                    header("Location: ../view/profile.php");
                }
                else
                {
                     $logr= "Unable to login as Admin  <br>";
                     $haserror=1;
                }
            }
        }
        }
        }
    }
}




if(isset($_POST["mlogin"]))
{
    //$_SESSION["mlogin"] =$mlogin;
    $uname     =$_REQUEST["uname"];
    $password    =$_REQUEST["password"];
    if($uname=="")
    {
        $unamer= "username cannot be empty. <br>";
        $haserror=1;
    }
    else
    {
        if($password=="")
        {
            $passr= "password cannot be empty. <br>";
            $haserror=1;
        }
        else
        {
                    $_SESSION["uname"] =$uname;
                    $_SESSION["password"] =$password; 
                    
                    $filedata = file_get_contents('../data/data.json');
                    $tempjson = json_decode($filedata);

                    foreach($tempjson as $myobj)
                    {
                        $cuname= $myobj->uname;
                        $cpass= $myobj->password;

                        if($cuname==$uname && $cpass==$password)
                        {
                        
                        $_SESSION["uname"] =$uname;
                        $_SESSION["password"] =$password;

                        if(!empty($_POST["remember"])) {
                            setcookie ("uname",$_POST["uname"],time()+ 36000);
                            setcookie ("password",$_POST["password"],time()+ 36000);
                            echo "Cookies Set Successfuly";
                        } else {
                            setcookie("uname","");
                            setcookie("password","");
                            echo "Cookies Not Set";
                        }
                    
                        header("Location: ../view/mprofile.php");

                        }
                        else
                        {
                        $logr= "Unable to login as Editor <br>";
                        $haserror=1;
                        }

                    }


                    //header("Location: ../view/mprofile.php");

        }
     }
}


if(isset($_POST["glogin"]))
{
    //$_SESSION["glogin"] =$glogin;
    $uname     =$_REQUEST["uname"];
    $password    =$_REQUEST["password"];
    if($uname=="")
    {
        $unamer= "username cannot be empty. <br>";
        $haserror=1;
    }
    else
    {
        if($password=="")
        {
            $passr= "password cannot be empty. <br>";
            $haserror=1;
        }
        else
        {
                    $_SESSION["uname"] =$uname;
                    $_SESSION["password"] =$password; 
                    
                    $filedata = file_get_contents('../data/eventdata.json');
                    $tempjson = json_decode($filedata);

                    foreach($tempjson as $myobj)
                    {
                        $cuname= $myobj->uname;
                        $cpass= $myobj->password;

                        if($cuname==$uname && $cpass==$password)
                        {
                        
                        $_SESSION["uname"] =$uname;
                        $_SESSION["password"] =$password;

                        if(!empty($_POST["remember"])) {
                            setcookie ("uname",$_POST["uname"],time()+ 36000);
                            setcookie ("password",$_POST["password"],time()+ 36000);
                            echo "Cookies Set Successfuly";
                        } else {
                            setcookie("uname","");
                            setcookie("password","");
                            echo "Cookies Not Set";
                        }
                    
                        header("Location: ../view/gprofile.php");

                        }
                        else
                        {
                        $logr= "Unable to login as Editor <br>";
                        $haserror=1;
                        }

                    }


                   // header("Location: ../view/gprofile.php");

        }
     }
}


if(isset($_POST["elogin"]))
{
    //$_SESSION["elogin"] =$glogin;
    $uname     =$_REQUEST["uname"];
    $password    =$_REQUEST["password"];
    if($uname=="")
    {
        $unamer= "username cannot be empty. <br>";
        $haserror=1;
    }
    else
    {
        if($password=="")
        {
            $passr= "password cannot be empty. <br>";
            $haserror=1;
        }
        else
        {
                    $_SESSION["uname"] =$uname;
                    $_SESSION["password"] =$password; 
                    
                    $filedata = file_get_contents('../data/editor.json');
                    $tempjson = json_decode($filedata);

                    foreach($tempjson as $myobj)
                    {
                        $cuname= $myobj->uname;
                        $cpass= $myobj->password;

                        if($cuname==$uname && $cpass==$password)
                        {
                        
                        $_SESSION["uname"] =$uname;
                        $_SESSION["password"] =$password;

                        if(!empty($_POST["remember"]))
                        {
                            setcookie("uname",$_POST["uname"],time()+36000);
                            setcookie("password",$_POST["password"],time()+36000);
                            echo "cookies set successfuly";
                        }
                        else
                        {
                        setcookie ("uname","");
                        setcookie ("password","");
                        echo "Cookies Not Set";
                        }
                    
                        header("Location: ../view/eprofile.php");

                        }
                        else
                        {
                        $logr= "Unable to login as Editor <br>";
                        $haserror=1;
                        }

                    }


                   // header("Location: ../view/eprofile.php");

        }
     }
}



?>