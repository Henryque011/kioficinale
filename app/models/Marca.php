<?php

class Marca extends Model{
    public function getMarcasAletorias(){
        $sql = "SELECT tbl_marca.logo_marca, tbl_marca.alt_marca,  tbl_marca.nome_marca
        FROM tbl_marca;";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
}