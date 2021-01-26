<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    
    protected $table = 'user';
    protected $primaryKey = 'user_num';
    protected $allowedFields = ['classification', 'userId','password','name','email','updated_at'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];


    //회원 가입시 패스워드 암호화
    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    //회원 정보 수정시 패스워드 암호화
    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    //패스워드 암호화 
    protected function passwordHash(array $data){
        if(isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

        return $data;
    }

    
    
    

}
