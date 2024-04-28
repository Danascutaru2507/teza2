@extends('frontend.layouts.master')
@section('body')
    <body class="result_page">
    <section class="main_section">
        <div class="loader_wrap" style="display: block;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 style="margin:auto;display:block;" width="204px" height="204px" viewBox="0 0 100 100"
                 preserveAspectRatio="xMidYMid">
                <g transform="translate(50,50)">
                    <circle cx="0" cy="0" r="8.333333333333334" fill="none" stroke="#e15b64" stroke-width="6.1"
                            stroke-dasharray="26.179938779914945 26.179938779914945">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;-360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="0"
                                          repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="16.666666666666668" fill="none" stroke="#f47e60" stroke-width="6.1"
                            stroke-dasharray="52.35987755982989 52.35987755982989">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.14054054054054055" repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="25" fill="none" stroke="#f8b26a" stroke-width="6.1"
                            stroke-dasharray="78.53981633974483 78.53981633974483">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;-360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.2810810810810811" repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="33.333333333333336" fill="none" stroke="#abbd81" stroke-width="6.1"
                            stroke-dasharray="104.71975511965978 104.71975511965978">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.4216216216216216" repeatCount="indefinite"></animateTransform>
                    </circle>
                    <circle cx="0" cy="0" r="41.666666666666664" fill="none" stroke="#849b87" stroke-width="6.1"
                            stroke-dasharray="130.89969389957471 130.89969389957471">
                        <animateTransform attributeName="transform" type="rotate" values="0 0 0;-360 0 0" times="0;1"
                                          dur="1.3513513513513513s" calcMode="spline" keySplines="0.2 0 0.8 1"
                                          begin="-0.5621621621621622" repeatCount="indefinite"></animateTransform>
                    </circle>
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="row">
                <div class="result_file_inner">
                    <div class="result_search_bar">
                        <div class="result_info">
                            <div class="result_img">
                                <img alt="Scaned Image" style="display: none;"/>
                            </div>
                            <div class="result_label">
                                <span class="probab_score"></span>
                                <h3 class="class_title"></h3>
                            </div>
                        </div>
                        <div class="close_btn">
                            <a href="{{route('upload')}}"><img src="{{asset('assets/images/close-btn.png')}}"></a>
                        </div>
                    </div>
                    <div class="result_main_content">
                        <div class="result_inner_top">
                            <div class="result_heading">
                                <h2 class="class_title"></h2>
                                <div class="class_indicate"><img src="" alt="Class"/></div>
                            </div>
                            <div class="para-scroll">
                                <div class="class_detail">
                                    <div class="content_wrap plastic">
                                        <h4><span style="width: 40px;display: inline-block;"></span><i>Felicitări pentru
                                                alegerea de a recicla!</i></h4>

                                        <p><span style="width: 40px;display: inline-block;"></span>Prin scanarea acestui
                                            obiect, vă alăturați eforturilor de a reduce deșeurile și de a promova
                                            sustenabilitatea. Plasticele, deși diverse în tip și utilizare, au în comun
                                            potențialul de a fi reciclate și transformate în noi produse. </p>

                                        <h4><i>Instrucțiuni Generale de Reciclare:</i></h4>
                                        <ul>
                                            <li>Asigurați-vă că toate articolele din plastic sunt curate și libere de
                                                resturi alimentare sau alte reziduuri. Aceasta crește calitatea
                                                materialului reciclat.
                                            </li>
                                            <li>Îndepărtați capacele și etichetele dacă sunt făcute dintr-un material
                                                diferit. Dacă sunt din același tip de plastic, pot fi lăsate atașate.
                                            </li>
                                        </ul>
                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea
                                            plasticului reduce nevoia de resurse naturale noi, economisește energie și
                                            scade poluarea. Prin reciclare, contribuim la limitarea poluării cu plastic
                                            în medii naturale, inclusiv în oceane, unde plasticul poate cauza daune
                                            grave vieții marine. Fiecare acțiune de reciclare contează în lupta
                                            împotriva schimbărilor climatice și a degradării mediului.</p>

                                        <p><span style="width: 40px;display: inline-block;"></span>Vă mulțumim că ați
                                            ales să reciclați! Fiecare efort individual contribuie la un mediu mai curat
                                            și un viitor mai sustenabil pentru toți.</p>
                                        <div class="video-main">
                                            <img src="{{asset('assets/images/classes/plastic.jpg')}}"
                                                 class="static_cls_img"
                                                 alt="Static Image"/>
                                        </div>
                                    </div>
                                    <div class="content_wrap paper">
                                        <h4><span style="width: 40px;display: inline-block;"></span><i>Felicitări pentru
                                                alegerea de a recicla!</i></h4>

                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea hârtiei nu
                                            numai că reduce nevoia de a tăia copaci noi, dar și economisește apă și
                                            energie, reducând totodată poluarea și deșeurile de la gropile de gunoi</p>

                                        <h4><i>Instrucțiuni Generale de Reciclare:</i></h4>
                                        <ul>
                                            <li>Asigurați-vă că hârtia este curată și uscată. Materialele ude sau
                                                murdare pot contamina alte materiale reciclabile și pot reduce calitatea
                                                produsului reciclat.
                                            </li>
                                            <li>Îndepărtați orice benzi adezive, cleme, capse și alte materiale care nu
                                                sunt hârtie. Acestea pot împiedica procesul de reciclare.
                                            </li>
                                            <li>Diferențiați între hârtia de birou, ziare, carton și alte tipuri de
                                                hârtie. Unele centre de reciclare pot necesita sortarea separată a
                                                acestor materiale.
                                            </li>
                                        </ul>
                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea hârtiei
                                            este esențială pentru reducerea impactului nostru asupra pădurilor și a
                                            habitatelor naturale. Prin reciclarea hârtiei, contribuim la scăderea
                                            defrișărilor și ajutăm la conservarea biodiversității și a ecosistemelor. În
                                            plus, reciclarea hârtiei reduce semnificativ consumul de energie și apa
                                            necesară pentru producerea de hârtie nouă, contribuind astfel la lupta
                                            împotriva schimbărilor climatice.</p>

                                        <p><span style="width: 40px;display: inline-block;"></span>Mulțumim pentru
                                            angajamentul dumneavoastră de a recicla hârtia și pentru a fi un partener în
                                            sustenabilitate!</p>
                                        <div class="video-main">
                                            <img src="{{asset('assets/images/classes/paper.jpg')}}"
                                                 class="static_cls_img"
                                                 alt="Static Image"/>
                                        </div>
                                    </div>
                                    <div class="content_wrap organics">
                                        <h4><span style="width: 40px;display: inline-block;"></span><i>Felicitări pentru
                                                alegerea de a recicla!</i></h4>

                                        <p><span style="width: 40px;display: inline-block;"></span>Vă mulțumim că luați
                                            măsuri pentru a reduce impactul asupra mediului prin compostarea deșeurilor
                                            organice! Prin transformarea resturilor de mâncare și a altor materiale
                                            organice în compost, nu doar reducem cantitatea de deșeuri trimise la
                                            gropile de gunoi, dar și producem un îngrășământ natural valoros, care
                                            îmbogățește solul și sprijină creșterea plantelor.</p>

                                        <h4><i>Instrucțiuni Generale de Reciclare:</i></h4>
                                        <ul>
                                            <li>Includeți resturi de fructe și legume, coji de ouă, zaț de cafea, filtre
                                                de hârtie, resturi de grădinărit și alte materiale biodegradabile.
                                                Evitați adăugarea de carne, produse lactate și grăsimi, care pot atrage
                                                dăunători și pot încetini procesul de compostare.
                                            </li>
                                            <li>Pentru un compost sănătos, mențineți un echilibru între materialele
                                                "umede" (deșeuri alimentare) și cele "uscate" (frunze, rumeguș, hârtie
                                                zdrobită). Acest echilibru ajută la optimizarea descompunerii și la
                                                prevenirea mirosurilor neplăcute.
                                            </li>
                                            <li>Asigurați-vă că grămada de compost este bine aerisită. Întoarceți-o
                                                regulat pentru a distribui oxigenul și a accelera procesul de
                                                descompunere.
                                            </li>
                                        </ul>
                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea
                                            materialelor organice prin compostare reduce semnificativ emisiile de metan
                                            de la gropile de gunoi, un gaz cu efect de seră mult mai puternic decât
                                            dioxidul de carbon. Prin diminuarea acestor emisii, ajutăm la combaterea
                                            schimbărilor climatice.</p>

                                        <p><span style="width: 40px;display: inline-block;"></span>Mulțumim pentru
                                            angajamentul dumneavoastră în transformarea deșeurilor organice într-un
                                            resurs valoros pentru mediu. Fiecare acțiune contează în construirea unui
                                            viitor mai sustenabil!</p>
                                        <div class="video-main">
                                            <img src="{{asset('assets/images/classes/organics.jpg')}}"
                                                 class="static_cls_img"
                                                 alt="Static Image"/>
                                        </div>
                                    </div>
                                    <div class="content_wrap glass">
                                        <h4><span style="width: 40px;display: inline-block;"></span><i>Felicitări pentru
                                                alegerea de a recicla!</i></h4>

                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea sticlei
                                            este un pas important în protejarea mediului, deoarece reduce nevoia de
                                            materiale brute și minimizează cantitatea de deșeuri care ajung la gropile
                                            de gunoi. Sticla poate fi reciclată la infinit fără a-și pierde puritatea
                                            sau calitatea, făcând-o un material extrem de sustenabil.</p>

                                        <h4><i>Instrucțiuni Generale de Reciclare:</i></h4>
                                        <ul>
                                            <li>Asigurați-vă că recipientele de sticlă sunt complet goale și curate.
                                                Resturile de mâncare sau lichid pot contamina alte materiale
                                                reciclabile.
                                            </li>
                                            <li>Îndepărtați orice capace sau dopuri din metal sau plastic, deoarece
                                                acestea se reciclează separat. Etichetele de hârtie pot fi de obicei
                                                lăsate, deoarece vor fi îndepărtate în procesul de reciclare.
                                            </li>
                                            <li>Dacă este posibil, sortați sticla după culoare: transparentă, verde și
                                                maro. Acest lucru ajută la menținerea calității materialului reciclat și
                                                la eficientizarea procesului de reciclare.
                                            </li>
                                        </ul>
                                        <p><span style="width: 40px;display: inline-block;"></span>Prin reciclarea
                                            sticlei, contribuim la reducerea emisiilor de gaze cu efect de seră,
                                            economisind energie și resurse naturale. Fabricarea sticlei din materiale
                                            reciclate necesită mai puțină energie comparativ cu producerea din materii
                                            prime noi, ceea ce reduce semnificativ amprenta de carbon.</p>

                                        <p><span style="width: 40px;display: inline-block;"></span>Fiecare gest de
                                            reciclare a sticlei contribuie la un mediu mai curat și un viitor mai verde.
                                            Mulțumim pentru implicarea dumneavoastră în acest proces vital de reciclare!
                                        </p>
                                        <div class="video-main">
                                            <img src="{{asset('assets/images/classes/glass.jpg')}}"
                                                 class="static_cls_img"
                                                 alt="Static Image"/>
                                        </div>
                                    </div>
                                    <div class="content_wrap metal">
                                        <h4><span style="width: 40px;display: inline-block;"></span><i>Felicitări pentru
                                                alegerea de a recicla!</i></h4>

                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea metalelor
                                            joacă un rol crucial în conservarea resurselor naturale și reducerea
                                            poluării. Metalele, cum ar fi aluminiul și oțelul, pot fi reciclate la
                                            nesfârșit fără a-și pierde calitatea, ceea ce le face unele dintre cele mai
                                            valoroase materiale reciclabile.</p>

                                        <h4><i>Instrucțiuni Generale de Reciclare:</i></h4>
                                        <ul>
                                            <li>Îndepărtați orice reziduuri sau lichide din containerele metalice.
                                                Recipiente curate ajută la asigurarea calității materialului reciclat.
                                            </li>
                                            <li>Dacă este posibil, îndepărtați orice componente non-metalice, cum ar fi
                                                mânerele din plastic sau dopurile, deoarece acestea se procesează
                                                separat.
                                            </li>
                                            <li>Distingeți între diferitele tipuri de metale dacă facilitățile locale de
                                                reciclare cer acest lucru. De exemplu, aluminiul și oțelul sunt adesea
                                                reciclate separat.
                                            </li>
                                        </ul>
                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea metalelor
                                            economisește o cantitate semnificativă de energie comparativ cu producerea
                                            lor din materii prime. De exemplu, reciclarea aluminiului economisește până
                                            la 95% din energia necesară pentru producția sa din bauxită. Acest proces
                                            reduce emisiile de dioxid de carbon și alte gaze nocive, contribuind la
                                            combaterea schimbărilor climatice.</p>

                                        <p><span style="width: 40px;display: inline-block;"></span>Prin implicarea dvs.
                                            în reciclarea metalelor, faceți o alegere pozitivă pentru planetă și pentru
                                            viitorul nostru. Vă mulțumim pentru contribuția dvs. la un ciclu sustenabil
                                            și la o lume mai curată!</p>
                                        <div class="video-main">
                                            <img src="{{asset('assets/images/classes/metal.jpg')}}"
                                                 class="static_cls_img"
                                                 alt="Static Image"/>
                                        </div>
                                    </div>
                                    <div class="content_wrap cardboard">
                                        <h4><span style="width: 40px;display: inline-block;"></span><i>Felicitări pentru
                                                alegerea de a recicla!</i></h4>

                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea cartonului
                                            are un impact semnificativ în reducerea deșeurilor și conservarea resurselor
                                            forestiere. Cartonul, inclusiv cutiile de ambalaj și tuburile de hârtie,
                                            poate fi reciclat de mai multe ori, contribuind astfel la diminuarea
                                            necesității de a tăia copaci noi.</p>

                                        <h4><i>Instrucțiuni Generale de Reciclare:</i></h4>
                                        <ul>
                                            <li>Îndepărtați toate etichetele, benzile adezive și orice alte materiale
                                                non-carton atașate de ambalaj. Aceste materiale pot împiedica procesul
                                                de reciclare.
                                            </li>
                                            <li>Strângeți și pliați cartonul pentru a economisi spațiu în binul de
                                                reciclare și pentru a facilita transportul. Acest lucru ajută la
                                                eficientizarea colectării și procesării.
                                            </li>
                                            <li>Dacă este posibil, separați cartonul ondulat de cartonul plat, deoarece
                                                pot fi necesare procese diferite de reciclare pentru fiecare tip.
                                            </li>
                                        </ul>
                                        <p><span style="width: 40px;display: inline-block;"></span>Reciclarea cartonului
                                            economisește energie și reduce consumul de apă necesar pentru producerea de
                                            carton nou. De exemplu, reciclarea unei tone de carton poate economisi peste
                                            7000 de litri de apă și mai mult de 3 metri cubi de spațiu de depozitare în
                                            groapa de gunoi. În plus, acest proces scade emisiile de gaze cu efect de
                                            seră, contribuind la lupta împotriva schimbărilor climatice.</p>

                                        <p><span style="width: 40px;display: inline-block;"></span>Vă mulțumim pentru
                                            efortul dvs. și pentru că faceți parte din mișcarea pentru o lume mai
                                            sustenabilă și mai responsabilă!</p>
                                        <div class="video-main">
                                            <img src="{{asset('assets/images/classes/cardboard.jpg')}}"
                                                 class="static_cls_img"
                                                 alt="Static Image"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="top_swipe_abd" src="{{asset('assets/images/top_left_bc.png')}}">
            <img class="bottom_right_bc swipe_right_abd" src="{{asset('assets/images/result_bottom_right.png')}}">
            <img class="bottom_left_bc swipe_left_abd" src="{{asset('assets/images/result_bottom_left.png')}}">
        </div>
    </section>
    </body>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.loader_wrap').fadeOut();
            }, 1000);
            // Retrieve data from local storage
            const response = localStorage.getItem('response');
            const uploaded_file = JSON.parse(localStorage.getItem('uploaded_file'));
            var uploadRoute = "{{ route('upload') }}";
            if (response) {
                let responseData = JSON.parse(response);
                $('.result_img img').attr('src', `${uploaded_file}`);
                $('.result_img img').fadeIn();
                // Check if responseData is defined and not null
                if (responseData.class) {
                    // Display other data from the response
                    let titleClass = responseData.class;
                    const classToRomanianTitle = {
                        'Paper': 'Hârtie',
                        'Organics': 'Deșeuri organice',
                        'Plastic': 'Plastic',
                        'Glass': 'Sticlă',
                        'Metal': 'Metale',
                        'Cardboard': 'Carton'
                    };
                    let romanianTitle = classToRomanianTitle[responseData.class];
                    $('.class_title').html(romanianTitle);
                    let image_src = titleClass.toLowerCase();
                    $('.class_indicate img').attr('src', 'assets/images/classes/' + image_src + '.png')
                    $('.class_indicate img').css('opacity', '1')
                    $('.probab_score').text(responseData.probability + '%');
                    $('.para-scroll .class_detail .' + image_src).fadeIn();

                } else {
                    // Handle case where image data is not found in the response
                    console.error('Class not found in the response');
                    alert('Class not found in the response. Please try again later.');
                    window.location.href = uploadRoute;
                }
            } else {
                window.location.href = uploadRoute;
            }
            var topSwipeImages = document.querySelectorAll('.top_swipe_abd');
            var swipeRightImages = document.querySelectorAll('.swipe_right_abd');
            var swipeLeftImages = document.querySelectorAll('.swipe_left_abd');


            function animateSwipeRightImages(images) {
                images.forEach(function (image) {
                    setTimeout(function () {
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateX(0)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            function animateSwipeLeftImages(images) {
                images.forEach(function (image) {
                    setTimeout(function () {
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateX(0)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            function animateTopSwipeImages(images) {
                images.forEach(function (image) {
                    setTimeout(function () {
                        image.style.opacity = '1'; // Fade in effect
                        image.style.transform = 'translateY(-70%)'; // Move to original position
                    }, 200); // Delay the animation by 200 milliseconds
                });
            }

            animateSwipeRightImages(swipeRightImages);
            animateSwipeLeftImages(swipeLeftImages);
            animateTopSwipeImages(topSwipeImages);
        });
    </script>
@endsection
