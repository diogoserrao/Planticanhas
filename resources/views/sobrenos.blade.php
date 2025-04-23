<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('sobrenos.css') }}">
    <title>Introduction</title>
</head>

<body>
    <section id="sobrenos"  class="introduction-section">
        <div class="content1">
            <div class="formatacao">
                <h1 class="sobrenos">SOBRE NÓS</h1>

                <div class="text">
                    <div>Na nossa família, o cultivo sempre fez parte da vida. Com raízes bem assentes na terra e olhos postos no futuro, criámos uma pequena empresa familiar dedicada à produção de alimentos frescos e sustentáveis em estufas.</div>
                    
                    <div>Ao longo dos anos, aperfeiçoámos as nossas práticas agrícolas para garantir produtos saborosos, nutritivos e cultivados com respeito pela natureza. As nossas estufas permitem-nos controlar o ambiente de cultivo com precisão, reduzindo o uso de químicos, poupando água e garantindo colheitas de qualidade durante todo o ano.</div>
                
                    <div>Desde tomates maduros no ponto certo a ervas aromáticas cheias de sabor, tudo o que sai das nossas estufas é tratado com o mesmo cuidado e dedicação que damos à nossa própria mesa. Produzimos localmente, em pequena escala, e com um enorme sentido de responsabilidade — tanto para com o ambiente como para com quem nos escolhe.</div>
                
                    <div>Mais do que alimentos, cultivamos confiança. E é com orgulho que levamos o melhor da nossa terra até si.</div>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // If element is in view
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
                // Optional: Stop observing after animation is triggered
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 }); // Element becomes visible at 10% visibility

    // Target the elements to animate
    const elementsToAnimate = document.querySelectorAll('.formatacao');
    elementsToAnimate.forEach(element => {
        observer.observe(element);
    });
});
</script>
</html>