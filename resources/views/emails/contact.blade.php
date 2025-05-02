<!DOCTYPE html>
<html>
<head>
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
        .header {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            padding: 20px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nova Mensagem de Contato</h2>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">Nome:</span>
                <div>{{ $data['name'] }}</div>
            </div>
            
            <div class="field">
                <span class="label">Email:</span>
                <div>{{ $data['email'] }}</div>
            </div>
            
            @if(isset($data['phone']))
            <div class="field">
                <span class="label">Telefone:</span>
                <div>{{ $data['phone'] }}</div>
            </div>
            @endif
            
            <div class="field">
                <span class="label">Assunto:</span>
                <div>{{ $data['subject'] }}</div>
            </div>
            
            <div class="field">
                <span class="label">Mensagem:</span>
                <div>{{ $data['message'] }}</div>
            </div>
        </div>
        
        <div class="footer">
            <p>Esta mensagem foi enviada através do formulário de contato em {{ now()->format('d/m/Y H:i') }}.</p>
        </div>
    </div>
</body>
</html>