<?php

namespace App\Models;

use CodeIgniter\Model;

class crudModel extends Model
{
    protected $table      = 'orang';
    protected $primaryKey = 'id';

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = ['nama', 'email', 'alamat'];

    public function getDetail($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
