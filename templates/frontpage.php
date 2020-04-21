<?php include 'inc/header.php'; ?>

 <!-- Body -->
 <section id="search">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
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
                <input type="submit" class="btn btn-lg btn-primary" value="FIND">
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
