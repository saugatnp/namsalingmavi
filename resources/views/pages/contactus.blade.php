@extends('layout.app')

@section('content')

<div class="Contactimage" >
        <img src="https://cache.1ms.net/1920x1440/emma-watson-very-high-quality-1920x1440_101862.jpg"  width="100%" >

      </div>
      <h1><center>Contact US</center></h1>
        <div class="containertt" >
                
                <form action="action_page.php">
              
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
              
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
              
                  
              
                  <label for="subject">Message</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
              
                  <input type="submit" value="Submit" class="btn btn-success">
              
                </form>
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

        @endsection
