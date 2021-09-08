@extends('layout.app')

@section('content')

 <section>
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h1 class="text-center" style="margin-top:50px;">Contact US</h1>
        </div>
  <div class="row people">
  <div class="col-md-6 col-lg-4 item">
    <div class="box">
    <h3 style="text-align:center"> Contact information</h3>
    <p> Fill up the Form or Contact us with the help of  any of the following information provide below.</p>&nbsp;&nbsp;</br>
					<i class="fa fa-map-marker"> Location</i>
					<p><span>Maijogmai-3</span> Ilam, Nepal</p>
					<i class="fa fa-phone"> Contact No.</i>
					<a href="tel:9842646517"></a><p>9842646517</p></a>
					<i class="fa fa-envelope">  Mail ID</i>
					<p><a href="mailto:namsalingmavi@gmail.com" style="color: #17252a;">namsalingmavi@gmail.com</a></p>
                    <div class="social"><a href="https://www.facebook.com/namsalinghighschool.ilam/">
                    <i class="fa fa-facebook-official"></i>
                    </a> 
   
    </div>
    </div>
 </div>
 <div class="col-md-6 contact">
 <div class="box">
     <form action="mailto:namsalingmavi@gmail.com" method="POST" enctype="text/plain">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
    <label for="email"> E-mail </label>
    <input type="text" id="e-mail" name="email" placeholder="Enter your E-mail ID..."required>
    <label for="message"> Message </label>
    <input type="text" id="message" name="message" placeholder="Write your message here..."required>
    <button class="btn btn-danger" type="submit" name="submit" value="Send"  >Submit</button>
    </form>
 </div>
        
</section>
<div id="events">
        <div id="recentevents" class="col">
          <h1>Location</h1>
          <div class="event-div">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d889.3321884639365!2d87.99747959785864!3d26.924790424670118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x65a7e0cb4c814866!2sNamsaling%20Academy!5e0!3m2!1sen!2snp!4v1624433481047!5m2!1sen!2snp" class="map"></iframe>
            </div>
          </div>
        </div>

@endsection
