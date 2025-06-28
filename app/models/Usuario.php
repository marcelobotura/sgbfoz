<?php
namespace App\Models;

use App\Core\Model;

class Usuario extends Model {
    protected $tabela = 'usuarios';

    public function buscarPorEmail($email) {
        $sql = "SELECT * FROM {$this->tabela} WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
}
