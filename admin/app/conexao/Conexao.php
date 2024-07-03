<?php

class Conexao {
   
   public static $instance;

   private function __construct() {
       //
   }

   public static function getConexao() {
       if (!isset(self::$instance)) {
           try {
               self::$instance = new PDO(
                   'mysql:host=adminvert1.mysql.uhserver.com;dbname=adminvert1;charset=utf8',
                   'vert',
                   'Contabilid@de16'
               );
               self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
           } catch (PDOException $e) {
               die("Erro na conexão docker: " . $e->getMessage());
           }
       }

       return self::$instance;
   }

} 
?>