    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Location extends CI_Controller {

    /**
     * Index location for this controller.
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
        $this->load->model('admin/location_model');
        $this->load->library('upload');
        $this->load->library('image_lib');

        if (!$this->session->userdata('is_admin_login')) {
            redirect('admin/home');
        }
    }

    public function location_list()
    {
        $group['location_details'] = $this->location_model->getAllLocation("locations"); 
        //print_r($group);
        //die();
        $this->load->view('admin/location/list',$group);

    }
    public function edit($id)
    {
        $where=array('id'=>$id);
        $group['location_details'] = $this->location_model->getLocationByWhere("locations",$where); 
        //print_r($group);
        //die();
        $this->load->view('admin/location/edit',$group);

    }

    public function add()
    {
        $this->load->view('admin/location/add');
    }

    public function addLocation()
    {
        if(isset($_POST['submit']))
        {
            $location=addslashes($_POST['location']);
            $content=str_replace("../../../upload/",base_url()."upload/",addslashes($this->input->post('content')));
            $map  = addslashes($this->input->post('maps')); 
            $url_part=addslashes($this->input->post('url_part')); 
            $seo_title=addslashes($this->input->post('seo_title')); 
            $seo_meta=addslashes($this->input->post('seo_meta')); 
            $seo_keyword=addslashes($this->input->post('seo_keyword'));
            $status=addslashes($_POST['status']);


            $set=array(
                    'location'=>$location,
                    'url_part'=>$url_part,
                    'content'=>$content,
                    'map'=>$map,
                    'seo_title'=>$seo_title,
                    'seo_meta'=>$seo_meta,
                    'seo_keyword'=>$seo_keyword,
                    'status'=>$status
                );

            $this->location_model->addNewTesttimonial("locations",$set ,$where);			
            redirect(base_url().'admin/location/list');	

        }
    }

    public function updateLocation()
    {
        if(isset($_POST['submit']))
        {
            $location=addslashes($_POST['location']);
            $content=str_replace("../../../upload/",base_url()."upload/",addslashes($this->input->post('content')));
            $map  = addslashes($this->input->post('maps')); 
            $url_part=addslashes($this->input->post('url_part')); 
            $seo_title=addslashes($this->input->post('seo_title')); 
            $seo_meta=addslashes($this->input->post('seo_meta')); 
            $seo_keyword=addslashes($this->input->post('seo_keyword')); 
            $status=addslashes($_POST['status']);
            $id=$_POST['hid_id'];

        $set=array(
                    'location'=>$location,
                    'url_part'=>$url_part,
                    'content'=>$content,
                    'map' =>$map,
                    'seo_title'=>$seo_title,
                    'seo_meta'=>$seo_meta,
                    'seo_keyword'=>$seo_keyword,
                    'status'=>$status
                );
        // print_r($set);die('line112');

        $where=array('id'=>$id);

        $this->location_model->updateLocation("locations",$set ,$where);			
        redirect(base_url().'admin/location/list');


    }



    }


    public function delete($id)
    {
        $where=array('id'=>$id);
        $this->location_model->deleteLocationById("locations",$where);
        redirect(base_url().'admin/location/list');
    }

    public function homeLocationChecked($id,$flag)
    {
        $where=array('id'=>$id);
        $set=array(
                    'home_flag'=>$flag
                );

        $this->location_model->updateHomeFlag("locations",$set ,$where);
        echo $id;		
    }

    public function setting()
    {
        $group['location_details'] = $this->location_model->getAllLocationBySortingFlag("locations"); 
        //print_r($group);
        //die();
        $this->load->view('admin/location/setting',$group);

    }

    public function updateLocationFlag()
    {
        $updateRecordsArray = $_POST['recordsArray'];

        $listingCounter = 1;
        foreach ($updateRecordsArray as $recordIDValue) {

        $set=array(
        'prd_order'=>$listingCounter
        );
        $where=array('id'=>$recordIDValue);

        $this->location_model->updateLocationSortingFlag("locations",$set ,$where);
        $listingCounter = $listingCounter + 1;
        }

        echo "<p>Update Successfully</p>";
    }
		
	public function test()
	{
		$lcn=array('Alfords Point','Audley','Bangor','Barden Ridge','Bonnet Bay','Bundeena','Burraneer','Caringbah','Caringbah South','Como','Cronulla','Dolans Bay','Engadine','Gymea','Gymea Bay','Heathcote','Illawong','Jannali','Kangaroo Point','Kareela','Kirrawee','Kurnell','Lilli Pilli','Loftus','Lucas Heights','Maianbar','Menai','Menai Central','Miranda','Oyster Bay','Port Hacking','Sandy Point','Sutherland','Sylvania','Sylvania Southgate','Sylvania Waters','Taren Point','Waterfall','Woolooware','Woronora','Woronora Heights','Yarrawarrah','Yowie Bay','Allawah','Beverly Park','Beverly Hills','Blakehurst','Carlton','Carss Park','Connells Point','Hammondville','Holsworthy','Hurstville','Hurstville Grove','Kingsgrove','Kogarah','Kogarah Bay','Kyle Bay','Lugarno','Milperra','Moorebank','Mortdale','Narwee','Oatley','Padstow','Panania','Peakhurst','Peakhurst Heights','Penshurst','Ramsgate','Revesby','Riverwood','Sans Souci','South Hurstville','Voyager Point','Wattlegrove');
		
		foreach($lcn as $val)
		{
			$location=ucwords($val);
			$url_part=strtolower(str_replace(' ','-',$val));
			$seo_title='Prompt and Hassle-free Travel from '.$location.' to Sydney';
			$status='Active';
			
			
			
			$content='<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 wow slideInLeft">
            <div class="about_page_heading">
                <h1 class="airport_page_top_heading">Prompt and Hassle-free Travel from '.$location.' to Sydney</h1>
            </div>
            <div class="airport_page_top_text">
                '.$location.' might be 26kms from Sydney airport, but we consider your journey to be as important as the destination.</div>
                <div class="airport_page_top_text"> Whether you are on a professional or personal trip, hiring a shuttle can be the easiest way to reach your destination. Our airport shuttle service is designed to suit each of the individuals need. Our professional drivers ensure that your trip remains comfortable.
                </div>
                <div class="airport_page_bottom_subheading">What to Expect in your Private Airport Transfer to '.$location.'?</div>
                <div class="airport_page_top_text">Well, when you are travelling from Sydney airport, there must be a lot of expectations. At Shire Private Airport Services, you have the liberty to choose the facility-laden SUVs as per the number of members accompanying you. You would get trained professionals driving you from Sydney airport to '.$location.'. With 36 years in the service, we are committed to deliver you the best with the highest quality of customer service.</div>
                <div class="airport_page_top_text">Whether you are moving to or from Sydney airport for any flight (domestic or international), we provide service for any flight. With prompt and quick drop-off and pick-up service, we have helped our clients to reach their destination on time.</div>
                <div class="airport_page_bottom_subheading">Our Speciality</div>
                <div class="airport_page_top_text">At Shire Private Airport Services, we understand the requirement of our multitude of clients. Whether you are in Sydney for any event or corporate meeting, our airport transfer service is effective and efficient in ascertaining that you reach your destination with ease.</div>
                <div class="airport_page_top_text">Our booking starts at 8 AM and ends at 7 PM. For booking for your airport transfer contact <a href="tel:0411763520">0411 763 520</a>.</div>

        </div>
    </div>
</div>';
			
		$set=array(
                    'location'=>$location,
                    'url_part'=>$url_part,
                    'content'=>$content,
                    'seo_title'=>$seo_title,
                    'status'=>$status
                );
		//$this->location_model->addNewTesttimonial("locations",$set ,$where);		
			
		}
	}


    }
