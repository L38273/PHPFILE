<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CTA Scroll Animation</title>

<style>
body{
  margin:0;
  background:#050814;
  font-family: Arial, sans-serif;
}

/* wrapper */
.cta-wrapper{
  padding:100px 20px;
  display:flex;
  justify-content:center;
}

/* container */
.cta-container{
  width:100%;
  max-width:1400px;
  background: linear-gradient(135deg, #3c2a8e, #1b0f4a);
  border-radius:20px;
  padding:30px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:40px;
  box-shadow: 0 0 40px rgba(120,100,255,0.4);

  /* scroll animation initial */
  opacity:0;
  transform: translateY(60px);
  transition: all 0.9s ease;
}

/* active on scroll */
.cta-container.active{
  opacity:1;
  transform: translateY(0);
}

/* hover animation */
.cta-container:hover{
  transform: translateY(-6px);
  box-shadow: 0 0 65px rgba(120,100,255,0.65);
}

/* LEFT */
.cta-left{
  max-width:520px;
  color:#fff;

  opacity:0;
  transform: translateX(-60px);
  transition: all 0.9s ease;
}

.cta-container.active .cta-left{
  opacity:1;
  transform: translateX(0);
}

.cta-left h1{
  font-size:36px;
  margin-bottom:16px;
}

.cta-left p{
  font-size:16px;
  line-height:1.6;
  opacity:0.9;
  margin-bottom:30px;
}

/* buttons */
.cta-buttons{
  display:flex;
  gap:16px;
}

.btn-primary,
.btn-outline{
  padding:14px 26px;
  border-radius:30px;
  text-decoration:none;
  font-weight:600;
  transition: all 0.3s ease;
}

.btn-primary{
  background:#1a6bff;
  color:#fff;
}

.btn-primary:hover{
  transform: translateY(-3px);
  box-shadow:0 10px 25px rgba(26,107,255,0.5);
}

.btn-outline{
  border:2px solid #1a6bff;
  color:#1a6bff;
}

.btn-outline:hover{
  background:#1a6bff;
  color:#fff;
  transform: translateY(-3px);
}

/* RIGHT IMAGE */
.cta-right{
  background: rgba(255,255,255,0.1);
  padding:14px;
  border-radius:18px;

  opacity:0;
  transform: translateX(60px);
  transition: all 0.9s ease;
}

.cta-container.active .cta-right{
  opacity:1;
  transform: translateX(0);
}

.cta-right img{
  width:360px;
  max-width:100%;
  border-radius:14px;
  display:block;
  transition: transform 0.5s ease;
}

.cta-right:hover img{
  transform: scale(1.06);
}

/* responsive */
@media(max-width:900px){
  .cta-container{
    flex-direction:column;
    text-align:center;
  }
  .cta-buttons{
    justify-content:center;
  }
}
</style>
</head>

<body>

<div class="cta-wrapper">
  <div class="cta-container scroll-item">

    <div class="cta-left">
      <h1>See Staychat in action now.</h1>
      <p>
        There's only so much we can say — so let us show you!
        Schedule a demo today and reach your business goals.
      </p>

      <div class="cta-buttons">
        <a href="page1.php" class="btn-primary">Book a demo</a>
        <a href="startfee.php" class="btn-outline">Get started free</a>
      </div>
    </div>

    <div class="cta-right">
      <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d"
           alt="Team">
    </div>

  </div>
</div>

<!-- SCROLL JS -->
<script>
const elements = document.querySelectorAll(".cta-container");

const inView = (el) => {
  const rect = el.getBoundingClientRect();
  return rect.top <= window.innerHeight - 100;
};

const runAnimation = () => {
  elements.forEach(el => {
    if(inView(el)){
      el.classList.add("active");
    }
  });
};

window.addEventListener("scroll", runAnimation);
runAnimation();
</script>

</body>
</html>
