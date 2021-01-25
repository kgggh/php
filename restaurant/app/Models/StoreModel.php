<?php
namespace App\Models;
use CodeIgniter\Model;

class StoreModel extends Model {
    
    protected $table = 'store';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['store_num', 'u_num','s_name','address','tag','s_phone'];


    


    public function getList(){
        $db = \Config\Database::connect("default");
        $query = $db->query('select s.store_num, s.s_name,s.address,t.tag, s. s_phone,ms.m_classification
                        from store s
                        LEFT JOIN menu as m on(s.store_num = m.store_num)
                        LEFT JOIN menuSort as ms on(m.menuSort_num = ms.menuSort_num)
                        LEFT JOIN tag as t on(s.store_num = t.store_num)');
                $results = $query->getResultArray();

        return $results;
    }
    
}
