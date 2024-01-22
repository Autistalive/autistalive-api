<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <h1>Criar usuario</h1>
    <form method="post" action="{{route('users.store')}}">
        @csrf
        @method("post")
        <div>
            <label for="firstName">Nome</label>
            <input type="text" firstName="Primeiro Nome" placeholder=""/>
        </div>
        <div>
            <label for="lastName">Sobrenome</label>
            <input type="text" lastName="Sobrenome" placeholder=""/>
        </div>
        <div>
            <label for="city">Cidade</label>
            <input type="text" city="Cidade" placeholder=""/>
        </div>
        <div>
            <label for="state">Estado</label>
            <input type="text" state="Estado" placeholder=""/>
        </div>
        <div>
            <input type="submit" value="Cadastrar" >
        </div>
    </form>
    
    <script src="" async defer></script>
    </body>
</html>