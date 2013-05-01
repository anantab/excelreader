<?php
require_once 'excelreader/reader.php';
$reader=new Spreadsheet_Excel_Reader();//
$reader->setUTFEncoder('mb');
//$reader->setUTFEncoder('iconv');
$reader->setOutputEncoding('UTF-8');
//$reader->setOutputEncoding('iso-8859-1');


$reader->read("sample.xls");
		
		 foreach($reader->sheets[0]['cells'] as $row)
                 {
                     echo "<pre>";
                         print_r($row);
                     echo "</pre>";
                     
                 }
	
}?>