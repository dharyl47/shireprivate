<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Slider extends CI_Controller {



	/**

	 * Index Page for this controller.

	 *

	 * Maps to the following URL

	 * 		http://example.com/index.php/welcome

	 *	- or -

	 * 		http://example.com/index.php/welcome/index

	 *	- or -

	 * Since this controller is set as the default controller in

	 * config/routes.php, it's displayed at http://example.com/

	 *

	 * So any other public methods not prefixed with an underscore will

	 * map to /index.php/welcome/<method_name>

	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */

	 

	 public function __construct() {

        parent::__construct();

		$this->load->library('form_validation');

		$this->load->model('admin/slider_model');

		$this->load->library('upload');

		$this->load->library('image_lib');

		

		if (!$this->session->userdata('is_admin_login')) {

            redirect('admin/home');

        }

    }

	 

	public function slider_list()

	{

		$group['slider_details'] = $this->slider_model->getAllSlider("slider"); 

		//print_r($group);

		//die();

		$this->load->view('admin/slider/list',$group);

		

	}

	

	public function add()

	{

		$this->load->view('admin/slider/add');

	}

	

	

	public function insert_slider()

	{

		if(isset($_REQUEST['submit']))

		{

			

			$text_one=addslashes($this->input->post('text_one'));

			$text_two=addslashes($this->input->post('text_two'));

			$status=addslashes($this->input->post('status'));

			

			//For Image Upload

			

			if ($_FILES['slider_img']['size'] != 0 && $_FILES['slider_img']['name'] != "")

             {

				$configUpload['upload_path'] = $this->config->item('file_upload_absolute_path').'upload/slider/';

				$configUpload['allowed_types'] = 'gif|jpg|png|jpeg';

				$configUpload['encrypt_name']    = 'TRUE';

				$this->upload->initialize($configUpload);

				$this->upload->do_upload('slider_img');

				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.

				$filepath_image = 'upload/slider/'.$upload_data['file_name'];	

				

				$imgName=$upload_data['file_name'];

				$imagePath=$this->config->item('file_upload_absolute_path').'upload/slider/'.$imgName;

				

				$newImageName=time()."-".$imgName;

				/* Resize */

				$configSize3['image_library']   = 'gd2';

				$configSize3['source_image']    = $imagePath;

				$configSize3['create_thumb']    = false;

				$configSize3['maintain_ratio']  = false;

				$configSize3['width']           = 1366;

				$configSize3['height']          = 546;

				$configSize3['new_image']       = $newImageName;

				

				$this->image_lib->initialize($configSize3);

				$this->image_lib->resize();

				$this->image_lib->clear();	

				

				unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$imgName);

			 }

			 

			 if ($_FILES['slider_sub_img']['size'] != 0 && $_FILES['slider_sub_img']['name'] != "")

             {

				$configUpload['upload_path'] = $this->config->item('file_upload_absolute_path').'upload/slider/';

				$configUpload['allowed_types'] = 'gif|jpg|png|jpeg';

				$configUpload['encrypt_name']    = 'TRUE';

				$this->upload->initialize($configUpload);

				$this->upload->do_upload('slider_sub_img');

				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.

				$filepath_image = 'upload/slider/'.$upload_data['file_name'];	

				

				$subImgName=$upload_data['file_name'];

				$imagePath=$this->config->item('file_upload_absolute_path').'upload/slider/'.$subImgName;

				

				$newSubImageName=time()."-".$subImgName;

				/* Resize */

				$configSize3['image_library']   = 'gd2';

				$configSize3['source_image']    = $imagePath;

				$configSize3['create_thumb']    = false;

				$configSize3['maintain_ratio']  = false;

				$configSize3['width']           = 697;

				$configSize3['height']          = 405;

				$configSize3['new_image']       = $newSubImageName;

				

				$this->image_lib->initialize($configSize3);

				$this->image_lib->resize();

				$this->image_lib->clear();	

				

				unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$subImgName);

			 }

			 



		

		$set=array(

			'text_one'=>$text_one,

			'text_two'=>$text_two,

			'status'=>$status,

			'image'=>$newImageName,

			'sub_image'=>$newSubImageName,

			'prd_order'=>0

		);

		

		

		$this->slider_model->addSlider("slider",$set);			

		redirect(base_url().'admin/slider/list');

			

			

	}

		else

		{

			

		}

	}

	

	

	public function edit($id)

	{

		$where=array('id'=>$id);

		$group['slider_details'] = $this->slider_model->getSliderByWhere("slider",$where); 

		//print_r($group);

		//die();

		$this->load->view('admin/slider/edit',$group);

		

	}

	public function update_slider()

	{

		if(isset($_REQUEST['submit']))

		{

			

			$text_one=addslashes($this->input->post('text_one'));

			$text_two=addslashes($this->input->post('text_two'));

			$status=addslashes($this->input->post('status'));

			$id=$this->input->post('hid_id');

			

			//For Image Upload

			

			if ($_FILES['slider_img']['size'] != 0 && $_FILES['slider_img']['name'] != "")

             {

				$configUpload['upload_path'] = $this->config->item('file_upload_absolute_path').'upload/slider/';

				$configUpload['allowed_types'] = 'gif|jpg|png|jpeg';

				$configUpload['encrypt_name']    = 'TRUE';

				$this->upload->initialize($configUpload);

				$this->upload->do_upload('slider_img');

				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.

				$filepath_image = 'upload/slider/'.$upload_data['file_name'];	

				

				$imgName=$upload_data['file_name'];

				$imagePath=$this->config->item('file_upload_absolute_path').'upload/slider/'.$imgName;

				

				$newImageName=time()."-".$imgName;

				/* Resize */

				$configSize3['image_library']   = 'gd2';

				$configSize3['source_image']    = $imagePath;

				$configSize3['create_thumb']    = false;

				$configSize3['maintain_ratio']  = false;

				$configSize3['width']           = 1366;

				$configSize3['height']          = 546;

				$configSize3['new_image']       = $newImageName;

				

				$this->image_lib->initialize($configSize3);

				$this->image_lib->resize();

				$this->image_lib->clear();	

				

				unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$imgName);

				  

				unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$this->input->post('hid_img'));

				  

				  

			 }

			 else

			 {

				 $newImageName=$this->input->post('hid_img');

			 }

			 

			 

			 if ($_FILES['slider_sub_img']['size'] != 0 && $_FILES['slider_sub_img']['name'] != "")

             {

				$configUpload['upload_path'] = $this->config->item('file_upload_absolute_path').'upload/slider/';

				$configUpload['allowed_types'] = 'gif|jpg|png|jpeg';

				$configUpload['encrypt_name']    = 'TRUE';

				$this->upload->initialize($configUpload);

				$this->upload->do_upload('slider_sub_img');

				$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.

				$filepath_image = 'upload/slider/'.$upload_data['file_name'];	

				

				$subImgName=$upload_data['file_name'];

				$imagePath=$this->config->item('file_upload_absolute_path').'upload/slider/'.$subImgName;

				

				$newSubImageName=time()."-".$subImgName;

				/* Resize */

				$configSize3['image_library']   = 'gd2';

				$configSize3['source_image']    = $imagePath;

				$configSize3['create_thumb']    = false;

				$configSize3['maintain_ratio']  = false;

				$configSize3['width']           = 697;

				$configSize3['height']          = 405;

				$configSize3['new_image']       = $newSubImageName;

				

				$this->image_lib->initialize($configSize3);

				$this->image_lib->resize();

				$this->image_lib->clear();	

				

				unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$subImgName);

				unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$this->input->post('hid_sub_img'));

			 }

			 else

			 {

				 $newSubImageName=$this->input->post('hid_sub_img');

			 }



		

		$set=array(

		'text_one'=>$text_one,

		'text_two'=>$text_two,

		'status'=>$status,

		'image'=>$newImageName,

		'sub_image'=>$newSubImageName

		);

		

		$where=array('id'=>$id);

		

		$this->slider_model->updateSlider("slider",$set ,$where);			

		redirect(base_url().'admin/slider/list');

		

	}

		else

		{

			

		}

	}

	

	public function setting()

	{

		$group['slider_details'] = $this->slider_model->getAllSliderBySortingFlag("slider"); 

		//print_r($group);

		//die();

		$this->load->view('admin/slider/setting',$group);

		

	}

	public function updateSlider()

	{

		

		$updateRecordsArray = $_POST['recordsArray'];

		

		$listingCounter = 1;

		foreach ($updateRecordsArray as $recordIDValue) {

			

		$set=array(

		'prd_order'=>$listingCounter

		);

		$where=array('id'=>$recordIDValue);

	

		$this->slider_model->updateSliderSortingFlag("slider",$set ,$where);

		$listingCounter = $listingCounter + 1;

		}

		

		echo "<p>Update Successfully</p>";

	}

	

	public function delete($id)

	{

		$where=array('id'=>$id);

		$group['slider_details'] = $this->slider_model->getSliderImageByWhere("slider",$where);

		

		//echo "<pre>";

		//print_r($group);

		//echo $group['slider_details'][0]['image'];

		

		foreach($group['slider_details'] as $values)

		{

		    $image=stripslashes($values['image']); 

			$sub_image=stripslashes($values['sub_image']); 

			

			unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$image);

			unlink($this->config->item('file_upload_absolute_path').'upload/slider/'.$sub_image);

		}

		

		$this->slider_model->deleteSliderImageByWhere("slider",$where);

		redirect('admin/slider/list');

	}

	

}

