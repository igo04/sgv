<?php
    require_once('repository/produtoRepository.php');
    $nome = filter_input(INPUT_POST, 'nomeProduto', FILTER_SANITIZE_SPECIAL_CHARS);

    header("location: listagem-de-produtos.php?nome={$nome}");
    exit;