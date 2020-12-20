<!DOCTYPE html>
<html>
		<head>
  			<title>Belajar Array PHP</title>
		</head>
<body>
<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td>Kota</td>
			<td>Orang</td>
		</tr>
<?php
		$siswa = 
			[	'Jakarta'=> ['orang1'=>'Ana','orang2'=>'Anton','orang3'=>'Anti'],
				'Bandung'=> ['orang1'=>'Iye','orang2'=>'Tri','orang3'=>'Widi'  ],
			];
 	
 	 

 	foreach($siswa as $kota => $data)
		{
			echo "<tr>";
				echo "<td>".$kota."</td>";


				
				echo "<td>";

					foreach($data as $key => $orang)
						{	

							echo $orang;
	

							if($orang !== end($data))

								{
									echo ", ";
								}

						 		
							 		
						}




						

				echo"</td>";


			echo "</tr>";


	 	}


?>


</table>



</body>

</html>