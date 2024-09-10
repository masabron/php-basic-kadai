<?php
//score1~10をそれぞれの値に代入
 $score1 = 80;
 $score2 = 60;
 $score3 = 55;
 $score4 = 40;
 $score5 = 100;
 $score6 = 25;
 $score7 = 80;
 $score8 = 95;
 $score9 = 30;
 $score10 = 60;
//四則演算を使用し、合計点と平均点を算出
//まず、四則演算を使用しscore1~10の合計を表示
echo $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
echo '<br>';
//scoreの合計を別の変数に代入
$average_score = $score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
//average_scoreに平均点を算出させる
echo $average_score / 10;
?>