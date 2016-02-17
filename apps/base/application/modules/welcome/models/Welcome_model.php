<?php

class Welcome_model extends MY_Model {

    public function test($string) {
        return str_replace('!!','$$',$string);
    }
            
}
