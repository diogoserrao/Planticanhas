<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .section-title {
            color: #2d572c;
            font-weight: 700;
            margin-bottom: 2rem;
        }
        
        /* Estilo melhorado para o footer */
        .footer-bottom {
            background-color: #198754;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 14px;
            width: 100%;
            margin-top: 2rem;
        }
    </style>
    <title>PlantiCanhas</title>
</head>

<body>
    @include('header')
    @include('sobrenos')
    @include('produtos')
    @include('contactos')
    <div class="footer-bottom" >
            <div class="copyright-text">© PlantiCanhas 2025 - Todos os direitos reservados</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script> 
    document.addEventListener('DOMContentLoaded', function() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.formatacao').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>

</html>