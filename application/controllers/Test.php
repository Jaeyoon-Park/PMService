<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        $this->model =& $this->main_model;
    }

    public function index()
    {
        $data = array(
            'container' => BROWSER_PATH.'main/test'
        );
        $this->load->view('/common/template', $data);
    }

    public function test2()
    {
        $data = array(
            'container' => BROWSER_PATH.'main/test2'
        );
        $this->load->view('/common/template', $data);
    }

    public function request_qna()
    {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);

        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $this->load->library('file_upload');

            $this->form_validation->set_rules('name', '작성자', 'required');
            $this->form_validation->set_rules('company', '회사명', 'required');
            $this->form_validation->set_rules('tel1', '연락처', 'required');
            $this->form_validation->set_rules('tel2', '연락처', 'required');
            $this->form_validation->set_rules('tel3', '연락처', 'required');
            $this->form_validation->set_rules('email1', '이메일', 'required');
            $this->form_validation->set_rules('email2', '이메일', 'required');
            $this->form_validation->set_rules('contents', '내용', 'required');
            $validation = array('name', 'company', 'tel1', 'tel2', 'tel3', 'email1', 'email2', 'contents');

            if ($this->form_validation->run() == false)
            {
                foreach($validation as $vkey)
                {
                    if(form_error($vkey))
                    {
                        $message = strip_tags(form_error($vkey));
                        $id = $vkey;
                        break;
                    }
                }
                alert($message);
            }
            else
            {
                $name = $this->input->post('name');
                $company = $this->input->post('company');
                $tel1 = $this->input->post('tel1');
                $tel2 = $this->input->post('tel2');
                $tel3 = $this->input->post('tel3');
                $email1 = $this->input->post('email1');
                $email2 = $this->input->post('email2');
                $contents = $this->input->post('contents');

                $phone = $tel1.$tel2.$tel3;
                $email = $email1."@".$email2;

                $phone = str_replace("-", "", $phone);
                $phone_check = phone_number_check($phone);
                if($phone_check){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $record['name'] = $name;
                        $record['company'] = $company;
                        $record['phone'] = "HEX(AES_ENCRYPT('".$phone."', '".$this->config->item('encryption_key')."'))";
                        $record['email'] = "HEX(AES_ENCRYPT('".$email."', '".$this->config->item('encryption_key')."'))";
                        $record['contents'] = $contents;
                        $record['status'] = "접수";
                        $record['created'] = date("Y-m-d H:i:s");
                        $qna_serial = $this->common_model->db_insert($record, "qna");

                        if($qna_serial > 0) {
                            if(isset($_FILES['file'])) {
                                if ($_FILES['file']['error'] === 0) {
                                    $config['file_name'] = "pmpremium-" . time();

                                    $file_insert_result = $this->file_upload->save('file', $config);

                                    if($file_insert_result['result'])
                                    {
                                        // 파일정보 Insert
                                        $file_insert_data = array(
                                            'table_name' => "qna",
                                            'table_serial' => $qna_serial,
                                            'table_column' => 'serial',
                                            'org_filename' => $file_insert_result['file_data']['client_name'],
                                            'saved_filename' => $file_insert_result['file_data']['client_name'],
                                            'file_type' => $file_insert_result['file_data']['file_type'],
                                            'register_id' => "",
                                            'user_table' => "",
                                            'created' => date("Y-m-d H:i:s")
                                        );
                                        $file_serial = $this->common_model->db_insert($file_insert_data, "file_data");

                                        // 파일정보 Update
                                        $file_rename = $file_serial.$file_insert_result['file_data']['file_ext'];
                                        $file_update_data = array(
                                            'saved_filename' => $file_rename
                                        );
                                        $file_update_result = $this->common_model->db_update(array('`serial`' => $file_serial), $file_update_data, "file_data");

                                        $file_dir =	$this->input->server('DOCUMENT_ROOT')."/file_data/".($file_serial % 100);
                                        if(!is_dir($file_dir))
                                        {
                                            mkdir($file_dir, 0777, true);
                                        }
                                        @rename($this->input->server('DOCUMENT_ROOT')."/file_data/".$file_insert_result['file_data']['file_name'], $file_dir."/".$file_rename);
                                    }
                                    else
                                    {
                                        $this->common_model->db_delete(array('serial'=>$qna_serial), 'qna', 1);
                                        alert_parent($file_insert_result['error'], '/');
                                        //alert('문의 접수가 완료 되었으나 파일 업로드에 실패했습니다.', '/main');
                                        $file_save_error['quotation'] = $_FILES['file']['name'] . ": " . str_replace('</p>', '', str_replace('<p>', '', $file_insert_result['error']));
                                    }
                                }
                            }

                            alert_parent('문의 접수가 완료되었습니다.', '/');
                        }else{
                            alert_parent('문의 접수에 실패하였습니다.', '/');
                        }
                    }else{
                        alert_parent('잘못된 이메일 형식입니다.', '/');
                    }
                }else{
                    alert_parent('사용 할 수 없는 전화번호입니다.', '/');
                }
            }
        }
        else
        {
            alert_parent('정상적인 접근이 아닙니다.', '/');
        }
    }
}
