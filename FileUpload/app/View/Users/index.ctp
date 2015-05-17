<!-- File: /app/View/Posts/index.ctp -->
<?php echo $this->Html->link('Add',array('action'=>'add'));?><br/><br/>
<table width="100%" id="tbl">
<tr>
        <th><?php echo 'id'; ?></th>
        <th><?php echo 'title'; ?></th>
        <th><?php echo 'Image1'; ?></th>
        <th><?php echo 'Image2'; ?></th>
        <th><?php echo 'Image3'; ?></th>
        <th><?php echo 'Actions'; ?></th>
</tr>
<?php foreach ($users as $post):?>
<tr>
<td style="width:10%"><?php echo $post['User']['id'];?></td>
<td style="width:15%"><?php echo $post['User']['name'];?><br/></td>
<td style="width:10%"><?php //echo $this->Html->image('/img/uploads/posts/'.$post['Post']['image1'],array('style'=>'max-height:100px'));?>
<?php	
$MyImage = $post['User']['image1'];
  if (file_exists("img/uploads/users/".$MyImage)) 
	  	   $MyImage1 ="/img/uploads/users/".$MyImage;
  else
	   	   $MyImage1 = "/img/uploads/users/no-icon.jpg";
	
	if($MyImage=='NULL' || $MyImage=='')
	   	   $MyImage1 = "/img/uploads/users/no-icon.jpg";
		   
echo $this->Html->image($MyImage1);
?></td>
<td style="width:10%"><?php //echo $this->Html->image('/img/uploads/posts/'.$post['Post']['image2'],array('style'=>'max-height:100px'));?>
<?php	
$MyImage = $post['User']['image2'];
  if (file_exists("img/uploads/users/".$MyImage)) 
	  	   $MyImage2 ="/img/uploads/users/".$MyImage;
  else
	   	   $MyImage2 = "/img/uploads/users/no-icon.jpg";
	if($MyImage=='NULL' || $MyImage=='')
	   	   $MyImage2 = "/img/uploads/users/no-icon.jpg";

echo $this->Html->image($MyImage2);
?></td>

<td style="width:10%"><?php //echo $this->Html->image('/img/uploads/posts/'.$post['Post']['image3'],array('style'=>'max-height:100px'));?>
<?php	
$MyImage = $post['User']['image3'];
  if (file_exists("img/uploads/users/".$MyImage)) 
	  	   $MyImage3 ="/img/uploads/users/".$MyImage;
  else
	   	   $MyImage3 = "/img/uploads/users/no-icon.jpg";
	if($MyImage=='NULL' || $MyImage=='')
	   	   $MyImage3 = "/img/uploads/users/no-icon.jpg";

	    echo $this->Html->image($MyImage3);

?></td>

<td>
<?php echo $this->Html->link('View',array('action'=>'view',$post['User']['id']));?>&nbsp;&nbsp;
<?php //echo $this->Html->link('Edit',array('action'=>'edit',$post['User']['id']));?>&nbsp;&nbsp;
<?php echo $this->Form->postLink('Delete',array('action'=>'delete',$post['User']['id']),array('confirm'=>'Are You sure..??'));?></td>

</tr>
<?php endforeach;?>
	<?php unset($post);?>
</table>