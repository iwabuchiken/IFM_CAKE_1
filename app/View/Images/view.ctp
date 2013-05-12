<!-- File: /app/View/Images/view.ctp -->

<h1><?php echo h($image['Image']['id']); ?></h1>

<p><small>Created: <?php echo $image['Image']['created']; ?></small></p>

<p><?php echo h($image['Image']['file_name']); ?></p>

<a href="/IFM_CAKE_1/images/index">Back to the list</a>
<!-- <a href="/images/index">Back to the list</a> -->