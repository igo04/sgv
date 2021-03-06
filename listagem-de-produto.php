<?php 
    
    require_once('repository/produtoRepository.php');
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Data cadastro</th>
                    <th colspan="2">Gerenciar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(fnLocalizaProdutoPorNome($nome) as $produto): ?>
                <tr>
                   
        
                <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php $produto->foto ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produto->nome ?></h5>
                        <p class="card-text"><?= $produto->description ?></p>
                        <p class="card-text"><?= $produto->price?></p>
                        <p class="card-text"><small class="text-muted"><?= $produto->created_at ?></small></p>
                    </div>
                    </div>
                </div>
                </div>
                <td><?= $produto->id ?></td> 
                   <td><?= $produto->nome ?></td>
                   <td><?= $produto->description ?></td> 
                   <td><?= $produto->price ?></td> 
                   <td><?= $produto->created_at ?></td> 
                   <td><a href="#" onclick="gerirUsuario(<?= $produto->id ?>, 'edit');">Editar</a></td> 
                   <td><a href="#" onclick="return confirm('Deseja realmente excluir?') ? gerirUsuario(<?= $produto->id ?>, 'del') : '';">Excluir</a></td> 
                </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if(isset($notificacao)) : ?>
            <tfoot>
                <tr>
                    <td colspan="7"><?= $_COOKIE['notify'] ?></td>
                </tr>
            </tfoot>
            <?php endif; ?>
        </table>
    </div>
    
    <script>
        window.post = (data) => {
            return fetch(
                'set-session.php',
                {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(data)
                }
            )
            .then(response => {
                
                console.log(`Requisição completa! Resposta:`, response);
            });
        }

        function gerirUsuario(id, action) {
            
            post({data : id});

            url = 'excluirProduto.php';
            if(action === 'edit')
                url = 'formulario-edita-produto.php';
            
            
            window.location.href = url;
        }
    </script>
  </body>
</html>