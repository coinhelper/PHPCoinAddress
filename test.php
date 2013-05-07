<?php
// PHPCoinAddress test - Version 0.1.2

print "PHPCoinAddress Test:\n";

require_once('PHPCoinAddress.php');

CoinAddress::set_debug(false);
CoinAddress::set_reuse_keys(true);

print "CoinAddress::reuse_keys: " . CoinAddress::$reuse_keys . "\n";

$coin = CoinAddress::bitcoin();  
print "\nBITCOIN: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

$coin = CoinAddress::bitcoin_testnet(); 
print "\nBITCOIN TESTNET: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

$coin = CoinAddress::namecoin(); 
print "\nNAMECOIN: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

$coin = CoinAddress::namecoin_testnet(); 
print "\nNAMECOIN TESTNET: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

/*
$coin = CoinAddress::litecoin();
print "\nLitecoin: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

$coin = CoinAddress::ppcoin(); 
print "\nPPcoin: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

$coin = CoinAddress::devcoin();
print "\nDevcoin: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

$public_prefix = '0x42'; $private_prefix = '0xAB';
$coin = CoinAddress::generic( $public_prefix, $private_prefix);
print "\nGENERIC: prefix: pub:$public_prefix priv:$private_prefix (uncompressed) ";
print 'public: ' . $coin['public'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n";

*/
exit;
