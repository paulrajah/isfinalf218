<?php

	require 'Autoloader.php';


		$database = new Database();

		$database->query('	SELECT hd2011.INSTNM, F1011.F1A18, effy2011.EFYTOTLT
							FROM hd2011 
								JOIN F1011 ON hd2011.UNITID = F1011.UNITID 
								JOIN effy2011 ON effy2011.UNITID = F1011.UNITID 
							ORDER BY F1011.F1A18, effy2011.EFYTOTLT DESC LIMIT 10
							'
							 );




		$rows = $database->resultset();		

		print "<table border=2>
				<tr>
					<td>College Name </td>
					<td>Student </td>
					<td>Assests </td>
				</tr>
		 		";
		foreach ($rows as $v1) {
     		foreach ($rows as $v2) {
				echo  "<tr><td>" . $v2['INSTNM'] . "</td>";
				echo  "<td>" . $v2['F1A18'] . "</td>";
				echo  "<td>" . $v2['EFYTOTLT'] . "</td></tr>";
	
		}	
}


		print "<pre>";
		//print_r($rows);
		print "</pre>";


?>