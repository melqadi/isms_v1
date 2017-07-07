<?php 
                                                $file_name="categories";
                                                  $file_db="categories";

                                                ?>
						     <div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">
Probation Period Setup</a>
							</li>
							<li class="active"><?php echo $file_name;?></li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search" style="display:none;" >
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
	
					
                                <div class="page-content">
                                    
				<div class="page-header">
							<h1>
Probation Period					</h1>
						</div><!-- /.page-header -->
                                                
                                                                                                    <!--/************************/-->
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
				<?php
include $control.'periodnd_c.php';

                                ?>
                                                                                            <thead>
                                                                                                    <!--/*********db*************/-->
<tr>
        <th>ID</th>
        <th> Name</th>
        <!--<th> titel</th>-->
        <th> Date</th>
        <th> First Approve</th>
        <th>Actions</th>
</tr>

                                                                                                    <!--/**********db************/-->
												</thead>

<tbody>
    <?php $expressionnn = getdate();
        $day = $expressionnn[mday];
        $month = $expressionnn[mon];
        //print_r($expressionnn);
        $year = $expressionnn[year];
        $hours = $expressionnn[hours];
        $min = $expressionnn[minutes];
        $sic = $expressionnn[seconds];


        if (10 > $day) {
            $dayy = "0" . $day;
        } else {
            $dayy = $day;
        }

        if (10 > $month) {
            $monthh = "0" . $month;
        } else {
            $monthh = $month;
        }

        if (10 > $hours) {
            $hourss = "0" . $hours;
            $hoursss = $hourss + 1;
        } else {
            $hourss = $hours;
            $hoursss = $hourss + 1;
        }

        if (10 > $min) {
            $minn = "0" . $min;
        } else {
            $minn = $min;
        }

        if (10 > $sic) {
            $sicc = "0" . $sic;
        } else {
            $sicc = $sic;
        }


        $ha = $year . "-" . $monthh . "-" . $dayy . ' ' . $hoursss . ":" . $minn . ":" . $sicc . ".000000";
        $ttt = date('g.i a', strtotime($ha));
        $time = $ttt;
        $ttgt = date('g a', strtotime($ha));
        $timeg = $ttgt;
        $y = date('Y', strtotime($ha));
        $m = date('m', strtotime($ha));
        $d = date('d', strtotime($ha));

foreach($res as $output){
     $first=$output["f_approve"];
    if($first!="")
        
        {

                $ty=$output["periode"];
        $yy = date('Y', strtotime($ty));
        $mm = date('m', strtotime($ty));
        $dd = date('d', strtotime($ty));

    $fg=$mm-$m;
    $ft=$dd-$d;
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
<!--                <td>
<?php
//echo $output["id_categories"]."/ ".$output["id_departments"]."/ ".$output["id_positions"];
?></td>-->
                <td>
<?php
echo $output["periode"];
?></td><td>
<?php
echo $output["f_approve"];
?></td>

                <td>
<div class="hidden-sm hidden-xs action-buttons">
            
<!--                    <i class="ace-icon fa fa-search-plus bigger-130"></i>-->
                <?php
                if(   $fg=="0" && $ft<"04" ){?>
    <a class="blue" href="?sec=hr&mod=account&action=account_viwe&id_user=<?php echo $output["id_user"] ;?>">        
    <i class="ace-icon fa fa-bell icon-animated-bell"></i>
    </a>
                    <?php
                }
                ?>    


            <a class="green"  href="<?php echo $control;?>periodnd_c.php?id_user=<?php echo $output["id_user"]; ?>&approve=2">
                    <i class="ace-icon glyphicon glyphicon-ok"></i>
            </a>

    <a class="red" onclick='return confirm(<?php echo $confirm_delete;?>)' href="<?php echo $control;?>periodnd_c.php?id_user=<?php echo $output["id_user"]; ?>&drop=1">
                    <i class="ace-icon glyphicon glyphicon-remove"></i>
            </a>
    </div>

                        <div class="hidden-md hidden-lg">
                                <div class="inline pos-rel">
                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                <li>
                                                        <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                                <span class="blue">
                                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                </span>
                                                        </a>
                                                </li>

                                                <li>
                                                        <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                                <span class="green">
                                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                </span>
                                                        </a>
                                                </li>

                                                <li>
                                                        <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                <span class="red">
                                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                </span>
                                                        </a>
                                                </li>
                                        </ul>
                                </div>
                        </div>

                                                                                                                        </td>
        </tr>
        
    

<?php
}
        }

?>



</tbody>
											</table>
										</div>
									</div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				