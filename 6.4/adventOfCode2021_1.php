<?php

// first part of https://adventofcode.com/2021/day/1

$data = file('data/input.log');

$data_length = count($data);

$increaseC=0; 

for($i=0;$i<$data_length;$i++){
          if($i === 0 || $data[$i]>$data[$i-1]==true){
                $increaseC++;
          }    
}
echo $increaseC."\n";

// * netfrog has quit (Quit: Leaving)
// <shinbet> I'm doing adventofcode puzzles for learning purposes. My code here https://github.com/shinbeth/pasizaidimai/blob/master/6.4/adventOfCode2021_1.php
// <shinbet> gives me
// <shinbet> PHP Notice:  Undefined offset: -1 in /home/kentauras/github/pasizaidimai/6.4/adventOfCode2021_1.php on line 13
// * guido (~weechat@host-95-234-249-208.retail.telecomitalia.it) has joined
// <shinbet> code works but how do I get rid of the error
// <shinbet> I understand it must be related to the array not having -1 element
// <shinbet> but if I mask that error somehow then counter ends up wrong
// * otisolsen70 has quit (Quit: Leaving)
// <Albright> shinbet: Try setting $data_length to `count($data) - 1`
// <AllenJB> shinbet: The for loop starts at 0. You could start it at 1 instead. Then the first iteration would check key 1 against key 0 instead of key 0 against key -1
// <Albright> Then do `if ($data[$i] < $data[$i + 1])`
// * guido has quit (Quit: WeeChat 3.4)
// * panella32 has quit (Ping timeout: 240 seconds)
// * panella32_ (~panella32@45.130.83.210) has joined
// * BadAdviceCat (~BadAdvice@user/badadvicecat) has joined
// * varrg has quit (Quit: Leaving)
// * BadAdviceCat has quit (Ping timeout: 256 seconds)
// * panella32_ has quit (Ping timeout: 240 seconds)
// * onichomp666 (~onichomp@2806:264:4408:317:ccfd:9631:9f3e:feee) has joined
// <shinbet> thanks for input, but its still mindbending if I resolve an error, $increaseC results in 1 lesser than it should be
// * onichomp has quit (Ping timeout: 240 seconds)
// <__adrian> shinbet: use 3v4l.org. also, you need to include a sample input. might also help to explain what the goal is, here - it doesn't look like anything that something real code might need to do.
// <shinbet> https://adventofcode.com/2021/day/1
// <shinbet> the code did it and I solved first puzzle I just want it to do without errors now and if I resolve an error it messes the counter
// <__adrian> k, so you have a list of numbers in a file and you need to compare each to the previous number. is that correct?
// <shinbet> yes 
// <__adrian> yeah, it's not "solved" if it errors. it's _broken_ if it errors.  ;)
// <__adrian> $data[$i] > $data[$i-1]  // error is on this line, right?
// <shinbet> yes and i understand its because array does not have -1'st element
// <Albright> So what are you doing that avoids that but causes an incorrect solution?
// <__adrian> no, it's because you're _checking_ for an element  [-1]  when you know (logically) there isn't one.
// <__adrian> think it through
// <__adrian> on the first loop, what is the value of $i ?
// <shinbet> Albright, well if I do what you suggested it is errorless, but then it apparently skipps lastmatching as results 1447 instead of 1448
// <shinbet> __adrian, its 0 during the first as declared in for()
// <__adrian> yes
// <__adrian> and 0 -1 is  -1, and there will never be a  [-1]  and that's why it errors. what is the solution? (just in plain words)
// <__adrian> problem: on the first loop, there's _nothing_ to compare.
// * netfrog (~netfrog@77.119.175.194.wireless.dyn.drei.com) has joined
// <__adrian> solution: _____________________
// <Blondie101010> shinbet:  does it do what you want if you replace line 13 with: if($i === 0 || $data[$i]>$data[$i-1]==true){
// <Blondie101010> could be the reverse
// <shinbet> I was thinking about adding value to array[-1] just to attempt to get rid of error, as the code gave correct answer I just wanted to get rid of the error
// <__adrian> shinbet: no, not "what code could you write."
// <__adrian> just in plain words. there's nothing to compare, so _______________
// <__adrian> forget about code. just talk.
// <__adrian> compare to a real-world problem.  "the bridge is out, so i should ________"
// <netfrog> this is a print_r of the $array how can I now e.g. access QTime and the title? http://paste.debian.net/hidden/0737c27b/
// <__adrian> netfrog: is this from json_decode()? did you _want_ an array, or objects?
// * panella32 (~panella32@45.130.83.210) has joined
// <netfrog> $array = json_decode($row); print_r($array);
// <__adrian> netfrog: look at my example earlier. i suggested  json_decode($json, true);
// <__adrian> did you want an array?
// <__adrian> https://php.net/json_decode ← if you don't pass the second argument, you don't get an array.
// * elastic_dog has quit (Read error: Connection reset by peer)
// <netfrog> ok thank you
// <__adrian> np
// <__adrian> do you understand how to access elements in an array?
// <netfrog> yes but this is a complicated
// <__adrian> it might seem complicated, but it's not
// * elastic_dog (~elastic_d@2a01:118f:822:9c00:f583:aa51:9ad4:d4fb) has joined
// <__adrian> an array that holds another array is no different than an array that holds anything else
// <__adrian> you access them in exactly the same way: by their [keys]
// <netfrog> [key1][key2] or?
// <__adrian> https://php.net/array
// <__adrian> indeed.
// <__adrian> $array_one["two"]["three"] ...
// * elastic_1 (~elastic_d@2a01:118f:822:9c00:f583:aa51:9ad4:d4fb) has joined
// * elastic_dog has quit (Read error: Connection reset by peer)
// * elastic_1 has quit (Read error: Connection reset by peer)
// * elastic_dog (~elastic_d@2a01:118f:822:9c00:f583:aa51:9ad4:d4fb) has joined
// * BadAdviceCat (~BadAdvice@user/badadvicecat) has joined
// * panella32 has quit (Quit: Textual IRC Client: www.textualapp.com)
// <shinbet> __adrian, I'm starting to worry if it could not be a bufferoverflow on puzzle maker side
// <__adrian> ?
// <__adrian> no, it's a fairly simple problem with your code
// <netfrog> i don't get for echo $array['responseHeader']'QTime'] an output
// <netfrog> is this wrong?
// <shinbet> __adrian, I'm not talking about PHP Notice I'm talking about what is the right answer
// <Albright> netfrog: That syntax is incorrect.
// <__adrian> the first thing to do is understand what the problem is, and what the solution is. if you can't explain it in normal words, you won't be able to write code that does it.
// <__adrian> shinbet: so am i. the php error is telling you about a problem with your code's logic.
// <__adrian> situation: you're comparing each number to the previous number. problem: on the first loop, there is no previous number. solution: ______________
// <netfrog> __adrian, ich möchte auf die einzellenen felder der array zugreifen und dann ausgeben.
// <shinbet> __adrian, dude, I get the right answer ONLY with PHP notice being there, thats my point
// <netfrog> I would like to access the individual fields of the array and then output them.
// <__adrian> shinbet: why are you trying to prove me wrong instead of just thinking about the thing i'm saying?
// <__adrian> trust for a moment
// * ThePhilgrim (~ThePhilgr@78-69-18-227-no49.tbcn.telia.com) has joined
// <__adrian> fill in that blank
// <Albright> netfrog: I'm guessing what you want to do is `$array['responseHeader']['QTime'];` . Note that second left square bracket.
// <__adrian> netfrog: ^
// <__adrian> also, you should probably enable error reporting, if you didn't see an error when you ran that code.
// <__adrian> shinbet: we're only one step away from the simplest solution. you just have to be clear about the problem. it becomes obvious.
// <netfrog> ok thanks its works :-) :-) :-)
// * ThePhilgrim has quit (Quit: ThePhilgrim)
// * ThePhilgrim (~ThePhilgr@78-69-18-227-no49.tbcn.telia.com) has joined
// * Atlas has quit (Quit: Textual IRC Client: www.textualapp.com)
// * Rockwood (~Rocky@user/rocky) has joined
// <shinbet> __adrian, I think I give up for today my mind buffer overflows thinking about this array
// <shinbet> gonna have to ask tutor tommorrow hes getting paid for it ;D
// * netfrog has quit (Ping timeout: 240 seconds)
// * ThePhilgrim has quit (Remote host closed the connection)
// * ThePhilgrim (~ThePhilgr@78-69-18-227-no49.tbcn.telia.com) has joined
// * DrowningElysium has quit (Quit: Connection closed for inactivity)
// * BadAdviceCat has quit (Quit: Quitting)
// * ramblebamble (ramblebamb@gateway/vpn/protonvpn/ramblebamble) has joined
// * g0zart (~g0zart@gateway/vpn/pia/g0zart) has joined
// * ramblebamble has quit (Quit: WeeChat 3.4)
// * LucaTM has quit (Quit: Textual IRC Client: www.textualapp.com)
// <__adrian> shinbet: it's not a trick question  ;)
// <__adrian> situation: you're comparing each number to the previous number
// <__adrian> problem: on the first loop, there is no previous number
// <__adrian> solution: on the first loop, _don't compare_.
// <__adrian> the simplest (that is, not "best" but fewest code changes) solution is to check if it's the first iteration of the loop, and just skip the comparison.
// <__adrian> blondie actually gave you this solution a while back.
// <__adrian> if ($i === 0) { it's the first iteration }
// <__adrian> so this doesn't change how you do the comparison (and so doesn't change the answer), but it does remove the error.
// * BadAdviceCat (~BadAdvice@user/badadvicecat) has joined
// <shinbet> __adrian, thanks for pointing that out, and thanks for solution Blondie101010 
// <shinbet> __adrian, I dont yet understand the difference between === and ==
// * ThePhilgrim has quit (Quit: ThePhilgrim)
// <__adrian> === means same value AND same type
// <__adrian> == means only same value
// <__adrian> "5" == 5  // true
// <__adrian> "5" === 5  // false
// * krux02_ (~krux02@p5082262b.dip0.t-ipconnect.de) has joined
// <__adrian> s/means only/only means/
// <BadAdviceCat> Long story short, if you wish to avoid bugs, just only use ===, or !==
// <__adrian> ^
// <__adrian> you should generally use === unless you have a very specific reason that you KNOW == is more appropriate
// <BadAdviceCat> OR, also, don't try to compare different types if you're using ==.  <--- Mixing different types can result in unexpected bugs.
// <shinbet> thanks
// <__adrian> no problem. when you're ready to think more about code, lmk; there are much better ways to write this same code
// <shinbet> __adrian, sure, maybe tommorow. I'll be around anyways, Have to finish this php course in 6months or so, but it's a bit late ATM, so have a good day/night
// <__adrian> you also


/*
$data = file('data/input.log');

$data_length = count($data);

$increaseC=0; 
$data1= array();
$data2= array();

for($i=0;$i<$data_length;$i+=2){

echo $data1[$i];
array_push($data1, $data[$i]);    
}

for($i=1;$i<$data_length;$i+=2){

echo $data2[$i];
array_push($data2, $data[$i]); 
}

$data_half=$data_length/2;

for($i=0;$i<$data_half;$i++){

if($data1[$i]<$data2[$i]){$increaseC++;};

}
echo $data_half;
echo $increaseC."\n";
echo $data_length;*/
