<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Practice | Multipli</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS Files -->
  <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="style.css" rel="stylesheet" media="screen">
</head>
<body>
  <p><span id="int1"></span> x <span id="int2"></span></p>
  <form>
      Answer: <input type="text" name="answer" id="answer" autocomplete="off" autofocus><br>
      <input type="submit" value="Submit" onclick="checkAnswer()">
  </form>

  <!-- Game Script -->
  <script type="text/javascript">

    var int1 = Math.floor(Math.random() * (12 - 1 + 1)) + 1;
    var int2 = Math.floor(Math.random() * (12 - 1 + 1)) + 1;

    var correctAnswer = int1 * int2;

    document.getElementById("int1").innerHTML = int1;
    document.getElementById("int2").innerHTML = int2;

    function checkAnswer() {
      if(document.getElementById('answer').value == correctAnswer) {
        alert("Correct Answer");
      } else {
        alert("Incorrect Answer");
      }
    }
  </script>
  <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="centeredPanel">
	
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</body>
</html>
