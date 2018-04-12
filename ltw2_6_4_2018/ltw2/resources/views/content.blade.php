

        <div class="mod-custom-27">

            <div class="container">

                <div class="row">

                    <div class="poetry">Danh Sách Sinh Viên</div>

                    <div class="sensei-message info">

                        <a href="#" style="color: #000;">Lập trình web 2</a>

                    </div>

                    <div class="media">
                        <!-- Sile 1-->
                         @foreach ($data2 as $item) 
                        	
                        <div class="circ-wrapper course_detail pull-left">
                            <h3>{!! $item ['student_id']!!}</h3>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="#">{!! $item ['student_name']!!}  </a>
                            </h4>
                            <p>
                               {!! $item ['student_info']!!}
                            </p>
                            <ul class="data-lessons">
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i>{!! $item ['student_email']!!}</li>
                                <li><i class="fa fa-film" aria-hidden="true"></i>{!! $item ['student_phone']!!}</li>
                            </ul>
                        </div>
                        

                        @endforeach
                        <div class="clear-both"></div>

                    </div>

                </div>
            </div>
        </div>
  