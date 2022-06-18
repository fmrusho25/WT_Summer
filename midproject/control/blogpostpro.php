<?php
$sblog="";
$blogr="";
$eblogr="";
$ublogr="";
$pblogr="";



if(isset($_POST["eblog"]))
{
    $ublog     =$_REQUEST["ublog"];
$pblog     =$_REQUEST["pblog"];
    if($ublog!="")
    {
        if($pblog!="")
        {






            if($ublog!="" && $pblog!="")

            {
            $formdata = array(
                'ublog'=> $_POST["ublog"],
                'pblog'=> $_POST["pblog"]
             );
                $existingdata = file_get_contents('../data/blog.json');
                $tempJSONdata = json_decode($existingdata);
                $tempJSONdata[] =$formdata;
            
                $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
            
            
            if(file_put_contents("../data/blog.json", $jsondata)) 
             {
                 $sblog= "<br><br> Blog Add Complete. <br> Read your <a href='../view/blog.php'>Blog</a> Here <br>";
             }
            else 
             {
                 echo "<br><br>Sorry ! Blog Add faild <br>";
             }
            }
            else
            {
                $blogr = "Sorry ! Blog Add faild. <br>";
            }
        }









        
        else
        {
            $pblogr="Blog Title  cannot empty";
        }
    }
    else
    {
        $ublogr="Details  cannot empty";
    }

}
else
{
    //$eaddr= "unable to add editor";
}


?>