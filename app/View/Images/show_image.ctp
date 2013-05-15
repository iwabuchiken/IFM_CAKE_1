<!-- File: /app/View/Images/view.ctp -->

<p><?php echo $file_name; ?></p>

<br />

<a href="/IFM_CAKE_1/images/index">Back to the list</a>
<!-- <a href="/images/index">Back to the list</a> -->

<hr />

<!-- REF 50% http://stackoverflow.com/questions/821399/use-css-to-make-an-image-scale-up-and-down answered May 4 '09 at 19:05 -->
<img src="<?php echo "http://benfranklin.chips.jp/images/".$file_name ?>" style="width: 50%; height: 50%"/>
<!-- <img src="<?php echo "http://benfranklin.chips.jp/images/".$file_name ?>" /> -->
<!-- <img src="<?php echo "http://benfranklin.chips.jp/images/".$file_name ?>" width="300" height="300" /> -->
<!-- <img src=<?php echo "ftp://chips.jp-benfranklin@ftp.benfranklin.chips.jp/images/".$file_name ?>/> -->
<!-- <img src=<?php echo "/images/".$file_name ?>/> -->