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

      <ul  style="list-style-type:none;">
      <li> <a href="">Home </a></li>
      <li><a href="">Admin Login </a></li>
      <li><a href="">Services</a></li>
      <li><a href="logout.php">Log out </a></li>
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
            <li>Location: Baisdhara</li>
          </ul>
          <a href="https://www.google.com/maps/dir//P8M2%2BQQ6+Ram+mandir+Balaju+park,+Kathmandu+44600/@27.7341449,85.3016869,19.35z/data=!4m17!1m7!3m6!1s0x39eb19cb4b4b383f:0xc716d688abcabca1!2sRam+mandir+Balaju+park!8m2!3d27.7344211!4d85.3017802!16s%2Fg%2F11y1hq7q9x!4m8!1m0!1m5!1m1!1s0x39eb19cb4b4b383f:0xc716d688abcabca1!2m2!1d85.3018663!2d27.7344172!3e4?entry=ttu"><button>Navigate</button></a>

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
            <li>Location: Ratnapark</li>
          </ul>
          <a href="https://www.google.com/maps/dir//P848%2BJ3J+Water+Vending+Machine+(Water+ATM)+%E0%A4%9C%E0%A4%B0%E0%A5%82%E0%A4%81%E0%A4%B9%E0%A4%BF%E0%A4%9F%E0%A5%80,+Ratna+Park+Path,+Kathmandu+44600/@27.70659,85.3145225,19z/data=!4m17!1m7!3m6!1s0x39eb19c1950cf38f:0x9ba171ac5c059da3!2zV2F0ZXIgVmVuZGluZyBNYWNoaW5lIChXYXRlciBBVE0pIOCknOCksOClguCkgeCkueCkv-Ckn-ClgA!8m2!3d27.70659!4d85.3151411!16s%2Fg%2F11vds43btg!4m8!1m0!1m5!1m1!1s0x39eb19c1950cf38f:0x9ba171ac5c059da3!2m2!1d85.3151411!2d27.70659!3e4?entry=ttu"><button>Navigate</button></a>

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
            <li>Location: Lainchaur</li>
          </ul>
          <a href="https://www.google.com/maps/dir//P8HF%2B99J+Department+of+Water+Supply+and+Sewerage,+Kathmandu+44600/@27.7284665,85.3186374,17z/data=!4m18!1m8!3m7!1s0x39eb1917f792e191:0x6732bf97b737690!2sDepartment+of+Water+Supply+and+Sewerage!8m2!3d27.7284665!4d85.323401!15sCg9MYWluY2hhdXIgd2F0ZXKSARFnb3Zlcm5tZW50X29mZmljZeABAA!16s%2Fg%2F11c55rc3n7!4m8!1m0!1m5!1m1!1s0x39eb1917f792e191:0x6732bf97b737690!2m2!1d85.323401!2d27.7284665!3e4?entry=ttu"><button>Navigate</button></a>

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
            <li>Location: DurbarMarg</li>
          </ul>
          <a href="https://www.google.com/maps/dir//Durbar+Marg,+Kathmandu+44600/@27.7119693,85.3168645,18.5z/data=!4m18!1m8!3m7!1s0x39eb19016c9d9fcb:0xd2291eee6917d60a!2sDurbar+Marg,+Kathmandu+44600!3b1!8m2!3d27.7114339!4d85.3176128!16s%2Fm%2F0jt5n49!4m8!1m0!1m5!1m1!1s0x39eb19016c9d9fcb:0xd2291eee6917d60a!2m2!1d85.3176128!2d27.7114339!3e4?entry=ttu"><button>Navigate</button></a>

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
            <li>Location: Milan Chowk</li>
          </ul>
          <a href="https://www.google.com/maps/dir//Dajubhaiko+Pani+Pasal,+Mid,+Milan+Chowk+Marga,+Kathmandu+44600/@27.6947387,85.3424651,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39eb197fdb7a1d99:0xc574f545d373b8cd!2m2!1d85.340299!2d27.6950001?entry=ttu"><button>Navigate</button></a>

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
            <li>Location: Trupureswor</li>
          </ul>
          <a href="https://www.google.com/maps/dir//M8R9%2BH33+Kathmandu+Upatyaka+Khanepani+Limited,+Tripureshwor+Chowk,+Kathmandu+44600/@27.6971979,85.3186895,15z/data=!4m8!4m7!1m0!1m5!1m1!1s0x39eb18532aa7e737:0x5442420d9f5e858e!2m2!1d85.3176728!2d27.6914007?entry=ttu"><button>Navigate</button></a>

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