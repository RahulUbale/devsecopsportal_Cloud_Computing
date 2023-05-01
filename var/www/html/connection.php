<html>


<?php 
error_reporting(0);
mysqli_report(MYSQLI_REPORT_ERROR| MYSQLI_REPORT_STRICT);

try{
	$con=mysqli_connect('localhost','secops','s3cr3t');
	
	if($con){
		//echo "<center><h4>Connected</h4></center>";
	mysqli_select_db($con,'devsecops_platform_mysql_create');
	}
	
else {echo"<center><h4>NOT Connected</h4></center>";}
$error='';	


//to add profile

if(isset($_POST['submit_profile'])){
	$add_profile=$_POST['add_profile'];
	$add_tags=implode(',', $_POST['services']);
	$query=mysqli_query($con,"INSERT INTO profile(id,name,tag) VALUES (NULL,'$add_profile','$add_tags')");
	$error="Profile added successfully";
}
else{
	echo "";
}

//to add application along with profile and fields

if(isset($_POST['submit_application'])){

	
	$add_application=$_POST['add_application'];
	$profile_id=$_POST['profileid'];
	//die($profile_id);
	$query=mysqli_query($con,"INSERT INTO application(id,app_name,profile_id) VALUES (NULL,'$add_application','$profile_id')");
	$error="Application added successfully";

	$application_id=mysqli_insert_id($con);

	$dast_auth_url=isset($_POST["dast_auth_url"])?$_POST["dast_auth_url"]:"";
	$dast_username=isset($_POST["dast_username"])?$_POST["dast_username"]:"";
	$dast_password=isset($_POST["dast_password"])?$_POST["dast_password"]:"";
	$dast_username_field=isset($_POST["dast_username_field"])?$_POST["dast_username_field"]:"";
	$dast_password_field=isset($_POST["dast_password_field"])?$_POST["dast_password_field"]:"";
	$dast_auth_exclude_urls=isset($_POST["dast_auth_exclude_urls"])?$_POST["dast_auth_exclude_urls"]:"";


	$scm_url=isset($_POST["scm_url"])?$_POST["scm_url"]:"";
	$branch=isset($_POST["branch"])?$_POST["branch"]:"";
	$technology=isset($_POST["technology"])?$_POST["technology"]:"";
	$version=isset($_POST["version"])?$_POST["version"]:"";

	$ip_address=isset($_POST["ip_address"])?$_POST["ip_address"]:"";

	$query=mysqli_query($con,"INSERT INTO parameter(id,app_id,dast_auth_url,dast_username,dast_password,dast_username_field,dast_password_field,dast_auth_exclude_urls,scm_url,branch,technology,version,ip_address) VALUES (NULL,'$application_id','$dast_auth_url','$dast_username','$dast_password','$dast_username_field','$dast_password_field','$dast_auth_exclude_urls','$scm_url','$branch','$technology','$version','$ip_address')");


}
else{
	echo "";
}

//to delete profile




}
catch(mysqli_sql_exception $ex){
	echo $ex;
	echo "<center><h4>DB NOT Connected</h4></center>";
}

?>
</html>
