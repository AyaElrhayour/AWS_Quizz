<?php
session_start();
require_once("../controllers/questionController.php");
require_once("../controllers/answerController.php");

$questionController = new QuestionController();
$randomQuestion = $questionController->getRandomQ();

$answerController = new AnswerController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/quizz.css">
  <title>Document</title>
</head>

<body>
  <main>
    <h1>Questions</h1>
    <div class="container2">
      <div class="container3">
        <?php foreach ($randomQuestion as $rq) { ?>
          <div class="container4">
            <h2 class="question" data-qid="<?php echo $rq["id"]; ?>"><?php echo $rq["question"]; ?></h2>
            <!-- <div class="timer-container">
              Time left: <span id="timer"></span> seconds
            </div> -->
            <form>
              <?php
              foreach ($answerController->getAnswersOfQuestion($rq["id"]) as $answer) { ?>
                <div class="answerdiv ">
                  <input type="radio" id="answer" name="answer" value="<?php echo $answer["answer"]; ?>" data-istrue="<?php echo $answer["istrue"]; ?>" data-qid="<?php echo $answer["q_id"]; ?>">
                  <label class="answer" for="answer">
                    <?php echo $answer["answer"]; ?>
                  </label>
                </div>
              <?php } ?>
            </form>
          </div>
        <?php } ?>
        <div class="scorediv">
          <h1 class="result">SCORE</h1>
        </div>
      </div>
      <div class="nextbtn">
        <button type="button" onclick="nextQuestion()">Next</button>
      </div>
      <input type="hidden" id="selectedAnswer" name="selectedAnswer" value="">
      <input type="hidden" id="score" name="score">
    </div>
  </main>
  <footer>
    <div>
      <p>
        All copyrights reserved to Aya Elrhayour - Code X
      </p>
    </div>
  </footer>

  <script src="../../assets/js/quizz.js"></script>
  <script>
    const scorediv = document.querySelector('.scorediv');
    const result = document.querySelector('.result');
    let translateValue = 1093;
    var selectedAnswersArray = [];
    var score = 0;
    var displayedQuestions = <?php echo json_encode($randomQuestion); ?>;
    var matchedQuestionsArray = [];
    var timer;
    var currentQuestionIndex = 1;
    var seconds = 10;
    const btn = document.querySelector('.nextbtn button');

    function nextQuestion() {
      checkEndOfQuiz()
      var selectedAnswer = document.querySelector('input[name="answer"]:checked');

      if (selectedAnswer) {
        var istrue = selectedAnswer.getAttribute('data-istrue');
        var qid = selectedAnswer.getAttribute('data-qid');
        console.log("question id " + qid);
        var selectedAnswerObject = {
          value: selectedAnswer.value,
          istrue: istrue,
          qid: qid
        };

        if (istrue == 0) {
          selectedAnswersArray.push(selectedAnswerObject);
          console.log(selectedAnswersArray);
        }

        if (istrue == 1) {
          score += 5;
          console.log("Score: " + score);
        }

        document.getElementById('score').value = score;

        var radioButtons = document.querySelectorAll('input[name="answer"]');
        radioButtons.forEach(function(radioButton) {
          radioButton.checked = false;
        });

        console.log("Displayed Questions: ", displayedQuestions);

        if (istrue == 0) {
          var matchedQuestion = displayedQuestions.find(question => question.id == qid);
          if (matchedQuestion) {
            matchedQuestionsArray.push(matchedQuestion);
            console.log("Matched Questions: ", matchedQuestionsArray);
          }
        }

        currentQuestionIndex++;

        if (currentQuestionIndex < displayedQuestions.length) {
          btn.innerText = "Next";
        } else {
          btn.innerText = "Finish";
        }

        performTransition();
      } else {
        alert("Please select an answer before moving to the next question.");
      }
    }

    function performTransition() {
      const containers = document.querySelectorAll(".container3");

      containers.forEach((container) => {
        container.style.transition = "transform 0.5s ease-in-out";
        container.style.transform = `translateX(-${translateValue}px)`;
      });

      translateValue += 1093 + (1093 / 100) * 1;
    }

    function checkEndOfQuiz() {
      if (btn.innerText == "Finish") {
        btn.addEventListener('click', function() {
          console.log("Button clicked, hiding...");
          btn.style.display = "none";
          scorediv.style.display = "block";
          result.innerText = "Your score is: " + score;
          displayMatchedQuestions();
        });
      }
    }

    function displayMatchedQuestions() {
      var scoreText = "<h2>Incorrectly Answered Questions:</h2>";

      if (matchedQuestionsArray.length > 0) {
        matchedQuestionsArray.forEach(function(question) {
          var questionText = question.hasOwnProperty("question") ? question.question : question.title;
          var explanationText = question.hasOwnProperty("explanation") ? question.explanation : question.description;

          scoreText += "<p>" + questionText + "</p>";
          scoreText += "<p>Explanation: " + explanationText + "</p>";
        });
      } else {
        scoreText += "<p>Congratulations! You answered all questions correctly.</p>";
      }

      result.innerHTML = scoreText;
    }
  </script>

</body>

</html>