<!-- File: /app/View/Images/index.ctp -->

<h1>Blog images</h1>
<table>
    <tr>
        <th>Image</th>
        <th>Id</th>
        <th>File name</th>
        <th>Show image</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $images array, printing out image info -->

	<!-- REF image link http://book.cakephp.org/2.0/ja/core-libraries/helpers/html.html "HtmlHelper::image(string $path, array $options = array())" -->
	<!-- REF options http://stackoverflow.com/questions/5992919/cakephp-image-link "answered May 13 '11 at 13:58" -->
    <?php foreach ($images as $image): ?>
	    <tr>
	    	<td width="100" height="100">
	    		<?php echo $this->Html->image(
						"http://benfranklin.chips.jp/images/".$image['Image']['file_name'],
						array(
						    "alt" => "ブラウニー",
						    'url' => array(
						    			'controller' => 'images',
						    			'action' => 'show_image',
						    			$image['Image']['file_name']),
						    'style' => array('width: 50%; height: 100%;')
				)); ?>
	    		
<!--	    	<?php echo $this->Html->link(
	    						$this->Html->image(
	    								"http://benfranklin.chips.jp/images/".$image['Image']['file_name'],
	    								array("alt" => "No image")),
								array('controller' => 'images', 'action' => 'show_image',
											$image['Image']['file_name'])); ?>
											
<!--	    	<td width="100" height="100">
	    	<!-- <td width="100" height="50"> -->
<!--	    		<img src="<?php echo
	    				"http://benfranklin.chips.jp/images/".$image['Image']['file_name'] ?>"
						style="width: 50%; height: 100%"/>

-->
	    	</td>
	        <td><?php echo $image['Image']['id']; ?></td>
	        <td>
	            <?php echo $this->Html->link($image['Image']['file_name'],
								array('controller' => 'images', 'action' => 'view',
											$image['Image']['id'])); ?>
	        </td>
	        
	        <td>
	        	
	        	<?php echo $this->Html->link('Go',
								array('controller' => 'images', 'action' => 'show_image',
											$image['Image']['file_name'])); ?>
	        
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

<hr />
<a href="/IFM_CAKE_1/images/add">New image</a><br />

<!-- <?php echo $__FILE__ ?> --><br />
<!-- <?php
echo $_SERVER['SERVER_NAME'];
?> -->
<br />
<!-- <?php echo __FILE__ ?> -->
<!-- <?php echo $__FILE__." YES" ?> -->