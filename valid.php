<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <div class="modal">
  <!--     <span class="emoji">👏</span> -->
      <span class="emoji round"✔</span>
      <h1>It is a verified Certificate </h1>
      <a href="./index.php" class="modal-btn">Back</a>
    </div>
    <div id="confetti-wrapper">
    </div>
  </div>
<script>
  for(i=0; i<100; i++) {
    for(i=0; i<100; i++) {
      // Random rotation
      var randomRotation = Math.floor(Math.random() * 360);
        // Random Scale
      var randomScale = Math.random() * 1;
      // Random width & height between 0 and viewport
      var randomWidth = Math.floor(Math.random() * Math.max(document.documentElement.clientWidth, window.innerWidth || 0));
      var randomHeight =  Math.floor(Math.random() * Math.max(document.documentElement.clientHeight, window.innerHeight || 500));
      
      // Random animation-delay
      var randomAnimationDelay = Math.floor(Math.random() * 15);
      console.log(randomAnimationDelay);
    
      // Random colors
      var colors = ['#0CD977', '#FF1C1C', '#FF93DE', '#5767ED', '#FFC61C', '#8497B0']
      var randomColor = colors[Math.floor(Math.random() * colors.length)];
    
      // Create confetti piece
      var confetti = document.createElement('div');
      confetti.className = 'confetti';
      confetti.style.top=randomHeight + 'px';
      confetti.style.right=randomWidth + 'px';
      confetti.style.backgroundColor=randomColor;
      // confetti.style.transform='scale(' + randomScale + ')';
      confetti.style.obacity=randomScale;
      confetti.style.transform='skew(15deg) rotate(' + randomRotation + 'deg)';
      confetti.style.animationDelay=randomAnimationDelay + 's';
      document.getElementById("confetti-wrapper").appendChild(confetti);
    }}
</script>
</body>
</html>>