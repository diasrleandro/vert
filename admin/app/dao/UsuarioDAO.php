<?php
/*
    Criação da classe Usuario com o CRUD
*/
class UsuarioDAO{
    
    public function create(Usuario $usuario) {
        try {
            $sql = "INSERT INTO site (                   
                  tag,text,title)
                  VALUES (
                  :tag,:text,:title";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":tag", $usuario->getTag());
            $p_sql->bindValue(":text", $usuario->getText());
            $p_sql->bindValue(":title", $usuario->getTitle());

            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir <br>" . $e . '<br>';
        }
    }

    public function read() {
        try {
            $sql = "SELECT * FROM site order by id asc";
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
                
                  tag=:tag,
                  text=:text          
                                                                       
                  WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":tag", $usuario->getTag());
            $p_sql->bindValue(":text", $usuario->getText());
            $p_sql->bindValue(":title", $usuario->getTitle());
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
        $usuario->setTag($row['tag']);
        $usuario->setTitle($row['title']);
        $usuario->setText($row['text']);

        return $usuario;
    }
 }

 ?>