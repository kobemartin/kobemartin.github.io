<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors</title>
</head>
<body>
    <script type="text/javascript">
var userChoice = "";
var computerChoice = Math.random();
if (computerChoice < 0.34) {
    computerChoice = "rock";
} else if(computerChoice <= 0.67) {
    computerChoice = "paper";
} else {
    computerChoice = "scissors";
}

var choice = function () {
    userChoice = prompt("Do you choose rock, paper or scissors?");
    if (userChoice != "rock" && userChoice != "paper" && userChoice != "scissors") {
        choice();
    } else {
        window.alert("Computer: " + computerChoice + "   You: " + userChoice + "\n" + compare(userChoice, computerChoice));
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

choice()
    </script>

</body>
</html>