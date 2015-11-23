<?php
function productCTL($action){

    $pCategoryArr = array(
        array('H1','H2','H3','H4','H5','H6','H7'), //100
        array('B1','B2','B3','B4'), //200
        array('C1','C2','C3','C4'), //300
        array('O1','O2','O3','O4'), //400
        array('E1','E2','E3','E4') //500
    );
    $actionIndex = floor($action/100) - 1;
    $actionIndex2 = floor($action/10)%10 -1;
}
?>