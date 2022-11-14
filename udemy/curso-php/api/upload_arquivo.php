<div class="titulo">Upload de Arquivos</div>

<pre>
    <?php
    /**
     * Arqwuivos que estarão dentro de um array a partir de um upload de um formulário
     */
    echo 'print_r($_FILES): '; 
    print_r($_FILES);
    echo '<br>';
    // echo 'print_r($_POST): ' ;
    // print_r($_POST);
    // echo '<br>';
    // echo 'print_r($_GET): ' ;
    // print_r($_GET);
    // echo '<br>';

    // echo 'print_r($_SERVER): '; 
    // print_r($_SERVER);
    // echo '<br>';


    $upload_dir = $_SERVER['DOCUMENT_ROOT'];

    if (is_dir($upload_dir) && is_writable($upload_dir)) {
        if ($_FILES && $_FILES['arquivo']) {
            $pastaUpload = '/home/arthur/Área de Trabalho/Arthur/documentos/';
            $nomeArquivo = $_FILES['arquivo']['name'];
            $arquivo = $pastaUpload . $nomeArquivo;
            $tmp = $_FILES['arquivo']['tmp_name'];
            //echo (move_uploaded_file($tmp, $arquivo));
            if (move_uploaded_file($tmp, $arquivo)) {
                echo "Arquivo Válido e enviado com sucesso";
            } else {
                echo "Erro no upload de arquivo";
            }
        }    
    } else {
        echo 'Upload directory is not writable, or does not exist.';
    }

    ?>
</pre>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;
    }
</style>
