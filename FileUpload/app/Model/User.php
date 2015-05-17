<?php
class User extends AppModel{
	public $actsAs = array('Upload.Upload'=>array('image'=>array('fields'=>array('dir' => 'image_dir'))));
}
?>