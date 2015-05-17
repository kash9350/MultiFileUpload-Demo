<!-- File: /app/View/Posts/view.ctp -->
<?php pr($this->webroot)?>
<?php pr($photo['User']['image'])?>
<?php pr($photo['User']['image_dir'])?>
<!--<?php pr($photo['User']['image']['type'])?>	-->
<?php echo '<img src="'.$this->webroot.'files/user/image/'.$photo['User']['id'].'/'.$photo['User']['image'].'" />';?>
<?php
pr($photo['User']['image']);
pr($this->webroot."files/user/image/".$photo['User']['id']."/".$photo['User']['image']); 

?>
<br/>
<br/>
<!--IMPORTANT link for viewing PDF files-->
<a href="<?php echo $this->webroot.'files/user/image/'.$photo['User']['id'].DS.$photo['User']['image'];?>">
View File</a>
<a href="<?php echo $this->webroot.'files/user/image/'.$photo['User']['id'].DS.$photo['User']['image'];?>" download="<?php echo $photo['User']['image']?>">
Download File</a>
 <!-- <a href="'<?php //echo '$this->webroot.'files/user/image'.$photo['User']['id'].'/'.$photo['User']['image'];'?>'">Click here to download the PDF!</a>'; -->

<!-- <h1>ID : <?php echo h($post['User']['id']); ?></h1>
<h1>TItle : <?php echo h($post['User']['name']); ?></h1>
<?php 
for($i=1;$i<4;$i++)
{
	if(!empty($post['User']['image'.$i]))
	{
		echo $this->Html->image('/img/uploads/users/'.$post['User']['image'.$i]); ?>
	<?php }	
}?> -->





