<?php

interface Controlador{
    public function on();
    public function off();
    public function upVolume();
    public function downVolume();
    public function openMenu();
    public function closeMenu();
    public function mute();
    public function unMute();
    public function pause();
    public function play();
}

?>