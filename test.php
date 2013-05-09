<?php
// PHPCoinAddress test - Version 0.1.8

print "\nPHPCoinAddress Test:\n";

require_once('PHPCoinAddress.php');
CoinAddress::set_debug(false);
CoinAddress::set_reuse_keys(true);

print "Math library: " . USE_EXT . "\n";
print "Reuse keys: " . ( CoinAddress::$reuse_keys ? 'true' : 'false' ) . "\n";
print "Debug: " . ( CoinAddress::$debug? 'true' : 'false' ) . "\n";

$coin = CoinAddress::bitcoin();          coin_info('Bitcoin', $coin);
$coin = CoinAddress::bytecoin();         coin_info('Bytecoin', $coin);
$coin = CoinAddress::chncoin();          coin_info('CHNcoin', $coin);
$coin = CoinAddress::devcoin();          coin_info('Devcoin', $coin);
$coin = CoinAddress::feathercoin();      coin_info('Feathercoin', $coin);
$coin = CoinAddress::freicoin();         coin_info('Freicoin', $coin);
$coin = CoinAddress::junkcoin();         coin_info('Junkcoin', $coin);
$coin = CoinAddress::litecoin();         coin_info('Litecoin', $coin);
$coin = CoinAddress::namecoin();         coin_info('Namecoin', $coin);
$coin = CoinAddress::novacoin();         coin_info('Novacoin', $coin);
$coin = CoinAddress::ppcoin();           coin_info('PPCoin', $coin);
$coin = CoinAddress::yacoin();           coin_info('Yacoin', $coin);


$coin = CoinAddress::bitcoin_testnet();     coin_info('Bitcoin Testnet', $coin);
//$coin = CoinAddress::bytecoin_testnet();    coin_info('Bytecoin Testnet', $coin);
//$coin = CoinAddress::chncoin_testnet();     coin_info('CHNcoin Testnet', $coin);
//$coin = CoinAddress::devcoin_testnet();     coin_info('Devcoin Testnet', $coin);
//$coin = CoinAddress::feathercoin_testnet(); coin_info('Feathercoin Testnet', $coin);
//$coin = CoinAddress::freicoin_testnet();    coin_info('Freicoin Testnet', $coin);
//$coin = CoinAddress::junkcoin_testnet();    coin_info('Junkcoin Testnet', $coin);
//$coin = CoinAddress::litecoin_testnet();    coin_info('Litecoin Testnet', $coin);
//$coin = CoinAddress::namecoin_testnet();    coin_info('Namecoin Testnet', $coin);
//$coin = CoinAddress::novacoin_testnet();    coin_info('Novacoin Testnet', $coin);
//$coin = CoinAddress::ppcoin_testnet();      coin_info('PPCoin Testnet', $coin);
//$coin = CoinAddress::yacoin_testnet();      coin_info('Yacoin Testnet', $coin);


$public_prefix  = '0x' . dechex( mt_rand(0,255) );
$private_prefix = '0x' . dechex( mt_rand(0,255) );
$coin = CoinAddress::generic( $public_prefix, $private_prefix);  
coin_info("[Generic: public_prefix: $public_prefix  private_prefix: $private_prefix]", $coin);

exit;


//////////////////////////////////////////////
function coin_info($name,$coin) {
    print "\n$name:\n";
    print 'public (base58): ' . $coin['public'] . "\n";
    print 'public (Hex)   : ' . $coin['public_hex'] . "\n";
    print 'private (WIF)  : ' . $coin['private'] . "\n";
    print 'private (Hex)  : ' . $coin['private_hex'] . "\n";
}

