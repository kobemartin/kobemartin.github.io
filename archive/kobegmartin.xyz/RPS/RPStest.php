<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors</title>
</head>
<body>
    <script type="text/javascript">

var userChoice = "";
var computerChoice = "";
var username = prompt("What is your name?");
var computerScore = 0;
var userScore = 0;

var getChoice = function() {  //computer will choose rock, paper or scissors
    computerChoice = Math.random();
    if (computerChoice < 0.34) {
    computerChoice = "rock";
    } else if(computerChoice <= 0.67) {
    computerChoice = "paper";
    } else {
    computerChoice = "scissors";
    }
}

var choice = function () { //asks the user to choose rock, paper or scissors
    //userChoice = prompt("Do you choose rock, paper or scissors?");
    userChoice = "rock"//userChoice.toLowerCase();
    if (userChoice != "rock" && userChoice != "paper" && userChoice != "scissors") {
        choice();
    } else {
        getChoice();
        window.alert("Computer: " + computerChoice + "   " + username + ": " + userChoice + "\n" + compare(userChoice, computerChoice));
        again();
    }
}

var addOne = function(winner) {  //adds one point to the winner
    if (winner === "computer") {
        computerScore += 1;
    } else {
        userScore += 1;
    }
}

var compare = function (choice1, choice2) {  //compares the user and computer's choices
        if (choice1 === choice2) {
        return "The result is a tie!";
    } else if (choice1 === "rock") {
        if (choice2 === "scissors") {
            addOne("user");
            return "You win with rock";
        } else {
            addOne("computer");
            return "The computer wins with paper";
        }
    } else if (choice1 === "paper") {
        if (choice2 === "rock") {
            addOne("user");
            return "You win with paper";
        } else {
            addOne("computer");
            return "The computer wins with scissors"
        }
    } else if (choice1 === "scissors") {
        if (choice2 === "rock") {
            addOne("computer");
            return "The computer wins with rock";
        }
        else {
            addOne("user");
            return "You win with scissors";
        }
    }
}

var again = function() {  //asks the user if they want to play again
    var x = confirm("The score is: Computer: "+ computerScore + "   " + username + ": " + userScore + "\n Do you want to play again?");
    if (x === true) {
        choice();
    } else {
        alert("Bye Bye!");
    }
}

choice();

    </script>

</body>
</html>