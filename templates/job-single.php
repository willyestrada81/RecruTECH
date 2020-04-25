<?php include 'inc/header.php'; ?>
<div class="container" id="job_listing">
    <h3 class="job-title"><?php echo $job->job_title; ?></h3>
    <h4><em><?php echo $job->location; ?></em></h4>
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><small><em>Posted By: <?php echo $job->contact_user; ?>, on <?php echo $job->post_date; ?></em></small></li>
    </ul>
    <br>
    <br>
    <p><?php echo $job->description; ?></p>
    <br>
    <br>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">Category: <?php echo $category ?></li>
        <li class="list-group-item">Company: <?php echo $job->company; ?></li>
        <li class="list-group-item">Salary: <?php echo $job->salary; ?></li>
        <li class="list-group-item">How to Apply: <?php echo $job->contact_email; ?></li>
    </ul>
    <br>
    <br>
    <a class="btn btn-primary" href="index.php">Go back...</a>

    <?php if (isset($_SESSION['user'])) {
        if ($_SESSION['user'] == $job->contact_email) {
            echo '<a class="btn btn-outline-warning" name="edit" href=create.php?edit='.$job->id.'>Edit</a>';
            echo '&nbsp';
            echo '<button class="btn btn-outline-danger" name="delete" href=create.php?edit='.$job->id.' data-toggle="modal" id="modalDelete" data-target="#deleteModal">Delete</button>';
        }
    }?>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Listing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete <strong><?php echo $job->job_title?></strong>?
      </div>
      <div class="modal-footer">
      <form action="delete.php" method="GET">
        <input type="hidden" name="delete_job" value="<?php echo $job->id;?>">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">DELETE</button>
      </form>
      </div>
    </div>
  </div>
</div>

<script>
$('#modalDelete').on('show.bs.modal', function (event) {
  var button = $(event.deleteModal)
  var recipient = button.data('whatever') 

  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>

<?php include 'inc/footer.php'; ?>