<?php
namespace App;
use PDO;

class BancoDeDados {
    static $conexao;

    static public function pegarOuCriarConexao(): PDO
    {
        if (isset(self::$conexao)) return self::$conexao;

        self::$conexao = new PDO('sqlite:todo_db.sqlite');
        self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$conexao;
    }

    static public function criarSchema(): void
    {
        $conexao = self::pegarOuCriarConexao();
        $conexao->exec('
          CREATE TABLE IF NOT EXISTS usuarios (
            id INTEGER primary KEY,
            senha text NOT NULL,
            nome text NOT NULL,
            email text UNIQUE NOT NULL
          );

          CREATE TABLE IF NOT EXISTS tarefas (
              id INTEGER primary KEY,
              descricao text NOT NULL,
              dificuldade text NOT NULL,
              data_criacao text NOT NULL,
              id_quadro integer NOT NULL,
              id_usuario integer NOT NULL,
              tarefa_realizada text NOT NULL,
              FOREIGN KEY (id_quadro) REFERENCES quadros (id),
              FOREIGN KEY (id_usuario) REFERENCES usuarios (id)
          );
        
          CREATE TABLE IF NOT EXISTS quadros (
              id INTEGER primary KEY,
              nome text NOT NULL,
              data_criacao text NOT NULL,
              id_usuario integer NOT NULL,
              FOREIGN KEY (id_usuario) REFERENCES usuarios (id)
          );
        ');
    }
  }
?>