<?php 
$line= $members[0]['Member'];

$this->CSV->addRow(array_keys($line));
 foreach ($members as $key=>$member)
 {
      $line =$members[$key]['Member'];
	 
       $this->CSV->addRow($line);
 }

 $filename='Members';
 echo  $this->CSV->render($filename);
?>