<?php require_once('header.php'); ?>



<section class="content-header" style="margin-left: 123px;">

	<div class="content-header-left">

		<h1>Being A Design Partner And Consultant</h1>

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

											<th> Comany Name</th>

											<th>Address </th>

											<th>Website</th>

											<th>Name</th>

											<th>Designation</th>

											<th>Email</th>
											<th>Contact No</th>
                                             <th>Design Field</th>
											  <th>Capability</th>
											   <th>Specialization</th>
											 <th>Experience In Years</th>
												<th>Precious Project IMG1</th>
												<th>Precious Project IMG2</th>
												<th>Precious Project IMG3</th>
												<th>Precious Project IMG4</th>
												<th>Message</th>
												<th>Document</th>
												<th>Action</th>
												

							</tr>

						</thead>

						<tbody>

							<?php

							$i=0;

							$statement = $pdo->prepare("SELECT *FROM consultant 

							                           

							                           	");

							$statement->execute();

							$result = $statement->fetchAll(PDO::FETCH_ASSOC);

							foreach ($result as $row) {

								$i++;

								?>

								<tr>

									<td><?php echo $i; ?></td>

									

									<td><?php echo $row['company']; ?></td>
									<td><?php echo $row['address']; ?></td>

									<td><?php echo $row['website']; ?></td>

									<td><?php echo $row['name']; ?></td>

									<td><?php echo $row['designation']; ?></td>

									<td><?php echo $row['email']; ?></td>

									<td><?php echo $row['contact']; ?></td>
									<td><?php echo $row['design_field']; ?></td>
									<td><?php echo $row['capability']; ?></td>
									<td><?php echo $row['specialization']; ?></td>
									<td><?php echo $row['exp_years']; ?></td>
									
									<?php echo $row['precious_project1']; ?>
									
									<td><a href="../careerparther/<?php echo $row['precious_project1']; ?>" target="_blank"><img src="../careerparther/unnamed.png" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../careerparther/<?php echo  $row['precious_project2']; ?>" target="_blank"><img src="../careerparther/unnamed.png" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../careerparther/<?php echo $row['precious_project3']; ?>" target="_blank"><img src="../careerparther/unnamed.png" class="existing-photo" style="width:50px;"></a></td>
									<td><a href="../careerparther/<?php echo $row['precious_project4']; ?>" target="_blank"><img src="../careerparther/unnamed.png" class="existing-photo" style="width:50px;"></a></td>
									<td><?php echo $row['message']; ?></td>
<td><a href="../careerparther/<?php echo $row['browse_file']; ?>" target="_blank"><img src="../careerparther/256x256bb.jpg" class="existing-photo" style="width:50px;"></a></td>

																<td>
									<a href="#" class="btn btn-danger btn-xs" data-href="design_part.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
									
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