<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Namsaling Mavi Admin Panel | Namsaling Secondary School</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#" class="sidelink">Namsaling Mavi</a></div>
        <ul class="links">
          <li><a href="/home/edit" class="sidelink">Home</a></li>
          
          <li>
            <a href="#" class="desktop-link sidelink">Academics</a>
            <input type="checkbox" id="show-features">
            <label for="show-features" class="sidelink">Academics</label>
            <ul>
              <li><a href="#" class="sidelink">Academic Level</a></li>
              <li><a href="#" class="sidelink">Book List</a></li>
              <li><a href="#" class="sidelink">Exam Routine</a></li>
              <li><a href="#" class="sidelink">Exam Result</a></li>
            </ul>
          </li>
          <li><a href="#" class="sidelink">Gallery</a></li>
          <li><a href="#" class="sidelink">Notice</a></li>
          <li><a href="#" class="sidelink">Library</a></li>
          <li>
            <a href="#" class="desktop-link sidelink">About us </a>
            <input type="checkbox" id="show-services">
            <label for="show-services" class="sidelink">About us </label>
            <ul>
              <li><a href="#" class="sidelink">School Profile and History</a></li>
              <li><a href="#" class="sidelink">Teachers</a></li>
              <li><a href="#" class="sidelink">School Mangement Comittee</a></li>
              <li><a href="#" class="sidelink">Contributors</a></li>
              
            </ul>
          </li>
          <li><a href="#" class="sidelink">Contact US</a></li>
        </ul>
      </div>
      
      </form>
    </nav>
  </div>

</body>
</html>