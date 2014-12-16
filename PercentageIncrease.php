<?php

	require 'Autoloader.php';


		$database = new Database();

		$database->query('	SELECT hd2011.INSTNM, SUM((effy2010.EFYTOTLT / effy2011.EFYTOTLT) * 100) AS "Increase"
									FROM hd2011
									JOIN effy2010 ON hd2011.UNITID = effy2010.UNITID 
									JOIN effy2011 ON hd2011.UNITID = effy2011.UNITID 
									ORDER BY  hd2011.INSTNM DESC LIMIT 10
							'
							 );




		$rows = $database->resultset();		

		print "<table border=2>
				<tr>
					<td>College Name </td>
				</tr>
		 		";
		foreach ($rows as $v1) {
     		foreach ($rows as $v2) {
				echo  "<tr><td>" . $v2['INSTNM'] . "</td>";
	
		}	
}


		print "<pre>";
		//print_r($rows);
		print "</pre>";


?>