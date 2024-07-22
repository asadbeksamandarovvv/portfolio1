@extends('layouts.app')

@section('content')

<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <h1>{{ @$getrecord[0]->title }}</h1>
    <p>I'm <span class="typed" data-typed-items="{{ @$getrecord[0]->work_experience }}"></span></p>
    <div class="social-links">
      <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
      <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
      <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
  </div>
</section>
  <!-- End Hero -->

  {{-- <main id="main"> --}}
{{-- 
    <!-- ======= About Section ======= -->
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
             
                  </div>

              </div>

          </div>
      </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
          <p>{{ @$getrecord[0]->about_me}}</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">{{ @$getrecord[0]->title}}</h3>
            <div class="resume-item pb-0">
              <h5>{{ @$getrecord[0]->year}} </h5>
              <h4>{{ @$getrecord[0]->sub_title}}</h4>
              <p><em>{{ @$getrecord[0]->description}}</em></p>
              <ul>
                <li>{{ @$getrecord[0]->address}}</li>
                <li>{{ @$getrecord[0]->phone}}</li>
                <li>{{ @$getrecord[0]->email}}</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            
            <div class="resume-item">
              <h4>Master of Fine Arts &amp; Graphic Design</h4>
              <h5>2015 - 2016</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
            </div>

            <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div>
          </div>

          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Senior graphic design specialist</h4>
              <h5>2019 - Present</h5>
              <p><em>Experion, New York, NY </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
              </ul>
            </div>

            <div class="resume-item">
              <h4>Graphic design specialist</h4>
              <h5>2017 - 2018</h5>
              <p><em>Stepping Stone Advertising, New York, NY</em></p>
              <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
       
  
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($getrecord as  $value)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('img/'. $value->image)}}" class="img-fluid" alt="">
              <div> <span></span>
              </div>              
              <div class="portfolio-info">
                <h4>{{ $value->description}}</h4>
                <p>{{ $value->title}}App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" 
                  data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1">
                    <i class="bx bx-plus">
                    
                    </i>
                  </a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" 
                  data-glightbox="type: external" title="Portfolio Details">
                    <i class="bx bx-link">
                      </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Services</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="row">
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box iconbox-blue">
                      <div class="icon">
                          <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                          </svg>
                          <i class="bx bxl-dribbble"></i>
                      </div>
                      <h4><a href="{{ $getrecord[0]->title }}"></a></h4>
                      <p>{{ $getrecord[0]->description }}</p>
                  </div>
              </div>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      {{-- <style>
        section {
          background-color:dimgray; 
        }
      </style> --}}
      {{-- <div class="container" data-aos="fade-up">

        @include('_message')

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Uzbekistan Xarezm street Ashxabad</p>
              </div>

              <div class="container">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>asadbek@gmail.com</p>
              </div>
            </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+998883611208</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form class="contactform" method="Post" action="{{url('contact/post')}}"> 

              @csrf

              <div class="row">
                 <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" 
                         id="name" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" 
                         name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" 
                       name="subject" id="subject" placeholder="Subject" required>
              </div>

              <div style="border-block-color: dark" class="form-group mt-3">
                <textarea class="form-control" name="message" 
                rows="10"  required>
              </textarea>
              </div>
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>

        </div>

      </div> --}}
    {{-- </section> --}}
    <!-- End Contact Section -->

  {{-- </main><!-- End #main --> --}}
 --}}


  @endsection