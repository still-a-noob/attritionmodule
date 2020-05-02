<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Attrition Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
</head>
<body>

	<!-- Navbar -->
	<div class="row">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
				<a href="" class="text-white font-weight-bold">Indovision Services Pvt. Ltd.</a>
					<ul class="navbar-nav ml-auto">
						<li class="navbar-item">
							<a href="#about" class="nav-link">Support: support@yourcompany.com </a>
						</li>
						<li class="navbar-item">
							<a href="#products" class="nav-link">Welcome Aman Super Admin</a>
						</li>
						<li class="navbar-item">
							<a href="#contact" class="nav-link">Log Out</a>
						</li>
					</ul>
				</div>
			</nav>
	</div>

	<!-- Heading -->
	<div class="row">
		<div class="container text-center mt-5 pt-3">
			<h2 onclick="go()"> Attrition Record </h2>
		</div>	
	</div>

	<!-- Table -->
	<div class="row">
		<div class="container-fluid">
			<table class="table table-striped table-bordered" id="test">
				<thead>
					<th>2019</th>
				</thead>
				<thead>
					<tr class="text-center">
						<th rowspan="2" class="align-middle">Department</th>
						<th rowspan="2" class="align-middle">Opening Headcount</th>
						<th colspan="2">Jan</th>
						<th colspan="2">Feb</th>
						<th colspan="2">Mar</th>
						<th colspan="2">Apr</th>
						<th colspan="2">May</th>
						<th colspan="2">Jun</th>
						<th colspan="2">Jul</th>
						<th colspan="2">Aug</th>
						<th colspan="2">Sep</th>
						<th colspan="2">Oct</th>
						<th colspan="2">Nov</th>
						<th colspan="2">Dec</th>
						<th rowspan="2" class="align-middle">Total Resigned</th>
						<th rowspan="2" class="align-middle">Total Employed</th>
						<th rowspan="2" class="align-middle">Attrition Rate(%)</th>
					</tr>
					<tr>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
						<th>Resigned</th>
						<th>Joined</th>
					<tr>
				</thead>
				<?php 
					foreach($data as $rows) {
						?>
					<tr>	
						<td><?php echo $rows->department; ?></td>
						<td><?php echo $rows->openingheadcount; ?></td>
						<td class="res"><?php echo $rows->janr; ?></td>
						<td class="join"><?php echo $rows->janj; ?></td>
						<td class="res"><?php echo $rows->febr; ?></td>
						<td class="join"><?php echo $rows->febj; ?></td>
						<td class="res"><?php echo $rows->marr; ?></td>
						<td class="join"><?php echo $rows->marj; ?></td>
						<td class="res"><?php echo $rows->aprr; ?></td>
						<td class="join"><?php echo $rows->aprj; ?></td>
						<td class="res"><?php echo $rows->mayr; ?></td>
						<td class="join"><?php echo $rows->mayj; ?></td>
						<td class="res"><?php echo $rows->junr; ?></td>
						<td class="join"><?php echo $rows->junj; ?></td>
						<td class="res"><?php echo $rows->julr; ?></td>
						<td class="join"><?php echo $rows->julj; ?></td>
						<td class="res"><?php echo $rows->augr; ?></td>
						<td class="join"><?php echo $rows->augj; ?></td>
						<td class="res"><?php echo $rows->sepr; ?></td>
						<td class="join"><?php echo $rows->sepj; ?></td>
						<td class="res"><?php echo $rows->octr; ?></td>
						<td class="join"><?php echo $rows->octj; ?></td>
						<td class="res"><?php echo $rows->novr; ?></td>
						<td class="join"><?php echo $rows->novj; ?></td>
						<td class="res"><?php echo $rows->decr; ?></td>
						<td class="join"><?php echo $rows->decj; ?></td>
						<td class="resigned">
							<?php echo $resigned =$rows->janr+$rows->febr+$rows->marr+$rows->aprr+$rows->mayr+$rows->junr+$rows->julr+$rows->augr+$rows->sepr+$rows->octr+$rows->novr+$rows->decr;?>
						</td>
						<td class="joined">
							<?php echo $joined = $rows->janj+$rows->febj+$rows->marj+$rows->aprj+$rows->mayj+$rows->junj+$rows->julj+$rows->augj+$rows->sepj+$rows->octj+$rows->novj+$rows->decj;?>
						</td>
						<td class="attrate">
							<?php $attrate = ($joined + $rows->openingheadcount === 0) ? 0 : $resigned/($joined + $rows->openingheadcount)*100 ;
								echo round($attrate,2);
							?>
						</td>
					</tr>
				<?php } ?>
					
						<?php 
							foreach($total as $sum) {
						?>
						<tr class="grand">
							<th>Grand Total</th>
							<th><?php echo $sum->head; ?></th>
							<th><?php echo $sum->janr; ?></th>
							<th><?php echo $sum->janj; ?></th>
							<th><?php echo $sum->febr; ?></th>
							<th><?php echo $sum->febj; ?></th>
							<th><?php echo $sum->marr; ?></th>
							<th><?php echo $sum->marj; ?></th>
							<th><?php echo $sum->aprr; ?></th>
							<th><?php echo $sum->aprj; ?></th>
							<th><?php echo $sum->mayr; ?></th>
							<th><?php echo $sum->mayj; ?></th>
							<th><?php echo $sum->junr; ?></th>
							<th><?php echo $sum->junj; ?></th>
							<th><?php echo $sum->julr; ?></th>
							<th><?php echo $sum->julj; ?></th>
							<th><?php echo $sum->augr; ?></th>
							<th><?php echo $sum->augj; ?></th>
							<th><?php echo $sum->sepr; ?></th>
							<th><?php echo $sum->sepj; ?></th>
							<th><?php echo $sum->octr; ?></th>
							<th><?php echo $sum->octj; ?></th>
							<th><?php echo $sum->novr; ?></th>
							<th><?php echo $sum->novj; ?></th>
							<th><?php echo $sum->decr; ?></th>
							<th><?php echo $sum->decj; ?></th>
							<th id="totalres"></th>
							<th id="totaljoin"></th>
							<th id="attrate"></th>
						</tr>
					<?php } ?>			
			</table>
			<div align="center">
			   <button type="button" class="btn btn-success" onclick="exportTableToExcel('test', 'Attrition_Record')">Export</button>
			 </div>
		</div>
	</div>

	<!-- Javascript Code !-->
	<script type="text/javascript">
		var x = document.getElementsByClassName("res");
		for(i=0; i<x.length; i++) {
			if(x[i].innerHTML > 0){
				x[i].style.cursor="pointer";
				x[i].setAttribute("onclick", "resigned()");
			}
		}

		var y = document.getElementsByClassName("join");
		for(i=0; i<y.length; i++) {
			if(y[i].innerHTML > 0){
				y[i].style.cursor="pointer";
				y[i].setAttribute("onclick","joined()");
			}
		}

		window.onload=function(){
			res();
			join();
			attrate();
		}
		    function res(){
                var cellObjs = document.getElementsByClassName("resigned");
                var sum = 0;
                for(i=0; i < cellObjs.length; i++){
                    sum += new Number(cellObjs[i].innerHTML);
                }
                document.getElementById('totalres').innerHTML = sum;
            }
            function join(){
                var cellObjs = document.getElementsByClassName("joined");
                var sum = 0;
                for(i=0; i < cellObjs.length; i++){
                    sum += new Number(cellObjs[i].innerHTML);
                }
                document.getElementById('totaljoin').innerHTML = sum;
            }
            function attrate() {
            	var cellObjs = document.getElementsByClassName("attrate");
    			var sum=0;
            	for(i=0; i < cellObjs.length; i++) {
            		sum += new Number(cellObjs[i].innerHTML);
            	}
            	document.getElementById('attrate').innerHTML = (sum/cellObjs.length).toFixed(2);
            }
            function joined() {
			window.location.href="joined";
			}
			function resigned() {
				window.location.href="resigned";
			}
			var z = document.getElementById("test");
			for(i=2;i<27;i+=2) {
				if(z.rows[z.rows.length-1].cells[i].innerHTML > 0) {
				z.rows[z.rows.length-1].cells[i].setAttribute("onclick","resigned()");
				z.rows[z.rows.length-1].cells[i].style.cursor="pointer";
				}
			}
			for(i=3;i<27;i+=2) {
				if(z.rows[z.rows.length-1].cells[i].innerHTML > 0) {
				z.rows[z.rows.length-1].cells[i].setAttribute("onclick","joined()");
				z.rows[z.rows.length-1].cells[i].style.cursor="pointer";
				}
			}

			function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
	</script>

	<!-- Required files for Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>