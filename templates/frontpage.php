<?php include 'inc/header.php'; ?>

 <!-- Body -->
 <section id="search">
    <div class="jumbotron jumbotron-fluid">
        <div class="container top-find">
            <br>
            <h1 class="display-4">Find a Job</h1>
            <form method="GET" action="index.php" class="form">
            <div class="form-row align-items-center">
            <div class="col-auto">
            <select name="category" class="form-control">
                    <option value=0>Choose Category</option>
                    <?php foreach($categories as $category): ?>
                    <option value=<?php echo $category->id; ?>><?php echo $category->name; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-lg btn-primary"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0               010-1.415z" clip-rule="evenodd"/>
                  <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113               0z" clip-rule="evenodd"/>
                </svg>&nbsp&nbsp&nbsp&nbspFind</button>
            </div>
            </div>
            </form>
        </div>
    </div>
 </section>
 <section id="job_listing">
     <div class="container">
         <h2><?php echo $title; ?></h2>
         <br>
         <?php if (empty($jobs)) {
             echo '<h5>0 Jobs Found</h5>';
         } ?>
        <?php foreach($jobs as $job): ?>
                <div class="row marketing">
                    <div class="col-md-10">
                        <a href="job.php?id=<?php echo $job->id; ?>" class="title-link">
                            <h3 class="job-title"><?php echo $job->job_title; ?></h3>
                        </a>
                        <p><?php echo substr($job->description, 0, 300)."..."; ?> </p>
                        <p><a class="btn btn-primary" href="job.php?id=<?php echo $job->id; ?>" role="button">View details »</a></p>
                    </div>
                    </div>
        <?php endforeach; ?>
     </div>
</section>

<?php include 'inc/footer.php'; ?>
