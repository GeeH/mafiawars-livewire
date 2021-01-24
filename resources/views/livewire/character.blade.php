<?php /** @var \App\Character $character */ ?>
<div>
    <div class="text-2xl">{{$character->name}}</div>
    <div class="text-1xl">Level {{$character->level }}</div>
    <div class="text-1xl">Energy: {{$character->energy}}</div>
    <div class="text-1xl">XP: {{$character->xp}}</div>
    <div class="text-1xl">Money: {{$character->money}}</div>
</div>
