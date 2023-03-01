
<style>.navigation_item{
		padding: 0px 5px;
		background: #fff;
		text-decoration: none;
		
		color: #e3e3e3 !important;
		font-size: 12px;
		border: 2px solid #e3e3e3;
		border-radius: 1px;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
	}
	.navigation_item:hover,.selected_navigation_item{
		border: 2px solid #2A6496;
		border-radius: 2px;
		color: #2A6496 !important;
		background: #fff;
	}
    .zoom { 
top:-50px; 
left:-35px; 
display:block; 
z-index:999; 
cursor: pointer; 
-webkit-transition-property: all; 
-webkit-transition-duration: 0.3s; 
-webkit-transition-timing-function: ease; 
} 

/*change the number below to scale to the appropriate size*/ 
.zoom:hover { 
transform: scale(3); 

}


	</style>
  
<div id="page-wrapper">
            
   <form method="post" action="download1.php">         
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                        <form name="zips" method="post">  
                     
                           <div class="table-responsive table-bordered">
                           <table class="table table-hover">
                                    
                                    <thead class="thead-dark">
                                                                            <tr>
                                                                            
                                                                               <th style="text-align:center">Checkbox</th>  
                                                                               <th style="text-align:center"> S.No</th> 
                                                                                
                                                                                <th style="text-align:center">Image</th> 
                                    
                                                                                <th style="text-align:center">Text</th>
                                                                                <th style="text-align:center">Date</th>
                                                                                
                                                                                
                                                                            </tr>
                                                                        </thead>
                           <?php
require_once("db.php");
if(isset($_POST['submit']))
{

$party_id = @$_POST['party_id'];
$leader_id = @$_POST['leader_id'];
$district_id = @$_POST['district_id'];
$img_name = @$_POST['img_name'];
$fdate = @$_POST['fdate'];
$tdate = @$_POST['tdate'];

		
		$condition = '';

				if ($party_id)
					$condition = $condition . " party_id = $party_id ";

				if ($leader_id) {
					if ($condition) $condition = $condition . " AND leader_id = $leader_id ";
					else $condition = $condition . " leader_id = $leader_id ";
				}

                if ($district_id) {
					if ($condition) $condition = $condition . " AND district_id = $district_id ";
					else $condition = $condition . " district_id = $district_id ";
				}   

				if ($img_name) {
					if ($condition) $condition = $condition . " AND img_name = '$img_name' ";
					else $condition = $condition . " img_name = '$img_name' ";
				}
				if ($fdate && $tdate) {
					if ($condition) $condition = $condition . " AND date BETWEEN '$fdate' AND '$tdate' ";
					else $condition = $condition . " date BETWEEN '$fdate' AND '$tdate' ";
				}
				

				// echo "CONDITION: " . $condition;

				// $res = mysqli_query($conn, "SELECT * FROM image WHERE ( party_id = $party_id OR leader_id = $leader_id ) OR ( date BETWEEN '$fdate' AND '$tdate' ) OR img_name = '$img_name'   ");
				$sql = "SELECT * FROM image WHERE " . $condition;

				// echo '<br />' . $str;

				$result = mysqli_query($conn, $sql);
			} else {
				echo 'error loading file';
			}
            while($row=mysqli_fetch_array($result)) 

            {



                echo ' <tr>
                                                    <td style="text-align:center">
                                                    <div class="custom-control custom-checkbox mb-3">
                                                        <input type="checkbox" name="fileId[]" class="custom-control-input" id="checkbox'. $row['id'].'" value="'.$row['id'].'">
                                                        <label class="custom-control-label" for="checkbox'. $row['id'].'">'.$row['image'].'</label>
                                                        </div>
                                                    </td>
                                                             
                                                        <td style="text-align:center">'. $row["id"].' </td>

                                                        <td style="text-align:center"> 
                                                        <div class="zoom">
                                                        <img src="upload/' . $row['image'] . '" height="100" width="100" class="img-thumbnail" />
                                                        </div>
                                                        </td>
                                                                                                    
                                                        <td style="text-align:center">'.$row["img_name"].'</td>
                                                         
                                                        <td style="text-align:centre">'.$row["date"].'</td>
                                                     
                                                        
                                                      
                                                    </tr> ';
                                                    
                                                
            
            
            }   
            
?>
                                


 
<td colspan="2"><input type="submit" name="createzip" class="btn btn-primary"  value="Download as ZIP" />&nbsp; 
                               
                               
                            </td> 
                               
                          
</table>



                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
   </form>

   
   <div class="container">
  <div class="row">
    <div class="col-sm">
    <input type="button" class="btn btn-outline-info" onclick='selects()' value="Select All"/> <br>
  
    </div>
    <div class="col-sm">
    <input type="button" class="btn btn-outline-info" onclick='deSelect()' value="Deselect All"/><br>
  
    </div>
    <div class="col-sm">
    <a href="search.php"><button class="btn btn-success">Search Images</button></a>
  
    </div>
  </div>
</div>
   
                                
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

        
    </div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <!-- /#wrapper -->
<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
   
   <script type="text/javascript">  
            function selects(){  
                var ele=document.getElementsByName("fileId[]");  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=true;  
                }  
            }  
            function deSelect(){  
                var ele=document.getElementsByName("fileId[]");  
                for(var i=0; i<ele.length; i++){  
                    if(ele[i].type=='checkbox')  
                        ele[i].checked=false;  
                      
                }  
            } 
            
            
        
        </script> 
        


</body>

</html>