<?php
    require_once('Connection.php');

   

    function fnAddProduto($nome, $description, $price) {
        $con = getConnection();
        
        
        $sql = "insert into Produto (nome, description, price) values (:pNome, :pDescription, :pPrice)";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id); 
        $stmt->bindParam(":pNome", $nome); 
        $stmt->bindParam(":pDescription", $description); 
        $stmt->bindParam(":pPrice", $price); 
       
        return $stmt->execute();
    }

    function fnListProduto() {
        $con = getConnection();

        $sql = "select * from produto";

        $result = $con->query($sql);

        $lstProduto = array();
        while($produto = $result->fetch(PDO::FETCH_OBJ)) {
            array_push($lstProduto, $produto);
        } 

        return $lstProduto;
    }

    function fnLocalizaProdutoPorNome($nome) {
        $con = getConnection();

        $sql = "select * from produto where nome like :pNome limit 20";

        $stmt = $con->prepare($sql);

        $stmt->bindValue(":pNome", "%{$nome}%");

        if($stmt->execute()) {
            $stmt->setFetchMode(PDO::FETCH_OBJ);
            return $stmt->fetchAll();
        }
    }

    function fnLocalizaProdutoPorId($id) {
        $con = getConnection();

        $sql = "select * from produto where id = :pID";

        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id);

        if($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        return null;
    }
    
    function fnUpdateProduto($id, $nome, $description, $price) {
        $con = getConnection();
                
        $sql = "update produto set nome = :pNome, description = :pDescription, price = :pPrice where id = :pID";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id); 
        $stmt->bindParam(":pNome", $nome); 
        $stmt->bindParam(":pDescription", $description); 
        $stmt->bindParam(":pPrice", $price); 
       
        
        return $stmt->execute();
    }
    
    function fnDeleteProduto($id) {
        $con = getConnection();
                
        $sql = "delete from produto where id = :pID";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pID", $id);
        
        return $stmt->execute();
        
    }