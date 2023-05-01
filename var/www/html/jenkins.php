<?php

$con=mysqli_connect('localhost','secops','s3cr3t');




$JENKINS_IP="142.93.127.89";

	if($con){
	mysqli_select_db($con,'devsecops_platform_mysql_create');
	}

function callJenkins($application_id,$application_name,$servicesarr)
{
    $services = array();

    $services=explode(",",$servicesarr);

    
    
    $DAST_Fields="";
    $SAST_Fields="";
    $INFRA_Fields="";



    /*

    sast,sca,secret scan,container image scan,securing platform/host,dast

    'SAST', 'SCA', 'SECRET_SCAN', 'IMAGE_SCAN', 'INFRA_SCAN', 'DAST'

    */

    $servicesarr=str_replace("secret scan","secret",$servicesarr);
    $servicesarr=str_replace("container image scan","image",$servicesarr);
    $servicesarr=str_replace("securing platform/host","infra",$servicesarr);


    $SERVICE_List=strtoupper($servicesarr);

   



    $result=mysqli_query($GLOBALS["con"],"SELECT * from parameter where app_id=".$application_id);


    $row = $result->fetch_assoc();

    //print_r($row);


    if(in_array("dast",$services))
    {
       $DAST_Fields= "&APP_URL=".$row["dast_auth_url"]."&DAST_USERNAME=".$row["dast_username"]."&DAST_PASSWORD=".$row["dast_password"]."&DAST_USERNAME_FIELD=".$row["dast_username_field"]."&DAST_PASSWORD_FIELD=".$row["dast_password_field"]."&DAST_AUTH_EXCLUDE_URLS=".$row["dast_auth_exclude_urls"];
    }

    if(in_array("sast",$services) || in_array("sca",$services) || in_array("secret scan",$services) || in_array("container image scan",$services) || in_array("securing platform/host",$services) )  
    {
        $SAST_Fields="&SCM_URL=".$row["scm_url"]."&BRANCH=".$row["branch"]."&TECHNOLOGY=".$row["technology"]."&VERSION=".$row["version"];
    }

    if(in_array("infra",$services))
    {
        $INFRA_Fields="&IP_ADDRESS=".$row["ip_address"];
    }


    $ch = curl_init();


    




    
    $JENKINS_IP=$GLOBALS['JENKINS_IP'];
    curl_setopt($ch, CURLOPT_URL, 'http://'.$JENKINS_IP.':8080/job/secops-pipeline-custom/buildWithParameters');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $postData="DEVSECOPS_SERVICE_LIST=".$SERVICE_List."&APPLICATION_NAME=".$application_name.$DAST_Fields.$SAST_Fields.$INFRA_Fields;
    
    //$postData="DEVSECOPS_SERVICE_LIST=DAST&APPLICATION_NAME=".$application_name."&DAST_AUTH_URL=http://demo.testfire.net/logout.jsp&DAST_USERNAME=admin&DAST_PASSWORD=pass&DAST_USERNAME_FIELD=uname&DAST_PASSWORD_FIELD=pass&DAST_AUTH_EXCLUDE_URLS=https://abc.com";
    
    
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    //curl_setopt($ch, CURLOPT_USERPWD, 'evmcoe' . ':' . '11f76718d503d693b15a1713bde29a5373');

    $headers = array();
    $headers = array('Content-Type: application/x-www-form-urlencoded','Authorization: Basic ZWNjdXNlcjoxMTcyNmMwOTI5ZTRkZmI2NzFmMzNjOGJlNWRlZmY4Njhi');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    echo $result;
   
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        
        return false;
    }
    else{
        mysqli_query($GLOBALS["con"],"INSERT into jenkins_app_service values('',".$application_id.",'running')");
        return true;
    }

    $fp=fopen("requestlog.txt","w+");

    fwrite($fp,var_dump($result));
    curl_close($ch);

}

?>