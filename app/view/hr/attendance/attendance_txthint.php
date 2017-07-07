<?php

    error_reporting(0);

$date = $_REQUEST['int'];
   echo  $date ;
   $id_dep = $_REQUEST['str'];
   echo  $id_dep ;
   
   if(empty($date))
       {
   
exit();
       }
       if($id_dep=="")
       {
           echo 'ahmed';
exit();
       }
       include_once '../../../controller/hr/attendance_c.php';              

?>
<hr>
<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
						
								<div class="row">
									<div class="col-xs-12">
										
										<div class="clearfix">
                                                                                    <div class="pull-right tableTools-container">
                                                                                        
                                                                                    </div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
        <th>ID</th>
        <th> Name</th>
        <th> Date</th>
        <th> Start</th>
        <th>End</th>
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php 
foreach($userdep as $output){
    ?>
        <tr>
                <td>
<a href="#"><?php
echo $output["id_user"];
?></a>
                </td>
                <td>
<?php
echo $output["f_name_user"]." ".$output["m_name_user"]." ".$output["l_name_user"];
?></td>
                <td>
         <?php echo $date;?>           
                </td>
                <td>
                    <?php if($output["start"]==""){?>
                        <form action="./app/controller/hr/attendance_c.php" method="POST">
    <input type="hidden" name="id_user" value="<?php echo $output["id_user"];?>">
    <input type="hidden" name="name_user" value="<?php echo $output["f_name_user"]." ".$output["m_name_user"]." ".$output["l_name_user"];?>">
    <input type="hidden" name="date" value="<?php echo $date;?>">
    <input  type="time" name="time"  style="height: 20px;">
    
<button class="btn-success " type="submit" name="start" value="start" onclick="return confirm(&quot; Are you sure you want to add? &quot;)">
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                </button>

    </form>
                    <?php
                    }  else {
                                        echo   $output["start"];  
    
                    }
                    ?>
                </td>
<td>                    <?php if($output["end"]==""){?>

                        <form action="./app/controller/hr/attendance_c.php" method="POST">
    
<input type="hidden" name="id_user" value="<?php echo $output["id_user"];?>">
    <input type="hidden" name="name_user" value="<?php echo $output["f_name_user"]." ".$output["m_name_user"]." ".$output["l_name_user"];?>">
    <input type="hidden" name="date" value="<?php echo $date;?>">
<input  type="time" name="time"  style="height: 20px;">
<button class="btn-success " type="submit" name="end" value="end" onclick="return confirm(&quot; Are you sure you want to add? &quot;)">
                        <i class="ace-icon fa fa-floppy-o bigger-120"></i>
                </button>

    </form>
    <?php
                    }  else {
                    echo   $output["end"];  
                    }
                    ?>
                </td>

                
        </tr>

<?php
          }
?>



</tbody>
											</table>
										</div>
									</div>
								</div>

								
							</div><!-- /.col -->
						</div>