<?php
/**
 * Created by PhpStorm.
 * User: Mahesh Rathnayaka
 * Date: 7/22/2015
 * Time: 4:07 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->helper('date');
        $this->load->model('channeling_model');
        $this->load->model('knowledge_model');
    }

    public function index()
    {
//        var_dump($_SESSION['user_id']);
        $dynamic_data = array(
            'title' => 'Knowledge Base'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/knowledge_view');
        $this->load->view('common/footer');
    }

    public function web_application(){
        $dynamic_data = array(
            'title' => 'Knowledge Base - Web Application'
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/web_view');
        $this->load->view('common/footer');
    }

    public function desktop_application(){
        $dynamic_data = array(
            'title' => 'Knowledge Base - Desktop Application',
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/desktop_view');
        $this->load->view('common/footer');
    }

    public function skip_photo(){
        $status = 'no';
        if(isset($_POST['flagImages'])){
            if($_POST['flagImages'] == "comment") {
                $image_path = $_POST['txtCommentImg'];
                $image_comment = $_POST['txtAreaComment'];
                $patient_id = $_SESSION['user_id'];
                $datetime = unix_to_human(time(), TRUE, 'us');
                $N = count($image_path);
                $status = 'yes';
                for($i=0; $i < $N; $i++) {
                    $image_name = explode('/', $image_path[$i]);
                    $image_data = array(
                        'image_name' => $image_name[count($image_name)-1],
                        'image_path' => $image_path[$i],
                        'date_added' => $datetime,
                        'comment' => $image_comment[$i],
                        'patient_id' => $patient_id
                    );
                    $this->knowledge_model->save_patient_images($image_data);
                }
            }
        }
        $images_fetch = $this->knowledge_model->get_patient_images($_SESSION['user_id']);
        $medications = $this->knowledge_model->get_medications();
        $dynamic_data = array(
            'title' => 'Knowledge Base - Medications',
            'images_status' => $status,
            'images' => $images_fetch,
            'medications' => $medications
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/doctor_view');
        $this->load->view('common/footer');
    }

    public function add_comments(){
        $DesktopImages = $_POST['chkDesktopImages'];
        if(!empty($DesktopImages)) {
            $N = count($DesktopImages);
        }
        $user_id = $_SESSION['user_id'];
        if (!file_exists(FCPATH . 'uploads/' . $user_id)) {
            mkdir(FCPATH . 'uploads/' . $user_id, 0777, true);
        }
        foreach($DesktopImages as $key => $value){
            $newfile = explode('/', $value);
            $sour = FCPATH.'tempImg/'.$newfile[count($newfile)-1];
            $dest = FCPATH.'uploads/'.$user_id.'/'.$newfile[count($newfile)-1];
            copy($sour, $dest);
        }
        delete_files(FCPATH.'tempImg/');
        $dynamic_data = array(
            'title' => 'Knowledge Base - Add Comments',
            'imgs' => $DesktopImages,
            'img_count' => $N,
            'cpath' => FCPATH,
            'sour' => $sour,
            'dest' => $dest
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('knowledge/comment_view');
        $this->load->view('common/footer');
    }

    public function get_numbering(){
        return $this->channeling_model->get_channel_queue();
    }

    public function channel_done(){
        $channel_data = array(
            'check_status' => 0,
            'channel_number' => 0
        );
        $unlink_queue = $this->knowledge_model->unlink_channel_queue($_SESSION['user_id'], $channel_data);
        $data = $this->get_numbering();
        $dynamic_data = array(
            'title' => 'Channeling Queue',
            'channeling_data' => $data
        );
        $this->load->view('common/header', $dynamic_data);
        $this->load->view('common/sidebar');
        $this->load->view('core/channeling_view');
        $this->load->view('common/footer');
    }
}
