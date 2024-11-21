<?php

class Marca extends Model{
    public function getMarcaAletorio(){
        $sql = "SELECT tbl_marca.logo_marca, tbl_marca.alt_marca
        FROM tbl_marca 'ATIVO' WHERE status_marca ='ATIVO' ORDER BY RAND(); ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        include 'http://localhost/KiOficinale/app/views';
    }
}