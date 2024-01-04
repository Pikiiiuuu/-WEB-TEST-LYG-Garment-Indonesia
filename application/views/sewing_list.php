<p>
	<h3> Summary </h3>
</p>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>NO</th>
			<th>Date</th>
			<th>Style</th>
			<th>Total Size</th>
			<th>Total Output</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1;
		foreach ($sewing as $sewing) { ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $sewing->trnDate; ?></td>
			<td><?php echo $sewing->styleCode; ?></td>
			<td><?php echo $sewing->output; ?></td>
			<td><?php echo $sewing->size; ?></td>
			<td>
				<a href="#" class="btn btn-primary btn-xs"> View Detail</a>
				<a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="return confirm('Yakin ingin menghapus data ini ?')"></i> Delete</a>
			</td>
		</tr>
		<?php }?>
	</tbody>
	
</table>