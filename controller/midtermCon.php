<?php

 class MidtermCon extends CI_Controller {

     function __construct(){
         parent::__construct();
         $this->load->database();
     }

     /*-------메인 접속 메서드------*/
     function main(){
         $this->load->view('main');
     }

     /*------- 회원등록 메서드 ------*/
     function register() {
        $this->load->view('register');
     }
     /*--- 회원등록 process 메서드 ---*/
     function register_process() {

         $userid        = $_POST['userid'];
         $username      = $_POST['username'];
         $password      = $_POST['password'];
         $classification= $_POST['classification'];
         $gender        = $_POST['gender'];
         $phone         = $_POST['phone'];
         $email         = $_POST['email'];

         //---- post로 받아온 값 array로 묶기
         $this->load->helper('array');

         $register_array = array (
             'userid' => $userid,
             'name'  => $username,
             'password' => $password,
             'classification' => $classification,
             'gender' => $gender,
             'phone' => $phone,
             'email' => $email
         );

         $register = 0;    // 회원등록 시 사용

         /*--- 회원등록의 각 항목에 값이 없을 시, 입력 메시지 출력 ---*/
         if($userid == ''){
             echo "사용자ID를 입력하시오<br>";
             $register++;
         }
         if($username == ''){
             echo "사용자 이름을 입력하시오<br>";
             $register++;
         }
         if($password == ''){
             echo "비밀번호를 입력하시오<br>";
             $register++;
         }
         if($classification == ''){
             echo "직업을 입력하시오<br>";
             $register++;
         }
         if($gender == ''){
             echo "성별을 입력하시오<br>";
             $register++;
         }
         if($phone == ''){
             echo "휴대전화번호를 입력하시오<br>";
             $register++;
         }
         if($email == ''){
             echo "이메일을 입력하시오<br>";
             $register++;
         }
        /*------- 모든 항목 입력 시, 등록 완료 ------*/
        if( $register <= 0 ) {
            $this->load->model('midtermModel');
            $this->midtermModel->register_db($register_array);
            echo "<script>alert('회원등록완료');location.href = 'main'</script>";
        }

     }

     /*------회원정보수정 메서드------*/
     function modify() {
         $this->load->view('modify');
     }

     /*------회원정보수정 process-----*/
     function modify_process() {

        $userid = $this->input->post('userid');

       $this->load->model('midtermModel');
       $param['users'] = $this->midtermModel->modify_db($userid);

        $this->load->view('modify2', $param);
     }

     function modify_process2() {

         $changedId = $this->input->post('changedId');
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $classification = $this->input->post('classification');
         $gender = $this->input->post('gender');
         $phone = $this->input->post('phone');
         $email = $this->input->post('email');

         $this->load->helper('array');

         $update_array = array (
             'userid' => $changedId,
             'name'  => $username,
             'password' => $password,
             'classification' => $classification,
             'gender' => $gender,
             'phone' => $phone,
             'email' => $email
         );

         $this->load->model('midtermModel');
         $this->midtermModel->modify_db2($changedId,$update_array);

     }


     /*------회원삭제 메서드-----*/
     function delete() {
         $this->load->view('delete');
     }
     function delete_process() {

         $userid = $this->input->post('userid');
         $password = $this->input->post('password');

         $this->load->helper('array');

         $this->load->model('midtermModel');
         $this->midtermModel->delete_db($userid,$password);

     }

     /*------ 회원정보 메서드 -----*/
     function memberinfo() {

         $this->load->model('midtermModel');

         $param['users'] = $this->midtermModel->memberinfo_db();

         $this->load->view('memberinfo', $param);

     }

 }

?>