<?php
echo $_GET["number1"]+$_GET[number2];

?>


<head>

<link rel="styleesheet" href="boosttrap.min.css">

    </head>
    <body>
<div class="container">
    <form action ="calc.php" method="GET" class="form">
        <div>
<label>enter num1:</label>
<input type="number" id ="number1" name ="number1" clas="from-control">

</div>
<div>
<label>enter num2:</label>
<input type="number" id ="number2" name ="number2" clas="from-control">

</div>
<br>
<input type="submit" class ="btn btn-primary">
</form>
</div>



    </body>