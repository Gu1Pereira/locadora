<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">  
</head>
<body class="bg-warning">
    <div class="container">
        <div class="row gap-0">
            <div class="col-lg-4 col-md-6 col-12 text-center">
            <i class="bi-car-front-fill text-primary" style="font-size: 2rem;"></i>
            <h1>Encontre o veículo certo para você</h1>
            <p>Preencha as informações abaixo</p>
            <form>
                <div class="mb-3 text-start">
                    <label class="form-label" for="nome">Nome:</label>
                    <input class="form-control" name="nome" id="nome" type="text">
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label" for="email">E-mail:</label>
                    <input class="form-control" name="email" id="email">
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label" for="veiculo">Selecione o tipo de veículo:</label>
                    <select class="form-select" name="veiculo" id="veiculo" onchange="Trocar();">
                        <option value="Básico">Básico</option>
                        <option value="Esporte">Esporte</option>
                        <option value="Completo">Completo</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">Reservar</button>

                </div>

                
            </form>
            </div>
            <div class="col-lg-8 col-md-6 col-12">
                <img src="./img/basico.png" class="img-fluid" alt="Carro básico">

            </div>
        </div>
    </div>

    <div class=""></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="funcoes.js"></script>
</body>
</html>