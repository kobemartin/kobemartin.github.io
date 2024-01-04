<!DOCTYPE html>
<html>
<head>
    <title>Rock, Paper, Scissors</title>
</head>
<body>
    <script type="text/javascript">
var userChoice = prompt("Do you choose rock, paper or scissors?");
var computerChoice = Math.random();
if (computerChoice < 0.34) {
    computerChoice = "rock";
} else if(computerChoice <= 0.67) {
    computerChoice = "paper";
} else {
    computerChoice = "scissors";
}/* console.log("Computer: " + computerChoice);*/


var valid = function (choice) {
        if (choice != "rock" && choice != "paper" && choice != "scissors") {
        userChoice = prompt("Do you choose rock, paper or scissors?");
    } else {
        return "valid";
    }
}


var compare = function (choice1, choice2) {
    if (choice1 != "rock" && choice1 != "paper" && choice1 != "scissors") {
        userChoice = prompt("Do you choose rock, paper or scissors?");
    }
/*    if (choice1 not in ("rock","paper","scissors")) {  //needs to be fixed, don't know how to do "or statement
        userChoice = prompt("Do you choose rock, paper, or scissors?");
    } else */else if (choice1 === choice2) {
        return "The result is a tie!";
    } else if (choice1 === "rock") {
        if (choice2 === "scissors") {
            return "rock wins";
        } else {
            return "paper wins";
        }
    } else if (choice1 === "paper") {
        if (choice2 === "rock") {
            return "paper wins";
        }
        else {
            return "scissors wins"
        }
    } else if (choice1 === "scissors") {
        if (choice2 === "rock") {
            return "rock wins";
        }
        else {
            return "scissors wins";
        }
    }
}


window.alert("Computer: " + computerChoice + "   You: " + userChoice + "\n" + compare(userChoice, computerChoice))
    </script>

</body>
</html>