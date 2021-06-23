@extends('layout.app')

@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="zk8Ucy7U"></script>
<div id=crousel>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.pinimg.com/564x/95/ee/86/95ee8696f8ed1abb3767928c4d0daf65.jpg" class="d-block w-100" style="opacity: 0.8;" alt="...">
        <div class="carousel-content">
         Namsaling High School
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://images.firstpost.com/wp-content/uploads/2019/02/Moon.jpg" class="d-block w-100" style="opacity: 0.8;"alt="...">
        <div class="carousel-content">
          Namsaling High School
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://andlocal.org/wp-content/uploads/2017/12/build-high-quality-backlinks.jpg" class="d-block w-100" style="opacity: 0.8;" alt="...">
        <div class="carousel-content">
          Namsaling High School
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<div id="welcome">
  <div id="welcome-msg">
    <h1>Welcome to <br/> <strong>Namsaling Higher Secondary School </strong></h1>
    <br/>
    <h3>A message from the Principal</h3>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat iure obcaecati doloribus amet facilis officiis natus nisi, adipisci mollitia ad, assumenda ullam repudiandae consectetur exercitationem quaerat sapiente dolor eum magnam?
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio aspernatur minus accusamus amet commodi iste iusto nesciunt. Quo dolore assumenda qui quasi ab dicta cupiditate, magni odio eum cumque sit!
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab hic ex a dicta? Maiores perspiciatis nemo, accusamus amet impedit nostrum facere, inventore dolorem culpa repellendus voluptatibus quod. Quo, excepturi eos?
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusantium veniam possimus laudantium? Fuga debitis magnam est, veritatis consectetur inventore commodi laudantium nihil nostrum voluptatum dicta distinctio reprehenderit facilis sit!
  </div>
  <div style="text-align: center;">
    <div id="welcome-img">
      <img src="https://mymodernmet.com/wp/wp-content/uploads/2021/01/morphy-me-celebrity-face-mashups-15.jpg" class="principalimage">
    </div>
    <strong>Pradeep Kumar Dev, Principal</strong>
  </div>
</div>
<section class="wrapper-info">
  <div class="row">
      <div class="col-sm-4 info-div">
          <div>
            <div class="info-img" style=" center;">
              <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
            </div>
            <h2>
                Admission
            </h2>
            <p>
                Admission is largely based on merits, a proven academic success, the potential contributions a student can bring to the community,
                and an enthusiasm for learning. We enroll students every year to fulfill the vacant seats available on
                merit base. Admission shall not be denied because of nationality, ethnicity, gender, or religious beliefs.
            </p>
          </div>
         
      </div>
     
      <div class="col-sm-4 info-div">
          <div>
            <div class="info-img" style=" center;">
              <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
            </div>
            <h2>
                Exam policy
            </h2>
            <p>
                We integrate both the traditional formal exam system with modern thematic evaluation procedure through assessing individual
                performances. A series of class evaluations, observation of behavioral changes, performances in thematic
                assignments will be recorded and made available in the individual roster both manual and electronic forms.
            </p>
          </div>
          
      </div>
      <div class="col-sm-4 info-div">
        <div >
          <div class="info-img" >
            <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
          </div>
          <h2>
              Language class
          </h2>
          <p>
              Kavya has introduced Chinese and German language classes as non credit subjects where students learn Chinese and German languages,
              culture, and tradition. This enables students to understand and respect other culture, develop tolerance
              towards the differences and help them cross the cultural dogmatic boundaries.
          </p>
      </div>
      
        </div>
  </div>

</section>
       <div id="events">
        <div id="recentevents" class="col">
          <h1>Recent Events</h1>
          <div class="event-div">
            <div >
              <div class="info-img" >
                <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg" class="info-img">
              </div>
              <h2>
                  Language class
              </h2>
              <p>
                  Kavya has introduced Chinese and German language classes as non credit subjects where students learn Chinese and German languages,
                  culture, and tradition. This enables students to understand and respect other culture, develop tolerance
                  towards the differences and help them cross the cultural dogmatic boundaries.
              </p>
          </div>
          
            </div>
        </div>
        <div id="calendar" class="col">
             <div >
              <iframe src="https://calendar-nepali.com/clockwidget/nepali-time-and-date.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:200px; height:220px;" allowtransparency="true"></iframe>
                          
             </div>
             <div class="col-md-6 col-lg-10 mb-2"><h2 class="section-heading heading-fb">Facebook</h2><iframe class="w-100" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbnksofficial%2F&amp;tabs=timeline&amp;width=350&amp;height=350&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=true&amp;show_facepile=false&amp;appId=1288602514609223" height="350" scrolling="no" frameborder="0" allow="encrypted-media"></iframe></div>

        </div>
       </div>
      <div id="events">
        <div id="recentevents" class="col">
          <h1>Location</h1>
          <div class="event-div">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d889.3321884639365!2d87.99747959785864!3d26.924790424670118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65a7e0cb4c814866!2sNamsaling%20Academy!5e0!3m2!1sen!2snp!4v1624433481047!5m2!1sen!2snp" class="map"></iframe>
            </div>
          </div>
        </div>
        {{-- <div id="calendar" class="col">
          
      </div> --}}
@endsection
