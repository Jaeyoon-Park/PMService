<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

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
        $this->load->model('search_model');
        $this->model =& $this->search_model;
    }

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $this->_search();
        }else{
            unset($_SESSION['user_info']);

            $data = array(
                'container' => BROWSER_PATH . 'search/search'
            );
            $this->load->view('/common/template', $data);
        }
    }

    public function _search()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {
            $this->form_validation->set_rules('name', '이름', 'required');
            $this->form_validation->set_rules('type', '검색타입', 'required');
            $validation = array('name', 'type');

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
                $type = $this->input->post('type');
                $phone = "";
                $email = "";
                $or_where = null;

                if($type == "phone"){
                    $phone = str_replace("-", "", trim($this->input->post('phone')));
                    $phone_check = phone_number_check($phone);

                    if (!$phone_check) {
                        alert('사용 할 수 없는 전화번호입니다.', '/search');
                    }else{
                        //$or_where['com_user_phone1'][] = "HEX(AES_ENCRYPT('" . $phone . "', '" . $this->config->item('encryption_key') . "'))";
                        //$or_where['com_user_phone1'][] = "HEX(AES_ENCRYPT('" . trim($this->input->post('phone')) . "', '" . $this->config->item('encryption_key') . "'))";
                        $where["TRIM(REPLACE(AES_DECRYPT(UNHEX(com_user_phone1), ''), '-', '')) ="] = $phone;
                    }
                }else if($type == "email"){
                    $email = $this->input->post('email');
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        alert('잘못된 이메일 형식입니다.', '/search');
                    }else{
                        $where['com_user_email'] = "HEX(AES_ENCRYPT('" . $email . "', '" . $this->config->item('encryption_key') . "'))";
                    }
                }else{
                    alert('검색에 필요한 타입이 선택되지 않았습니다.', '/search');
                }

                $where['com_user_name'] = $name;

                if ($where['com_user_name'] && (isset($where["TRIM(REPLACE(AES_DECRYPT(UNHEX(com_user_phone1), ''), '-', '')) ="]) || isset($where['com_user_email']))) {
                    $jdata = $this->model->get_job_list($where);

                    if(count($jdata) > 0) {
                        $_SESSION['user_info']['name'] = $name;
                        $_SESSION['user_info']['type'] = $type;
                        $_SESSION['user_info']['phone'] = $phone;
                        $_SESSION['user_info']['email'] = $email;

                        $data = array(
                            'jdata' => $jdata,
                            'container' => BROWSER_PATH . 'search/search_list'
                        );
                    }else{
                        alert('검색 된 항목이 없습니다.', '/search');
                    }
                    $this->load->view('/common/template', $data);
                } else {
                    alert('잘못 된 값이 입력되었습니다.', '/search');
                }
            }
        }
        else
        {
            alert('정상적인 접근이 아닙니다.', '/');
        }
    }

    public function view_detail($serial=null)
    {
        if(isset($_SESSION['user_info']['name']) && $serial){
            $jdata = $this->model->get_job_data($serial, $_SESSION['user_info']['name']);
            if($jdata){
                $data = array(
                    'jdata' => $jdata,
                    'container' => BROWSER_PATH . 'search/view_detail'
                );
                $this->load->view('/common/template', $data);
            }else{
                alert('정상적인 접근이 아닙니다.', '/');
            }
        }else{
            alert('정상적인 접근이 아닙니다.', '/');
        }
    }
}
