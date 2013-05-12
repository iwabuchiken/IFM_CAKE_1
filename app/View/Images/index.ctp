<!-- File: /app/View/Images/index.ctp -->

<h1>Blog images</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $images array, printing out image info -->

    <?php foreach ($images as $image): ?>
    <tr>
        <td><?php echo $image['Image']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($image['Image']['file_name'],
array('controller' => 'images', 'action' => 'view', $image['Image']['id'])); ?>
        </td>
        <td><?php echo $image['Image']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($image); ?>
</table>
<?php

	// $html->image("/data/images/1_complimentary-colors.jpg", array("class" => "save_button"));
?>
<!-- <img src="1_complimentary-colors.jpg" width="300" height="300" /> -->
<!-- <img src="data/images/1_complimentary-colors.jpg" width="300" height="300" /> -->
<!-- <img src="/data/images/1_complimentary-colors.jpg" width="300" height="300" /> -->