<?php

abstract function bank{
  abstract function id_prof();
}

class sbi extends bank{
  function test()
  {
    echo "Test Function";
  }
}

?>
