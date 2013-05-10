<?php
// PHPCoinAddress contrib: bulk wallet creator
// Version 0.0.1

$lib = '../PHPCoinAddress.php';
if( !is_readable($lib) ) { print 'ERROR: missing lib'; exit; }
require_once $lib;

CoinAddress::set_debug(false);
CoinAddress::set_reuse_keys(false);

$coin_type = 'bitcoin';

$number = 25;

for( $x = 1; $x <= $number; $x++ ) {

        $coin = CoinAddress::$coin_type();
        //print "$x," . '"' . $coin['public'] . '","' . $coin['private'] . '"' . "\n";
        print "$x," . '"' . $coin['public_compressed'] . '","' . $coin['private_compressed'] . '"' . "\n";

}

