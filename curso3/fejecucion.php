<?php
$father_pid = getmypid();
$pid = pcntl_fork();
if ($pid == -1)
{
                die('could not fork');
}
else if ($pid)
{
                print "I'm the Father mi PID is ".$father_pid." and my children is ".$pid."\n";
                pcntl_wait($status); //Protect against Zombie children
}
else
{
                print "I'm the Children, my PID is ".getmypid()." and the PID of my Father is ".$father_pid."\n";
}