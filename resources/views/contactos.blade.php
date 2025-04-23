<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('contactos.css') }}">
    <title>Document</title>
</head>

<body>
    <section id="contactos" class="contacts-section">
        <div class="contacts-container">
            <div class="contacts-info">
                <h1 class="section-title">CONTACTOS</h1>
                <div class="schedule-info"><span class="bold-text">Todos os dias úteis, das 09h00 às 17h00</span>, através dos seguintes contactos:</div>
                <div class="contacts-content">
                    <div class="contact-panel">
                        <div class="table-responsive">
                            <table class="contact-table">
                                <tbody style="display: flex; flex-direction: column; gap: 40px;">
                                    <tr class="trow" style="color: #198754">
                                        <td><img class="envelope" style="width:35px;height: 35px;" src="http://fundacaojoaopereira.pt/wp-content/uploads/2017/05/envelope-1.svg"></td>
                                        <td> <a href="mailto:fundacaojoaopereira55@gmail.com" style="text-decoration: none; color: black;">joaoazul@gmail.com</a></td>
                                    </tr>
                                    <tr class="trow" >
                                        <td><img class="phone" style="width:35px;height: 35px;" src="http://fundacaojoaopereira.pt/wp-content/uploads/2017/05/phone-1.svg"></td>
                                        <td class="phone_data"> 123 456 789 </td>
                                    </tr>
                                    <tr class="trow" >
                                        <td><img class="mobile" style="width:35px;margin-left:0; height: 35px;" src="http://fundacaojoaopereira.pt/wp-content/uploads/2017/05/icon_mobilephone-1.svg"></td>
                                        <td class="cell_data" style="border-bottom-style: hidden;border-right-style: hidden;border-top-style: hidden;border-left-style: hidden;text-align: left;"> 123 456 789  </td>
                                    </tr>
                                    <tr class="trow" >
                                        <td><img class="pin" style="width:35px;margin-left:0;height: 35px;" src="http://fundacaojoaopereira.pt/wp-content/uploads/2017/05/pin-1.svg"></td>
                                        <td class="location_data"> Caminho do Outeiro, nº 1 9360-507 Ponta do Sol </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2973.933130182436!2d-17.1164491819298!3d32.695984248113085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-PT!2spt!4v1745407897961!5m2!1spt-PT!2spt"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>
</body>