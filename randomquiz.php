<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    }

include 'connection.php';
$sql="SELECT * FROM `question` ORDER by rand() LIMIT 25";
$query=mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Online Quiz</title>

</head>
<body  oncontextmenu="return false">
  <?php include 'userheader.php' ?>
  <div class="container-fluid bg">
        <div class="container log">
        <h1 class="ucard">Your Random Test is Running...   <span class="mb-5" style="color:red" id="time">00:00</span></h1>
<form id="regForm" action="randomquizanswer.php" method="post">
  
 <?php $count=0; while($row= mysqli_fetch_array($query)){
                 
                 $count++; ?>
  <div class="tab">
                    <h3 style="color:blue"><?php echo $row['question'];?></h3>
                   
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="flexRadioDefault1" value="option1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        <h4><?php echo $row['option1'];?></h4>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="flexRadioDefault1" value="option2" >
                        <label class="form-check-label" for="flexRadioDefault1">
                        <h4><?php echo $row['option2'];?></h4>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="flexRadioDefault1" value="option3" >
                        <label class="form-check-label" for="flexRadioDefault1">
                        <h4><?php echo $row['option3'];?></h4>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="flexRadioDefault1" value="option4" >
                        <label class="form-check-label" for="flexRadioDefault1">
                        <h4><?php echo $row['option4'];?></h4>
                        </label>
                    </div>
                    <input class="form-check-input" type="radio" name="<?php echo $row['id']; ?>" id="flexRadioDefault1" value="null" hidden checked>

  </div>
  <?php }?>
  
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
                <?php for($i=1;$i<=$count;$i++){


                    echo'<span class="step"><p>'.$i.'</p></span>';
                 } ?>
                </div>
                <button type="Submit" id="sub-btn" name="Submit" hidden>Submit</button>
                </form>
                </div>
    </div>
    <?php include 'footer.php' ?>           
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}



function startTimer(duration, display) {
   var timer = duration, minutes, seconds;
   setInterval(function () {
       minutes = parseInt(timer / 60, 10);
       seconds = parseInt(timer % 60, 10);

       minutes = minutes < 10 ? "0" + minutes : minutes;
       seconds = seconds < 10 ? "0" + seconds : seconds;

       display.textContent = minutes + ":" + seconds;

       if (--timer < 0) {
           timer = duration;
       }
       if (timer==0) {
         document.getElementById("sub-btn").click();
       }
       
   }, 1000);
}

function countdown() {
   var counter = 600;
       display = document.querySelector('#time');
   startTimer(counter, display);
}
countdown();


$(document).ready(function() {
    function disableSelection(e) {
        if (typeof e.onselectstart != "undefined") e.onselectstart = function() {
            return false
        };
        else if (typeof e.style.MozUserSelect != "undefined") e.style.MozUserSelect = "none";
        else e.onmousedown = function() {
            return false
        };
        e.style.cursor = "default"
    }
    window.onload = function() {
        disableSelection(document.body)
    };

    window.addEventListener("keydown", function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 70 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {
            e.preventDefault()
        }
    });
    document.keypress = function(e) {
        if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 70 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {}
        return false
    };

    document.onkeydown = function(e) {
        e = e || window.event;
        if (e.keyCode == 123 || e.keyCode == 18) {
            return false
        }
    };

    document.oncontextmenu = function(e) {
        var t = e || window.event;
        var n = t.target || t.srcElement;
        if (n.nodeName != "A") return false
    };
    document.ondragstart = function() {
        return false
    };
});
</script>

</body>
</html>
