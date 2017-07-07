<?php
   $id_user = $_GET['id_user'];
    $month = $_GET['month'];
    $year = $_GET['year'];
   $view_second="second_v";
   $start_munth = $year."-".$month."-01"; 
   $end_munth =date("Y-m-t", strtotime($start_munth));
    include $control.'payslip_c.php';
   echo $co=count($userss)+1;
   for($xix=0; $xix<$co;$xix++)
   {
       $r[]=$xix;
   }
//$r=array("Actual Salary","Absence Hours","Absence Day");/*******tany array al 3awz artb beh*******/
$tgi="count";/*******al mkan al 3awz tzbto*******/

$tt=$t->ary($userss, $r ,$tgi);
//    echo '<pre>';
//print_r($tt);
//    echo '<pre>';
//    exit();
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
Employment Setup</a>
							</li>
							<li class="active"> <?php echo $text;?></li>
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
<?php echo $text;?>
                                                            <small>
												</small>
							</h1>
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
<!--/*****************************************************************************************************/-->	
<div id="printd">
    
<?php
foreach ($tt as $key=>$val){
    ?>
  
<div class="form-horizontal">
<div class="form-group">
<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> <?php echo $val["name_filde"] ;?> </label>
<div class="col-sm-9">
<input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="<?php echo $val["resalt_filde"] ?>" disabled="disabled">
</div>
</div> 

</div>
  
    <?php
}
//$frist_aprov_all[]=$tt;
$second_aprov_all[]=array("id_user"=>$id_user,"month"=>$month,"year"=>$year,"name_filde"=>"second aprove","resalt_filde"=>$name,"id_mack"=>$id_account,"count"=>"0");
$second_stop_all[]=array("id_user"=>$id_user,"month"=>$month,"year"=>$year,"name_filde"=>"stop","resalt_filde"=>$name,"id_mack"=>$id_account,"count"=>"0");

?>
    </div>
<form action="<?php echo $control?>payslip_c_mysq.php" method="post"> 
                    <input type="hidden" name="data" value="<?php echo htmlentities(serialize($second_aprov_all));?>">
                    <input type="hidden" value="second" name="second">
                    <input type="submit" value="second" >
                </form>  
<form action="<?php echo $control?>payslip_c_mysq.php" method="post"> 
                    <input type="hidden" name="data" value="<?php echo htmlentities(serialize($second_stop_all));?>">
                    <input type="hidden" value="second" name="second">
                    <input type="submit" value="stop" >
                </form>  
                           
<button onclick="printContent('printd')">Print Content</button>
<input type="button" value="Print Div" onclick="PrintElem('#printd')" />
<!--<div id="content">
     <h3>Hello, this is a H3 tag</h3>

    <p>a pararaph</p>
</div>
<button onclick="PDf()" id="cmd">Generate PDF</button>-->



<script>//
//    var doc = new jsPDF();
//var specialElementHandlers = {
//    '#editor': function (element, renderer) {
//        return true;
//    }
//};
//
//function PDf () {
//    doc.fromHTML($('#content').html(), 15, 15, {
//        'width': 170,
//            'elementHandlers': specialElementHandlers
//    });
//    doc.save('sajhgbkjlfile.pdf');
//};
//    
    
    function PrintElem(elem)
{
      Popup($('<div/>').append($(elem).clone()).html());
}

function Popup(data) 
{
    var mywindow = window.open('', 'printd', 'height=400,width=600');
mywindow.document.write('<html><head><title>my div</title>');
mywindow.document.write('<link rel="stylesheet" href="assets/css/bootstrap.min.css" />');
mywindow.document.write('<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />');
mywindow.document.write('<link rel="stylesheet" href="assets/css/select2.min.css" />');
mywindow.document.write('<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />');
mywindow.document.write('<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />');
mywindow.document.write('</head><body >');
mywindow.document.write(data);
mywindow.document.write('</body></html>');

    mywindow.print();
  //  mywindow.close();

    return true;
}
    function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
                                                                        
<!--/*****************************************************************************************************/-->										

                                                                        </div>
								</div>

								
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
				








	<?php
//         echo '<pre>';
//    print_r($mys);
//    echo '<pre>';
        ?>		
  

