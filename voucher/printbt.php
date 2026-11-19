<?php date_default_timezone_set($_SESSION['timezone']); ?>
<script>
function sendToQuickPrinterChrome(){
    var commandsToPrint =
                        "<center><big><?= $hotspotname ?>\n" +
                        //"<line0>\n" +
                        "<center><?= date("d-m-Y h:i:sA") ?>\n" +
                        "<line0>\n" +
                        "<center><bold>Kode Voucher Anda Adalah \n" +
                        <?php if($uname == $upass){
                        echo '"<center><big>'. $uname.'\n" +';
                        }?>
                        "<line0>\n" +
                        "<center>Masa Aktif " +
                        <?php if($utimelimit != ""){
                          echo '"'.$timelimit.'," +';
                        }?>
                        <?php if($udatalimit != ""){
                          echo '"'.$udatalimit.$MG.'" +';
                        }?>
                        <?php if ($getprice != 0) {
                          echo '"<bold> '.$pricebt.',-\n" +';
                        }?>
                        "<line0>\n" +
                        "<center>Untuk Login atau Cek Masa Aktif Kode Voucher Anda, Buka Browser Kemudian Ketik " + "<bold><?= $dnsname ?>\n" +
                        "<cut>";
    var textEncoded = encodeURI(commandsToPrint); window.location.href="intent://"+textEncoded+"#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;";
}
</script>