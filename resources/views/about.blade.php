        @extends('layouts.app')
        @section('content')

        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

        <div class="container" data-aos="fade-up">

        <div class="section-title">
        <h2>About</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.
            Sit sint consectetur velit. Quisquam quos quisquam cupiditate.
            Et nemo qui impedit suscipit alias ea.
            Quia fugiat sit in iste officiis commodi quidem hic quas.
        </p>
        </div>

        <div class="row">

            <div class="col-lg-4">
                @if(isset($getrecord[0]->image))
                    <img src="{{ url('img/'.@$getrecord[0]->image) }}" 
                    class="img-fluid" alt="">
                @endif
            </div> 
            <div class="col-lg-8 pt-4 pt-lg-0 content">
                <h3>
                    @if(isset($getrecord[0]->title))
                        <span>{{ $getrecord[0]->title }}</span>
                    @endif
                </h3>

                <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p>

            <div class="row">
            <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong> Full Name:</strong>
                        <span>{{ @$getrecord[0]->full_name}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong> Birthday:</strong>
                        <span>{{ @$getrecord[0]->birthday}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                        <span>{{ @$getrecord[0]->phone}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                        <span>{{ @$getrecord[0]->age}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                        <span>{{ @$getrecord[0]->email}}</span></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                        <span>{{ @$getrecord[0]->website}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                        <span>{{ @$getrecord[0]->city}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                        <span>{{ @$getrecord[0]->degree}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                    <span>{{ @$getrecord[0]->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                    <span>{{ @$getrecord[0]->freelance}}</span></li>
                </ul>
            </div>
            </div>
           
        </div>
        </div>

    </div>
    </section><!-- End About Section -->

 

        </div>
        </section><!-- End About Section -->
        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ @$getrecord[0]->skils_title}}</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0"
                                data-purecounter-end="{{ $getrecord[0]->happy_clients }}"                              data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0"
                                data-purecounter-end="{{ $getrecord[0]->projects }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0"
                                data-purecounter-end="{{ $getrecord[0]->hours_of_support }}"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-award"></i>
                            <span data-purecounter-start="0"
                                data-purecounter-end="{{ $getrecord[0]->awards }}"
                                data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{{ $getrecord[0]->sub_title }}</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">{{ $getrecord[0]->html }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$getrecord[0]->html }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">{{ $getrecord[0]->css }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$getrecord[0]->css }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">{{ $getrecord[0]->javascript }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$getrecord[0]->javascript }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">{{ $getrecord[0]->php }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$getrecord[0]->php }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        
                        <div class="progress">
                            <span class="skill">laravel <i class="val">{{ $getrecord[0]->laravel }}%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$getrecord[0]->laravel }}" 
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--  <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">50%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div> -->

                        <!--  <div class="progress">
                        <span class="skill">Photoshop <i class="val">55%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
            -->
                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->
        @endsection
