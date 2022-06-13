<?php
session_start();
//echo $_SESSION['TIMER'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Sanchez&display=swap" rel="stylesheet">
  
    <!-- <link rel="stylesheet" type="text/css" href="{% static '/css/ques.css' %}"> -->
     <link rel="stylesheet" type="text/css" href="quess.css">
    <title>Document</title>
    <script type="text/javascript" >
   window.history.forward();
        function noBack() {
            window.history.forward();
        }
</script>
<script>
 /*  $var tm=$_SESSION['TIMER'];
console.log(tm)
console.log($_SESSION['cid']) */
var countDownDate = new Date( '<?php echo date('r', $_SESSION['TIMER']) ?>' ).getTime();
// Update the count down every 1 second
var x = setInterval( function() {
    // Get today's date and time
    var now = new Date().getTime();
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    // console.log(distance); 
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("clock-time").innerHTML = hours + "h "+ minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if(hours==0 && minutes==5 && seconds==0){
        alert('5 min are left');
    }
  // If the count down is over, write some text 
if (distance < 0) {
    clearInterval(x);
    alert('Time is Over!');
    window.location.href = "retest.php";
   // document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</head>
<body>
    <form action="result.php" method="POST">
    <div class="header">
        <label class="heading">PSYCHOMETRIC TEST</label>
        <i class="fa fa-clock-o clock-icon" aria-hidden="true"></i>
        <label class="clock-time" id="clock-time"></label>
    </div>

   
         
    <!--hidden name passing-->
    <input type="hidden" id="can_name" name="can_name" value="<?php echo $_GET['can_name']; ?>">
    <div class="ques">
    <h2>At a party do you: </h2>

    <div class="radio">
      <input type = "radio" id="radio-1" name = "one" value ="1" required></input>
      <label  for="radio-1" class="radio-label">Interact with many, including strangers</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-2" name = "one" value ="2"></input>
    <label  for="radio-2" class="radio-label">Interact with a few, known to you </label>
    </div>
    <br>

    <h2>Are you more: </h2>

    <div class="radio">
      <input type = "radio" id="radio-3" name = "two" value ="1" required></input>
      <label  for="radio-3" class="radio-label">Realistic than speculative</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-4" name = "two" value ="2"></input>
    <label  for="radio-4" class="radio-label">Speculative than realistic</label>
    </div>
    <br>

    <h2>Is it worse to: </h2>

    <div class="radio">
      <input type = "radio" id="radio-5" name = "three" value ="1" required></input>
      <label  for="radio-5" class="radio-label">Have your “head in the clouds”</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-6" name = "three" value ="2"></input>
    <label  for="radio-6" class="radio-label">Be “in a rut”</label>
    </div>
    <br>

    <h2>Are you more impressed by: </h2>

    <div class="radio">
      <input type = "radio" id="radio-7" name = "four" value ="1" required></input>
      <label  for="radio-7" class="radio-label">Principles</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-8" name = "four" value ="2"></input>
    <label  for="radio-8" class="radio-label">Emotions </label>
    </div>
    <br>

    <h2>Are more drawn toward the: </h2>

    <div class="radio">
      <input type = "radio" id="radio-9" name = "five" value ="1" required></input>
      <label  for="radio-9" class="radio-label">Convincing</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-10" name = "five" value ="2"></input>
    <label  for="radio-10" class="radio-label">Touching </label>
    </div>
    <br>

    <h2>Do you prefer to work: </h2>

    <div class="radio">
      <input type = "radio" id="radio-11" name = "six" value ="1" required></input>
      <label  for="radio-11" class="radio-label">To deadlines</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-12" name = "six" value ="2"></input>
    <label  for="radio-12" class="radio-label">Just “whenever” </label>
    </div>
    <br>

    <h2>Do you tend to choose: </h2>

    <div class="radio">
      <input type = "radio" id="radio-13" name = "seven" value ="1" required></input>
      <label  for="radio-13" class="radio-label">Rather carefully</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-14" name = "seven" value ="2"></input>
    <label  for="radio-14" class="radio-label"> Somewhat impulsively</label>
    </div>
    <br>

    <h2>At parties do you: </h2>

    <div class="radio">
      <input type = "radio" id="radio-15" name = "eight" value ="1" required></input>
      <label  for="radio-15" class="radio-label">Stay late, with increasing energy </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-16" name = "eight" value ="2"></input>
    <label  for="radio-16" class="radio-label">Leave early with decreased energy </label>
    </div>
    <br>

    <h2>Are you more attracted to: </h2>

    <div class="radio">
      <input type = "radio" id="radio-17" name = "nine" value ="1" required></input>
      <label  for="radio-17" class="radio-label"> Sensible people</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-18" name = "nine" value ="2"></input>
    <label  for="radio-18" class="radio-label"> Imaginative people</label>
    </div>
    <br>

    <h2>Are you more interested in: </h2>

    <div class="radio">
      <input type = "radio" id="radio-19" name = "ten" value ="1" required></input>
      <label  for="radio-19" class="radio-label">What is actual </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-20" name = "ten" value ="2"></input>
    <label  for="radio-20" class="radio-label"> What is possible</label>
    </div>
    <br>
    
    <h2>In judging others are you more swayed by:</h2>

    <div class="radio">
      <input type = "radio" id="radio-21" name = "eleven" value ="1" required></input>
      <label  for="radio-21" class="radio-label">Laws than circumstances</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-22" name = "eleven" value ="2"></input>
    <label  for="radio-22" class="radio-label">Circumstances than laws</label>
    </div>
    <br>

    <h2>In approaching others is your inclination to be somewhat: </h2>

    <div class="radio">
      <input type = "radio" id="radio-23" name = "twelve" value ="1" required></input>
      <label  for="radio-23" class="radio-label">Objective</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-24" name = "twelve" value ="2"></input>
    <label  for="radio-24" class="radio-label">Personal </label>
    </div>
    <br>

    <h2>Are you more: </h2>

    <div class="radio">
      <input type = "radio" id="radio-25" name = "thirteen" value ="1" required></input>
      <label  for="radio-25" class="radio-label">Punctual</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-26" name = "thirteen" value ="2"></input>
    <label  for="radio-26" class="radio-label">Leisurely</label>
    </div>
    <br>

    <h2>Does it bother you more having things: </h2>

    <div class="radio">
      <input type = "radio" id="radio-27" name = "fourteen" value ="1" required></input>
      <label  for="radio-27" class="radio-label">Incomplete</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-28" name = "fourteen" value ="2"></input>
    <label  for="radio-28" class="radio-label">Completed</label>
    </div>
    <br>

    <h2>In your social groups do you: </h2>

    <div class="radio">
      <input type = "radio" id="radio-29" name = "fifteen" value ="1" required></input>
      <label  for="radio-29" class="radio-label">Keep abreast of other’s happenings</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-30" name = "fifteen" value ="2"></input>
    <label  for="radio-30" class="radio-label">Get behind on the news </label>
    </div>
    <br>

    <h2>In doing ordinary things are you more likely to:</h2>

    <div class="radio">
      <input type = "radio" id="radio-31" name = "sixteen" value ="1" required></input>
      <label  for="radio-31" class="radio-label">Do it the usual way</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-32" name = "sixteen" value ="2"></input>
    <label  for="radio-32" class="radio-label">Do it your own way</label>
    </div>
    <br>

    <h2>Writers should: </h2>

    <div class="radio">
      <input type = "radio" id="radio-33" name = "seventeen" value ="1" required></input>
      <label  for="radio-33" class="radio-label">“Say what they mean and mean what they say” </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-34" name = "seventeen" value ="2"></input>
    <label  for="radio-34" class="radio-label">Express things more by use of analogy</label>
    </div>
    <br>

    <h2>Which appeals to you more: </h2>

    <div class="radio">
      <input type = "radio" id="radio-35" name = "eighteen" value ="1" required></input>
      <label  for="radio-35" class="radio-label"> Consistency of thought</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-36" name = "eighteen" value ="2"></input>
    <label  for="radio-36" class="radio-label">Harmonious human relationships </label>
    </div>
    <br>

    <h2>Are you more comfortable in making: </h2>

    <div class="radio">
      <input type = "radio" id="radio-37" name = "ninteen" value ="1" required></input>
      <label  for="radio-37" class="radio-label">Logical judgments</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-38" name = "ninteen" value ="2"></input>
    <label  for="radio-38" class="radio-label">Value judgments</label>
    </div>
    <br>

    <h2>Do you want things: </h2>

    <div class="radio">
      <input type = "radio" id="radio-39" name = "twenty" value ="1" required></input>
      <label  for="radio-39" class="radio-label">Settled and decided</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-40" name = "twenty" value ="2"></input>
    <label  for="radio-40" class="radio-label">Unsettled and undecided </label>
    </div>
    <br>

    <h2>Would you say you are more: </h2>

    <div class="radio">
      <input type = "radio" id="radio-41" name = "twentyone" value ="1" required></input>
      <label  for="radio-41" class="radio-label">Serious and determined </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-42" name = "twentyone" value ="2"></input>
    <label  for="radio-42" class="radio-label">Easy-going</label>
    </div>
    <br>

    <h2>In phoning do you:</h2>

    <div class="radio">
      <input type = "radio" id="radio-43" name = "twentytwo" value ="1" required></input>
      <label  for="radio-43" class="radio-label">Rarely question that it will all be said</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-44" name = "twentytwo" value ="2"></input>
    <label  for="radio-44" class="radio-label">Rehearse what you’ll say</label>
    </div>
    <br>

    <h2>Facts: </h2>

    <div class="radio">
      <input type = "radio" id="radio-45" name = "twentythree" value ="1" required></input>
      <label  for="radio-45" class="radio-label">“Speak for themselves”</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-46" name = "twentythree" value ="2"></input>
    <label  for="radio-46" class="radio-label">Illustrate principles </label>
    </div>
    <br>

    <h2>Are visionaries: </h2>

    <div class="radio">
      <input type = "radio" id="radio-47" name = "twentyfour" value ="1" required></input>
      <label  for="radio-47" class="radio-label">somewhat annoying</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-48" name = "twentyfour" value ="2"></input>
    <label  for="radio-48" class="radio-label">rather fascinating </label>
    </div>
    <br>

    <h2>Are you more often: </h2>

    <div class="radio">
      <input type = "radio" id="radio-49" name = "twentyfive" value ="1" required></input>
      <label  for="radio-49" class="radio-label"> a cool-headed person</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-50" name = "twentyfive" value ="2"></input>
    <label  for="radio-50" class="radio-label">a warm-hearted person</label>
    </div>
    <br>

    <h2>Is it worse to be: </h2>

    <div class="radio">
      <input type = "radio" id="radio-51" name = "twentysix" value ="1" required></input>
      <label  for="radio-51" class="radio-label">unjust </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-52" name = "twentysix" value ="2"></input>
    <label  for="radio-52" class="radio-label"> merciless</label>
    </div>
    <br>

    <h2>Should one usually let events occur: </h2>

    <div class="radio">
      <input type = "radio" id="radio-53" name = "twentyseven" value ="1" required></input>
      <label  for="radio-53" class="radio-label">by careful selection and choice</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-54" name = "twentyseven" value ="2"></input>
    <label  for="radio-54" class="radio-label">randomly and by chance</label>
    </div>
    <br>
    
    <h2>Do you feel better about: </h2>

    <div class="radio">
      <input type = "radio" id="radio-55" name = "twentyeight" value ="1" required></input>
      <label  for="radio-55" class="radio-label">having purchased</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-56" name = "twentyeight" value ="2"></input>
    <label  for="radio-56" class="radio-label">having the option to buy </label>
    </div>
    <br>

    <h2>In company do you: </h2>

    <div class="radio">
      <input type = "radio" id="radio-57" name = "twentynine" value ="1" required></input>
      <label  for="radio-57" class="radio-label">initiate conversation </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-58" name = "twentynine" value ="2"></input>
    <label  for="radio-58" class="radio-label">wait to be approached </label>
    </div>
    <br>

    <h2>Common sense is: </h2>

    <div class="radio">
      <input type = "radio" id="radio-59" name = "thirty" value ="1" required></input>
      <label  for="radio-59" class="radio-label">rarely questionable </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-60" name = "thirty" value ="2"></input>
    <label  for="radio-60" class="radio-label">frequently questionable </label>
    </div>
    <br>

    <h2>Children often do not:</h2>

    <div class="radio">
      <input type = "radio" id="radio-61" name = "thirtyone" value ="1" required></input>
      <label  for="radio-61" class="radio-label">make themselves useful enough </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-62" name = "thirtyone" value ="2"></input>
    <label  for="radio-62" class="radio-label">exercise their fantasy enough</label>
    </div>
    <br>

    <h2>In making decisions do you feel more comfortable with:</h2>

    <div class="radio">
      <input type = "radio" id="radio-63" name = "thirtytwo" value ="1" required></input>
      <label  for="radio-63" class="radio-label">standards </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-64" name = "thirtytwo" value ="2"></input>
    <label  for="radio-64" class="radio-label">feelings </label>
    </div>
    <br>

    <h2>Are you more: </h2>

    <div class="radio">
      <input type = "radio" id="radio-65" name = "thirtythree" value ="1" required></input>
      <label  for="radio-65" class="radio-label">firm than gentle</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-66" name = "thirtythree" value ="2"></input>
    <label  for="radio-66" class="radio-label">gentle than firm </label>
    </div>
    <br>

    <h2>Which is more admirable: </h2>

    <div class="radio">
      <input type = "radio" id="radio-67" name = "thirtyfour" value ="1" required></input>
      <label  for="radio-67" class="radio-label">the ability to organize and be methodical</label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-68" name = "thirtyfour" value ="2"></input>
    <label  for="radio-68" class="radio-label">the ability to adapt and make do</label>
    </div>
    <br>

    <h2>Do you put more value on: </h2>

    <div class="radio">
      <input type = "radio" id="radio-69" name = "thirtyfive" value ="1" required></input>
      <label  for="radio-69" class="radio-label">infinite </label>
      </div>

    <div class="radio">
    <input type = "radio" id="radio-70" name = "thirtyfive" value ="2"></input>
    <label  for="radio-70" class="radio-label">open-minded </label>
    </div>
    <br>

    <h2>Does new and non-routine interaction with others: </h2>

<div class="radio">
  <input type = "radio" id="radio-71" name = "thirtysix" value ="1" required></input>
  <label  for="radio-71" class="radio-label">stimulate and energize you </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-72" name = "thirtysix" value ="2"></input>
<label  for="radio-72" class="radio-label">tax your reserves </label>
</div>
<br>

<h2>Are you more frequently: </h2>

<div class="radio">
  <input type = "radio" id="radio-73" name = "thirtyseven" value ="1" required></input>
  <label  for="radio-73" class="radio-label">a practical sort of person </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-74" name = "thirtyseven" value ="2"></input>
<label  for="radio-74" class="radio-label">a fanciful sort of person</label>
</div>
<br>

<h2>Are you more likely to: </h2>

<div class="radio">
  <input type = "radio" id="radio-75" name = "thirtyeight" value ="1" required></input>
  <label  for="radio-75" class="radio-label">see how others are useful </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-76" name = "thirtyeight" value ="2"></input>
<label  for="radio-76" class="radio-label">see how others see</label>
</div>
<br>

<h2>Which is more satisfying:</h2>

<div class="radio">
  <input type = "radio" id="radio-77" name = "thirtynine" value ="1" required></input>
  <label  for="radio-77" class="radio-label">to discuss an issue thoroughly </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-78" name = "thirtynine" value ="2"></input>
<label  for="radio-78" class="radio-label">to arrive at agreement on an issue 
</label>
</div>
<br>



<h2>Which rules you more: </h2>

<div class="radio">
  <input type = "radio" id="radio-79" name = "forty" value ="1" required></input>
  <label  for="radio-79" class="radio-label">your head </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-80" name = "forty" value ="2"></input>
<label  for="radio-80" class="radio-label">your heart </label>
</div>
<br>


<h2> Are you more comfortable with work that is:  </h2>

<div class="radio">
  <input type = "radio" id="radio-81" name = "fortyone" value ="1" required></input>
  <label  for="radio-81" class="radio-label">contracted </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-82" name = "fortyone" value ="2"></input>
<label  for="radio-82" class="radio-label">done on a casual basis</label>
</div>
<br>

<h2>Do you tend to look for: </h2>

<div class="radio">
  <input type = "radio" id="radio-83" name = "fortytwo" value ="1" required></input>
  <label  for="radio-83" class="radio-label">the orderly</label>
  </div>

<div class="radio">
<input type = "radio" id="radio-84" name = "fortytwo" value ="2"></input>
<label  for="radio-84" class="radio-label">whatever turns up </label>
</div>
<br>

<h2>Do you prefer: </h2>

<div class="radio">
  <input type = "radio" id="radio-85" name = "fortythree" value ="1" required></input>
  <label  for="radio-85" class="radio-label">many friends with brief contact </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-86" name = "fortythree" value ="2"></input>
<label  for="radio-86" class="radio-label"> a few friends with more lengthy contact </label>
</div>
<br>

<h2>Do you go more by: </h2>

<div class="radio">
  <input type = "radio" id="radio-87" name = "fortyfour" value ="1" required></input>
  <label  for="radio-87" class="radio-label">facts</label>
  </div>

<div class="radio">
<input type = "radio" id="radio-88" name = "fortyfour" value ="2"></input>
<label  for="radio-88" class="radio-label">principles </label>
</div>
<br>


<h2>Are you more interested in:</h2>

<div class="radio">
  <input type = "radio" id="radio-89" name = "fortyfive" value ="1" required></input>
  <label  for="radio-89" class="radio-label">production and distribution </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-90" name = "fortyfive" value ="2"></input>
<label  for="radio-90" class="radio-label">design and research</label>
</div>
<br>

<h2>Which is more of a compliment:</h2>

<div class="radio">
  <input type = "radio" id="radio-91" name = "fortysix" value ="1" required></input>
  <label  for="radio-91" class="radio-label">“There is a very logical person.” </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-92" name = "fortysix" value ="2"></input>
<label  for="radio-92" class="radio-label">“There is a very sentimental person.” </label>
</div>
<br>

<h2>Do you value in yourself more that you are: </h2>

<div class="radio">
  <input type = "radio" id="radio-93" name = "fortyseven" value ="1" required></input>
  <label  for="radio-93" class="radio-label">unwavering </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-94" name = "fortyseven" value ="2"></input>
<label  for="radio-94" class="radio-label">devoted</label>
</div>
<br>


<h2> Do you more often prefer the:</h2>

<div class="radio">
  <input type = "radio" id="radio-95" name = "fortyeight" value ="1" required></input>
  <label  for="radio-95" class="radio-label">final and unalterable statement</label>
  </div>

<div class="radio">
<input type = "radio" id="radio-96" name = "fortyeight" value ="2"></input>
<label  for="radio-96" class="radio-label"> tentative and preliminary statement</label>
</div>
<br>


<h2>Are you more comfortable:</h2>

<div class="radio">
  <input type = "radio" id="radio-97" name = "fortynine" value ="1" required></input>
  <label  for="radio-97" class="radio-label">after a decision </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-98" name = "fortynine" value ="2"></input>
<label  for="radio-98" class="radio-label">before a decision </label>
</div>
<br>


<h2>Do you: </h2>

<div class="radio">
  <input type = "radio" id="radio-99" name = "fifty" value ="1" required></input>
  <label  for="radio-99" class="radio-label">speak easily and at length with strangers </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-100" name = "fifty" value ="2"></input>
<label  for="radio-100" class="radio-label">find little to say to strangers </label>
</div>
<br>

<h2>Are you more likely to trust your: </h2>

<div class="radio">
  <input type = "radio" id="radio-101" name = "fiftyone" value ="1" required></input>
  <label  for="radio-101" class="radio-label">experience </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-102" name = "fiftyone" value ="2"></input>
<label  for="radio-102" class="radio-label">hunch</label>
</div>
<br>

<h2>Do you feel:  </h2>

<div class="radio">
  <input type = "radio" id="radio-103" name = "fiftytwo" value ="1" required></input>
  <label  for="radio-103" class="radio-label">more practical than ingenious </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-104" name = "fiftytwo" value ="2"></input>
<label  for="radio-104" class="radio-label">more ingenious than practical </label>
</div>
<br>

<h2>Which person is more to be complimented – one of: </h2>

<div class="radio">
  <input type = "radio" id="radio-105" name = "fiftythree" value ="1" required></input>
  <label  for="radio-105" class="radio-label">clear reason </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-106" name = "fiftythree" value ="2"></input>
<label  for="radio-106" class="radio-label">strong feeling  </label>
</div>
<br>

<h2> Are you inclined more to be: </h2>

<div class="radio">
  <input type = "radio" id="radio-107" name = "fiftyfour" value ="1" required></input>
  <label  for="radio-107" class="radio-label">fair-minded </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-108" name = "fiftyfour" value ="2"></input>
<label  for="radio-108" class="radio-label">sympathetic </label>
</div>
<br>


<h2>Is it preferable mostly to:  </h2>

<div class="radio">
  <input type = "radio" id="radio-109" name = "fiftyfive" value ="1" required></input>
  <label  for="radio-109" class="radio-label">make sure things are arranged </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-110" name = "fiftyfive" value ="2"></input>
<label  for="radio-110" class="radio-label">just let things happen</label>
</div>
<br>

<h2> In relationships should most things be: </h2>

<div class="radio">
  <input type = "radio" id="radio-111" name = "fiftysix" value ="1" required></input>
  <label  for="radio-111" class="radio-label">re-negotiable</label>
  </div>

<div class="radio">
<input type = "radio" id="radio-112" name = "fiftysix" value ="2"></input>
<label  for="radio-112" class="radio-label">random and circumstantial </label>
</div>
<br>

<h2> When the phone rings do you: </h2>

<div class="radio">
  <input type = "radio" id="radio-113" name = "fiftyseven" value ="1" required></input>
  <label  for="radio-113" class="radio-label">hasten to get to it first </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-114" name = "fiftyseven" value ="2"></input>
<label  for="radio-114" class="radio-label">hope someone else will answer </label>
</div>
<br>

<h2> Do you prize more in yourself: </h2>

<div class="radio">
  <input type = "radio" id="radio-115" name = "fiftyeight" value ="1" required></input>
  <label  for="radio-115" class="radio-label">a strong sense of reality 
 </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-116" name = "fiftyeight" value ="2"></input>
<label  for="radio-116" class="radio-label"> a vivid imagination </label>
</div>
<br>

<h2>Are you drawn more to:  </h2>

<div class="radio">
  <input type = "radio" id="radio-117" name = "fiftynine" value ="1" required></input>
  <label  for="radio-117" class="radio-label">fundamentals </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-118" name = "fiftynine" value ="2"></input>
<label  for="radio-118" class="radio-label">overtones </label>
</div>
<br>

<h2>Which seems the greater error: </h2>

<div class="radio">
  <input type = "radio" id="radio-119" name = "sixty" value ="1" required></input>
  <label  for="radio-119" class="radio-label">to be too passionate </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-120" name = "sixty" value ="2"></input>
<label  for="radio-120" class="radio-label"> to be too objective </label>
</div>
<br>

<h2>Do you see yourself as basically: </h2>

<div class="radio">
  <input type = "radio" id="radio-121" name = "sixtyone" value ="1" required></input>
  <label  for="radio-121" class="radio-label"> hard-headed  </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-122" name = "sixtyone" value ="2"></input>
<label  for="radio-122" class="radio-label">soft-hearted</label>
</div>
<br>

<h2>Which situation appeals to you more: </h2>

<div class="radio">
  <input type = "radio" id="radio-123" name = "sixtytwo" value ="1" required></input>
  <label  for="radio-123" class="radio-label">the structured and scheduled </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-124" name = "sixtytwo" value ="2"></input>
<label  for="radio-124" class="radio-label">the unstructured and unscheduled </label>
</div>
<br>

<h2>Are you a person that is more:  </h2>

<div class="radio">
  <input type = "radio" id="radio-125" name = "sixtythree" value ="1" required></input>
  <label  for="radio-125" class="radio-label">routinized than whimsical  </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-126" name = "sixtythree" value ="2"></input>
<label  for="radio-126" class="radio-label">whimsical than routinized </label>
</div>
<br>

<h2>Are you more inclined to be:</h2>

<div class="radio">
  <input type = "radio" id="radio-127" name = "sixtyfour" value ="1" required></input>
  <label  for="radio-127" class="radio-label">easy to approach </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-128" name = "sixtyfour" value ="2"></input>
<label  for="radio-128" class="radio-label">somewhat reserved  </label>
</div>
<br>

<h2>In writings do you prefer:</h2>

<div class="radio">
  <input type = "radio" id="radio-129" name = "sixtyfive" value ="1" required></input>
  <label  for="radio-129" class="radio-label">the more literal </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-130" name = "sixtyfive" value ="2"></input>
<label  for="radio-130" class="radio-label">the more figurative </label>
</div>
<br>



<h2>Is it harder for you to:</h2>

<div class="radio">
  <input type = "radio" id="radio-131" name = "sixtysix" value ="1" required></input>
  <label  for="radio-131" class="radio-label">identify with others </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-132" name = "sixtysix" value ="2"></input>
<label  for="radio-132" class="radio-label">utilize others </label>
</div>
<br>

<h2>Which do you wish more for yourself:</h2>

<div class="radio">
  <input type = "radio" id="radio-133" name = "sixtyseven" value ="1" required></input>
  <label  for="radio-133" class="radio-label">clarity of reason </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-134" name = "sixtyseven" value ="2"></input>
<label  for="radio-134" class="radio-label">strength of compassion </label>
</div>
<br>

<h2>Which is the greater fault:</h2>

<div class="radio">
  <input type = "radio" id="radio-135" name = "sixtyeight" value ="1" required></input>
  <label  for="radio-135" class="radio-label">being indiscriminate </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-136" name = "sixtyeight" value ="2"></input>
<label  for="radio-136" class="radio-label">being critical</label>
</div>
<br>

<h2>Do you prefer the:</h2>

<div class="radio">
  <input type = "radio" id="radio-137" name = "sixtynine" value ="1" required></input>
  <label  for="radio-137" class="radio-label">planned event </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-138" name = "sixtynine" value ="2"></input>
<label  for="radio-138" class="radio-label">unplanned event </label>
</div>
<br>

<h2>Do you tend to be more: </h2>

<div class="radio">
  <input type = "radio" id="radio-139" name = "seventy" value ="1" required></input>
  <label  for="radio-139" class="radio-label"> deliberate than spontaneous 
 </label>
  </div>

<div class="radio">
<input type = "radio" id="radio-140" name = "seventy" value ="2"></input>
<label  for="radio-140" class="radio-label">spontaneous than deliberate </label>
</div>
<br>

<button type="submit" class="btn" value="sub1" >Submit</button>

    
</div>
    </form>
</body>
</html>