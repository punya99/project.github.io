<?php require_once('header.php'); ?>



<section class="content-header" style="margin-left: 123px;">

	<div class="content-header-left">

		<h1>Being A Certified Builder</h1>

	</div>

	

</section>



<section class="content" style="margin-left: 123px;">

	<div class="row">

		<div class="col-md-12">

			<div class="box box-info">

				<div class="box-body table-responsive">

					<table id="example1" class="table table-bordered table-striped">

						<thead>

							<tr>

								<th>#</th>

										

											<th>Company Name </th>

											<th>Address
</th>

											<th> Mobile No *</th>

											<th> Phone No *</th>

											<th> E-Mail *</th>
											<th>Chief executive of company
</th>
                                             <th>Phone No *</th>
											 <th> Mobile No *</th>
											 <th> E-Mail *</th>
											 <th> Contact person name
</th>
<th>Designation

</th>
<th>  E-Mail *
</th>
<th> Year of Establishment

</th>
<th> 
GST No.

</th>
<th> Pan No.

</th>
<th> Labor Licence No.

</th>
<th> 
ESI

</th>
<th> 
Bank name

</th><th> 
Holder name

</th><th> 
Account No.

</th>
<th> Ifsc

</th><th> 
Annual Turnover

</th>
<th> Quality Certificate
</th><th> Safety Certificate
</th><th> Organization Chart
</th><th> Working Division
</th><th> Works
</th>
<th> Work Orders1 
</th><th> Work Orders2 
</th><th>Work Orders3 
</th><th> Work Orders4
</th>
<th> PLANT AND MACHINERY
</th>
<th> SUPPORTING DOCUMENT
</th>
<th> Message
</th>
<th>Action</th>

												

							</tr>

						</thead>

						<tbody>

							<?php

							$i=0;

							$statement = $pdo->prepare("SELECT *FROM  carrerbuilder 

							                           

							                           	");

							$statement->execute();

							$result = $statement->fetchAll(PDO::FETCH_ASSOC);

							foreach ($result as $row) {

								$i++;

								?>

								<tr>

									<td><?php echo $i; ?></td>

									

								

									<td><?php echo $row['contact_company']; ?></td>

									<td><?php echo $row['contact_address']; ?></td>

									<td><?php echo $row['contact_mobile']; ?></td>

									<td><?php echo $row['contact_phone']; ?></td>

									<td><?php echo $row['contact_email']; ?></td>
									<td><?php echo $row['contact_chief_executive_company']; ?></td>
									
									<td><?php echo $row['contact_phone1']; ?></td>
									<td><?php echo $row['contact_moblile1']; ?></td>
									<td><?php echo $row['contact_email1']; ?></td>
									
									
									<td><?php echo $row['contact_name1']; ?></td>

									<td><?php echo $row['contact_designation']; ?></td>
									<td><?php echo $row['contact_email2']; ?></td>
									
									<td><?php echo $row['contact_year']; ?></td>
									<td><?php echo $row['contact_gst']; ?></td>
									<td><?php echo $row['contact_pan']; ?></td>
									
									
									<td><?php echo $row['contact_licence']; ?></td>
									<td><?php echo $row['contact_est']; ?></td>
									<td><?php echo $row['contact_bank_name']; ?></td>
									<td><?php echo $row['contact_holder_name']; ?></td>
									<td><?php echo $row['contact_account']; ?></td>
									<td><?php echo $row['contact_ifsc']; ?></td>
									<td><?php echo $row['contact_annual_turnover']; ?></td>
								
									<td><a href="../carrerbuilder/<?php echo $row['Quality_Certificate']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../carrerbuilder/<?php echo $row['Safety_Certificate']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../carrerbuilder/<?php echo $row['Organization_Chart']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									<td><?php echo $row['Working_Division']; ?></td>
									<td><?php echo $row['work']; ?></td>
									<td><a href="../carrerbuilder/<?php echo $row['Work_file1']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../carrerbuilder/<?php echo $row['Work_file2']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../carrerbuilder/<?php echo $row['Work_file3']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../carrerbuilder/<?php echo $row['Work_file4']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									
									<td><a href="../carrerbuilder/<?php echo $row['MACHINERY']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../carrerbuilder/<?php echo $row['SUPPORTING']; ?>" target="_blank"><img src="../cvfolder/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>
									
<td><?php echo $row['message']; ?></td>
									
								<td>
									<a href="#" class="btn btn-danger btn-xs" data-href="certified_delete.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
									
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

	</div>

</section>





<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>

            </div>

            <div class="modal-body">

                <p>Are you sure want to delete this item?</p>

                <p style="color:red;">Be careful! This product will be deleted from the order table, payment table, size table, color table and rating table also.</p>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                <a class="btn btn-danger btn-ok">Delete</a>

            </div>

        </div>

    </div>

</div>



<?php require_once('footer.php'); ?>