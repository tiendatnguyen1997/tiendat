<?php
class Db
{
	var $ketnoi;
	public function __construct()
	{
		$this->ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
		$this->ketnoi->set_charset("utf8");
	}
	 
	function query($qr)
	{
		$result = mysqli_query($this->ketnoi, $qr);
		$arr = array();
		while($row = mysqli_fetch_array($result))
		{
			$arr[] = $row;
		}

		return $arr;
	}

	function getCvMoiNhat()
	{
	//	$data = $this->query("select ")

	}
		
}