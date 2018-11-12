
/**
 * Created by PhpStorm.
 * User: ju.zulaika
 * Date: 17/10/2018
 * Time: 18:20
 */


<?php slot('title', sprintf('Jobs in the %s category', $c->getName())) ?>

<div class="category">
  <div class="feed">
    <a href="">Feed</a>
  </div>
  <h1><?php echo $c ?></h1>
</div>

<?php include_partial('job/list', array('jobs' => $category->getActiveJobs(sfConfig::get('app_max_jobs_on_homepage')))) ?>
