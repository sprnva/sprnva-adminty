<?php

use App\Core\Auth;

require __DIR__ . '/../layouts/head.php'; ?>


<div class="col-md-12 pb-3">
	<a href="<?= route('/project/create') ?>" class="btn btn-secondary btn-sm text-rigth">
		<i class="fas fa-plus"></i> Add Project
	</a>
</div>

<div class="col">
	<?= alert_msg(); ?>
	<div class="card p-4">
		<!-- Light table -->
		<div class="table-responsive">
			<table class="table align-items-center table-striped table-bordered" id="projectTable">
				<thead class="thead-light">
					<tr>
						<th scope="col" class="sort" data-sort="name">Project Code</th>
						<th scope="col" class="sort" data-sort="budget">Project Name</th>
						<th scope="col" class="sort" data-sort="status">Project Description</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody class="list">
					<?php foreach ($project_datas as $projects) : ?>
						<tr>
							<td><a href="<?= route("/project/{$projects['id']}/edit") ?>"><?= $projects['project_code'] ?></a></td>
							<td><?= $projects['project_name'] ?></td>
							<td><?= $projects['description'] ?></td>
							<td>
								<a href="<?= route("/project/{$projects['id']}/delete") ?>" style="color: red;" onclick="event.preventDefault(); document.getElementById('delete-project-form-' + '<?= $projects['id'] ?>').submit();">
									<i class="feather icon-trash"></i>
								</a>

								<form id="delete-project-form-<?= $projects['id'] ?>" action="<?= route("/project/{$projects['id']}/delete") ?>" method="POST" style="display:none;">
									<?= csrf() ?>
								</form>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>

			</table>
		</div>
	</div>
</div>


<script>
	$(document).ready(function() {
		$('#projectTable').DataTable();
	});
</script>

<?php require __DIR__ . '/../layouts/footer.php'; ?>