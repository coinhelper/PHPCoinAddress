<?php
// PHPCoinAddress test - Version 0.1.5

print "\nPHPCoinAddress Test:\n";

require_once('PHPCoinAddress.php');
CoinAddress::set_debug(false);
CoinAddress::set_reuse_keys(false);

print "Math library: " . USE_EXT . "\n";
print "Reuse keys: " . ( CoinAddress::$reuse_keys ? 'true' : 'false' ) . "\n";
print "Debug: " . ( CoinAddress::$debug? 'true' : 'false' ) . "\n";

$coin = CoinAddress::bitcoin();          coin_info('Bitcoin', $coin);
$coin = CoinAddress::bitcoin_testnet();  coin_info('Bitcoin Testnet', $coin);
$coin = CoinAddress::namecoin();         coin_info('Namecoin', $coin);
//$coin = CoinAddress::namecoin_testnet(); coin_info('Namecoin Testnet', $coin);
//$coin = CoinAddress::litecoin();         coin_info('Litecoin', $coin);
//$coin = CoinAddress::litecoin_testnet(); coin_info('Litecoin Testnet', $coin);
//$coin = CoinAddress::ppcoin();           coin_info('PPCoin', $coin);
//$coin = CoinAddress::ppcoin_testnet();   coin_info('PPCoin Testnet', $coin);
//$coin = CoinAddress::devcoin();          coin_info('Devcoin', $coin);
//$coin = CoinAddress::devcoin_testnet();  coin_info('Devcoin Testnet', $coin);
//$coin = CoinAddress::junkcoin();         coin_info('Junkcoin', $coin);
//$coin = CoinAddress::chncoin();          coin_info('CHNcoin', $coin);
//$coin = CoinAddress::generic( $public_prefix='0x42', $private_prefix='0xaa');  coin_info('GENERIC', $coin);

exit;


//////////////////////////////////////////////
function coin_info($name,$coin) {
        print "\n$name\n";
        print 'public: ' . $coin['public'] . "\n";
        print 'public (Hexadecimal): ' . $coin['public_hex'] . "\n";
        print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
        print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";
}

