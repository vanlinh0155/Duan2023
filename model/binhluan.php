<?php
function insert_binhluan($noidung , $iduser, $idpro , $ngaybinhluan){
    $sql=" INSERT INTO binhluan(noidung , iduser, idpro , ngaybinhluan) VALUES ('$noidung','$iduser', '$idpro', '$ngaybinhluan' )";  
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql= "SELECT * FROM binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."' ";
    $sql.= " order by id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
?>
