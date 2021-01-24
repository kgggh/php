<?php
    Class Model_review extends Model {
        //getList
        function getList(){
            $this->sql = "SELECT * FROM review order by `reg_date` desc";
            return $this->fetchAll();
        }
        //getListNum
        function getListNum(){
            return $this->cnt();
        }
        //getView
        function getView(){
            $this->sql = "SELECT * FROM review where review_num='{$this->param->review_num}'";
            return $this->fetch();
        }
        //action
        function action(){
            header("Content-type:text/html;charset=utf8");
            $this->table = 'review';
            $cancel = $add_sql = "";
            $msg = "완료되었습니다.";
            $url = $this->param->get_page;
            isset($_POST['pw']) && md5($_POST['pw']);
            switch($_POST['action']){
                case 'insert' :
                    $add_sql .= ", date=now()";
                break;
                case 'update' :
                    $url .= "/view/{$this->param->idx}";
                break;
            }
            $cancel .= "action/table/idx/";
            $column = $this->getColumn($_POST,$cancel).$add_sql;
            $this->sql = $this->combine($column);
            access(!$this->query(),$msg,$url);
        }
    }