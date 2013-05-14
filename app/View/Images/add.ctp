<!-- File: /app/View/Posts/add.ctp -->

<h1>Add Post</h1>
<?php
	echo $this->Form->create('Image');
	echo $this->Form->input('file_path');
	echo $this->Form->input('file_name');
	
	echo $this->Form->end('Save Image');
?>

<hr />
<a href="/IFM_CAKE_1/images/index">Back to the list</a><br />
