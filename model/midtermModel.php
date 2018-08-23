<?php

class midtermModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /*----- 회원등록 메서드 -----*/
    function register_db($register_array) {
        $this->db->insert('mimiboard', $register_array);
    }

    /*----- 회원수정 메서드 ------*/
    function modify_db($userid){

        //--- select 문 where 절
        $sql = $this->db->get_where('mimiboard', array('userid' => $userid));
        return $sql->result();

    }
    function modify_db2($changedId,$update_array) {

        //--- update 문 where 절
        $this->db->where('userid', $changedId);
        $sql = $this->db->update('mimiboard', $update_array);

        echo "<script>alert('수정완료');location.href = 'main'</script>";

    }

    /*----- 회원삭제 메서드 ----*/
    function delete_db($userid, $password) {

        $sql = $this->db->get_where('mimiboard', array('userid' => $userid));

        //--- delete 문
        foreach ($sql->result_array() as $row) {
            //--- userid가 존재할 때
            if ($userid == true) {
                if ($row['password'] == $password) {
                    $sql = $this->db->delete('mimiboard', array('userid' => $userid));
                    echo "<script>alert('삭제 되었습니다.');location.href='main'</script>";
                    //--- password가 일치하지 않을 때
                } else {
                    echo "<script>alert('존재하지 않는 회원입니다.');location.href = 'delete'</script>";
                }
            }
        }
    }

    /*---- 회원정보 메서드 ----*/
    function memberinfo_db() {
        //--- select 문
        $query = $this->db->get('mimiboard');
        return $query -> result();
    }


}




?>