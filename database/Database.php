<?php
use PDO;

namespace App;

class Database {
    static $connection;

    static public function getConnection(): PDO
    {
        if (isset(self::$connection)) return self::$connection;

        self::$connection = new PDO('sqlite:todo_db.sqlite');
        self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$connection;
    }

    static public function createSchema(): void
    {
        $connection = self::getConnection();
        $connection->exec('
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
              FOREIGN KEY (id_quadro) REFERENCES quadro (id) on DELETE CASCADE,
              FOREIGN KEY (id_usuario) REFERENCES usuario (id) on DELETE CASCADE
          );
        
          CREATE TABLE IF NOT EXISTS quadros (
            nome text NOT NULL,
              id INTEGER primary KEY,
              data_criacao text NOT NULL,
              id_usuario integer NOT NULL,
              FOREIGN KEY (id_usuario) REFERENCES usuario (id) on DELETE CASCADE
          );
        ');
    }
  }
?>