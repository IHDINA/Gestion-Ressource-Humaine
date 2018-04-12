
<?php 
	$my_device = mysql_query("select fonctionnaire.fonct_id, fonctionnaire.firstname,fonctionnaire.lastname,fonctionnaire.bureau,fonctionnaire.designation,fonctionnaire.email,fonctionnaire.grade,fonctionnaire.date_entre,fonctionnaire.telephone from fonctionnaire , stlocation , location_details where fonctionnaire.fonct_id=location_details.fonct_id and stlocation.stdev_id=location_details.stdev_id


and stlocation.stdev_id = '$stdev_id' ")or die(mysql_error());
	$count_yes = mysql_num_rows($my_device);
?>

<?php 
	$my_device = mysql_query("select fonctionnaire.fonct_id, fonctionnaire.firstname,fonctionnaire.lastname,fonctionnaire.bureau,fonctionnaire.designation,fonctionnaire.email,fonctionnaire.grade,fonctionnaire.date_entre,fonctionnaire.telephone from fonctionnaire , stlocation , location_details where fonctionnaire.fonct_id=location_details.fonct_id and stlocation.stdev_id=location_details.stdev_id


and stlocation.stdev_id = ''")or die(mysql_error());
	$count_no = mysql_num_rows($my_device);
?>

<?php $not_count = $count_yes -  $count_no; ?>



 $i=count($freq)-1                          for($i=0;$i<count($freq)-1;$i++){        var myarr = [<?php
            $sql = mysql_query("select * from tbl_static");
            
            while($data = mysql_fetch_array($sql)){
                $freq=$data['freq'] ;
                $Mod=$data['Mod'] ;
            } ?>
                                                                                                               $i=count($freq)-1                          for($i=0;$i<count($freq)-1;$i++){
