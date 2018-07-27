<?php

  require("inc_header.php");

  $GELEN = $_GET["sayfa"];
  $DOSYA = "inc_anasayfa.php";
  if( $GELEN == "k") $DOSYA="inc_harfler_k.php";
  if( $GELEN == "e") $DOSYA="inc_harfler_e.php";
  if( $GELEN == "u") $DOSYA="inc_harfler_u.php";
  require($DOSYA);

/*
  $SECIM = "";
  if( $_GET["sayfa"] == "k") $SECIM="k";
  if( $_GET["sayfa"] == "e") $SECIM="e";
  if( $_GET["sayfa"] == "u") $SECIM="u";

  if( $SECIM == "" ) {
    require("inc_anasayfa.php");
  } else {
    require("inc_harfler_$SECIM.php");
  }
*/

  require("inc_footer.php");

?>
