<!DOCTYPE html>
<html>
<head>
    <title>Nova Mensagem de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            color: #28a745;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nova Mensagem de Contacto</h1>
        
        <div class="field">
            <p class="label">Nome:</p>
            <p>{{ $data['name'] }}</p>
        </div>
        
        <div class="field">
            <p class="label">Email:</p>
            <p>{{ $data['email'] }}</p>
        </div>
        
        @if(isset($data['phone']) && $data['phone'])
        <div class="field">
            <p class="label">Telefone:</p>
            <p>{{ $data['phone'] }}</p>
        </div>
        @endif
        
        <div class="field">
            <p class="label">Assunto:</p>
            <p>{{ $data['subject'] }}</p>
        </div>
        
        <div class="field">
            <p class="label">Mensagem:</p>
            <p>{{ $data['message'] }}</p>
        </div>
    </div>
</body>
</html>