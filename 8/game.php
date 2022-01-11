<!DOCTYPE html>

<?php 
$operator = $_POST[operator];

$opponent_choices = array('zirkles','popierius','akmuo');

$number = rand(0,2);

$opponent_choice = $opponent_choices[$number];

switch ($operator){

    case 'zirkles':
        echo 'Tavo pasirinkimas: '.$operator."\n";
        echo 'Oponento pasirinkimas: '.$opponent_choice."\n";
        if($opponent_choice === 'zirkles'){ echo 'lygiosios'."\n";}
        if($opponent_choice === 'popierius'){ echo 'laimejai'."\n";}
        if($opponent_choice === 'akmuo'){ echo 'pralaimejai'."\n";}
        break;
    case 'popierius':
        echo 'Tavo pasirinkimas: '.$operator."\n";
        echo 'Oponento pasirinkimas: '.$opponent_choice."\n";
        if($opponent_choice === 'popierius'){ echo 'lygiosios'."\n";}
        if($opponent_choice === 'akmuo'){ echo 'laimejai'."\n";}
        if($opponent_choice === 'zirkles'){ echo 'pralaimejai'."\n";}

        break;
    case 'akmuo':
        echo 'Tavo pasirinkimas: '.$operator."\n";
        echo 'Oponento pasirinkimas: '.$opponent_choice."\n";
        if($opponent_choice === 'akmuo'){ echo 'lygiosios'."\n";}
        if($opponent_choice === 'popierius'){ echo 'laimejai'."\n";}
        if($opponent_choice === 'zirkles'){ echo 'pralaimejai'."\n";}
        break;

}
?>
