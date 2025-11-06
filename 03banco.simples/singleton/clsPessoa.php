<?php 
require_once 'clsConexao.php';

class clsPessoa {
    private $conexao;
    private $id;
    private $nome;
    private $idade;

    public function __construct() {
        $this->conexao = clsConexao::getInstancia();
    }
    public function setId($id)    { $this->$id = $id; }
    public function getId()         { return $this->id; }
    public function setNome($nome)    { $this->$nome = $nome; }
    public function getNome()         { return $this->nome; }
    public function setIdade($idade)  { $this->$idade = $idade; }
    public function getIdade()        { return $this->idade; }

    public function inserir() {
        $sql = 'INSERT INTO tb_pessoa (nome, idade) VALUES (?, ?);';
        $parametros = [$this->nome, $this->idade];
        $resultado = $this->conexao->executarConsulta($sql, $parametros);
        return $resultado->affected_rows > 0;
    }

    public function excluir() {
        $sql = 'DELETE FROM tb_pessoa WHERE id = ?;';
        $parametros = [$this->id];
        $resultado = $this->conexao->executarConsulta($sql, $parametros);
        return $resultado->affected_rows > 0;
    }

    public function listar() {
        $sql = 'SELECT * FROM tb_pessoa;';
        $resultado = $this->conexao->executarConsulta($sql);
        $tabela = $resultado->get_result();
        return $tabela->fetch_all(MYSQLI_ASSOC); 
    }
}
?>