@extends('layout.app')

@section('content')
   <h1 style="text-align:center;"> Notice Board</h1>
   <center><div class="notice">
        <div class="contents">
           <p><strong>Content1</strong></p>
           <p class="dtt">2020/2/3</p>
           <button class="btn btn-primary"> View Details</button>
        </div><hr/>

     <div class="contents">
     <p><strong>Content2</strong></p>
     <p class="dtt">2020/2/3</p>
     <button class="btn btn-primary"> View Details</button>
     </div><hr />

      <div class="contents">
     <p><strong>Content3</strong></p>
     <p class="dtt"> 2020/2/3</p>
     <button class="btn btn-primary"> View Details</button>
     </div>
   </div></center>


       
        
 @endsection