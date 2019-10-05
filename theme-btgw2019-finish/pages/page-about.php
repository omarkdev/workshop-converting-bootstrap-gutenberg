<?php
/**
 * Template Name: Pagina Sobre
 */

get_header();
?>
    <main id="page-about" class="font-worksans">
        <div class="container pt-5 pb-5">
            <div class="row pt-5 pb-5">
                <div class="col-7">
                    <div class="row">
                        <div class="col-12">
                            <h1>Sobre o Workshop</h1>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, at aut consequatur
                                delectus dolor dolores, ea impedit inventore laborum obcaecati odit officia officiis
                                pariatur possimus quaerat, tenetur totam veniam voluptatum?
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 pt-4">
                            <a href="https://twitter.com/omarkdev" class="btn btn-black-transparent-bordered">Falar com
                                o responsável</a>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <div class="box-with-image-covered-in-bg w-100"
                         style="height: 300px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/fachy-marin-Wm7-Z1ZOi0Y-unsplash.jpg')"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="call-action-video-play d-flex justify-content-center pt-3 pb-4"
                 style="height: 250px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/andrei-stratu-kcJsQ3PJrYU-unsplash.jpg')">
                <a href="https://www.youtube.com/watch?v=V4BLCUW8qk8" target="_blank" class="d-flex h-100">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px"
                         viewBox="0 0 294.843 294.843" style="enable-background:new 0 0 294.843 294.843;" xml:space="preserve">
                    <g>
                        <path d="M278.527,79.946c-10.324-20.023-25.38-37.704-43.538-51.132c-2.665-1.97-6.421-1.407-8.392,1.257s-1.407,6.421,1.257,8.392
                            c16.687,12.34,30.521,28.586,40.008,46.983c9.94,19.277,14.98,40.128,14.98,61.976c0,74.671-60.75,135.421-135.421,135.421
                            S12,222.093,12,147.421S72.75,12,147.421,12c3.313,0,6-2.687,6-6s-2.687-6-6-6C66.133,0,0,66.133,0,147.421
                            s66.133,147.421,147.421,147.421s147.421-66.133,147.421-147.421C294.842,123.977,289.201,100.645,278.527,79.946z"
                              fill="#FFF"/>
                        <path d="M109.699,78.969c-1.876,1.067-3.035,3.059-3.035,5.216v131.674c0,3.314,2.687,6,6,6s6-2.686,6-6V94.74l88.833,52.883
                            l-65.324,42.087c-2.785,1.795-3.589,5.508-1.794,8.293c1.796,2.786,5.508,3.59,8.294,1.794l73.465-47.333
                            c1.746-1.125,2.786-3.073,2.749-5.15c-0.037-2.077-1.145-3.987-2.93-5.05L115.733,79.029
                            C113.877,77.926,111.575,77.902,109.699,78.969z" fill="#FFF"/>
                    </g>
                </svg>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row pt-5 pb-3">
                <div class="col-12">
                    <h1 class="title-underscore text-center">
                        Serviços
                    </h1>
                </div>
            </div>
            <div class="row pt-3">
                <div class="col-4 text-center">
                    <div class="icon-bordered-rounded">
                        <i class="fa fa-user"></i>
                    </div>
                    <h3 class="service-title">Title</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolor fuga illo minus quibusdam velit. Ab ducimus expedita ipsa nam nesciunt perspiciatis placeat ratione t
                    </p>
                </div>

                <div class="col-4 text-center">
                    <div class="icon-bordered-rounded">
                        <i class="fa fa-user"></i>
                    </div>
                    <h3 class="service-title">Title</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolor fuga illo minus quibusdam velit. Ab ducimus expedita ipsa nam nesciunt perspiciatis placeat ratione t
                    </p>
                </div>

                <div class="col-4 text-center">
                    <div class="icon-bordered-rounded">
                        <i class="fa fa-user"></i>
                    </div>
                    <h3 class="service-title">Title</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium dolor fuga illo minus quibusdam velit. Ab ducimus expedita ipsa nam nesciunt perspiciatis placeat ratione t
                    </p>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();
