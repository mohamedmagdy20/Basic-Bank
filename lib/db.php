<?php
$connection = mysqli_connect("localhost","root","","bacisbank");
function show(){
    $sql = "SELECT * FROM `customers`";
    $query = mysqli_query($GLOBALS['connection'],$sql);
    while($row = mysqli_fetch_assoc($query)){
        $data[]= $row;
    }
    return (!empty($data))?$data:[];
}
function getonecustomerbyid($id){
    $sql ="SELECT * FROM `customers` WHERE `id`= $id";
    $query =mysqli_query($GLOBALS["connection"],$sql);
    $row =mysqli_fetch_assoc($query);
    return $row;
}
function transfer_to($money,$to){
    $sql = "UPDATE `customers` SET `balance`= `balance`+$money WHERE `num_balance` = $to";
    mysqli_query($GLOBALS['connection'],$sql);
    return mysqli_affected_rows($GLOBALS["connection"]);    

}
function transfer_from($money,$from){
    $sql = "UPDATE `customers` SET `balance`= `balance`-$money WHERE `num_balance` = $from";
    mysqli_query($GLOBALS['connection'],$sql);
    return mysqli_affected_rows($GLOBALS["connection"]);    

}
function transfer_list($date,$sender_name,$resever_name,$sender_num,$resever_num,$amount){
    $sql = "INSERT INTO `list`(`date`,`sender_name`, `resiver_name`, `sender_num`, `resever_num`, `amount`) VALUES('$date','$sender_name','$resever_name','$sender_num','$resever_num','$amount')"; 
    mysqli_query($GLOBALS['connection'],$sql);
    return mysqli_affected_rows($GLOBALS["connection"]);
}
function showtransferlist(){
    $sql = "SELECT * FROM `list`";
    $query = mysqli_query($GLOBALS['connection'],$sql);
    while($row = mysqli_fetch_assoc($query)){
        $data[]= $row;
    }
    return (!empty($data))?$data:[];  
}
function search($key){
    $pattern = "%$key%";
    $sql = "SELECT * FROM `customers` WHERE `name` LIKE '$pattern'";
    $query =mysqli_query($GLOBALS["connection"],$sql);
    while($row = mysqli_fetch_assoc($query)){
        $data[]= $row;
    }
    return (!empty($data))?$data:[];

}
?>
