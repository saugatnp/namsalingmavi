@extends('layout.app')

@section('content')

 <section>
<div class="team-boxed">
    <div class="container">
        <div class="intro">
            <h1 class="text-center" style="margin-top:50px;">Contact US</h1>
        </div>
        <div class="row people">
  <div class="row people">
  <div class="col-md-6 col-lg-4 item">
    <div class="box">
    <h3 style="text-align:center"> Contact information</h3>
    <h6> Fill up the Form or Contact us in any of the following information provide below.</h4>&nbsp;&nbsp;</br>
                    <i  style="float:left;" class="fa fa-phone"> 9865231489</i>
                   
                    <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"></a>
                    </div>
    </div>
 </div>
 <div class="col-md-6">
 
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."required>
    <label for="email"> E-mail </label>
    <input type="text" id="e-mail" name="email" placeholder="Enter your E-mail ID..."required>
    <label for="message"> Message </label>
    <input type="text" id="message" name="message" placeholder="Write your message here..."required>
    <button class="btn btn-danger">Submit</button>

    
 
 
 </div>
        
</section>

@endsection
