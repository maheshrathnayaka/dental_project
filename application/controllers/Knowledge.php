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
        $dynamic_data = array(
            'title' => 'Knowledge Base - Desktop Application'
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
        if (!file_exists('path/to/directory')) {
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

    public function image_population()
    {

    }

    public function image_comparison()
    {

    }

    public function comment_image()
    {

    }
}
