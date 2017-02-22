<?php
namespace Dumper\Dumper;

class Dumper
{
    private $fpath;
    public function __construct((string)$fpath)
    {
      $this->fpath = ($fpath) ? $fpath : '/tmp/dumper.log';
    }

    public function dumper($str,$data=[]){
        $dt = date('Y-m-d G:i:s');
        error_log(print_r("\n[$dt]",true),3,$this->fpath);
        if ( !(string)$str ){
            error_log(" [param0 is not string] []",3,$this->fpath);
            return;
        }
        error_log(" [$str]",3,$this->fpath);
        if ( gettype($data) == 'string' ){
            error_log(" [$data]",3,$this->fpath);
        }
        elseif ( is_array($data) ) {
          error_log(print_r($data,true),3,$this->fpath);
        }
        else{
          error_log(print_r($data,true),3,$this->fpath);
        }
    }


}
