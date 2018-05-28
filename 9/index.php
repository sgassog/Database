<?php
// 9-2
$sql = "INSERT INTO `member`(`UserName`, `Password`, `LastName`, `FirstName`, `LastNameKana`, `FirstNameKana`, `Birthday`, `Ken`, `Reg_Date`) VALUES (:UserName, :Password, :LastName, :FirstName, :LastNameKana, :FirstNameKana, :Birthday, :Ken, :Reg_Date)";

$this->form->addElement('text','name',['size'=>50],['label'=>'コメント']);
