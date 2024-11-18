<?php

class Servico extends Model
{

    // Método para oegar somente 3 servicos de forma aleatoória
    public function getServicoAleatorio($limite = 3)
    {
        $sql = "SELECT tbl_galeria.foto_galeria,  tbl_servico.nome_servico,  tbl_servico.descricao_servico
        FROM tbl_galeria
        INNER JOIN tbl_servico ON tbl_galeria.id_servico = tbl_servico.id_servico order by rand() LIMIT " . (int) $limite;
        // $sql = "SELECT * FROM tbl_servico WHERE status_servico =
        // 'Ativo' order by rand() limit :limite;";

        $stmt = $this->db->prepare($sql);
        // $stmt->bindValue(':limite',(int)$limite,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getServico()
    {
        $sql = "SELECT nome_servico, descricao_servico FROM tbl_servico ";

        $stmt = $this->db->prepare($sql);
        // $stmt->bindValue(':limite',(int)$limite,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Medoto para carregar o serviço pelo link
    public function getServicoPorLink($link){
        $sql = "SELECT tbl_servico.*, tbl_galeria.* FROM tbl_servico
                INNER JOIN tbl_galeria ON tbl_Servico.id_servico = tbl_galeria.id_galeria
                WHERE status_Servico = 'ATIVO' AND link_Servico = :link";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':link', $link);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método listar todos os Servicos em ordem alfabetica
}
