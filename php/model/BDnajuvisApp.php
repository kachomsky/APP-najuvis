<?php
class BDnajuvisApp extends mysqli
{
	function __construct()
	{
		parent::__construct(
			"localhost",
			"root",
			"",
			"najuvisapp"
		);
	}
}
?>
