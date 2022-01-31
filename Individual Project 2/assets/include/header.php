<!--Michael Pacholarz, ISTE-240, December 6 2021-->

<div class="top-banner">
    <p>Michael's Trip to Poland</p>
</div>

<div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
  
  <div class="dropdown">
    <button class="dropbtn">Time with Family <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="JFK_to_ZRH.php">JFK to ZRH</a>
      <a href="Giedlarowa.php">Giedlarowa/Lezajsk</a>
      <a href="Zagrodki.php">Zagrodki</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Southern Poland <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="Lancut.php">Lancut</a>
      <a href="Carpathian_Mountains.php">Carpathian Mountains</a>
      <a href="Trzy_Korony.php">Trzy Korony</a>
      <a href="Krakow.php">Krakow</a>
      <a href="Wieliczka_Salt_Mine.php">Wieliczka Salt Mine</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Northern Poland <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="Olsztyn.php">Olsztyn</a>
      <a href="Kolobrzeg.php">Kolobrzeg</a>
    </div>
  </div>
  
  <a href="comments.php?name=">Comments</a>
  <a href="Grading_Page.php">Grading Page</a>
  
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>