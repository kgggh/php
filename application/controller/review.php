<?php
    Class Review extends Controller {
        var $list;
        var $data;
        var $listNum;
        var $comment;
        var $user_num;
        var $reg_date;
        var $s_num;
        //basic : list
        function basic(){
            $this->list = $this->db->getList();
            $this->listNum = $this->db->getListNum();
        }
        //view
        function view(){
            $this->data = $this->db->getView();
        }
        //write
        function write(){
            if(isset($this->param->review_num)){
                $this->data = $this->db->getView();
            }
            $this->action = isset($this->param->review_num) ? 'update' : 'insert';
            $this->comment = isset($this->data->comment) ? $this->data->comment : NULL;
            $this->user_num = isset($this->data->user_num) ? $this->data->user_num : NULL;
            $this->reg_date = isset($this->data->reg_date) ? $this->data->reg_date : NULL;
            $this->s_num = isset($this->data->s_num) ? $this->data->s_num : NULL;
        }
        //delete
        function delete(){
            
        }
    }