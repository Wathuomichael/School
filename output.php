<?php 
	$nme = "";
	$nme = $_POST['nme'];

	$mat = "";
	$mat = $_POST['mat'];

	$eng = "";
	$eng = $_POST['eng'];

	$kis = "";
	$kis = $_POST['kis'];

	$phy = "";
	$phy = $_POST['phy'];

	$comp = "";
	$comp = $_POST['comp'];

	$geo = "";
	$geo = $_POST['geo'];

	$bus = "";
	$bus = $_POST['bus'];

	$total = $mat + $eng + $kis + $phy + $comp + $geo + $bus;

	echo "<table border='2px solid black'>
				<tr>
					<th>Name</th>
					<th>Maths</th>
					<th>English</th>
					<th>Kiswahili</th>
					<th>Physics</th>
					<th>Computer</th>
					<th>Geography</th>
					<th>Business</th>
					<th>Total</th>
				</tr>
				<tr>
					<td>$nme</td>
					<td>$mat</td>
					<td>$eng</td>
					<td>$kis</td>
					<td>$phy</td>
					<td>$comp</td>
					<td>$geo</td>
					<td>$bus</td>
					<td>$total</td>
		
				</tr>







	</table>";

	if ($total>600) {
		# code...
		echo "Grade A";
	}
	elseif ($total>500) {
		# code...
		echo "Grade B";
	}
	elseif ($total>400) {
		# code...
		echo "Grade C";
	}
	elseif ($total>300) {
		# code...
		echo "Grade D";
	}
	else {
		echo "Grade E";
	}






 ?>