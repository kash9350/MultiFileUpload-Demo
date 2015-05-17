<?php 
class UsersController extends AppController{
	public function add(){
		$this->layout='default';
		//pr($data);
		if(!empty($this->request->is('post')))
        {
        		$a=array(); 
			//pr($this->data);

			$path=$this->data['User']['images'];
			pr($path);
			for($i=0;$i<count($path);$i++){
			$a[$i]['image']['name']=$path[$i]['name'];
			$a[$i]['image']['type']=$path[$i]['type'];
			$a[$i]['image']['tmp_name']=$path[$i]['tmp_name'];
			$a[$i]['image']['error']=$path[$i]['error'];
			$a[$i]['image']['size']=$path[$i]['size'];
			//$a['User']['image_dir']=$this->data['User'];
			//$this->User->save($a);

			}
		$this->User->saveMany($a);

		}
        	pr($this->data);
                //now do the save
                if($this->User->save($this->data)) {

                	$this->Session->setFlash('Successful');
                	$id=$this->User->getLastInsertId();
                	$this->redirect(array('controller'=>'users','action'=>'view',$id));	
                } else {
                	$this->Session->setFlash('Fail');
                }
                // echo "<img src='/ImageTrial/files/user/image/44/10957339_592163027586204_5377968201807179295_n.jpg' />";
        }
	

	public function create(){
	if($this->request->is('post')){
		$a=array(); 
		//pr($this->data);
		$path=$this->data['User']['image'];
		for($i=0;$i<count($path);$i++){
		$a[$i]['image']['name']=$path[$i]['name'];
		$a[$i]['image']['type']=$path[$i]['type'];
		$a[$i]['image']['tmp_name']=$path[$i]['tmp_name'];
		$a[$i]['image']['error']=$path[$i]['error'];
		$a[$i]['image']['size']=$path[$i]['size'];

		}
		$this->User->saveMany($a);

		}
}
//pr($a);
	public function view($id=null){
		//$this->layout='default';
		if($id != null){
			$photo=$this->User->findById($id);
		//pr($id);
		$this->set('photo',$photo);
		}
		else
		{
			$this->Session->setFlash('Sorry no Images are there to Display');
		}
		//$id=$this->User->getLastInsertId();
		
	}
		// if(!empty($this->request->is('post'))){
		// 	//Check if image has been Uploaded
		// 	if(!empty($this->data['User']))
		// 	{
		// 		$file = $this->request->data['User']['upload'];//put the data into var for easy use

		// 		$imageTypes = array('image/gif','image/jpeg','image/png');//set allowed extension
		// 		$uploadFolder = 'uploads';
		// 		$uploadPath = WWW_ROOT . $uploadFolder;

		// 		foreach ($imageTypes as $type) {
		// 			if($type == $file['type']){
		// 				if($file['error'] == 0){
		// 					$imageName = $file['name'];
		// 					if(file_exists($uploadPath . '/' . $imageName)){
		// 						$imageName = date('His') . $imageName;
		// 					}
		// 					$full_path_name = $uploadPath . '/' . $imageName;
		// 					if(move_uploaded_file($file['temp_name'], $full_path_name)){
		// 						$this->Session->setFlash('File upload Successful');
		// 						$this->set('imageName',$imageName);
		// 					}
		// 					else{
		// 						$this->Session->setFlash('There  was a problem uploading file. Please tyr again');
		// 					}

		// 				}
		// 				else{
		// 					$this->Session->setFlash('Error Uploading File');
		// 				}
		// 				break;
		// 			}
		// 			else
		// 			{
		// 				$this->Session->setFlash('Unacceptable File Type');
		// 			}

		// 			# code...
		// 		}
		// 		//only process if the extension is valid
				
		// 	}
		// }

	// var $name = 'Users';
	// public $helpers=array('Html','Form','Session');
	// public $components=array('Session');
	

	// public function index(){
	// 	$this->set('users',$this->User->find('all'));
	// }
	
	// public function view($id=null){
	// 	if(!$id)
	// 	{
	// 		throw new NotFoundException(__('Invalid Post'));
	// 	}
	// 	$post=$this->User->findById($id);
	// 	if(!$post)
	// 	{
	// 		throw new NotFoundException(__('Invalid Post'));
	// 	}
	// 	$this->set('post',$post);
	// }
	
	// public function add() {
	// 	$this->User->create();
	// 	if ($this->request->is('post')) {
	// 			for($i=1;$i<4;$i++)
	// 			{
	// 				if(empty($this->data['User']['image'.$i]['name'])){
	// 					unset($this->request->data['User']['image'.$i]);
	// 				}
					
	// 				// if(!empty($this->data['User']['image'.$i]['name']))
	// 				// {
	// 				// 	$file=$this->data['User']['image'.$i];
	// 				// 	$ary_ext=array('jpg','jpeg','gif','png'); //array of allowed extensions
	// 				// 	$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
	// 				// 	if(in_array($ext, $ary_ext))
	// 				// 	{
	// 				// 		//move_uploaded_file($data['User']['tmp_name'], WWW_ROOT . 'img/uploads/users/' . time().$data['User']['name']);
	// 				// 		//$this->request->data['User']['image'.$i] = time().$file['name'];
	// 				// 	}
	// 				// }
	// 				if(!empty($this->data['User']['image'.$i]['name']))
	// 				{
	// 					$file = $this->request->data['User']['image'.$i];//put the data into var for easy use
	// 					$imageTypes = array('image/gif','image/jpeg','image/png');//set allowed extension
	// 					$uploadFolder = 'uploads';
	// 					$uploadPath = WWW_ROOT . $uploadFolder;
	// 					foreach ($imageTypes as $type) {
	// 					if($type == $file['type']){
	// 						if($file['error'] == 0){
	// 							$imageName = $file['name'];
	// 							pr($this->data);
	// 							//$tempName = $this->data['User']['image'.$i]['temp_name'];
	// 							//pr($tempName);
	// 							if(file_exists($uploadPath . '/' . $imageName)){
	// 								$imageName = date('His') . $imageName;
	// 							}
	// 							$full_path_name = $uploadPath . '/' . $imageName;
	// 							if(move_uploaded_file($this->data['User']['image'.$i]['temp_name'], $full_path_name)){
	// 								$this->Session->setFlash('File upload Successful');
	// 								$this->set('imageName',$imageName);
	// 							}
	// 							else{
	// 								$this->Session->setFlash('There  was a problem uploading file. Please tyr again');
	// 							}

	// 						}
	// 						else{
	// 							$this->Session->setFlash('Error Uploading File');
	// 						}
	// 						break;
	// 					}
						
	// 				}
	// 			}
	// 		}
 // 			if ($this->User->save($this->request->data)) 
 // 			{
	// 			$this->Session->setFlash('Your User has been saved.');
	// 			$this->redirect(array('action' => 'index'));
	// 		}
	// 		else 
	// 		{
	// 			$this->Session->setFlash('Unable to add your post.');
	// 		}
	// 	}
	// }
	
	
	// public function edit($id=null){
	// 	if(!$id)
	// 	{
	// 		throw new NotFoundException(__('Invalid Post'));
	// 	}

	// 	$post=$this->User->findById($id);
	// 	if(!$post)
	// 	{
	// 		throw new NotFoundException(__('Invalid Post'));
	// 	}
		
	// 	if(!empty($this->data))
	// 	{
	// 			$this->User->id=$id;
	// 			for($i=1;$i<4;$i++)
	// 			{
	// 			if(empty($this->data['User']['image'.$i]['name'])){
	// 					unset($this->request->data['User']['image'.$i]);
	// 				}
	// 				if(!empty($this->data['User']['image'.$i]['name']))
	// 				{
	// 						if(file_exists("img/uploads/users/".$this->data['User']['hiddenimage'.$i])){
 // 								unlink("img/uploads/users/".$this->data['User']['hiddenimage'.$i]);								
	// 			     }
						
	// 					$file=$this->data['User']['image'.$i];
	// 					$ary_ext=array('jpg','jpeg','gif','png'); //array of allowed extensions
	// 					$ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
						
	// 					if(in_array($ext, $ary_ext))
	// 					{
	// 						move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/uploads/users/' . mktime().$file['name']);
	// 						$this->request->data['User']['image'.$i] = mktime().$file['name'];
	// 					}
	// 				}
	// 			}
				
	// 			if($this->User->save($this->request->data))
	// 			{
	// 				$this->Session->setFlash('Your User has been Updated');			
	// 				$this->redirect(array('action'=>'index'));	
	// 			}
	// 			else
	// 			{
	// 				$this->Session->setFlash('Unable to update your post.');
	// 			}
	// 	}
		
	// 	if(!$this->request->data){
	// 		$this->request->data=$post;
	// 	}
	// }
	
	// public function delete($id=null){
	// 	if($this->request->is('get')){
	// 		throw new MethodNotAllowedException();
	// 	}
	// 	if($this->User->delete($id)){
	// 		$this->Session->setFlash('User having ID : '.$id.' has been deleted');
	// 		$this->redirect(array('action'=>'index'));
	// 	}
	// }
}
