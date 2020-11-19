<?php
include_once 'Dancer.php';
$queue = new SplQueue();
$WomanDancer1=new Dancer("Trinh1","nu");
$WomanDancer2=new Dancer("Trinh2","nu");
$WomanDancer3=new Dancer("Trinh3","nu");
$queue->enqueue($WomanDancer1);
$queue->enqueue($WomanDancer2);
$queue->enqueue($WomanDancer3);

$queue1 = new SplQueue();
$ManDancer1=new Dancer('Khang1','nam');
$ManDancer2=new Dancer('Khang2','nam');
$ManDancer3=new Dancer('Khang3','nam');
$ManDancer4=new Dancer('Khang4','nam');

$queue1->enqueue($ManDancer1);
$queue1->enqueue($ManDancer2);
$queue1->enqueue($ManDancer3);
$queue1->enqueue($ManDancer4);


function getDancer($queue,$queue1){
    if($queue->count()===0 || $queue1->count()===0){
        echo '<pre>';
        echo 'vui long vao hang doi';

    }else{
        echo '<pre>';
        echo $queue->dequeue()->name . ' va ' . $queue1->dequeue()->name;
    }
}

function getSumWaitingPerson($queue,$queue1){
    echo '<pre>';
    return $queue1->count()+$queue->count();
}
getDancer($queue,$queue1);
getDancer($queue,$queue1);
getDancer($queue,$queue1);
getDancer($queue,$queue1);
echo 'so nguoi trong hang doi la '.getSumWaitingPerson($queue, $queue1);

