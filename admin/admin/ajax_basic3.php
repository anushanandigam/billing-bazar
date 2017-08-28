<?php 
include("../config/config.php");
if(isset($_POST['Airtel_Dth_margin']))
{
	 $Airtel_Dth = $_POST['Airtel_Dth'];
	 $Dish_Tv = $_POST['Dish_Tv'];
	 $Reliance_Digital_Tv = $_POST['Reliance_Digital_Tv'];
	 $Sun_Direct = $_POST['Sun_Direct'];
	 $Tata_Sky = $_POST['Tata_Sky'];
	 $Videocon_d2h = $_POST['Videocon_d2h'];
	 
	
	 $Aitel_Dth_margin = $_POST['Airtel_Dth_margin'];
	 $Dish_Tv_margin = $_POST['Dish_Tv_margin'];
	 $Reliance_Digital_Tv_margin = $_POST['Reliance_Digital_Tv_margin'];
	 $Sun_Direct_margin = $_POST['Sun_Direct_margin'];
	 $Tata_Sky_margin = $_POST['Tata_Sky_margin'];
	 $Videocon_d2h_margin = $_POST['Videocon_d2h_margin'];
	 
	 
	$r=array($Aircel,$Aircel_margin,',',$Airtel,$Airtel_margin,',',$BSNL,$BSNL_margin,',',$BSNL_Validity,$BSNL_Validity_margin,',',$Docomo_CDMA,$Docomo_CDMA_margin,',',$Docomo_GSM,$Docomo_GSM_margin,',',$Docomo_GSM_Special,$Docomo_GSM_Special_margin,',',$Idea,$Idea_margin,',',$Loop_Mobile,$Loop_Mobile_margin,',',$MTNL_Mumbai,$MTNL_Mumbai_margin,',',$MTNL_Delhi,$MTNL_Delhi_margin,',',$MTS,$MTS_margin,',',$Reliance_CDMA,$Reliance_CDMA_margin,',',$Reliance_GSM,$Reliance_GSM_margin,',',$Tata_Walky,$Tata_Walky_margin,',',$Uninor,$Uninor_margin,',',$Uninor_Special,$Uninor_Special_margin,',',$Videocon,$Videocon_margin,',',$Videocon_Special,$Videocon_Special_margin,',',$Vodafone,$Vodafone_margin,',',$Jio,$Jio_margin);

	foreach($r as $b)
	{
		if($b==',')
		{
			
			echo " ";
			
			}
		else
		{
print_r(explode(" ",$b));	
		
		}
	}
}	

?>