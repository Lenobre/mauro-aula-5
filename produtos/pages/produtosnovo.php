<form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="border: 1px solid gray;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Descrição</label>
    <input type="description" name="description" class="form-control" id="exampleInputPassword1" style="border: 1px solid gray;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Valor</label>
    <input type="price" name="price" class="form-control" id="exampleInputPassword1" style="border: 1px solid gray;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Imagem(URL)</label>
    <input type="url" name="url" class="form-control" id="exampleInputPassword1" style="border: 1px solid gray;">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
$name = isset($_POST["name"]) ? $_POST["name"] : null;
$description = isset($_POST["description"]) ? $_POST["description"] : null;
$price = isset($_POST["price"]) ? $_POST["price"] : null;
$url = isset($_POST["url"]) ? $_POST["url"] : null;

if (!$name || !$description || !$price || !$url) {
    echo "
        <div class='alert alert-danger mt-3' role='alert'>
            Preencha todos os campos para poder cadastrar um produto.
        </div>
    ";
    return;
}

session_start();
$_SESSION["products"][$name] = serialize(new Product($name, $description, $price, $url));

echo "
        <div class='alert alert-success mt-3' role='alert'>
            Produto cadastrado com sucesso. Clique <a href='/produtos' class='alert-link'>aqui</a> para ver todos.
        </div>
    ";
?>
