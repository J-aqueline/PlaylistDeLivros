<?php

require 'dbcon.php';

header('Content-Type: application/json');

if (!$con) {
    $res = [
        'status' => 500,
        'message' => 'Connection failed: ' . mysqli_connect_error()
    ];
    echo json_encode($res);
    return;
}

if (isset($_POST['saveLivros'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $author = mysqli_real_escape_string($con, $_POST['author']);

    if ($title == '' || $description == '' || $author == '' || $title == NULL || $description == NULL || $author == NULL) {
        $res = [
            'status' => 422,
            'message' => 'Todos os campos são obrigatórios'
        ];
        echo json_encode($res);
        return;
    }


    //$query = "INSERT INTO livro (title,description,author) VALUES ('$title','$description','$author')";
    $query = "INSERT INTO livro (title, description, author) VALUES ('$title', '$description', '$author')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Livro cadastrado com sucesso'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'O livro não foi cadastrado'
        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_POST['updateLivro'])) {
    $livro_id = mysqli_real_escape_string($con, $_POST['livro_id']);

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $author = mysqli_real_escape_string($con, $_POST['author']);

    if ($title == NULL || $description == NULL || $author == NULL) {
        $res = [
            'status' => 422,
            'message' => 'Todos os campos são obrigatórios'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE livro SET title='$title', description='$description', author='$author'
                WHERE id='$livro_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Atualizado'
        ];
    } else {
        $res = [
            'status' => 500,
            'message' => 'Não foi possível completar a atualização'
        ];
    }

    echo json_encode($res);
    return;
}


if(isset($_GET['livro_id']))
{
    $livro_id = mysqli_real_escape_string($con, $_GET['livro_id']);

    $query = "SELECT * FROM livro WHERE id='$livro_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $livro = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Id encontrada',
            'data' => $livro
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Id não encontrada'
        ];
        echo json_encode($res);
        return;
    }
}

if (isset($_POST['delete_livro'])) {
    $livro_id = mysqli_real_escape_string($con, $_POST['livro_id']);

    $query = "DELETE FROM livro WHERE id='$livro_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Deletado'
        ];
    } else {
        $res = [
            'status' => 500,
            'message' => 'Não foi possível deletar'
        ];
    }

    echo json_encode($res);
    return;
}


?>