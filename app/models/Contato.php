<?php

class Contato extends Model
{
    // Salvar o email na base de dados
    public function salvarEmail($tel, $email, $assunto, $mensagem, $nome)
    {

        $sql = "INSERT INTO tbl_contato (telefone_contato, email_contato, assunto_contato, mensagem_contato, nome_contato) 
        VALUES (:telefone_contato, :email_contato, :assunto_contato,:mensagem_contato, :nome_contato)";

        $stmt = $this->db->prepare($sql);

        $stmt->bindValue(':telefone_contato', $tel);
        $stmt->bindValue(':email_contato', $email);
        $stmt->bindValue(':assunto_contato', $assunto);
        $stmt->bindValue(':mensagem_contato', $mensagem);
        $stmt->bindValue(':nome_contato', $nome);

        return $stmt->execute();
    }
}
