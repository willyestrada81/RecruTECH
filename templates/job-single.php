<?php include 'inc/header.php'; ?>
<div class="container" id="job_listing">
    <h3 class="job-title"><?php echo $job->job_title; ?></h3>
    <h4>
    <svg class="bi bi-geo-alt" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 002 6c0 4.314 6 10 6 10zm0-7a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
</svg>
    <em><?php echo $job->location; ?></em></h4>
    <br>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><small><em>Posted By: <?php echo $job->contact_user; ?>, on <?php echo $job->post_date; ?></em></small>
        <a class="btn btn-primary apply-btn" href="mailto:<?php echo $job->contact_email; ?>">Apply &nbsp
        <svg class="bi bi-envelope-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M.05 3.555L8 8.414l7.95-4.859A2 2 0 0014 2H2A2 2 0 00.05 3.555zM16 4.697l-5.875 3.59L16 11.743V4.697zm-.168 8.108L9.157 8.879 8 9.586l-1.157-.707-6.675 3.926A2 2 0 002 14h12a2 2 0 001.832-1.195zM0 11.743l5.875-3.456L0 4.697v7.046z"/>
        </svg></a></li>
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
    </ul>
    <br>
    <br>
    <a class="btn btn-primary" href="index.php">Go back
      <svg class="bi bi-arrow-return-left" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M5.854 5.646a.5.5 0 010 .708L3.207 9l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5      0     01.708 0z" clip-rule="evenodd"/>    
        <path fill-rule="evenodd" d="M13.5 2.5a.5.5 0 01.5.5v4a2.5 2.5 0 01-2.5 2.5H3a.5.5 0 010-1h8.5A1.5 1.5 0 0013 7V3a.5.5 0 01.5-.     5z"     clip-rule="evenodd"/>     
      </svg>      
    </a>

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