<?php
  class Utility {
    function current_time() {
      global $rysum;
      $time = time();
      $oh = $rysum->member['time_offset'];
      if($rysum->member['dst_in_use']) {
        $oh -= 1;
      }
      $nt = $time - ($oh * 60 * 60);
      return Date($rysum->vars['clock_long'], $nt);
    }
  }
  $util = new Utility;
?>
