<!DOCTYPE html>
<html>
<head>
    <title>Quiz Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .quiz-container {
            background-color: #F8F0E5;
            border-radius: 10px;
            box-shadow: 5px 5px;
            padding: 20px;
            width: 400px;
        }
        h1 {
            text-align: center;
            color: #333333;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555555;
            margin-bottom: 10px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: green;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="quiz-container">
    <h1>Quiz Form</h1>
    
    <form method="post" action="result.php">
        <p>1. variable name in php start with ?</p>
        <input type="radio" name="q1" value="a"> !<br>
        <input type="radio" name="q1" value="b"> &<br>
        <input type="radio" name="q1" value="c"> $<br>
        
        <p>2. Which is default extension of php ?</p>
        <input type="radio" name="q2" value="a"> .php<br>
        <input type="radio" name="q2" value="b"> .xml<br>
        <input type="radio" name="q2" value="c"> .html<br>
        
        <p>3. Which is not a variable scope in php ?</p>
        <input type="radio" name="q3" value="a"> Extern<br>
        <input type="radio" name="q3" value="b"> Local<br>
        <input type="radio" name="q3" value="c"> Static<br>

        <p>4. what is used to display output in php ?</p>
        <input type="radio" name="q4" value="a"> echo<br>
        <input type="radio" name="q4" value="b"> print<br>
        <input type="radio" name="q4" value="c"> both (a) & (b)<br>

        <p>5. what is used to concatenation in php ?</p>
        <input type="radio" name="q5" value="a"> +<br>
        <input type="radio" name="q5" value="b"> .<br>
        <input type="radio" name="q5" value="c"> *<br>
        
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>
