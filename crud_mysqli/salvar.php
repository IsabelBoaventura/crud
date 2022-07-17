<h1>Salvar </h1>
<?php
// echo ' linha 3  '. $_REQUEST['acao'];
    switch($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $dt_nasc = $_POST['dt_nasc'];

            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ( '{$nome}', '{$email}', '{$senha}' )";

            $res = $conn_i->query($sql );

            // echo $sql ;
            if( $res== true){
                print "<script>alert('Usuário Cadastrado com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";

            }else{

                print "<script>alert('Não foi possível Cadastrar este usuário!')</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            break;
        case 'editar':
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = md5($_POST['senha']);
            $dt_nasc = $_POST['dt_nasc'];

            $sql = "UPDATE usuarios SET
                    nome =  '{$nome}',
                    email = '{$email}', 
                    senha = '{$senha}' 
                    WHERE id = '".$_REQUEST['id']."' ";

            $res = $conn_i->query($sql );

            if( $res== true){
                print "<script>alert('Usuário Alterado com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";

            }else{

                print "<script>alert('Não foi possível Alterar este usuário!')</script>";
                print "<script>location.href='?page=listar';</script>";

            }
        break;

        case 'excluir':

            $sql = "DELETE FROM usuarios WHERE id='".$_REQUEST['id']."'";
            $res = $conn_i->query($sql );
            if( $res== true){
                print "<script>alert('Usuário Excluido com sucesso!')</script>";
                print "<script>location.href='?page=listar';</script>";

            }else{

                print "<script>alert('Não foi possível Excluir este usuário!')</script>";
                print "<script>location.href='?page=listar';</script>";

            }
            break;
    }
?>