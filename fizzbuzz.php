<?php
// Fizz buzz is a word/math game.
// Count incrementally from 1 to 100, replacing any number divisible by 3 with the word "fizz",
//   any number divisible by 5 with the word "buzz", 
//   and any number divisible by both 3 & 5 with the word "fizzbuzz".
// Example:
//   1
//   2
//   fizz
//   4
//   buzz
//   …
//
// Write a simple program that prints out the numbers or words from 1 to 100.


function fizzbuzz(){
  
  for($i = 1; $i<=100; $i++){
    if(($i%3==0) and ($i%5==0)){
		echo "fizzbuzz<br/>";
      continue;
    }elseif($i%3==0){
		echo "fizz<br/>";
    }elseif($i%5==0){
		echo "buzz<br/>";
    }else{
      echo $i."<br/>";
    }
  }
}

fizzbuzz();