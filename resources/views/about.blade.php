<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
<!-- ESTA SECCION MUESTRA EL NOMBRE DEL TITULO QUE TENDRA LA PAGINA ASI COMO EL ENCABEZADO, QUE EN ESTE CASO
SE ESTA USANDO UN COMPONENTE DE LA PAGINA TAILWIND-->

    
    <title>ACERCA DE OVERPOWER</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


<!-- AQUI SE DEFINE EL ESTILO DEL ENCABEZADO Y EL TAMAÑO Y COLOR QUE TENDRA LA IMAGEN QUE SE INSERTE DENTRO DE ESTA PARTE -->


    <style>
        body {
            background-color: #ffffff; 
            font-family: 'Roboto', sans-serif; 
            color: #191f26;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #191f26; 
            color: #66F2E4; 
            text-align: center;
            padding: 20px 0; 
        }
        header .logo {
            width: 150px; 
            display: block;
            margin: 0 auto 10px;
        }
        h1 {
            margin: 0; 
            font-size: 1.8rem; 
        }
        h2 {
            color: #191f26;
        }
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        section {
            margin-bottom: 40px;
        }
        ul {
            list-style: disc;
            margin-left: 20px;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #191f26;
            color: #66F2E4; 
        }
        .cta-section {
            background-color: #191f26;
            color: #66F2E4; 
            text-align: center;
            padding: 50px 20px;
            margin-top: 40px;
        }
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .cta-section a {
            display: inline-block;
            background-color: #66F2E4; 
            color: #191f26;
            text-decoration: none;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
        }
        .cta-section a:hover {
            background-color: #54D9C1; 
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .stats div {
            background-color: #191f26;
            color: #66F2E4; 
            text-align: center;
            padding: 20px;
            border-radius: 10px;
        }
        .stats dt {
            font-size: 1rem;
            margin-top: 10px;
            color: #66F2E4; 
        }
        .stats dd {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
        }
        #equipo {
            margin-top: 40px;
        }
        #equipo div {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 10px;
        }
        #equipo img {
            border-radius: 50%;
            margin-bottom: 10px;
        }
        
        #equipo h2 {
            text-align: center;
            font-size: 2.2rem;
            color: #191f26;
        }
    </style>
</head>
<body>
    <header>


<!-- AQUI SE INSERTA LA IMAGEN Y EL COLOR QUE TENDRA ACOMPAÑADO DE UN TEXTO DEBAJO DE LA IMAGEN PARA REFERENCIAR EL TITULO O SLOGAN -->
      

    <div class="logo">
            <svg id="OP_LOGO" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2463.76 1104.08" style="width: 150px; height: auto;"> 
                <defs>
                    <style>
                        .cls-1 {
                            fill: #66F2E4; 
                        }
                    </style>
                </defs>
                <path class="cls-1" d="m1212.72,428.79v663.04H94.15c-30.52,0-55.25-24.74-55.25-55.25v-165.79h889.84c30.52,0,55.25-24.74,55.25-55.25v-386.75h228.72Z"/>
                <path class="cls-1" d="m2424.86,69.78v640c0,31.48-25.52,57.01-57.01,57.01h-891.09v325.05h-228.72V428.79h228.72v116.99h671.8c30.52,0,55.25-24.74,55.25-55.25v-201.99c0-30.52-24.74-55.25-55.25-55.25H315.16c-30.52,0-55.25,24.74-55.25,55.25v388.66H38.9V69.78c0-31.78,25.76-57.53,57.53-57.53h2270.89c31.78,0,57.54,25.76,57.54,57.54Z"/>
            </svg>
        </div>
        <h1>OVERPOWER DYNAMICS</h1>
    </header>


    <!-- ESTA SECCION CONTIENE EL CARRUSEL DE IMAGENES -->


</section>
<section id="slider">
    <div class="slider-container">
        <img
            class="slider-item"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmzXzdEucE9ESaPxMtt2MaIWxqRUB1tMKN0g&s"
        />
        <img
            class="slider-item"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8QynckR_SjEImhHf_Go9LXjcqheXCpizS4A&s=80"
        />
        <img
            class="slider-item"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVIJeEs-a2akTD21ej1n3LhBqO3gdHGrUMUw&s"
        />
        <img
            class="slider-item"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqLJyvsMiv03YvEPQs3sHmQCQJXBsSQheCUA&s"
        />
    </div>
</section>
</main>


 <!-- ESTA SECCION CONTIENE LOS AJUSTES DE LAS IAMGENES Y ESTRUCTURA DEL CARRUSEL-->


<style>
body {
    background-color: #ffffff;
    font-family: 'Roboto', sans-serif;
    color: #191f26;
}

/* Slider específico */
.slider-container {
    display: flex;
    width: 100%;
    height: 50vh;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
}

.slider-container img {
    flex: 0 0  50%;
    width: 100%;
    object-fit: cover;
    scroll-snap-align: center;
}
</style>

   
    
    <main>


         <!-- SECCION QUE CONTIENE LA INFORMACION DE LA EMPRESA -->
    
     

        <section id="quienes-somos">
            <h2>¿Qué es Overpower Dynamics?</h2>
            <p>Somos una empresa tecnológica ubicada en Tizimín, Yucatán, que ofrece soluciones de alta calidad y rendimiento en equipos de cómputo personalizados, servicios técnicos especializados y proporcionando oportunidades de desarrollo profesional para estudiantes de nivel medio superior y superior.</p>
        </section>
        <style>
            h2 {
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
            </style>     

        <section id="objetivos">
            <h2>Nuestros Objetivos</h2>
            <ul>
                <li>Ofrecer equipos de cómputo personalizados y optimizados para satisfacer las necesidades específicas de los usuarios en Tizimín.</li>
                <li>Brindar servicios técnicos especializados, incluyendo mantenimiento, reparación y asesoría, para garantizar el rendimiento óptimo de los equipos.</li>
                <li>Fomentar el desarrollo de habilidades técnicas en los estudiantes mediante la capacitación y experiencia práctica en un entorno profesional real.</li>
                <li>Posicionar la empresa como líder en el mercado tecnológico local, destacando la calidad, personalización y servicio al cliente.</li>
            </ul>


             <!-- AJUSTES DE LAS LETRAS, TIPO, JUSTIFICACION Y TAMAÑO-->


            <style>
                #quienes-somos h2 {
                    margin-top: 0;
                    font-size: 2rem;
                    font-family: 'Arial Black', sans-serif; /* Cambiar fuente */
                    text-align: center; /* Centrar subtítulos */
                }
            
                #quienes-somos p {
                    margin-top: 10px; /* Espaciado entre el título y el texto */
                    line-height: 1.6;
                    text-align: center; 
                }

    #quienes-somos h2, #objetivos h2 {
        margin-top: 0;
        font-size: 2rem;
        font-family: 'Arial Black', sans-serif; 
        text-align: center; 
    }
   
    #quienes-somos p, #objetivos ul {
        margin-top: 10px;
        line-height: 1.6;
        text-align: ; 
    }

    #objetivos ul {
        padding-left: 20px; 
    }
            </style>

            
             <!-- ESTA SECCION CONTIENE LOS BLOQUES DE INFORMACION, MISION Y VISION, ASI COMO LOS AJUSTES, COLOR DE CUADRO, TEXTOS Y JUSTIFICACION -->


        </section>
        <section id="mision-vision" style="background-color: #191f26; color: #ffffff; padding: 40px; border-radius: 10px; margin-bottom: 40px;">
            <div style="text-align: center; margin-bottom: 20px;">
                <h2 style="color: #66F2E4;">NUESTRA MISION Y VISION</h2>
            </div>
            <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
                <!-- Misión -->
                <div style="flex: 1; min-width: 300px; background-color: #66F2E4; color: #191f26; padding: 20px; border-radius: 10px;">
                    <h3 style="text-align: center;">MISION</h3>
                    <p>Proveer soluciones tecnológicas de alta calidad y rendimiento en Tizimín, Yucatán, mediante la oferta de equipos personalizados, servicios técnicos especializados y soporte integral. Nos comprometemos a mejorar la experiencia del usuario local al ofrecer productos que satisfagan sus necesidades específicas con una excelente relación calidad-precio.</p>
                </div>
                <!-- Visión -->
                <div style="flex: 1; min-width: 300px; background-color: #66F2E4; color: #191f26; padding: 20px; border-radius: 10px;">
                    <h3 style="text-align: center;">VISION</h3>
                    <p>Creemos que existimos para hacer excelentes equipos, nos enfocamos en la innovación, crecimiento personal, social y laboral, promoviendo el acceso a la tecnología y la inclusión digital. Ser la empresa líder en empoderar a individuos para que puedan ayudar a otros a cubrir la necesidad de armar computadoras.</p>
                </div>
            </div>
              <!-- ESTA SECCION CONTIENE A LOS INTEGRANTES DEL EQUIPO, ALMACENADO EN UN CUADRO, DONDE SE DIVIDEN EN DOS FILAS-->
            </section>
            <section id="slider">
                <h2 class="slider-title">CONOCE A LAS PERSONAS DETRAS DE OVERPOWER DYNAMICS</h2>
                <div class="slider-container">
                    <div class="slider-item">
                        <img src="https://i.ibb.co/bXCyy3y/PNG.png" alt="PNG">
                        <p>ARANDA COB JESÚS BERNARDO</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.ibb.co/bXCyy3y/PNG.png" alt="PNG">
                        <p>ÁVILA CHABLÉ DANILO ISAAC</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.ibb.co/bXCyy3y/PNG.png" alt="PNG">
                        <p>GAMBOA HERRERA JESÚS AUGUSTO</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.ibb.co/bXCyy3y/PNG.png" alt="PNG">
                        <p>MARTIN AGUILAR MANUEL JESÚS</p>
                    </div>
                    <div class="slider-item">
                        <img src="https://i.ibb.co/bXCyy3y/PNG.png" alt="PNG">
                        <p>SÁNCHEZ MAY ADRIAN ALEJANDRO</p>
                    </div>
                </div>
            </section>
            
            <style>
                /* Contenedor del slider */
                #slider {
                    width: 100%;
                    overflow: hidden;
                    display: flex;
                    flex-direction: column; /* Asegura que los elementos se apilen verticalmente */
                    justify-content: center;
                    align-items: center;
                }
            
                .slider-title {
                    margin-bottom: 20px; /* Espacio entre el título y las imágenes */
                    font-size: 24px; /* Tamaño del título */
                    color: #333; /* Color del título */
                    font-weight: bold; /* Negrita para el título */
                    text-align: center;
                }
            
                .slider-container {
                    display: flex;
                    gap: 20px; /* Espaciado entre imágenes */
                    justify-content: center;
                    align-items: center;
                }
            
                .slider-item {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                }
            
                .slider-item img {
                    width: 200px; /* Ajusta el ancho deseado */
                    height: 200px; /* Ajusta la altura deseada */
                    object-fit: cover; /* Asegura que la imagen se ajuste correctamente */
                    border-radius: 10px; /* Bordes redondeados, opcional */
                    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Agrega un efecto de sombra */
                }
            
                .slider-item p {
                    margin-top: 10px; /* Espaciado entre imagen y texto */
                    font-size: 16px; /* Tamaño del texto */
                    color: #333; /* Color del texto */
                    font-weight: bold; /* Negrita para destacar los nombres */
                }
            </style> 

         <!-- ESTA SECCION CONTIENE LA PARTE DE CONTACTANOS, DEFINICION DE LA IMAGEN Y AJUSTES ASI COMO EL BOTON QUE REDIRECCIONA A GMAIL -->


        </section>
        <section class="cta-section">
            <section class="cta-section">
                <svg id="OP_LOGO" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2463.76 1104.08">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #bfbfbf;
                            }
                        </style>
                    </defs>
                    <path class="cls-1" d="m1212.72,428.79v663.04H94.15c-30.52,0-55.25-24.74-55.25-55.25v-165.79h889.84c30.52,0,55.25-24.74,55.25-55.25v-386.75h228.72Z"/>
                    <path class="cls-1" d="m2424.86,69.78v640c0,31.48-25.52,57.01-57.01,57.01h-891.09v325.05h-228.72V428.79h228.72v116.99h671.8c30.52,0,55.25-24.74,55.25-55.25v-201.99c0-30.52-24.74-55.25-55.25-55.25H315.16c-30.52,0-55.25,24.74-55.25,55.25v388.66H38.9V69.78c0-31.78,25.76-57.53,57.53-57.53h2270.89c31.78,0,57.54,25.76,57.54,57.54Z"/>
                </svg>
                <h2>ÚNETE A NOSOTROS</h2>
                <p>SI TE INTERESA NUESTRO CONTENIDO, NO DUDES EN MANDARNOS UN MENSAJE, PUES QUEREMOS FORJAR A LOS MEJORES Y QUE TIZIMIN CREZCA TECONOLOGICAMENTE ¡TE ESPERAMOS!</p>
                <div class="slogan-container">
                    <p><strong>¡LA TECNOLOGÍA, NUESTRO PODER!</strong></p>
                </div>


                 <!-- ESTA SECCION CONTIENE EL CARRUSEL DE IMAGENES, 
ademas Crea un enlace interactivo que los usuarios pueden hacer click, href indica el destino al que redirige el enlace-->
                 

                <a href="mailto:21890221@ittizimin.edu.mx">CONTÁCTANOS</a>
            </section>


            <!-- AJUSTES DE LAS LETRAS, TIPO, JUSTIFICACION Y TAMAÑO-->


            <style>
                .cta-section svg {
                    width: 300px; /* Tamaño moderado para el logo */
                    margin-bottom: 2px; /* Reducido margen debajo del logo */
                }
                .cta-section p:last-child {
                    margin-top: 2px; /* Reduce el espacio entre el texto y el eslogan */
                }
                .slogan-container {
                    text-align: center; /* Centra el eslogan */
                    margin-top: 2px; /* Reducido margen entre el texto y el eslogan */
                }
            </style>


            <!-- ESTA SECCION CONTIENE LA INFORMACION DE LO QUE IDENTIFICA A LA EMPRESA DIVIDAD EN BLOQUES-->


        </section>
        <section class="stats">
            <div>
                <dt>TRABAJO EN EQUIPO</dt>
                <dd>liderazgo</dd>
            </div>
            <div>
                <dt>CLIENTES SATISFECHOS</dt>
                <dd>calidad</dd>
            </div>
            <div>
                <dt>CRECIMIENTO PERSONAL</dt>
                <dd>competitivo</dd>
            </div>
            <div>
                <dt>PERSONAL</dt>
                <dd>profesional</dd>
            </div>          
            </div>   
    </main>



    <!-- ESTA SECCION CONTIENE EL FOOTER, OSEA LOS DATOS FINALES DE LA PAGINA-->


    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Overpower Dynamics. Todos los derechos reservados.</p>
            <ul>
                <li><a href="{{ route('mantenimiento') }}">Política de privacidad</a></li>
                <li><a href="{{ route('mantenimiento') }}">Términos de servicio</a></li>
            </ul>


            <!-- ESTA PARTE CONTIENE LAS IMAGENES DE LAS REDES SOCIALES, ASI COMO LOS LINKS DE CADA UNA-->


            <style>
                .social-media a {
                    display: inline-block;
                    width: 40px;
                    height: 40px;
                    background-size: cover;
                    margin-right: 20px;
                    
                }
            
                .facebook {
                    background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAllBMVEU7WZj///88WpdAXZpBX5tFY51FYZ3t7/V6jbgoS48vUJLS2OdSa6M3VZZuhLK2wNf3+fvd4u2Imr9NaKHEzeDv8ffh5uxje6ns7/E4V5oxUpjW3eR7j7Rddank6PHByt6dq8uQoMMjR42VpMCLnbvDzNmsuM20v9FVb6KntdFieqy0v9i8xtyYqMl+kbsdQYosT5qClrY1QXhgAAAE+ElEQVR4nO3dbXuiOBSA4QACBhoE8aVa8XWcqqjd/v8/t6LtzuzsKgdiICfXeb7ONZG7QaMGWmbdGr1/Zqnnei7+PM9Lxz+2/peM3Xyb3WTCDOqiGf98/SXcjs3yXZuI7tu3cOFO2z4cBdlsmr3dhFvPvAm8Nc1GhXA0NnEGiy6zOIsvwo2pM1jkvFtstDNZOIli9m4ykDFvy2ZmC50Z27V9DIrbMa/tQ1CcxzptH4LabIeE2CMh/kiIPxLij4T4IyH+SIg/EuKPhPgjYduJouCa+KdKI+grvMGE7bnpy7U0dV3Psb//5QtdOo6ewsIgvKy72h/DMJn7vj8vSpIkDAeLXr5frvrn6JClrl06lobCYoacQ7+XxLH1oPiSP8+9slnUTih4kHb380e235unQcmAegltwdlhH0J5lxIXl5CLKAdPH0JhwLPcL0fhFXK2rOpDJRTrqMrzD58wCE7VJxCTMHD2dXx4hLzTqwfEIuTpoCYQiTBwawNRCO3ArnuK4hDaQizrAzEIGe8//AiBX8gPiQQQgVCwowwQgVDuHEUgFI7UOaq/UAQnOaD2wuCl2uddhELZKdRdKFzJZ6HuQlv2hVR7IRP133HjEAaHWh/rEQnXJ+mTVG+hCORPUr2F8ouh7kJ+HsoLtd634FW+Xhsm4eLYy/+st9R470nA14rhYHnOUufyzBV/FOi8QxpA39DE+YFxHvxHB9zxbk/IgathEgW82s79v2tReAathmEGOBMf1aJwBQHOM6kJZK0+D0EvpX1ZYHtCIXIAcOCULXeltSdkC4DwxKUfqDVh0AEsh/MDZiFkO2bgSZ+kLQpTwKZ2T3KlKNJbuJQ/SVsUvpQL45XpwmF/Lf9AegvPvPzaw7K0FvpdEgIiobJISEJwJFQWCUkIjoTKIiEJwZFQWSQkITgSKst4oQ0UPuGRVAoFv99HByCMPh6MUAT40l+lUKTR/Q7n8m384fLwYITrKO3u4wfnoX+/IWCT+9H/v47RW5cSVQp5v9wg2b78S3HcwnhlvBDwYotbOMzKX0xxC/203ddS9cKEmS4ctLziqxfmgHd1qIUxZJ8ft7BvvDAyXQhZDnEL54DlELcwdEwXHgELPm7hHnLZG2ZhvIJcuYhaeDZeGJku9HemC5PSu7qwCweQ5RC1MIcsh6iFJ9BvMsUs7IMu5McsBC0WmIUx5LMTauH8BXQzBmJhWHoLMHbhArRYYBbuYb/2WqlwpVS4hN31pXSHNOrdLz+W3+gcD/L7Axwj2F1faq9U+P8bzK+tAXd2+d2PByMAb2trTchBwrU0UPurTfBeT2P+FUMkJCE8EiqLhCQER0JlkZCE4EioLBKSEBwJlUVCEoIjobJISEJwJFQWCUkIjoTKIiEJwZFQWSQkITgSKouEJARHQmWRkITgSKgsEpIQHAmVRUISgiOhskhIQnAkVBYJSQiOhMoiIQnBkVBZJCQhOBIqi4TPFDpPON7qNSl0n3C81WtO6LLxE463eo0JL77Pifwo1WtM2PnBtkYLRfrGXseTJ5wLVWtKOJnFzPr5jCOuWkNC4W0tZr12p6zxWWxION3EF6H1lk2fctRVakb41+zVKoRtEJsQikkBvAqt0cxp+BVV/V+0EhN3UwBvQiveRp7T5Ps3kPBcX+g46Wx7+4NL7Gu4ePuZpa7XVCwLrfhxF6GoO3w63rx9/6D+BncElkevYj5cAAAAAElFTkSuQmCC');
                }
            
                .twitter {
                    background-image: url('data:image/png;base64,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');
                }
            
                .linkedin {
                    background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5QU-9OFyKMvQ2Wm7MJPVM99wDh2gWE1j5-w&s');
                }
            </style>            
            <div class="social-media">
                <a href="https://www.facebook.com/TecnologicoNacionalDeMexico" class="facebook" target="_blank"></a>
                <a href="https://twitter.com/TecNM_Mexico" class="twitter" target="_blank"></a>
                <a href="https://www.linkedin.com/school/tecnologico-nacional-de-mexico" class="linkedin" target="_blank"></a>
            </div>


       <!-- SECCION DONDE SE ENCUENTRA EL CHAT IA DE LA PAGINA-->


<div class="chat-button" onclick="toggleChat()">💬</div>

<!-- Ventana de chat -->
<div class="chatbox" id="chatbox">
    <header>
        Chat en vivo
        <!-- Botón de cierre -->
        <button class="close-btn" onclick="toggleChat()">❌</button>
    </header>
    <div class="messages" id="messages"></div>
    <div class="input-area">
        <input type="text" id="userMessage" placeholder="Escribe tu mensaje..." onkeydown="if(event.key === 'Enter'){sendMessage()}">
        <button onclick="sendMessage()">Enviar</button>
    </div>
</div>

<script>
    function toggleChat() {
        const chatbox = document.getElementById('chatbox');
        chatbox.style.display = chatbox.style.display === 'flex' ? 'none' : 'flex';
    }

    function sendMessage() {
        const userMessage = document.getElementById('userMessage').value;
        if (!userMessage) return;

        const messages = document.getElementById('messages');
        const userMessageElem = document.createElement('div');
        userMessageElem.textContent = `Tú: ${userMessage}`;
        messages.appendChild(userMessageElem);

        // Simulate a response from the system
        const botMessageElem = document.createElement('div');
        botMessageElem.textContent = `Asistente: Recibido, ¿en qué más te puedo ayudar?`;
        messages.appendChild(botMessageElem);

        // Scroll to the bottom
        messages.scrollTop = messages.scrollHeight;

        // Clear the input field
        document.getElementById('userMessage').value = '';
    }
</script>

<style>
    /* Estilos para la ventana de chat */
    .chatbox {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 300px;
        height: 400px;
        background-color: #191f26;
        color: #66F2E4;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        display: none;
        flex-direction: column;
    }
    .chatbox header {
        background-color: #66F2E4;
        color: #191f26;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .chatbox .messages {
        flex-grow: 1;
        overflow-y: auto;
        padding: 10px;
        background-color: #2d2f37;
        border-radius: 5px;
        margin-bottom: 10px;
    }
    .chatbox .input-area {
        display: flex;
    }
    .chatbox input[type="text"] {
        flex-grow: 1;
        padding: 10px;
        border: none;
        border-radius: 5px;
        margin-right: 10px;
    }
    .chatbox button {
        padding: 10px 15px;
        background-color: #66F2E4;
        color: #191f26;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .chatbox button:hover {
        background-color: #54D9C1;
    }
    .chat-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #66F2E4;
        color: #191f26;
        padding: 15px;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        font-size: 18px;
    }
    /* Estilos para el botón de cierre */
    .close-btn {
        background: none;
        border: none;
        color: #191f26;
        font-size: 18px;
        cursor: pointer;
    }
    .close-btn:hover {
        color: #FF6347; /* Color cuando el cursor pasa sobre el botón */
    }
</style>
    </footer>
</body>
</html>

