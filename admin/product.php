<?php require_once('header.php'); ?>

<section class="content-header" style="margin-left: 123px;">
	<div class="content-header-left">
		<h1>Contact Us Enquery</h1>
	</div>
	
</section>

<section class="content" style="margin-left: 123px;">>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>#</th>
											<th> Name</th>
											<th>Email </th>
											<th>Phone</th>
											<th>Pincode</th>
											<th>Subject</th>
											<th>Message</th>
											<th>Action</th>
											
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare("SELECT *FROM contact 
							                           
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								$i++;
								?>
								<tr>
									<td><?php echo $i; ?></td>
									
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td><?php echo $row['phone']; ?></td>
									<td><?php echo $row['pincode']; ?></td>
									<td><?php echo $row['subject']; ?></td>
									<td><?php echo $row['message']; ?></td>
									
									<td>
									<a href="#" class="btn btn-danger btn-xs" data-href="contact_deleate.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
									
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