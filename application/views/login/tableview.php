<?=content_open($title)?>
<a href="<?=site_url($url.'/form/tambah')?>" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah</a>
<hr>
<?=$this->session->flashdata('info')?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>username</th>
			<th>password</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			foreach ($datatable->result() as $row) {
				?>
					<tr>
						<td><?=$no?></td>
						<td><?=$row->username?></td>
						<td><?=$row->password?></td>
				<?php
				$no++;
			}

		?>
	</tbody>
</table>
<?=content_close()?>