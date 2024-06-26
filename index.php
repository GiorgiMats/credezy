<!DOCTYPE html>
<html lang="en">

<head>





    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="credit-media.css" />
    <link rel="icon" href="img/web-icon.svg" sizes="16x16">

    <link rel="stylesheet" href="form-styles.css">
    <!-- <link rel="stylesheet" href="java.js" /> -->
    <title>Mejores Préstamos Personales</title>




<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-566HVSSQ');</script>
<!-- End Google Tag Manager -->








</head>

<body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-566HVSSQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <header class="header">
        <div class="header-container">
            <a href="#">
                <img src="img/main-logo.svg" alt="" class="logo">
            </a>

            <div class="hamburger-menu">
                <img src="img/menu-logo.svg" alt="" class="menu-icon">
            </div>

            <ul class="nav">
                <li><a href="#" class="nav-focus">Principal</a></li>
                <li><a href="./about-us.php" class="nav-link">Sobre nosotros</a></li>
                <li><a href="#faqs" class="nav-link">Preguntas frecuentes</a></li>
            </ul>

            <div class="close">
                <img src="img/close-icon.svg" alt="" class="close-icon">
            </div>
        </div>
    </header>

    <div class="container-4">
        <div class="container-responsive" id="appear">
            <div class="loans-box">
                <h1 class="h1-responsive">¡Préstamos en Línea¡ Tu primer préstamo Sin Intereses
                </h1>
                <p class="p-responsive">Hasta $30.000 en un click. Más de 20 ofertas de diferentes empresas. Solicita ahora y recibe respuesta en pocos segundos.
                </p>
            </div>
        </div>
    </div>

    <div class="hero-section">
        <div class="hero-container">
            <div class="hero-left">
                <h1 class="h1-left">¡Préstamos en Línea¡ Tu primer préstamo Sin Intereses</h1>
                <div class="hero-info">
          <div class="hero-left-info">
            <img src="img/check.svg" alt="checkmark" class="check" />
            <p class="hero-left-p">
            Hasta $30.000 en un click
            </p>
          </div>
          <div class="hero-left-info">
            <img src="img/check.svg" alt="checkmark" class="check" />
            <p class="hero-left-p">Más de 20 ofertas de diferentes empresas</p>
          </div>
          <div class="hero-left-info">
            <img src="img/check.svg" alt="checkmark" class="check" />
            <p class="hero-left-p">Los mejores préstamos rápidos sin papeleos</p>
          </div>
          <div class="hero-left-info">
            <img src="img/check.svg" alt="checkmark" class="check" />
            <p class="hero-left-p">Solicita ahora y recibe respuesta en pocos segundos</p>
          </div>
        </div>
            </div>
            <div class="forms-new">
                <div class="hero-right">
                    <form id="regForm" action="lead_submit_temporary.php" method="post">
                        <!-- <h1 class="pc-h1" >Aplica ahora</h1> -->
                        <h1 class="mobile-h1" >Solicita tu crédito ahora</h1>
                        <!-- One "tab" for each step in the form: -->



                        <div class="tab">

                            <!-- <h2 class="credit-h3">¿Cuánto dinero necesitas?</h2> -->
                            <div class="loan-content">

                                <div class="custom-select" id="loan_purpose" onclick="checkSelect('loan_purpose')">
                                    <select id="mySelect" name="loan_purpose" required>
                                        <option onclick="checkSelect('loan_purpose')" value="Seleccione uno"
                                            class="select-one">Por qué solicita el préstamo
                                        </option>
                                        <option onclick="checkSelect('loan_purpose')" value="PURCHASE_OF_FOOD"
                                            class="option-hover">Comprar alimentos</option>
                                        <option onclick="checkSelect('loan_purpose')" value="BUYING_ELECTRONICS"
                                            class="option-hover">Comprando electrónicos
                                        </option>
                                        <option onclick="checkSelect('loan_purpose')" value="CREATE_CREDIT_HISTORY"
                                            class="option-hover">Crear historial crediticio
                                        </option>
                                        <option onclick="checkSelect('loan_purpose')" value="SCHOOL_EXPENSES"
                                            class="option-hover">Gastos escolares</option>
                                        <option onclick="checkSelect('loan_purpose')" value="UNFORESEEN_EXPENSE"
                                            class="option-hover">Gasto imprevisto</option>
                                        <option onclick="checkSelect('loan_purpose')" value="MEDICAL_EXPENSES"
                                            class="option-hover">Gastos médicos</option>
                                        <option onclick="checkSelect('loan_purpose')"
                                            value="MAINTENANCE_OR_REPAIR_OF_HOUSE" class="option-hover">
                                            Mantenimiento o reparación de la casa</option>
                                        <option onclick="checkSelect('loan_purpose')" value="PAY_ANOTHER_LOAN"
                                            class="option-hover">
                                            Pagar otro préstamo</option>
                                        <option onclick="checkSelect('loan_purpose')" value="PAYMENT_OF_SERVICES"
                                            class="option-hover">
                                            Pago de servicios</option>
                                        <option onclick="checkSelect('loan_purpose')" value="FOR_MY_BUSINESS"
                                            class="option-hover">
                                            Para mi negocio</option>
                                        <option onclick="checkSelect('loan_purpose')" value="TRAVEL"
                                            class="option-hover">
                                            Viaje</option>
                                        <option onclick="checkSelect('loan_purpose')" value="OTHER"
                                            class="option-hover">
                                            Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-heading-wrapper">
                                <p class="credit-p2">Quiero recibir:</p>
                                <div class="money-value-new">
                                    <input type="number" id="range-flex" class="number-input" value="1000" min="1000"
                                        max="30000" step="500" name="loan_sum">
                                </div>
                            </div>
                            <p><input class="range-input" type="range" min="1000" max="30000" value="6000" step="500"
                                    name="loan_sum" /></p>
                        </div>

                        <div class="tab-2">

                            <!-- Second range input -->
                            <div class="form-heading-wrapper">
                                <p class="credit-p2">Plazo:</p>
                                <div class="money-value-new">
                                    <!-- <input type="number" id="range-flex-2" class="number-input-2" value="24"
                                    min="1" max="361" value="24" step="30" maxlength="7" name="moneycount-2"> -->
                                    <!-- <input type="number" id="range-flex-2" class="number-input-2" value="24" min="1" max="361" step="any" name="loan_period"> -->
                                    <input type="number" id="range-flex-2" class="number-input-2" min="1" max="361"
                                        value="24" step="1" name="loan_period" onkeyup=enforceMinMax(this)>

                                    <label class="placeholder-label" for="range-input-2">Dias</label>
                                </div>
                            </div>
                            <!-- <input class="range-input-2" type="range" min="1" max="361" value="24" step="30"
                                placeholder="Dias" name="loan_period" /> -->
                            <input class="range-input-2" id="range-input-2" type="range" min="1" max="361" value="24"
                                step="1" name="loan_period" placeholder="Dias">



                            <div>
                                <!-- <a href="https://credito-mx.com/offers.php" target="_blank" id="stayOnPageLink"></a> -->

                                <!-- <button type="submit" id="nextBtn" onclick="nextPrev(1)"> SOLICITA TU PRÉSTAMO
                                </button> -->
                                <button type="button" id="nextBtn" onclick="validateSubmit()"> SOLICITA TU PRÉSTAMO
                                </button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->

                        <h3 class="documents-h3">Solicitudes realizadas hoy: 4714</h3>
                        <p class="terms">
                            Al hacer clic en el botón "Siguiente", acepta <a href="./normas.php" class="policy-span">
                                los términos</a>
                            de procesamiento de datos personales.
                        </p>
                    </form>
                </div>

                <!-- select -->





                <!-- select -->







            </div>
        </div>
    </div>



    <main>


        <div class="container-1 container-circle">


            <div class="how how-2">


                <div class="how-box" id="circle-box">
                    <div class="circle">
                        <p class="circle-p">1</p>
                    </div>
                    <div class="circle-info">
                        <p class="how-p1" id="how-changed">Completa el formulario</p>
                        <p class="how-p2" id="how-changed-p">
                            Todo lo que necesitas es Copia de DNI, pasaporte o NIE. Estado de cuenta bancario con
                            ingresos y gastos mensuales
                        </p>
                    </div>
                </div>
                <div class="how-box" id="circle-box">
                    <div class="circle">
                        <p class="circle-p">2</p>
                    </div>
                    <div class="circle-info">
                        <p class="how-p1" id="how-changed">Escoge la mejor oferta</p>
                        <p class="how-p2" id="how-changed-p">
                            Nuestro servicio seleccionará las mejores opciones de obtención de fondos para tu préstamo ,
                            enviaremos tu solicitud a las entidades con el mayor porcentaje de aprobación
                        </p>
                    </div>
                </div>
                <div class="how-box" id="circle-box">
                    <div class="circle">
                        <p class="circle-p">3</p>
                    </div>
                    <div class="circle-info">
                        <p class="how-p1" id="how-changed">Recibe tu dinero</p>
                        <p class="how-p2" id="how-changed-p">
                            Haznos saber la forma más cómoda para la recepción de tu préstamo, a tu tarjeta bancaria ,
                            cuenta o en efectivo </p>
                    </div>
                </div>



            </div>
        </div>

        <div class="container-1">
            <h2 class="h22" >Acceso Inmediato a Préstamos Rápidos</h2>
            <div class="links-container">
                <a class="links-a" href="https://rdr.pdlsd.net/in/offer/3470?aid=106155" target="_blank">
                    <div class="link-box">
                        <div class="links-flex">
                            <div class="bank-div">
                                <img src="img/13-finzmo.svg" alt="" class="bank-logo" />
                            </div>
                            <div class="bank-info">

                                <div class="bank-list">
                                    <div class="bank-value">
                                        <p class="bank-p">Importe hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">25 000</p>
                                            <p class="bank-p">$</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">Probabilidad de aprobación</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">91</p>
                                            <p class="bank-p">%</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">a devolver hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">30</p>
                                            <p class="bank-p"> días</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-link">Obtener dinero</button>
                        </div>
                    </div>
                </a>
                <a class="links-a" href="https://rdr.pdlsd.net/in/offer/6319?aid=106155/" target="_blank">
                    <div class="link-box">
                        <div class="links-flex">
                            <div class="bank-div">
                                <img src="img/3-credito-365-mx.svg" alt="" class="bank-logo" />
                            </div>
                            <div class="bank-info">

                                <div class="bank-list">
                                    <div class="bank-value">
                                        <p class="bank-p">Importe hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">20 000</p>
                                            <p class="bank-p">$</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">Probabilidad de aprobación</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">94</p>
                                            <p class="bank-p">%</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">a devolver hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">48</p>
                                            <p class="bank-p">meses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-link">Obtener dinero</button>
                        </div>
                    </div>
                </a>


                <a class="links-a" href="https://rdr.pdlsd.net/in/offer/1744?aid=106155" target="_blank">
                    <div class="link-box">
                        <div class="links-flex">
                            <div class="bank-div">
                                <img src="img/4-solcredito.svg" alt="" class="bank-logo" />
                            </div>
                            <div class="bank-info">

                                <div class="bank-list">
                                    <div class="bank-value">
                                        <p class="bank-p">Importe hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">1000</p>
                                            <p class="bank-p">$</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">Probabilidad de aprobación</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">98</p>
                                            <p class="bank-p">%</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">a devolver hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">30</p>
                                            <p class="bank-p"> días</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-link">Obtener dinero</button>
                        </div>
                    </div>
                </a>



                <a class="links-a" href="https://rdr.pdlsd.net/in/offer/3219?aid=106155" target="_blank">
                    <div class="link-box">
                        <div class="links-flex">
                            <div class="bank-div">
                                <img src="img/9-fidea.svg" alt="" class="bank-logo" />
                            </div>
                            <div class="bank-info">

                                <div class="bank-list">
                                    <div class="bank-value">
                                        <p class="bank-p">Importe hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">150 000</p>
                                            <p class="bank-p">$</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">Probabilidad de aprobación</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">86</p>
                                            <p class="bank-p">%</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">a devolver hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">36</p>
                                            <p class="bank-p"> meses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-link">Obtener dinero</button>
                        </div>
                    </div>
                </a>

                <a class="links-a" href="https://rdr.pdlsd.net/in/offer/2724?aid=106155" target="_blank">
                    <div class="link-box">
                        <div class="links-flex">
                            <div class="bank-div">
                                <img src="img/6-kreditiweb.svg" alt="" class="bank-logo" />
                            </div>
                            <div class="bank-info">

                                <div class="bank-list">
                                    <div class="bank-value">
                                        <p class="bank-p">Importe hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">50 000</p>
                                            <p class="bank-p">$</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">Probabilidad de aprobación</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">91</p>
                                            <p class="bank-p">%</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">a devolver hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">30</p>
                                            <p class="bank-p"> días</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-link">Obtener dinero</button>
                        </div>
                    </div>
                </a>
                <a class="links-a" href="https://rdr.pdlsd.net/in/offer/3288?aid=106155/" target="_blank">
                    <div class="link-box">
                        <div class="links-flex">
                            <div class="bank-div">
                                <img src="img/2-askrobin-logo.svg" alt="" class="bank-logo" />
                            </div>
                            <div class="bank-info">

                                <div class="bank-list">
                                    <div class="bank-value">
                                        <p class="bank-p">Importe hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">40 000</p>
                                            <p class="bank-p">$</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">Probabilidad de aprobación</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">92</p>
                                            <p class="bank-p">%</p>
                                        </div>
                                    </div>
                                    <div class="bank-value">
                                        <p class="bank-p">a devolver hasta</p>
                                        <div class="bank-money">
                                            <p class="bank-p2">36</p>
                                            <p class="bank-p">meses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-link">Obtener dinero</button>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div class="container-1">
            <h2 class="h22">Ventajas de usar nuestro servicio</h2>

            <div class="benefits">
                <div class="benefits-box1 blue-box">
                    <p class="benefits-p1 ">Simplifica tus solicitudes</p>
                    <p class="benefits-p2 ">
                        Porque entendemos que puedes tener un gasto inesperado y necesitar tu dinero de inmediato.
                        Garantizamos que
                        recibirás tu préstamo personal aprobado en menos de 15 minutos.
                    </p>
                </div>
                <div class="benefits-box2-1img"></div>
                <div class="benefits-box1 yellow-box">
                    <p class="benefits-p1">Ahorra tiempo con Crédito MX</p>
                    <p class="benefits-p2">
                        No queremos que pierdas tu valioso tiempo en largas solicitudes. Por esta razón, solicitar un
                        préstamo
                        personal en Credezy es 100% online y muy fácil.
                    </p>
                </div>
                <div class="benefits-box2-2img"></div>
                <div class="benefits-box2-3img"></div>
                <div class="benefits-box1 green-box">
                    <p class="benefits-p1">Opciones financiamiento personalizadas</p>
                    <p class="benefits-p2">
                        Valoramos las entidades que realmente se preocupan por tu situación financiera. En Crédito MX
                        estudiamos
                        cada aplicación y te ofrecemos un producto totalmente individualizado.
                    </p>
                </div>
                <div class="benefits-box2-4img"></div>
                <div class="benefits-box1 pink-box">
                    <p class="benefits-p1">¡Gratuito y sin obligación!</p>
                    <p class="benefits-p2">
                        ¡Gratuito y sin obligación!
                        Nuestro servicio es gratuito. No hay nada que te obligue a continuar con la oferta de
                        financiamiento.
                    </p>
                </div>
            </div>
        </div>


        <div class="container-1 container-flex">
            <h2 class="h22">Asistencia para tu préstamo</h2>

            <p class="receive-p">
                ¡Servicio de selección personalizado , con un alto porcentaje de aprobación ! Rápido,gratis ,seguro
            </p>
            <a href="#"><button class="btn recive-btn">Obtener dinero</button></a>
        </div>


        <div class="container-1">
            <h2 class="h22">¿Por qué nosotros?</h2>

            <div class="how">
                <div class="how-box">
                    <img src="img/why-11.svg" alt="" class="how-img" />
                    <p class="how-p1">Tu eres nuestra prioridad
                    </p>
                    <p class="how-p2">
                        Buscamos, comparamos y negociamos para ofrecerte sólo lo mejor que nuestros colaboradores en
                        México tienen
                        para ti. Sólo ganamos si tu ganas.
                    </p>
                </div>
                <div class="how-box">
                    <img src="img/why-22.svg" alt="" class="how-img" />
                    <p class="how-p1">Tus datos están protegidos</p>
                    <p class="how-p2">
                        Tenemos la misma seguridad que los más avanzados. sistemas bancarios (256 bits), así como un
                        equipo de
                        seguridad para protegerte en cada paso. Siempre cuidamos de ti.
                    </p>
                </div>
                <div class="how-box">
                    <img src="img/why-33.svg" alt="" class="how-img" />
                    <p class="how-p1">Ahorra tiempo</p>
                    <p class="how-p2">
                        Cuando tienes que pasar por un largo proceso de solicitud, en realidad estás perdiendo dinero.
                        Nuestro
                        rápido proceso le brinda la tranquilidad de que esto no va a suceder nunca más.
                    </p>
                </div>
            </div>
        </div>



        <div class="container-1">
            <h2 class="h22">Reseñas</h2>
            <div class="testmonials">
                <div class="testmonial-box">
                    <div class="stars">
                        <img src="img/stars.png" alt="" /><img src="img/stars.png" alt="" /><img src="img/stars.png"
                            alt="" /><img src="img/stars.png" alt="" /><img src="img/stars.png" alt="" />
                    </div>

                    <div class="testmonial-bottom">
                        <p class="testmonial-p">
                            De momento satisfecha con el resultado. Todo ha sido como yo esperaba y como había
                            comprobado por los
                            comentarios de internet. Es fácil y rápido.
                        </p>

                        <div class="author">
                           
                            <p class="author-p">Manuel</p>
                        </div>

                    </div>
                </div>
                <div class="testmonial-box">
                    <div class="stars">
                        <img src="img/stars.png" alt="" /><img src="img/stars.png" alt="" /><img src="img/stars.png"
                            alt="" /><img src="img/stars.png" alt="" /><img src="img/stars.png" alt="" />
                    </div>

                    <div class="testmonial-bottom">
                        <p class="testmonial-p">
                            Muy buena atención y asistencia, así como agilidad para todo el trámite realizado. Si
                            tuviera que
                            calificar de 0 a 10, sería un 12. Muchísimas gracias por el trato, atención y rapidez.
                        </p>

                        <div class="author">
                            
                            <p class="author-p">Margarita</p>
                        </div>

                    </div>
                </div>
                <div class="testmonial-box">
                    <div class="stars">
                        <img src="img/stars.png" alt="" /><img src="img/stars.png" alt="" /><img src="img/stars.png"
                            alt="" /><img src="img/stars.png" alt="" /><img src="img/stars.png" alt="" />
                    </div>

                    <div class="testmonial-bottom">
                        <p class="testmonial-p">
                            La experiencia de subir tu información bancaria es muy sencilla! Y gracias a tener una
                            visión real de mi
                            solvencia me han dado un 5,99%! No es el 2,99% que anuncian pero sigue siendo mejor que
                            otros!
                        </p>

                        <div class="author">
                       
                            <p class="author-p">José Luis</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-1" id="faqs">
            <div class="container-max-width">
                <h2 class="h22">Agente de crédito: cuál es la función de dicho especialista</h2>

                <div class="before-div">
                    <p class="receive-p">
                        Para obtener un préstamo en condiciones favorables , puede comunicarse con un agente de crédito
                        que
                        facilitará
                        significativamente este procedimiento , el mismo hace de mediador entre una entidad bancaria y
                        un
                        solicitante
                        , lo cual garantiza una interacción de ambas partes durante todo el procedimiento , dicho
                        especialista
                        trabaja
                        tanto con personas físicas como con jurídicas
                    </p>
                </div>
                <div class="faq-border"></div>

                <button type="button" class="collapsible">
                    <p class="faq-btn-p">¿Con quién se llega a un acuerdo para el préstamo?</p>
                </button>

                <div class="content">
                    <p class="faq-p">
                    Credezy permite comparar ofertas de bancos y proveedores de préstamos, pero no ofrece
                        préstamos ni
                        asistencia financiera. Por lo tanto, no se puede llegar a un acuerdo de préstamo con Credezy,
                        únicamente
                        con los bancos o los proveedores de préstamos que aparecen en la lista de Credezy.
                    </p>
                </div>
                <div class="faq-border"></div>
                <button type="button" class="collapsible">
                    <p class="faq-btn-p">¿Cuánto dinero puedo solicitar?</p>
                </button>

                <div class="content">
                    <p class="faq-p">
                        La cantidad de dinero que se puede solicitar dependerá de cada una de las ofertas de préstamos y
                        de los
                        términos y condiciones del acuerdo. Puedes encontrar el préstamo que se adapte mejor a tus
                        necesidades con
                        la búsqueda y el uso de los filtros en la lista de préstamos de Credezy.
                    </p>
                </div>
                <div class="faq-border"></div>
                <button type="button" class="collapsible">
                    <p class="faq-btn-p">¿Cómo será la tasa de interés de mi préstamo?</p>
                </button>
                <div class="content">
                    <p class="faq-p">
                        Las tasas de interés de los préstamos en línea son un poco más elevadas que la de los préstamos
                        tradicionales bancarios y dependerán de la oferta de préstamo que se hayas elegido. Podrás
                        encontrar la
                        opción que se adapte mejor a tus necesidades al buscar/filtrar la lista de préstamos de
                        Credezy.
                    </p>
                </div>
                <div class="faq-border"></div>
                <button type="button" class="collapsible">
                    <p class="faq-btn-p">
                        ¿Por qué ha sido rechazada mi solicitud?
                    </p>
                </button>

                <div class="content">
                    <p class="faq-p">
                        Cada uno de los proveedores de préstamos establece los términos y condiciones para cada oferta.
                        Credezy
                        no tiene ningún tipo de influencia a la hora de aprobar o rechazar las solicitudes. Si tienes
                        dudas con
                        respecto a tu solicitud, por favor, contacta al proveedor de préstamos directamente.
                    </p>
                </div>
                <div class="faq-border"></div>
                <button type="button" class="collapsible">
                    <p class="faq-btn-p">¿Puedo recibir el monto del préstamo inmediatamente?</p>
                </button>
                <div class="content">
                    <p class="faq-p">
                        Cuando se ha establecido un acuerdo con la entidad prestamista, generalmente, se puede obtener
                        el monto el
                        mismo día o el día después del acuerdo. Esto dependerá del horario de trabajo de la entidad.
                    </p>
                </div>
                <div class="faq-border"></div>
            </div>
        </div>

        <div class="container-1 container-max-width">
            <h2 class="h22">Ejemplo práctico
            </h2>

            <div class="before-div">
                <p class="receive-p">
                    El periodo mínimo de liquidación de la deuda es de 61 días , el periodo máximo de liquidación de 120
                    días. La
                    tasa de interés Efectiva Anual es de hasta 28,98% + IVA. El monto del préstamo es aproximadamente de
                    2,000 MXN
                    con un plazo de 84 días, y se pagará en cuatro pagos semanales. Para calcular cada cuota, dividimos
                    el monto
                    del préstamo por el número de cuotas: 2,000 MXN / 4 = 500 MXN por cuota. La tasa de interés es del
                    0.01% por
                    día, lo que resulta en un costo total del préstamo de aproximadamente 2,014.24 MXN, con una comisión
                    adicional
                    de aproximadamente 3.85 MXN. Por lo tanto, el monto total a pagar es de aproximadamente 2,018.09
                    MXN, y la
                    tasa de interés anual es de aproximadamente el 3.65% en términos de Peso Mexicano. Los intereses
                    varían según
                    el prestamista, el interés propuesto dependerá de tus circunstancias e historial crediticio. La
                    página actual
                    no es una entidad financiera, un banco o un prestamista.
                </p>
            </div>
            <div class="container-1 container-flex">
                <h2 class="h22">Asistencia para tu préstamo</h2>

                <p class="receive-p">
                    ¡Servicio de selección personalizado , con un alto porcentaje de aprobación ! Rápido,gratis ,seguro
                </p>
                <a href="#"><button class="btn recive-btn">Obtener dinero</button></a>
            </div>

    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-menu">
                <div class="footer-box">
                    <p class="footer-p">Compañía</p>
                    <div class="pages">
                        <p class="pages-p"><a href="./about-us.php">Sobre nosotras</a></p>
                        <p class="pages-p"><a href="./politicas.php">Políticas</a></p>
                        <p class="pages-p"><a href="./normas.php">Cookies</a></p>
                        <p class="pages-p"><a href="./acuerdos.php">Acuerdos</a></p>
                    </div>
                </div>

                <div class="footer-box">
                    <p class="footer-p">Información</p>
                    <div class="pages">
                        <p class="pages-p pages-p2">
                        credezy.com.mx - es un servicio online gratuito dedicado a conectarte con las mejores
                            opciones de préstamo
                            en el mercado. El servicio Credezy escoge
                            préstamos para clientes haciendo de intermediario entre los clientes que quieren recibir un
                            préstamo y las
                            instituciones financieras licenciadas. El servicio no se hace responsable de los acuerdos
                            crediticios. La
                            página actual no cobra por el servicio ni tampoco se hace responsable de las acciones,
                            incumplimientos o
                            tasas de interés de cualquier prestamista. No estás obligado a usar los servicios de
                            Credezy ni
                            contactar o solicitar un préstamo a los prestamistas que aparecen en esta página.
                        </p>
                    </div>
                </div>
            </div>
            <p class="copyright-p">
            credezy.com.mx ©2024 - todos los derechos registrados.
            </p>
        </div>


    </footer>


    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("arrow-top");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
    </script>
</body>
<script src="stepper.js"></script>

</script>


<script src="scripts.js"></script>

</html>