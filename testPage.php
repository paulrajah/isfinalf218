<?php

	require 'Autoloader.php';


		$database = new Database();

		$database->query('	SELECT  hd2011.INSTNM, hd2011.ADDR, hd2011.CITY, hd2011.STABBR,
								hd2011.ZIP, effy2011.EFYTOTLT
							FROM hd2011 RIGHT JOIN effy2011 ON  hd2011.unitid = effy2011.unitid
							ORDER BY effy2011.EFYTOTLT DESC LIMIT 10'
							 );


		$rows = $database->resultset();		

		print "<table border=2>
				<tr>
					<td>College Name </td>
					<td> Addres </td>
					<td>City</td>
					<td>State</td>
					<td>Zip</td>
					<td>Enrolled Students</td>
				</tr>
				";
		foreach ($rows as $v1) {
    		foreach ($rows as $v2) {
        		echo  "<tr><td>" . $v2['INSTNM'] . "</td>";
        		echo  "<td>" . $v2['ADDR'] . "</td>";
        		echo  "<td>" . $v2['CITY'] . "</td>";
        		echo  "<td>" . $v2['STABBR'] . "</td>";
        		echo  "<td>" . $v2['ZIP'] . "</td>";
        		echo  "<td>" . $v2['EFYTOTLT'] . "</tr>";
	    	}	
		}




?>