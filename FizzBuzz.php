<!DOCTYPE html>
<html>
   
   <head>
      <title>FizzBuzz</title>
   </head>
   <script>
      function FizzBuzz()
	  {
		  document.getElementById("FizzBuzz").innerHTML = "";
		  
		  for (i = 1; i <= 100; i++)
		  {
			  fizzBuzz = "";
			  if (i % 3 == 0)
			  {
				  fizzBuzz += "Fizz";
			  }
			  
			  if (i % 5 == 0)
			  {
				  fizzBuzz += "Buzz";
			  }
			  
			  document.getElementById("FizzBuzz").innerHTML += (fizzBuzz == "" ? i : fizzBuzz) + "<br>";
		  }
	  }
   </script>
   <body>
   
   <h1>PHP Version</h1>
   
   <?php
   for ($i = 1; $i <= 100; $i++)
   {
	   $fizzBuzz = "";
	   if ($i % 3 == 0)
	   {
		   $fizzBuzz .= "Fizz";
	   }
	   
	   if ($i % 5 == 0)
	   {
		   $fizzBuzz .= "Buzz";
	   }
	   
	   echo ($fizzBuzz == "" ? $i : $fizzBuzz) . "<br>";
   }
   ?>
   
   <h1>JavaScript Version</h1>
   <p id="FizzBuzz"></p>
   
   <script>
       FizzBuzz();
   </script>
   </body>
</html>