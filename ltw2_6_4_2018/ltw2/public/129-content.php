<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

        <div class="mod-custom-27">

            <div class="container">

                <div class="row">

                    <div class="poetry">Poetry course</div>

                    <div class="sensei-message info">

                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>Or <a href="#">log in</a> to access your purchased courses

                    </div>

                    <div class="media">
                        <!-- Sile 1-->
                        <div class="circ-wrapper course_detail pull-left">
                            <h3>1</h3>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="#">Quo ea feugiat saperet vulputate</a>
                            </h4>
                            <p>
                                Simply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an…
                            </p>
                            <ul class="data-lessons">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 60 minutes</li>
                                <li><i class="fa fa-film" aria-hidden="true"></i> Video</li>
                            </ul>
                        </div>

                        <!--Sile 2-->
                        <div class="clear-both"></div>

                        <div class="circ-wrapper course_detail pull-left">
                            <h3>2</h3></div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="#">Mei habemus voluptua ex instructior</a>
                            </h4>
                            <p>
                                Simply dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an…
                            </p>
                            <ul class="data-lessons">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 15 minutes</li>
                                <li><i class="fa fa-file-o" aria-hidden="true"></i> Text Reading</li>
                            </ul>
                        </div>


                        <div class="clear-both"></div>

                    </div>

                </div>
            </div>
        </div>
