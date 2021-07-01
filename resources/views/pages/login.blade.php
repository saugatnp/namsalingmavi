
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    
    
    <div id="id01" class="modal">
      
      <form class="modal-content " action="#" method="post">
        <div class="imgcontainer">
          <a href="/aboutus"><span  class="close" title="Close Modal">&times;</span> </a>
          <img src="https://i.pinimg.com/originals/3a/9b/dd/3a9bdd452ff107dd46c8f13be9596dd6.jpg" alt="Avatar" class="avatar">
        </div>

    <div class="coontainer">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button"  class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

{{-- <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> --}}
