<html>
  <head>
    


  	<link rel="stylesheet" href="css/bootstrap.css">
    <script>
      function gen(){

        var adjectives = ["Super","Ultra","Mega","Dark"]
  var animals = ["Man","Woman","Boy","Girl"]

  // Random numbers are made
  var randomNumber1 = parseInt(Math.random() * adjectives.length);
  var randomNumber2 = parseInt(Math.random() * animals.length);
  var name = adjectives[randomNumber1] + " " + animals[randomNumber2];
  document.getElementById('place').innerHTML=name;
}   

      
    </script>
  </head>
  <body>
  <button class="btn btn-primary" onclick="gen()">Generate</button>
    <form method="post" action="request.php">
      <input type="text" name="user">
      <button>Yo it</button>
    </form>

  <h1 id="place"></h1>
 
  </body>
</html>
