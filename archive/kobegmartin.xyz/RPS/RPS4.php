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

var getChoice = function() {
    computerChoice = Math.random();
    if (computerChoice < 0.34) {
    computerChoice = "rock";
    } else if(computerChoice <= 0.67) {
    computerChoice = "paper";
    } else {
    computerChoice = "scissors";
    }
}

var choice = function () {
    userChoice = prompt("Do you choose rock, paper or scissors?");
    userChoice = userChoice.toLowerCase();
    if (userChoice != "rock" && userChoice != "paper" && userChoice != "scissors") {
        choice();
    } else {
        getChoice();
        window.alert("Computer: " + computerChoice + "   " + username + ": " + userChoice + "\n" + compare(userChoice, computerChoice));
        again();
    }
}

var compare = function (choice1, choice2) {
        if (choice1 === choice2) {
        return "The result is a tie!";
    } else if (choice1 === "rock") {
        if (choice2 === "scissors") {
            return "You win with rock";
        } else {
            return "The computer wins with paper";
        }
    } else if (choice1 === "paper") {
        if (choice2 === "rock") {
            return "You win with paper";
        }
        else {
            return "The computer wins with scissors"
        }
    } else if (choice1 === "scissors") {
        if (choice2 === "rock") {
            return "The computer wins with rock";
        }
        else {
            return "You win with scissors";
        }
    }
}

var again = function() {
    var x = confirm("Do you want to play again?");
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