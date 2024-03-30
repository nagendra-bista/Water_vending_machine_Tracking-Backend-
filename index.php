<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav>
      <div class="logo"> <a href="">AquaTrack</a></div>
      <div class="nav-search">
        <div class="search-content">
        <input type="search" name="search" id="search" placeholder="search machine by location" class="search-input">
      </div>
        <div class="icon">
        
        <i class="fa-solid fa-magnifying-glass"></i>
      
      </div>
      </div>

      <ul>
      <a href=""><li>Home</li></a>
      <a href=""><li>Admin Login</li></a>
      <a href=""><li>My Account</li></a>
      <a href=""><li>Services</li></a>
      </ul>
    </nav>

    <!-- Body -->
    <div class="text-container">
      <div class="main-text">
        <span> <i>"From Nature's Source to Your Glass." </i> </span>
        <h2>Welcome to Water Vending Machine Tracking System</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit dolores possimus qui nobis! Delectus sunt animi iure consectetur totam tempora in quidem maxime molestiae. Voluptas ad at necessitatibus quam ea?</p>
      </div>
      <div class="image">
        <img src="Image/machine.jpg" alt="">
      </div>
    </div>

    <div class="box-container">
      <p class="simple-text">
        Available Machines and their Information
      </p>
      <hr>
      <div class="boxes">
      <div class="box1 box">
        <img src="Image/vending.jpeg" alt="">
        <div class="machine-info">
          <h4>Machine Information:</h4>
          <ul>
            <li>Availbility: Yes</li>
            <li>Status: Active</li>
            <li>Water Price: 2rs per litre</li>
            <li>Location: Thamel</li>
          </ul>
          <a href=""><button>Navigate</button></a>

        </div>
      </div>
      <div class="box2 box">
        <img src="Image/vending.jpeg" alt="">
        <div class="machine-info">
          <h4>Machine Information:</h4>
          <ul>
            <li>Availbility: Yes</li>
            <li>Status: Active</li>
            <li>Water Price: 2rs per litre</li>
            <li>Location: Thamel</li>
          </ul>
          <a href=""><button>Navigate</button></a>

        </div>
      </div>
      <div class="box3 box">
        <img src="Image/vending.jpeg" alt="">
        <div class="machine-info">
          <h4>Machine Information:</h4>
          <ul>
            <li>Availbility: Yes</li>
            <li>Status: Active</li>
            <li>Water Price: 2rs per litre</li>
            <li>Location: Thamel</li>
          </ul>
          <a href=""><button>Navigate</button></a>

        </div>
      </div>
      <div class="box4 box">
        <img src="Image/vending.jpeg" alt="">
        <div class="machine-info">
          <h4>Machine Information:</h4>
          <ul>
            <li>Availbility: Yes</li>
            <li>Status: Active</li>
            <li>Water Price: 2rs per litre</li>
            <li>Location: Thamel</li>
          </ul>
          <a href="https://www.google.com/maps/dir//Thamel,+Kathmandu/@27.7153841,85.2711295,13z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x39eb18fcb77fd4bd:0x58099b1deffed8d4!2m2!1d85.3123293!2d27.7153902!3e4?entry=ttu"><button>Navigate</button></a>

        </div>
      </div>
      <div class="box5 box">
        <img src="Image/vending.jpeg" alt="">
        <div class="machine-info">
          <h4>Machine Information:</h4>
          <ul>
            <li>Availbility: Yes</li>
            <li>Status: Active</li>
            <li>Water Price: 2rs per litre</li>
            <li>Location: Thamel</li>
          </ul>
          <a href=""><button>Navigate</button></a>

        </div>
      </div>
      <div class="box6 box">
        <img src="Image/vending.jpeg" alt="">
        <div class="machine-info">
          <h4>Machine Information:</h4>
          <ul>
            <li>Availbility: Yes</li>
            <li>Status: Active</li>
            <li>Water Price: 2rs per litre</li>
            <li>Location: Thamel</li>
          </ul>
          <a href=""><button>Navigate</button></a>

        </div>
      </div>
    </div>
  </div>

<div class="feedback-section">
  <p>Any Feedback/Suggestion?</p>
  <textarea name="feedback" id="feedback" cols="50" rows="8" placeholder="Enter your message here"></textarea>
</div>


<footer>
  <span>Copyright &copy; All rights reserved </span>
</footer>
  </body>
</html>

	<!-- <a href="logout.php">Logout</a> -->

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>