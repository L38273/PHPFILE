<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StayChat - Hotel Website</title>
    <!-- <link rel="stylesheet" href="sty.css"> -->
    <style>
      .hamburger {
  touch-action: manipulation;
}




 :root {
      --accent: #0078d7;
      
      --muted:white
      --bg: #f9fafc;
      --card: #fff;
    } 
     * { box-sizing: border-box; margin: 0; padding: 0; }
      body {
      font-family: Arial, sans-serif;
      background: var(--bg);
      color: #111;
      line-height: 1.6;
      overflow-x: hidden;
    } 
    a { text-decoration: none; color: inherit; } 

    /* Navbar code */
.show {
  display: flex;
}


.navbar {
  /* width: 100%; */
  /* background: #fff; */
  background: green;
  /* box-shadow: 0 3px 8px rgba(0,0,0,0.1); */
  position: sticky;
  top: 0;
  z-index: 9999;
}

.nav-container {
  max-width: 1200px;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 20px;
}

.logo img {
      width: 100px;
    }

/* Links */
 .nav-links {
  display: flex;
  gap: 25px;
  align-items: center;
}

.nav-links a {
  text-decoration: none;
  font-size: 16px;
  /* color: #000; */
  color: white;
   
  
 
} 

.btn {
  background: #0a7cff;
  padding: 8px 16px;
  /* color: #fff !important; */
/* color: red; */
  border-radius: 5px;
}
.nav-links a:hover {
  color: #00eaff;           /* Hover Light Blue */
}

/* Mobile */
.hamburger {
  display: none;
  font-size: 30px;
  background: none;
  border: none;
  cursor: pointer;
  touch-action: manipulation;
}



/* MOBILE MENU */
@media (max-width: 768px) {
  .hamburger {
    display: block;
  }

  .nav-links {
    position: absolute;
    top: 70px;
    right: -300px;
    width: 200px;
    background:green;
    /* background: green; */
    flex-direction: column;
    gap: 20px;
    padding: 20px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: .3s;
  }

  .nav-links.active {
    right: 0;
  }
}

    </style>
</head>
<body style="background-color: #0d0d0d">
 <nav class="navbar">
    <div class="nav-container">
      <div class="logo">
        <img src="main3.png"  alt="StayChat" style="width: 150px">
            <!-- <img src="StayChat Logo on Green Background.avif"  alt="StayChat"> -->
      </div>
      <button class="hamburger" id="menuBtn" >☰</button>
      <div class="nav-links" id="navMenu">
        <a href="index.php#home">Home</a>
        <a href="Pricing.php#Pricing">Pricing</a>
        <a href="index.php#about">About</a>
        <a href="Contact.php#contact">Contact</a>
        <a href="page1.php" class="btn">Book A Demo</a>
      </div>
    </div>
  </nav>   
  <!-- <script>
  const menuBtn = document.getElementById("menuBtn");
  const navMenu = document.getElementById("navMenu");

  // Toggle menu
  menuBtn.addEventListener("click", () => {
    navMenu.classList.toggle("active");
  });

  // Hide menu when clicking outside
  document.addEventListener("click", (e) => {
    if (!navMenu.contains(e.target) && !menuBtn.contains(e.target)) {
      navMenu.classList.remove("active");
    }
  });
</script> -->

<script>
const menuBtn = document.getElementById("menuBtn");
const navMenu = document.getElementById("navMenu");

let startX = 0;
let startY = 0;
let isSwipe = false;

/* Touch start */
menuBtn.addEventListener("touchstart", (e) => {
  startX = e.touches[0].clientX;
  startY = e.touches[0].clientY;
  isSwipe = false;
});

/* Touch move (detect swipe) */
menuBtn.addEventListener("touchmove", (e) => {
  const moveX = e.touches[0].clientX;
  const moveY = e.touches[0].clientY;

  if (Math.abs(moveX - startX) > 10 || Math.abs(moveY - startY) > 10) {
    isSwipe = true;
  }
});

/* Touch end */
menuBtn.addEventListener("touchend", (e) => {
  if (isSwipe) return; // ❌ ignore swipe
  navMenu.classList.toggle("active");
});

/* Desktop click */
menuBtn.addEventListener("click", (e) => {
  navMenu.classList.toggle("active");
});

/* Close menu on outside click */
document.addEventListener("click", (e) => {
  if (!menuBtn.contains(e.target) && !navMenu.contains(e.target)) {
    navMenu.classList.remove("active");
  }
});
</script>

</body>
</html>