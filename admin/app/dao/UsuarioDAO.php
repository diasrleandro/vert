<?php
/*
    Criação da classe Usuario com o CRUD
*/
class UsuarioDAO{
    
    public function create(Usuario $usuario) {
        try {
            $sql = "INSERT INTO site (                   
                  title,tag1,content1,tag2,content2,display)
                  VALUES (
                  :title,:tag1,:content1,:tag2,:content2,:display";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":title", $usuario->getTitle());
            $p_sql->bindValue(":tag1", $usuario->getTag1());
            $p_sql->bindValue(":tag2", $usuario->getTag2());
            $p_sql->bindValue(":content1", $usuario->getContent1());
            $p_sql->bindValue(":content2", $usuario->getContent2());
            $p_sql->bindValue(":display", $usuario->getDisplay());

            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir <br>" . $e . '<br>';
        }
    }

    public function read() {
        try {
            $sql = "SELECT * FROM site where template = 1 order by id asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaUsuarios($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
     
    public function update(Usuario $usuario) {
        try {
            $sql = "UPDATE site set
                
                  tag1=:tag1,
                  tag2=:tag2,
                  content1=:content1,
                  content2=:content2,
                  display=:display         
                                                                       
                  WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":tag1", $usuario->getTag1());
            $p_sql->bindValue(":tag2", $usuario->getTag2());
            $p_sql->bindValue(":content1", $usuario->getContent1());
            $p_sql->bindValue(":content1", $usuario->getContent1());
            
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Usuario $usuario) {
        try {
            $sql = "DELETE FROM site WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir<br> $e <br>";
        }
    }


    

    private function listaUsuarios($row) {
        $usuario = new Usuario();
        $usuario->setId($row['id']);
        $usuario->setTag1($row['tag1']);
        $usuario->setContent1($row['content1']);
        $usuario->setTag2($row['tag2']);
        $usuario->setContent2($row['content2']);
        $usuario->setDisplay($row['display']);

        return $usuario;
    }
 }

 ?>