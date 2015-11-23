<?php
//추가,수정,삭제에 대비해 DB로 만들어야함
$subMenuArr = array(
    array("HOME", "소개"),
    array("HERBAL TEA", "라벤더","루이보스","페퍼민트","캐모마일","로즈마리","쟈스민","그 외"),//HERBAL TEA: H
    array("BLACK TEA", "인도","실론[스리랑카]","중국","블랜드 티"),//BLACK TEA: B
    array("COFFEE", "아라비카","로부스타","리베리카","그 외"),//COFFEE: C
    array("OTHERS", "녹차","꽃","뿌리","그 외"),//OTHERS: O
    array("ETC", "티포트","찻잔","커피기계","그 외 용품"),//ETC.: E
    array("Q&A","배송안내","상품문의")//Q&A
);
$actionIndex = floor($action/100);

?>
<table width="680px" align="center" style="margin-left:100px">

    <tr>
    <?php

        for ( $cnt = 1 ; $cnt < count($subMenuArr[$actionIndex]) ; $cnt++ ) {
            $width = intval(count($subMenuArr[$actionIndex]) / 100);
            $actionCode = ($actionIndex*100) + ($cnt*10);
            echo "<td width='{$width}%'>";
            echo "<a href='../controller/mainCTL.php?action={$actionCode}'>{$subMenuArr[$actionIndex][$cnt]}";
            echo "</a><td>";
        }

    ?>
    </tr>



</table>
