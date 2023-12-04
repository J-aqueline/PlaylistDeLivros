
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta title="viewport" content="width=device-width, initial-scale=1">
            <title>SECTOTECH</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
            

        </head>
        <body>

        <div class="modal fade" id="adicionarLivroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Livros</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="saveLivros">
            <div class="modal-body">

                        <div id="errorMessage" class="alert alert-warning d-none"></div>

                        <div class="mb-3">
                            <label for="">Título</label>
                            <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Descrição</label>
                            <input type="text" name="description" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="">Autor</label>
                            <input type="text" name="author" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="livroEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="updateLivro">
                    <div class="modal-body">
                        <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                        <input type="hidden" name="livro_id" id="livro_id">

                        <div class="mb-3">
                            <label for="title">Titulo</label>
                            <input type="text" name="title" id="title" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="description">Descrição</label>
                            <input type="text" name="description" id="description" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="author">Autor</label>
                            <input type="text" name="author" id="author" class="form-control" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
             </form>

                </div>
            </div>
        </div>

        <div class="modal fade" id="livroViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="">Titulo</label>
                            <p id="view_title" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Descrição</label>
                            <p id="view_descricao" class="form-control"></p>
                        </div>
                        <div class="mb-3">
                            <label for="">Autor</label>
                            <p id="view_author" class="form-control"></p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <style>

        .custom-orange-bg {
        background-color: #FFA500;
        }

    .logo-container {
        display: flex;
        align-items: center;
        margin-right: 20px;
    }

    .logo-img {
        width: 100px; 
        height: auto;
        margin-right: 50px;
    }

    .playlist-title h4 {
        font-family: 'Hedvig Letters Serif';
        font-size: 35px;
        color: black;
        margin-left: 150px;
        margin-top: 10px; 
    }

    .add-button-container {
        font-family: 'Kanit', sans-serif;
        margin-left: 330px;
    }

    .id-cell,
    .title-cell,
    .description-cell,
    .author-cell {
    max-width: 400px;
    }

    .id-cell, .title-cell, .description-cell, .author-cell {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-start">
                    <div class="logo-container">
                        <img src="https://media.licdn.com/dms/image/C4E0BAQEP6NICA8fiVA/company-logo_200_200/0/1641472155987/sectotech_logo?e=2147483647&v=beta&t=0Xzcy1rWn3u_lZ6NAR5AKyOU24nsF_VcTmIzZQ5LbLc" alt="SectoTech Logo" class="logo-img">
                    </div>
                    <div class="playlist-title">
                        <h4>Playlist De Livros</h4>
                    </div>
                    <div class="add-button-container">
                        <button type="button" class="btn btn-dark float-end" data-bs-toggle="modal" data-bs-target="#adicionarLivroModal">
                            Adicionar
                        </button>
                    </div>
                </div>
                <div class="card-body">

                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>Descrição</th>
                                        <th>Autor</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    
                                    require 'dbcon.php';

                                    $query = "SELECT * FROM livro";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        //foreach($query_run as $livro)
                                        while ($livro = mysqli_fetch_assoc($query_run))
                                        {
                                            ?>
                                            <tr>
                                            <td class="id-cell"><?= $livro['id']; ?></td>
                                            <td class="title-cell"><?= $livro['title']; ?></td>
                                            <td class="description-cell"><?= $livro['description']; ?></td>
                                            <td class="author-cell"><?= $livro['author']; ?></td>

                                                <td>
                                                <button type="button" data-livro-id="<?= $livro['id']; ?>" class="viewLivroBtn btn btn-info btn-sm">View</button>
                                                <button type="button" data-livro-id="<?= $livro['id']; ?>" class="editLivroBtn btn btn-success btn-sm">Edit</button>
                                                <button type="button" data-livro-id="<?= $livro['id']; ?>" class="deleteLivroBtn btn btn-danger btn-sm">Delete</button>

                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

            <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
            

            <script>

            $(document).on('submit', '#saveLivros', function (e) {
            e.preventDefault();
            console.log("Form submitted");

            var formData = new FormData(this);
            formData.append("saveLivros", true);
            formData.append("title", $('input[name="title"]').val());
            formData.append("description", $('input[name="description"]').val());
            formData.append("author", $('input[name="author"]').val());

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,


                        success: function (res) {
                            try {
                            var resObj = typeof res === 'object' ? res : JSON.parse(res);

                            if (resObj.status === 422) {
                                $('#errorMessage').removeClass('d-none');
                                $('#errorMessage').text(resObj.message);
                            } else if (resObj.status === 200) {
                                $('#errorMessage').addClass('d-none');
                                $('#adicionarLivroModal').modal('hide');
                                $('#saveLivros')[0].reset();

                                alert('Livro cadastrado com sucesso');

                                $('#myTable').load(location.href + " #myTable");
                            } else if (resObj.status === 500) {
                                alert.error(resObj.message);
                            } else {
                                console.error('Unexpected response:', res);
                            }
                        } catch (e) {
                            console.error('Error parsing JSON:', e);
                            alert('Ocorreu um erro');
                        }
                    },



                error: function (xhr, status, error) {
                    console.error('AJAX Error:', xhr.responseText);
                    alert('Ocorreu um erro');
                }
            });
        });
                    
                    $(document).on('click', '.editLivroBtn', function () {
                    var livro_id = $(this).data('livro-id');
                    
                    $.ajax({
                        type: "GET",
                        url: "code.php?livro_id=" + livro_id,
                        success: function (res) {

                            //var res = jQuery.parseJSON(res);
                            if(res.status == 404) {

                                alert(res.message);
                            }else if(res.status == 200){

                                $('#livro_id').val(res.data.id);
                                $('#title').val(res.data.title);
                                $('#description').val(res.data.description);
                                $('#author').val(res.data.author);

                                $('#livroEditModal').modal('show');
                            }

                        }
                    });

                });

                $(document).on('submit', '#updateLivro', function (e) {
                    e.preventDefault();

                    var formData = new FormData(this);
                    formData.append("updateLivro", true);


                    $.ajax({
                        type: "POST",
                        url: "code.php",
                        data: formData,
                        processData: false,
                        contentType: false,

                        success: function (res) {
                            try {
                                var resObj = typeof res === 'object' ? res : JSON.parse(res);

                                $('#errorMessageUpdate').toggleClass('d-none', resObj.status !== 422);
                                $('#errorMessageUpdate').text(resObj.message);

                                alertify.set('notifier', 'position', 'top-right');
                                if (resObj.status == 200) {
                                    alert(resObj.message);
                                    $('#livroEditModal').modal('hide');
                                    $('#updateLivro')[0].reset();
                                    $('#myTable').load(location.href + " #myTable");
                                } else if (resObj.status == 500) {
                                    alert(resObj.message);
                                }
                            } catch (e) {
                                console.error('Error parsing JSON:', e);
                                alert('An error occurred while processing your request.');
                            }
                        }

                    });

                });

                $(document).on('click', '.viewLivroBtn', function () {
                 var livro_id = $(this).data('livro-id');

                    $.ajax({
                        type: "GET",
                        url: "code.php?livro_id=" + livro_id,
                        success: function (res) {

                            //var res = jQuery.parseJSON(res);
                            if(res.status == 404) {

                                alert(res.message);
                            }else if(res.status == 200){

                                $('#view_title').text(res.data.title);
                                $('#view_descricao').text(res.data.description);
                                $('#view_author').text(res.data.author);

                                $('#livroViewModal').modal('show');
                            }
                        }
                    });
                });

            $(document).on('click', '.deleteLivroBtn', function (e) {
                e.preventDefault();

                if (confirm('Excluir?')) {
                    var livro_id = $(this).data('livro-id');

                        $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_livro': true,
                        'livro_id': livro_id
                    },
                    success: function (res) {
                        try {
                            var resObj = typeof res === 'object' ? res : JSON.parse(res);

                            if (resObj.status == 200) {
                                alert(resObj.message);
                                $('#myTable').load(location.href + " #myTable");
                            } else {
                                alert('Erro ao excluir: ' + resObj.message);
                            }
                        } catch (e) {
                        console.error('Error parsing JSON:', e);
                        alert('Ocorreu um erro');
                }
            }
        });
    }
});


    </script>
    <footer class="text-center mt-5">
    <p>&copy; 2023 SECTOTECH - Criado por Jaqueline Ribeiro</p>
</footer>

 </body>
</html>