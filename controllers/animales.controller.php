<?php
    class AnimalesController{
        static public function ctrObtenerAnimales(){
            return AnimalesMoldel::mdlObtenerAnimales();
        }
    }