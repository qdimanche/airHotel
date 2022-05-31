<?php


$id = $_POST['id'];

if(isset($id)){
    deleteHotel($id);
};
function deleteHotel($id){
    $db = new PDO('mysql:host=localhost;dbname=airHotel','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM hotel  WHERE hotel.id = '$id'";
    try{
        $query = $db->prepare($sql);
        $query->execute();
        header('Location: ../view/index.php');
        echo $sql;
    }catch(Exception $e){
        echo 'error:' .$e->getMessage();
    }
}