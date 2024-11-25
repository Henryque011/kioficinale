<?php 

class Cliente extends Model{
    public function buscarCiente($email){
        $sql = "SELECT * FROM tbl_clinte WHERE email_cliente = :email AND status_cliente = 'Ativo';";
    }
}