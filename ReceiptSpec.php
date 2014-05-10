<?php 
require_once('Receipt.php');
class ReceiptSpec extends PHPUnit_Framework_TestCase{
	
	function checkData(){
			$receipt = new Receipt();
			$this->assertEquals("I", $receipt->printReceipt());
	}
		
}
?>
