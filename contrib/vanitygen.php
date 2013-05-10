<?php
// PHPCoinAddress contrib: a very simple (and very slow) vanity address generator
// Version 0.0.1

$lib = '../PHPCoinAddress.php';
if( !is_readable($lib) ) { print 'ERROR: missing lib'; exit; }
require_once $lib;

CoinAddress::set_debug(false);
CoinAddress::set_reuse_keys(false);

$coin_type = 'bitcoin';

$pattern = '/^1CA/';

$stop = false;
$count = 0;
$max_attempts = 1000;

print "PHPCoinAddress Vanity Address Generator\n";
print "Coin type: $coin_type\n";
print "Pattern: $pattern\n";
print "Max attempts: $max_attempts\n";

while( $stop !== true ) {
        ++$count;

        if( ($count % 100) == 0 ) {  print " $count "; }

        $try = CoinAddress::$coin_type();

        if( preg_match( $pattern, $try['public'] ) ) {
                print "\nAddress: " . $try['public'] . "\n";
                print "Private key: " . $try['private'] . "\n";
        }

        if( $count > $max_attempts ) { $stop = true; }
}

print "\nEND";


