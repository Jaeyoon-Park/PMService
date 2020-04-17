<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

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

        unset($_SESSION['user_info']);
    }

    public function index()
    {
        set_session_data();

        $data = array(
            'container' => BROWSER_PATH.'request/request'
        );
        $this->load->view('/common/template', $data);
    }

    public function request_qna()
    {
        //error_reporting(E_ALL);
        //ini_set("display_errors", 1);

        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $this->load->library('file_upload');

            $this->form_validation->set_rules('product', '분류', 'required');
            $this->form_validation->set_rules('name', '작성자', 'required');
            $this->form_validation->set_rules('company', '회사명', 'required');
            $this->form_validation->set_rules('tel', '연락처', 'required');
            $this->form_validation->set_rules('email', '이메일', 'required');
            $this->form_validation->set_rules('contents', '내용', 'required');
            $validation = array('name', 'company', 'tel', 'email1', 'contents');

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

                $data = array(
                    'title' => '알림',
                    'message' => '".$message."',
                    'btn' => 'error'
                );
            }
            else
            {
                $start_time = $this->session->userdata('start_time');
                if(!$start_time) $start_time = time();

                $name = $this->input->post('name');
                $company = $this->input->post('company');
                $tel = $this->input->post('tel');
                $email = $this->input->post('email');
                $contents = $this->input->post('contents');
                $personal_agree = $this->input->post('personal_agree');
                $product = $this->input->post('product');
                $inflow_url = $this->session->userdata('inflow_url');
                $inflow_path = $this->session->userdata('inflow_path');
                $inflow_keyword = $this->session->userdata('inflow_keyword');
                $inflow_device = $this->session->userdata('inflow_device');
                $inflow_theme = $this->session->userdata('inflow_theme');

                $stay_time = time() - $start_time;
                if($stay_time > 0) $stay_time = $stay_time * 1000;

                if(isset($personal_agree) && $personal_agree == "y") {

                    $tel = str_replace("-", "", $tel);
                    $phone_check = phone_number_check($tel);
                    if ($phone_check) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $record['name'] = $name;
                            $record['kind'] = "pmpremium";
                            $record['company'] = $company;
                            $record['phone'] = "HEX(AES_ENCRYPT('" . $tel . "', '" . $this->config->item('encryption_key') . "'))";
                            $record['email'] = "HEX(AES_ENCRYPT('" . $email . "', '" . $this->config->item('encryption_key') . "'))";
                            $record['product'] = $product;
                            $record['contents'] = $contents;
                            $record['status'] = "접수";
                            $record['personal_agree'] = $personal_agree;
                            $record['inflow_url'] = $inflow_url;
                            $record['inflow_path'] = $inflow_path;
                            $record['inflow_keyword'] = $inflow_keyword;
                            $record['inflow_device'] = $inflow_device;
                            $record['inflow_theme'] = $inflow_theme;
                            $record['stay_time'] = $stay_time;
                            $record['created'] = date("Y-m-d H:i:s");
                            $qna_serial = $this->common_model->db_insert($record, "qna");

                            if ($qna_serial > 0) {
                                if (isset($_FILES['file'])) {
                                    if ($_FILES['file']['error'] === 0) {
                                        $config['file_name'] = "pmpremium-" . time();

                                        $file_insert_result = $this->file_upload->save('file', $config);

                                        if ($file_insert_result['result']) {
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
                                            $file_rename = $file_serial . $file_insert_result['file_data']['file_ext'];
                                            $file_update_data = array(
                                                'saved_filename' => $file_rename
                                            );
                                            $file_update_result = $this->common_model->db_update(array('`serial`' => $file_serial), $file_update_data, "file_data");

                                            $file_dir = $this->input->server('DOCUMENT_ROOT') . "/file_data/" . ($file_serial % 100);
                                            if (!is_dir($file_dir)) {
                                                mkdir($file_dir, 0777, true);
                                            }
                                            @rename($this->input->server('DOCUMENT_ROOT') . "/file_data/" . $file_insert_result['file_data']['file_name'], $file_dir . "/" . $file_rename);
                                        } else {
                                            $this->common_model->db_delete(array('serial' => $qna_serial), 'qna', 1);
                                            alert_parent($file_insert_result['error'], '/');
                                            //alert('문의 접수가 완료 되었으나 파일 업로드에 실패했습니다.', '/main');
                                            $file_save_error['quotation'] = $_FILES['file']['name'] . ": " . str_replace('</p>', '', str_replace('<p>', '', $file_insert_result['error']));
                                        }
                                    }
                                }

                                // 메일발송
                                $message ="<div>";
                                $message .= "<H3>신규 문의가 등록 되었습니다.</H3>";
                                $message .= "<table style='width:900px;'>";
                                $message .= "<tr>";
                                $message .= "<td style='width:10%'>분류</td>";
                                $message .= "<td style='width:90%'>: ".$product."</td>";
                                $message .= "</tr>";
                                $message .= "<tr>";
                                $message .= "<td style='width:10%'>업체명</td>";
                                $message .= "<td style='width:90%'>: ".$company."</td>";
                                $message .= "</tr>";
                                $message .= "<tr>";
                                $message .= "<td style='width:10%'>담당자</td>";
                                $message .= "<td style='width:90%'>: ".$name."</td>";
                                $message .= "</tr>";
                                $message .= "<tr>";
                                $message .= "<td style='width:10%'>연락처</td>";
                                $message .= "<td style='width:90%'>: ".$tel."</td>";
                                $message .= "</tr>";
                                $message .= "<tr>";
                                $message .= "<td style='width:10%'>이메일</td>";
                                $message .= "<td style='width:90%'>: ".$email."</td>";
                                $message .= "</tr>";
                                $message .= "<tr>";
                                $message .= "<td style='width:10%'>의뢰내용</td>";
                                $message .= "<td style='width:90%'>: ".$contents."</td>";
                                $message .= "</tr>";
                                $message .= "</table>";
                                $message .= "</div>";

                                $subject = "[PMS 프리미엄] 문의가 등록 되었습니다.";
                                $result = $this->mail->send("", array(""), $subject, $message);

                                $this->session->unset_userdata('start_time');

                                $data = array(
                                    'title' => '접수가 완료되었습니다.',
                                    'message' => "문의 작성하신 내용이 정상적으로 접수 완료되었습니다.<BR>담당자 검토 후 신속히 연락드리겠습니다",
                                    'btn' => 'finish'
                                );
                            } else {
                                $data = array(
                                    'title' => '알림',
                                    'message' => '문의 접수에 실패하였습니다.',
                                    'btn' => 'error'
                                );
                            }
                        } else {
                            $data = array(
                                'title' => '알림',
                                'message' => '잘못된 이메일 형식입니다.',
                                'btn' => 'error'
                            );
                            echo "<script> parent.$('[name=email]').val('').focus();</script>";
                        }
                    } else {
                        $data = array(
                            'title' => '알림',
                            'message' => "사용 할 수 없는 전화번호입니다.",
                            'btn' => 'error'
                        );
                        echo "<script>parent.$('[name=tel]').val('').focus();</script>";
                    }
                }else{
                    $data = array(
                        'title' => '알림',
                        'message' => '개인정보 수집 및 이용에 동의해주세요.',
                        'btn' => 'error'
                    );
                }
            }
        }
        else
        {
            $data = array(
                'title' => '알림',
                'message' => '정상적인 접근이 아닙니다.',
                'btn' => 'finish'
            );
        }

        $this->pop_alert($data);
    }

    public function pop_alert($data=array())
    {
        if(!isset($data['title'])) $data['title'] = "";
        if(!isset($data['message'])) $data['message'] = "";
        if(!isset($data['btn'])) $data['btn'] = "";

        echo "<script>parent.popup_fadein('".$data['title']."', '".$data['message']."', '".$data['btn']."');</script>";
        echo "<script>parent.remove_processing();</script>";
        echo "<script>parent.$('.confirm-alert').fadeIn()</script>";
    }
}
