<?php include('config.php') ?>
<?php
    session_start();
    header("Cache-Control: private, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    $email=$_SESSION['email'];
    $test="Assessment";
      if(isset($_POST['feedsub'])&& !empty($_POST['rating']))
        {
            $email=$_SESSION['email'];
            $sql1 = "INSERT INTO feedback (email,test_name,rating,comment) VALUES ('$email','$test','".$_POST["rating"]."','".$_POST["comment"]."')";
            $result = mysqli_query($con,$sql1);
            //header("Location: https://phptest.avianglobes.com/php/test/feedbacksubmit.php");
            session_destroy();
        }
   
?>
<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com) -->
<html>

<head>
  <meta charset="UTF-8">
  <title>Feedback Submitted</title>

      <script>
      history.pushState(null, null, location.href);
      history.back();
      history.forward();
    window.onpopstate = function () { history.go(1); };
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
      </script>
     
     <style>
         :root {
	--animation-delay: 0;
	--duration: 800ms;
	--iterations: 1;
}
/* code by webdevtrick ( https://webdevtrick.com) */
body {
	display: flex;
	align-items: center;
	justify-content: center;
	height: 100vh;
	background-color: white;
	flex-direction: column;
}

.reveal,
.reveal::after {
	        animation-delay: 0;
	        animation-delay: var(--animation-delay, 2s);
	        animation-iteration-count: 1;
	        animation-iteration-count: var(--iterations, 1);
	        animation-duration: 800ms;
	        animation-duration: var(--duration, 800ms);
	        animation-fill-mode: both;
	        animation-timing-function: cubic-bezier(0.0, 0.0, 0.2, 1);
}

.reveal {
	position: relative;
	animation-name: text;
	color: black;
	white-space: nowrap;
	cursor: default;
	
}

.reveal::after {
		content: "";
		position: absolute;
		z-index: 999;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #f2f98b;
		        transform: scaleX(0);
		        transform-origin: 0 50%;
		pointer-events: none;
		        animation-name: revealer;
	}



@keyframes text {
	from {
		        clip-path: inset(0 100% 0 0);
	}
	to {
		        clip-path: inset(0 0 0 0);
	}
}




@keyframes revealer {
	
	0%, 50% {
		        transform-origin: 0 50%;
	}
	
	60%, 100% {
		        transform-origin: 100% 50%;		
	}

	
	60% {
		        transform: scaleX(1);
	}
	
	100% {
		        transform: scaleX(0);
	}
}
     </style>
</head>

<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

  <h1 class="reveal">Thank You For Your Time, Your Feedback Has Been Submitted Successfully.</h1>
  <h2 class="reveal">You can now close the window.</h2>
</body>

</html>