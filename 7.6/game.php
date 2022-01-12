<!DOCTYPE html>

<?php 
$operator = $_POST['operator'];

$opponent_choices = array('zirkles','popierius','akmuo');

$game_result = array('laimejai','pralaimejai','lygiosios');

$number = rand(0,2);

$opponent_choice = $opponent_choices[$number];
$myfile = fopen("history.csv", "a") or die("Unable to open file!");
switch ($operator){

    case 'zirkles':
        echo 'Tavo pasirinkimas: '.$operator."\n";
        echo 'Oponento pasirinkimas: '.$opponent_choice."\n";
        if($opponent_choice === 'zirkles'){ echo $game_result[2]."\n"; $result = $game_result[2];}
        if($opponent_choice === 'popierius'){ echo $game_result[0]."\n"; $result = $game_result[0];}
        if($opponent_choice === 'akmuo'){ echo $game_result[1]."\n"; $result = $game_result[1];}
        break;
    case 'popierius':
        echo 'Tavo pasirinkimas: '.$operator."\n";
        echo 'Oponento pasirinkimas: '.$opponent_choice."\n";
        if($opponent_choice === 'popierius'){ echo $game_result[2]."\n"; $result = $game_result[2];}
        if($opponent_choice === 'akmuo'){ echo $game_result[0]."\n"; $result = $game_result[0];}
        if($opponent_choice === 'zirkles'){ echo $game_result[1]."\n"; $result = $game_result[1];}
        break;
    case 'akmuo':
        echo 'Tavo pasirinkimas: '.$operator."\n";
        echo 'Oponento pasirinkimas: '.$opponent_choice."\n";
        if($opponent_choice === 'akmuo'){ echo $game_result[2]."\n"; $result = $game_result[2];}
        if($opponent_choice === 'zirkles'){ echo $game_result[0]."\n"; $result = $game_result[0];}
        if($opponent_choice === 'popierius'){ echo $game_result[1]."\n"; $result = $game_result[1];}
        break;

}


$txt = 'tavo pasirinkimas '.$operator.';'.'Oponento pasirinkimas: '.$opponent_choice.';'.'Rezultatas: '.$result."\n";
fwrite($myfile, $txt);
fclose($myfile);



include 'index.php';
?>
