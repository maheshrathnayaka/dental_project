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
//                    echo($image_path[$i] . " ");
//                    echo($image_comment[$i] . " ");
//                    echo($patient_id);
//                    $now = time();
//                    echo 'Time : '.unix_to_human($now, TRUE, 'us').' ';
                    $image_name = explode('/', $image_path[$i]);
//                    echo $image_name[count($image_name)-1].'';
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
//            write_file(base_url().'uploads/'.$newfile[count($newfile)-1] , $value, 'r+');
            $sour = FCPATH.'tempImg/'.$newfile[count($newfile)-1];
            $dest = FCPATH.'uploads/'.$user_id.'/'.$newfile[count($newfile)-1];
            copy($sour, $dest);
//            move_uploaded_file($sour, $dest);
//            write_file($sour, $dest, 'r+');
//            copy(FCPATH.'tempImg/'.$newfile[count($newfile)-1], FCPATH.'uploads/'.$newfile[count($newfile)-1]);
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
}
