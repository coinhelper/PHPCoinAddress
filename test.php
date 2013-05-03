<?php
// PHPCoinAddress test - Version 0.1.0

require_once('PHPCoinAddress.php');

CoinAddress::set_debug(false);
CoinAddress::set_reuse_keys(true);

$coin = CoinAddress::bitcoin();         print 'BITCOIN   : ' . $coin['private'] . ' ' . $coin['public'] . "\n";
$coin = CoinAddress::bitcoin_testnet(); print 'BITCOIN-T : ' . $coin['private'] . ' ' . $coin['public'] . "\n";

$coin = CoinAddress::namecoin();        print 'NAMECOIN  : ' . $coin['private'] . ' ' . $coin['public'] . "\n";
$coin = CoinAddress::namecoin_testnet();print 'NAMECOIN-T: ' . $coin['private'] . ' ' . $coin['public'] . "\n";

$coin = CoinAddress::litecoin();        print 'LITECOIN  : ' . $coin['private'] . ' ' . $coin['public'] . "\n";
$coin = CoinAddress::litecoin_testnet();print 'LITECOIN-T: ' . $coin['private'] . ' ' . $coin['public'] . "\n";

$coin = CoinAddress::ppcoin();          print 'PPCOIN    : ' . $coin['private'] . ' ' . $coin['public'] . "\n";
$coin = CoinAddress::ppcoin_testnet();  print 'PPCOIN-T  : ' . $coin['private'] . ' ' . $coin['public'] . "\n";

exit;
