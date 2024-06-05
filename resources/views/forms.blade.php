<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon" />
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="CssForms.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="formStyles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/forms">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/qmsomos">Quem Somos</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-5 pt-5 d-flex justify-content-center">
        <form action="/forms" method="POST" id="contact-form" class="w-50">
            @csrf
            <h2 class="text-center">Formulário de Contato</h2>
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Endereço:</label>
                <input type="text" id="address" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">Sexo:</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="male">Masculino</option>
                    <option value="female">Feminino</option>
                    <option value="other">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        @if(isset($data))
            <div class="mt-5 w-50">
                <h2 class="text-center">Dados Recebidos</h2>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nome:</strong> {{ $data['name'] }}</li>
                    <li class="list-group-item"><strong>Telefone:</strong> {{ $data['phone'] }}</li>
                    <li class="list-group-item"><strong>Endereço:</strong> {{ $data['address'] }}</li>
                    <li class="list-group-item"><strong>Sexo:</strong> {{ $data['gender'] }}</li>
                    <li class="list-group-item"><strong>Mensagem:</strong> {{ $data['message'] }}</li>
                </ul>
            </div>
        @endif
    </div>

 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
