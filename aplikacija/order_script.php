<?php
include('connection.php');
include('session.php');
$date = date('Y-m-d H:i:s');//DATUM UPISA
//------------------------------------------------------------------------------------------------
//--------------------------------- 	FUNCTION FOR DATABASE INPUT 	--------------------------
//------------------------------------------------------------------------------------------------
	function dbinput($city, $contact, $adress, $priority, $box_size, $name, $lname, $del_adress, $pob, $price,$date,$username, $dbc){
		$sql = " INSERT INTO orders(city, contact, adress, priority, box_size, name, lname, del_adress, pob, price,date,username)
				VALUES ('$city','$contact','$adress','$priority','$box_size','$name','$lname','$del_adress','$pob', '$price','$date','$username')";
		$result=mysqli_query($dbc,$sql);
		echo "Cijena usluge iznosi $price HRK.\n";
		echo "<a href='slanje_paketa.php'>Povratak na stranicu</a>;";
	}		

	//-------------------------------------------------------------------------------------------
	//-------------------	CHECKING ALL CONDITIONS BEFORE ENTERING INPUT FUNCTION --------------
	//-------------------	ALL FIELDS ARE REQUIRED TO BE FILLED 2x IF ISSET	   --------------
	//-------------------------------------------------------------------------------------------
	if(isset($_POST['city']) && !empty($_POST['city']) && isset($_POST['contact']) && !empty($_POST['contact']) && isset($_POST['adress']) && !empty($_POST['adress']) && isset($_POST['priority']) && !empty($_POST['priority']) && isset($_POST['box_size']) && !empty($_POST['box_size'])){
		if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['lname']) && !empty($_POST['lname']) && isset($_POST['del_adress']) && !empty($_POST['del_adress']) && isset($_POST['pob']) && !empty($_POST['pob'])){
			if($_POST['priority'] == 'Da' && $_POST['box_size'] == 'sm'){
				
				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '150',$date,$login_session,$dbc);
			}
			elseif($_POST['priority'] == 'Da' && $_POST['box_size'] == 'md'){

				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '175',$date,$login_session,$dbc);
			}
			elseif($_POST['priority'] == 'Da' && $_POST['box_size'] == 'lg'){

				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '250',$date,$login_session,$dbc);
			}
			elseif($_POST['priority'] == 'Da' && $_POST['box_size'] == 'xl'){
;
				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '300',$date,$login_session,$dbc);
			}
			
			//---------------------------------------------------------------------------------------
			//----------------------------- CHANGING $_POST['priority'] TO NO -----------------------
			//---------------------------------------------------------------------------------------
			
			if($_POST['priority'] == 'Ne' && $_POST['box_size'] == 'sm'){

				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '50',$date,$login_session,$dbc);
			}
			elseif($_POST['priority'] == 'Ne' && $_POST['box_size'] == 'md'){

				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '75',$date,$login_session,$dbc);
			}
			elseif($_POST['priority'] == 'Ne' && $_POST['box_size'] == 'lg'){

				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '100',$date,$login_session,$dbc);
			}
			elseif($_POST['priority'] == 'Ne' && $_POST['box_size'] == 'xl'){

				dbinput($_POST['city'],$_POST['contact'],$_POST['adress'],$_POST['priority'],$_POST['box_size'],
						$_POST['name'],$_POST['lname'],$_POST['del_adress'],$_POST['pob'],$_POST['price'] = '150',$date,$login_session,$dbc);
			}
		}
		
		//-----------------------------------------------------------------------------------------
		//------------------------- MISSING RECIEVER INPUT IN FORM --------------------------------
		//-----------------------------------------------------------------------------------------
		
		else{ echo "Niste unijeli sve podatke o primatelju";}
	}
	
	//-----------------------------------------------------------------------------------------
	//------------------------- MISSING SENDER INPUT IN FORM ----------------------------------
	//-----------------------------------------------------------------------------------------
	
		else{echo "Niste unijeli sve podatke o pošiljatelju";}

	
	
//------------------------------------------------------------	
// 2 * OPTION FIELDS WITH 2 CHOICES => 8 if/else if conditions
//------------------------------------------------------------	
?>