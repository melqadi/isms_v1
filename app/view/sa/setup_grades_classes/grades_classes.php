<?php
include_once $controller_file_path;
$page_title = "Grades & Classes";


$_SESSION['submit_url']=$submit_url.$_GET['action'];
$submit_url_action=$submit_url.$_GET['action'];

//combo academic year


//end combo academic year


?>

<div class="main-content-inner">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

<ul class="breadcrumb">
	<li><i class="ace-icon fa fa-home home-icon"></i> <a href="#">Home</a>
	</li>

	<li><a href="#"> Employment Setup</a></li>
	<li class="active"><?php echo $page_title;?></li>
</ul>
<!-- /.breadcrumb -->

<div class="nav-search" id="nav-search" style="display: none;">
	<form class="form-search">
		<span class="input-icon"> <input type="text"
			placeholder="Search ..." class="nav-search-input"
			id="nav-search-input" autocomplete="off" /> <i
			class="ace-icon fa fa-search nav-search-icon"></i>
		</span>
	</form>
</div>
<!-- /.nav-search -->
</div>
<div class="page-content">


	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

<div class="col-xs-12">
	<div class="tabbable">
		<ul class="nav nav-tabs padding-12 tab-color-blue background-blue"
			id="myTab4">
			<li class="active"><a data-toggle="tab" href="#grades">Grades</a>
			</li>

			<li><a data-toggle="tab" href="#classes">Classes</a></li>


		</ul>

		<div class="tab-content">
			<div id="grades" class="tab-pane  in active"">
				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->
<div class="row">
<?php if(!isset($_GET["grade_id"])){?>
<!-- ---------------------grade form start---------------------- -->   
<form class="form-horizontal" action="<?php echo $controller_file_path?>" method="post" id="form_grade_add">
<fieldset>


<!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


<!-- Form Name -->
<div class="page-header">
	<h1>
		Add New Grade
		
	</h1>
</div>
<!-- Input With Combobox http://getfuelux.com/javascript.html#combobox -->
<div class="form-group">
  <label class="control-label col-sm-2" for="inputwithcomboboxInput">Academic Year</label>
  <div class="col-sm-9">
    
      <select class="form-control" id="form-field-select-1" name="academic_year">
      <option value="">Please Select an Academic Year</option>
<?php 
$academic_years=get_academic_years();

foreach ($academic_years as $year) 
{
 echo '<option value="'.$year['id'].'">'.$year['name'].' -- Start Date: '.date('d/m/Y', strtotime(str_replace('.', '-', $year['start_date']))).' -- End Date: '.date('d/m/Y', strtotime(str_replace('.', '-', $year['end_date']))).'</option>';
}
?>
																												</select>
      
    
  </div>
</div>
<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="textinput" class="control-label col-sm-2">Grade Name</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="textinput" placeholder="" required name="grade_name">
    
  </div>
</div>
<!-- Button http://getbootstrap.com/css/#buttons -->
<div class="form-group">
  <label class="control-label col-sm-2" for="singlebutton"></label>
  <div class="text-right col-sm-9">
    <button type="submit"  name="action" class="btn btn-success" aria-label="" value="add_grade">Add</button>
    
  </div>
</div>


</fieldset>
</form>                                        
<!-- ---------------------grade form end-------------------------------------- -->  
<?php }else{
    
    $grade_list = view_grade_byid($_GET['grade_id']);
    print_r($grade_list);
    
    
    ?>

<!-- ---------------------grade form start edit mode---------------------- -->   
                      
<form class="form-horizontal" action="<?php echo $controller_file_path?>" method="post" id="form_grade_edit">
<fieldset>

    <input type="hidden" name="id" class="form-control" id="textinput" placeholder="" required  value="<?php echo $_GET['grade_id']; ?>">

<!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


<!-- Form Name -->
<div class="page-header">
	<h1>
		Edit Grade
		
	</h1>
</div>
<!-- Input With Combobox http://getfuelux.com/javascript.html#combobox -->
<div class="form-group">
  <label class="control-label col-sm-2" for="inputwithcomboboxInput">Academic Year</label>
  <div class="col-sm-9">
    
      <select name="academic_year" class="form-control" id="form-field-select-1">
      
<?php 
$academic_years=get_academic_years();
foreach ($academic_years as $year) 
{
    if($year['id']==$grade_list[0]['academic_year'])
    {
 echo '<option selected value="'.$year['id'].'">'.$year['name'].' -- Start Date: '.date('d/m/Y', strtotime(str_replace('.', '-', $year['start_date']))).' -- End Date: '.date('d/m/Y', strtotime(str_replace('.', '-', $year['end_date']))).'</option>';
    }
    else 
    {
        echo '<option value="'.$year['id'].'">'.$year['name'].' -- Start Date: '.date('d/m/Y', strtotime(str_replace('.', '-', $year['start_date']))).' -- End Date: '.date('d/m/Y', strtotime(str_replace('.', '-', $year['end_date']))).'</option>';
    }
}
?>
																												</select>
      
    
  </div>
</div>
<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="textinput" class="control-label col-sm-2">Grade Name</label>
  <div class="col-sm-9">
    <input type="text" name="grade_name" class="form-control" id="textinput" placeholder="" required  value="<?php echo $grade_list[0]['grade_name']; ?>">
    
  </div>
</div>
<!-- Button http://getbootstrap.com/css/#buttons -->
<div class="form-group">
  <label class="control-label col-sm-2" for="singlebutton"></label>
  <div class="text-right col-sm-9">
    <button type="submit" id="singlebutton" name="action" class="btn btn-success" aria-label="" value="edit_grade">Update</button>
    
  </div>
</div>


</fieldset>
</form>     
<!-- ---------------------grade form end edit mode-------------------------------------- -->                                             
<?php }?>
<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>

		<!-- div.table-responsive -->

<!-- div.dataTables_borderWrap -->
<div>

<!-------------------------------------------- grid view start ---------------------------------------->					
<table id="dynamic-table"
	class="table table-striped table-bordered table-hover">
<thead>
		<!--/*********db*************/-->
<tr>
	<!--        <th>ID</th>-->
	<th>Grade Name</th>
	<th>Actions</th>
</tr>

<!--/**********db************/-->
</thead>

<tbody>

<?php
$list=view_grade();

foreach ($list as $value) {
    ?>
<tr>
<!-- <td>
<a href="#"><?php
// echo $value["id"];
?></a>
</td>-->
<td>
<?php
echo $value["id"]."-------------". $value["grade_name"];
        ?></td>

<td>
	<div class="hidden-sm hidden-xs action-buttons">

<?php
    // }
    // $edit=$ok["edit"];
    
    // if($edit == "yes"){
    ?>

<a class="green"  href="<?php echo $submit_url_action."&grade_id=".$value["id"]?>" id="btn_edit_grade">
<i class="ace-icon fa fa-pencil bigger-130"></i>
</a>
<?php
        // }
        // $delete=$ok["delete"];
        
        // if($delete == "yes"){
        ?>
<a class="red" onclick='return confirm(<?php echo $confirm_delete;?> )' href="<?php echo $controller_file_path;?>?id=<?php echo $value['id']; ?>&drop=1">
<i class="ace-icon fa fa-trash-o bigger-130"></i>
																	</a>
<?php
        
        // }
        ?>
</div>
	<div class="hidden-md hidden-lg">
		<div class="inline pos-rel">
			<button
				class="btn btn-minier btn-yellow dropdown-toggle"
				data-toggle="dropdown" data-position="auto">
				<i
					class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
			</button>

			<ul
				class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
				<li><a href="#" class="tooltip-info"
					data-rel="tooltip" title="View"> <span class="blue">
							<i class="ace-icon fa fa-search-plus bigger-120"></i>
					</span>
				</a></li>

				<li><a href="#" class="tooltip-success"
					data-rel="tooltip" title="Edit"> <span
						class="green"> <i
							class="ace-icon fa fa-pencil-square-o bigger-120"></i>
					</span>
				</a></li>

				<li><a href="#" class="tooltip-error"
					data-rel="tooltip" title="Delete"> <span
						class="red"> <i
							class="ace-icon fa fa-trash-o bigger-120"></i>
					</span>
				</a></li>
			</ul>
		</div>
	</div>

</td>
	</tr>

<?php
    }
    ?>



</tbody>
													</table>
												
<!-------------------------------------------- grid view end ---------------------------------------->
			</div>
		</div>
	</div>



</div>
<!-- /.col -->
</div>
<!-- /.row -->

</div>

<div id="classes" class="tab-pane">
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

<div class="row">
<!-- ---------------------class form start---------------------- -->                                        
                                        <form class="form-horizontal">
<fieldset>


<!-- change col-sm-N to reflect how you would like your column spacing (http://getbootstrap.com/css/#forms-control-sizes) -->


<!-- Form Name -->
<div class="page-header">
							<h1>
								Add New Class
								
							</h1>
						</div>
<!-- Input With Combobox http://getfuelux.com/javascript.html#combobox -->
<div class="form-group">
  <label class="control-label col-sm-2" for="inputwithcomboboxInput">Academic Year</label>
  <div class="col-sm-9">

<select class="form-control" id="form-field-select-1">
	<option value=""></option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>																
</select>
      
    
  </div>
</div>
<!-- Text input http://getbootstrap.com/css/#forms -->
<div class="form-group">
  <label for="textinput" class="control-label col-sm-2">Grade Name</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="textinput" placeholder="" required="">
    
  </div>
</div>
<!-- Button http://getbootstrap.com/css/#buttons -->
<div class="form-group">
  <label class="control-label col-sm-2" for="singlebutton"></label>
  <div class="text-right col-sm-9">
    <button type="button" id="singlebutton" name="singlebutton" class="btn btn-success" aria-label="">Add</button>
    
  </div>
</div>


</fieldset>
</form>
                                        
<!-- ---------------------class form end-------------------------------------- -->                                        

<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>

		<!-- div.table-responsive -->

<!-- div.dataTables_borderWrap -->
<div>
<!-------------------------------------------- grid view2 start ---------------------------------------->
<table id="dynamic-table2"
	class="table table-striped table-bordered table-hover">
         <thead>
		<!--/*********db*************/-->
<tr>
	<!--        <th>ID</th>-->
	<th>Class Name</th>
	<th>Actions</th>
</tr>

<!--/**********db************/-->
</thead>

<tbody>
<?php
foreach ($list as $value) {
    ?>
<tr>
														<!--                <td>
<a href="#"><?php
// echo $value["id_".$page_title];
?></a>
</td>-->
<td>
<?php
        echo $value["name_" . $page_title];
        ?></td>

<td>
	<div class="hidden-sm hidden-xs action-buttons">

<?php
    // }
    // $edit=$ok["edit"];
    
    // if($edit == "yes"){
    ?>

<a class="green" href="?sec=hr&mod=<?php echo $page_title ;?>&action=<?php echo $page_title ;?>_by_id&id_<?php echo $page_title ;?>=<?php echo $value["id_".$page_title] ;?>">
	<i class="ace-icon fa fa-pencil bigger-130"></i>
</a>
<?php
        // }
        // $delete=$ok["delete"];
        //
        // if($delete == "yes"){
        ?>
<a class="red"
																		onclick='return confirm(<?php echo $confirm_delete;?> )'
href="<?php echo $controller_path;?><?php echo $page_title ;?>_c.php?id_<?php echo $page_title ;?>=<?php echo $value['id_'.$page_title]; ?>&drop=1">
	<i class="ace-icon fa fa-trash-o bigger-130"></i>
</a>
<?php
               // }
        ?>
</div>

																	<div class="hidden-md hidden-lg">
																		<div class="inline pos-rel">
																			<button
																				class="btn btn-minier btn-yellow dropdown-toggle"
																				data-toggle="dropdown" data-position="auto">
																				<i
																					class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																			</button>

																			<ul
																				class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																				<li><a href="#" class="tooltip-info"
																					data-rel="tooltip" title="View"> <span class="blue">
																							<i class="ace-icon fa fa-search-plus bigger-120"></i>
																					</span>
																				</a></li>

																				<li><a href="#" class="tooltip-success"
																					data-rel="tooltip" title="Edit"> <span
																						class="green"> <i
																							class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																					</span>
																				</a></li>

																				<li><a href="#" class="tooltip-error"
																					data-rel="tooltip" title="Delete"> <span
																						class="red"> <i
																							class="ace-icon fa fa-trash-o bigger-120"></i>
																					</span>
																				</a></li>
																			</ul>
																		</div>
																	</div>

																</td>
															</tr>

<?php
    }
    ?>



</tbody>
													</table>
<!-------------------------------------------- grid view2 end ---------------------------------------->
				</div>

			</div>
	</div>


</div>
<!-- /.col -->
</div>
<!-- /.row -->
			</div>


		</div>
	</div>
</div>

<!-- PAGE CONTENT ENDS -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.page-content -->


</div>
<!-- /.page-content -->
