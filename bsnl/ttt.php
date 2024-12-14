<?php
include "kkk.php";
?>
<?php
if(isset($_POST['submit'])){
    $Consumerno=$_POST['Consumerno'];
    $Units=$_POST['Units'];
    $Selectcategory=$_POST['Selectcategory'];
    $FREECALLS=$_POST['FREECALLS'];
    $BILLAMOUNT=$_POST['BILLAMOUNT'];
    $Finalamt=$_POST['Finalamt'];
    $sql="INSERT Into pencil(Consumerno,Units,Selectcategory,FREECALLS,BILLAMOUNT,Finalamt) values('$Consumerno','$Units','$Selectcategory','$FREECALLS','$BILLAMOUNT','$Finalamt')";
    if($conn->query($sql)){
        echo"new record inserted succesfully";
    }
}
?>        

    


