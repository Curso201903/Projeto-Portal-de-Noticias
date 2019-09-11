<?php
    if(isset($_GET['erro'])){
        switch($_GET['erro']){
             case 101:
                $erro = "Login Inválido";
                break;
        case 102:
                $erro = "Necessário realizar o login";
                break;
        }
    }
    if(isset($erro))
        echo '<div class="alert alert-danger" role="alert">'.$erro.'</div';
?>

<?php
    if(isset($_GET['m'])){
        switch($_GET['m']){
             case 201:
                $m = "Cadastrado com sucesso";
                break;
        case 202:
                $m= "Erro ao cadastrar, preencha todos os campos";
                break;
        }
    }
    if(isset($m))
        echo '<div class="alert alert-warning" role="alert">'.$m.'</div';
?>