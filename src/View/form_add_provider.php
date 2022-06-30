<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de Provedor</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../controller/Provider.php" method="POST">
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Dados do provedor</legend>
            <section class="columns-2">
                <article>
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" class="border border-blue-400" required minlength="3">
                </article>
                <article>
                    <label for="cnpj">CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj" class="border border-blue-400" required min="1" max="1000">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="phone">Telefone</label>
                    <input type="text" id="phone" name="phone" class="border border-blue-400" required min="1" max="1000">
                </article>
                <article>
                </article>
            </section>
        </fieldset>
    </form>
    <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Endereço</legend>
            <section class="columns-2">
                <article>
                    <label for="publicPlace">Logradouro</label>
                    <input type="text" id="publicPlace" name="publicPlace" class="border border-blue-400" required minlength="1">
                </article>
                <article>
                    <label for="numberOfStreet">N°</label>
                    <input type="text" id="numberOfStreet" name="numberOfStreet" class="border border-blue-400" required minlength="1">
                </article>
            </section>
            <section class="mt-4 columns-2">
                <article>
                    <label for="complement">Complemento</label>
                    <input type="text" id="complement" name="complement" class="border border-blue-400" required min="1" max="1000">
                </article>
                <section class="mt-4 columns-2">
                <article>
                    <label for="neighborhood">Bairro</label>
                    <input type="text" id="neighborhood" name="neighborhood" class="border border-blue-400" required min="1" max="1000">
                </article>
                </section>      
                <article>
                    <label for="city">Cidade</label>
                    <input type="text" id="city" name="city" class="border border-blue-400" required min="1" max="1000">
                </article>
                <section class="mt-4 columns-2">
                <article>
                    <label for="zipCode">Cep</label>
                    <input type="text" id="zipCode" name="zipCode" class="border border-blue-400" required minlength="1">
                </section>
                <article class="flex justify-center mt-4">
                <button type="submit" class="p-4 text-white bg-blue-700 rounded">Cadastrar</button>
            </article>
            </section>
</body>

</html>