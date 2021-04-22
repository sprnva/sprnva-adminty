<?php

use App\Core\Auth;

require __DIR__ . '/../layouts/head.php'; ?>


<div class="col-sm-12">
    <form method="POST" action="<?= route('/entry') ?>">
        <div style="display: flex;flex-direction: row;align-items: flex-end;">
            <div class="d-flex justify-content-end ml-2">
                <button type="submit" class="btn btn-secondary btn-sm text-rigth">ADD ENTRY</button>
            </div>
        </div>
    </form>
</div>

<div class="col-sm-12">
    <div class="card p-4">
        <div class="table-responsive">
            <table class="table align-items-center table-striped table-bordered" id="testCrudTable">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">NAME</th>
                        <th scope="col" class="sort" data-sort="budget">DATE</th>
                        <th scope="col" class="sort" data-sort="status">AMOUNT</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list">


                    <tr>
                        <td>
                            user_id
                        </td>
                        <td>
                            date created
                        </td>
                        <td>
                            test
                        </td>
                        <td><a href="<?= route('/delete', $late->id) ?>" style="color: red;"><i class="far fa-trash-alt"></i></a></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#testCrudTable').DataTable({
            "ordering": false
        });
    });
</script>

<?php require __DIR__ . '/../layouts/footer.php'; ?>