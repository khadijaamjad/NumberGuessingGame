<?php

$play_count=0;
$correct_guesses=0;
$guess_high=0;
$guess_low=0;

function guessNumber(){
  global $guess_high, $guess_low, $correct_guesses, $play_count;
  $play_count+=1;
  $random=rand(1,10);
  echo "\n Are you ready? Let's start. What number am I thinking of? \n";
  $guess=readline(">>");
  $guessed=intval($guess);
  if($guessed>=1 && $guessed<=10){
  echo "\n Round: ${play_count} \n";
  echo "\n My number: ${random} \n";
  echo "\n Your guess: ${guessed} \n";
  if($guessed===$random)
  {
    $correct_guesses+=1;
     echo "\n Correct guess!\n";
  }
  if($guessed>$random)
  {
    echo "\n Too high!\n";
   $guess_high=$guess_high+1;
  }
  if($guessed<$random)
  {
    echo "\n Too low!\n";
   $guess_low+=1;
  }
}
else{
  echo "You didn't enter a number between 1 to 10";
}
}

echo "Welcome to the number guessing game!\n I'm going to think of numbers from 1 to 10. Do you think you can guess correctly?\n";
guessNumber();
guessNumber();
guessNumber();
$per=($correct_guesses/3)*100;
echo "\n You guessed it correct ${per}%";
if($guess_high>$guess_low){
  echo "\nWhen you guessed wrong, you tended to guess high.";
}
elseif($guess_low>$guess_high){
 echo "\n When you guessed wrong, you tended to guess low.";
 }
?>
