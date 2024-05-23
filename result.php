<?php
session_start();
include("db_connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
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
        .result-container {
            background-color: #F8F0E5;
            border-radius: 10px;
            box-shadow: 5px 5px;
            padding: 20px;
            width: 400px;
            text-align: center;
        }
        h1 {
            color: #333333;
            margin-bottom: 20px;
        }
        h2 {
            color: #555555;
            margin-bottom: 20px;
        }
        a {
            display: block;
            color: #007bff;
            text-decoration: none;
            margin-top: 20px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Quiz Result</h1>
        
        <?php
        if (isset($_POST['submit'])) {
            $answers = array('q1' => 'c', 'q2' => 'a', 'q3' => 'a', 'q4' => 'c', 'q5' => 'b');
            $score = 0;
            $totalQuestions = count($answers);
            
            $selectedAnswers = $_POST;
            unset($selectedAnswers['submit']); 
            
            if (count($selectedAnswers) !== $totalQuestions) {
                echo "<h2>Please answer all questions.</h2>";
            } else {
                foreach ($answers as $question => $correctAnswer) {
                    if ($selectedAnswers[$question] === $correctAnswer) {
                        $score++;
                    }
                }
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    $update_query = "INSERT INTO score (username, score) VALUES (?, ?)";
                    $stmt = $conn->prepare($update_query);
                    $stmt->bind_param("ss", $username, $score);
            
                    if ($stmt->execute()) {
                        echo "<h2> $username Your Score: $score / " . count($answers) . "</h2>";
                    } else {
                        echo "Error updating score: " . $stmt->error;
                    }
            
                    $stmt->close();
                }
            }
        } else {
            echo "<h2>No data received.</h2>";
        }
        ?>
        
        <a href="quiz.php">Back to Quiz</a>
    </div>
</body>
</html>
