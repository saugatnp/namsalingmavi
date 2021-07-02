<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
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
      <div class="logo"><a href="#">Namsaling Mavi</a></div>
        <ul class="links">
          <li><a href="#">Home</a></li>
          
          <li>
            <a href="#" class="desktop-link">Academics</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Academics</label>
            <ul>
              <li><a href="#">Academic Level</a></li>
              <li><a href="#">Book List</a></li>
              <li><a href="#">Exam Routine</a></li>
              <li><a href="#">Exam Result</a></li>
            </ul>
          </li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Notice</a></li>
          <li><a href="#">Library</a></li>
          <li>
            <a href="#" class="desktop-link">About us </a>
            <input type="checkbox" id="show-services">
            <label for="show-services">About us </label>
            <ul>
              <li><a href="#">School Profile and History</a></li>
              <li><a href="#">Teachers</a></li>
              <li><a href="#">School Mangement Comittee</a></li>
              <li><a href="#">Contributors</a></li>
              
            </ul>
          </li>
          <li><a href="#">Contact US</a></li>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>

  <div class="dummy-text">
    <h2>Responsive Dropdown Menu Bar with Searchbox</h2>
    <h2>using only HTML & CSS - Flexbox</h2>
  </div>

</body>
</html>