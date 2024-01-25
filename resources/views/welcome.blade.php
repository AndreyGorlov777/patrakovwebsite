<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Владислав Патраков</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand"><img src="{{ asset('images/vplogo.png') }}" alt="Владислав Вадимович Патраков логотип для небольших экранов"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#about-me">Обо мне</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#stages-of-work">Этапы работы</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">Услуги и гарантии</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="">Кейсы</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <article id="about-me" class="container-fluid" style="background-image: url('{{ asset('images/f208048568180a1979582025bf9cf5ef1572ea11.webp') }}'); background-size: cover; padding-inline: 10px;">
            <br>
            <br>
            <div class="container">
                <div class="row">
                    <section data-aos="fade-right" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 20px; margin-bottom: 20px;" class="col-12 col-sm-5 text-center">
                        <img class="img-fluid" style="border-radius: 20px; margin-top: 13px; margin-bottom: 20px;" src="{{ asset('images/foto.jpg') }}" alt="Владислав Вадимович Патраков фото">
                        <h4>Владислав Патраков</h4>
                        <h5>Брокер по банковским гарантиям</h5>
                        <h6>Работаю со сложными заявками</h6>
                    </section>
                    <div class="col-12 col-sm-2"></div>
                    <section data-aos="fade-left" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 20px; margin-bottom: 20px; display: flex; flex-direction: column; justify-content: center;" class="col-12 col-sm-5 text-center">
                        <h6>Meня зoвут Bладиcлaв, и у мeня за плечами 11 лет уcпешнoй работы в cферe банковcкиx гapaнтий. Помогаю кoмпaниям пoлучaть незавиcимые гaрантии, peшaя дaжe сaмыe сложныe вопpосы!</h6>
                    </section>
                </div>
            </div>
            <br>
            <br>
        </article>
        <article>
            <br>
            <h1 id="stages-of-work" data-aos="zoom-in" style="color: red;" class="text-center">Этапы работы:</h1>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <div class="container">
                            <div class="row">
                                <section data-aos="fade-right" style="background-color: rgba(238, 238, 238, 0.7); border-radius: 20px; margin-bottom: 20px;" class="col-12">
                                <p>
                                    1. Предоставьте ИНН и необходимую информацию о требуемой банковской гарантии
                                </p>
                                </section>
                                <section data-aos="fade-right" style="background-color: rgba(238, 238, 238, 0.7); border-radius: 20px; margin-bottom: 20px;" class="col-12">
                                    <p>
                                        2. Как правило два дня на проработку, кто из банкиров возьмется
                                    </p>
                                </section>
                                <section data-aos="fade-right" style="background-color: rgba(238, 238, 238, 0.7); border-radius: 20px; margin-bottom: 20px;" class="col-12">
                                    <p>
                                        3. Согласование условий и запуск заявки
                                    </p>
                                </section>
                                <section data-aos="fade-right" style="background-color: rgba(238, 238, 238, 0.7); border-radius: 20px; margin-bottom: 30px;" class="col-12">
                                    <p>
                                        4. Получите вашу гарантию и продолжайте развивать свой бизнес!
                                    </p>
                                </section>
                                <section data-aos="fade-right" style="background-color: rgba(82, 255, 111, 0.7); border-radius: 20px; margin-bottom: 20px;" class="col-12">
                                    <p>
                                        Пожалуйста, учтите, что мои услуги имеют свою стоимость, поэтому, если вы ищете более бюджетные варианты, я не смогу предоставить вам помощь.
                                    </p>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <div class="container">
                            <div class="row">
                                <section data-aos="fade-left" class="col-12">
                                    <img class="img-fluid" style="border-radius: 20px; margin-bottom: 20px;" src="{{ asset('images/family.jpeg') }}" alt="Владислав Вадимович Патраков семейное фото">
                                </section>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <footer>

    </footer>

    <br><br><br><br>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        AOS.init();
    </script>
</body>
</html>
