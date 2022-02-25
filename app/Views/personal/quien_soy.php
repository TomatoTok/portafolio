<div class="contenedor">
    <div class="x_panel">
        <div class="row">
            <div class="section col-8 offset-2 centrado">
                <div class="row">
                    <div class="title">
                        <h1 class='title-head'>¿Quien soy?</h1>
                    </div>
                    <div class="col-6 offset-3">
                        <div class="aclaracion">
                            <div id="aclaracion" class="aclaracion">
                                <label for="">
                                    Para hacer esta pregunta mas legible se la va a tratar como si fuera una entrevista
                                    de radio. <br>
                                    Es decir que yo mismo me voy a entrevistar.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <label for="">Hola soy tom.</label>
                </div>
            </div>
        </div>
        <div class="container-fluid row">
            <div class="all-questions">
                <div class="question">
                    <label for="" class="ask">+ Bueno bienvenido, ¿Tom, Tomás o Tomato?</label>
                    <div class="answer">
                        <label class="ask-ans" for="">
                            - Prefiero Tomato para quienes tienen confianza conmigo, suena menos agresivo y Tom para todo aquello mas "profesional".
                        </label>
                    </div>
                </div>
                <div class="question">
                    <label for="" class="ask">+ Perfecto, empecemos con las preguntas reales. ¿Quien es Tom?</label>
                    <div class="answer">
                        <label class="ask-ans" for="">
                            - Uf que pregunta, si tuviera que describirme diria que soy un estudiante, empleado, un sujeto común con la caracteristica de que me gusta soñar
                            y en grande. Me gusta crear y compartir contenido.
                        </label>
                    </div>
                </div>
                <div class="question">
                    <label for="" class="ask">+ ¿Qué estas estudiando?</label>
                    <div class="answer">
                        <label class="ask-ans" for="">
                            - Formalmente estudio para Analista en Sistemas. Pero tambien todo aquello que me gusta como programacion Web y Desarrollo de videojuegos,
                            aunque voy muy despacio ya que priorizo terminar la carrera primero.
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contenedor {
        background-color: #FF9636;
        height: 100vh;
    }
    .all-questions{
        background-color:#FFD68A;
        border-radius: 8px;
        margin:15px
    }

    .x_panel {
        background-color: white;
        margin: 0px 20px;
        padding-top: 50px;
    }

    .section {
        /*margin: 10px 10%;*/
        padding: 10px;
        border: 1px solid gray;
        border-radius: 10px;
    }

    .title {
        padding-left: 20px;
    }

    .text {
        padding-left: 20px;
    }

    .centrado {
        justify-content: center;
        text-align: center;
    }

    #aclaracion {
        background-color: #E8E8E8;
        border-left: 5px solid gray;
        border-radius: 5px;
        padding: 5px;
        margin: 10px;
    }

    .question {
        padding: 20px 10px;
        margin: 20px;
        border-left: 4px solid #FF9636;
        border-radius: 10px;
    }

    .ask {
        font-size: 25px;
        color: black;
    }

    .ask-ans {
        font-size: 20px;
    }
</style>