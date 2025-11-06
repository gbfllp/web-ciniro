<?php
class clsConexao {
    private static $instancia = null;
    private $conexao;

    private function __construct() {
        $this->conexao = new mysqli('localhost','root','','bd_teste');

        if($this->conexao->connect_error) {
            die('Erro de conexão: '. $this->conexao->connect_error);
        }
    }

    // se já existe uma instância, usa ela. senão irá criar uma nova
    public static function getInstancia() {
        if(!self::$instancia) {
            self::$instancia = new clsConexao();
        }

        return self::$instancia;
    }

    private function detectarTipos($parametros) {
        $tipos = '';
        foreach ($parametros as $parametro) {
            if (is_int($parametro)) {
                $tipos .= 'i';
            } else if (is_double($parametro) || is_float($parametro)) {
                $tipos .= 'd';
            } else if (is_string($parametro)) {
                $tipos .= 's';
            } else {
                $tipos .= 'b'; // binários
            }
        }
        return $tipos;
    }

    public function executarConsulta($sql, $parametros = []) {
        $comando = $this->conexao->prepare($sql);

        if(!empty($parametros)) {
            $tipos = $this->detectarTipos($parametros);
            $comando->bind_param($tipos, ...$parametros);
        }
        
        return $comando;
    }
}

?>