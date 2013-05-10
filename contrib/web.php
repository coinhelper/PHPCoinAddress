<?php
// PHPCoinAddress contrib:  simple web interface
// Version 0.0.1

$lib = '../PHPCoinAddress.php';
if( !is_readable($lib) ) { print 'ERROR: missing lib'; exit; }
require_once $lib;

web_header();

$debug = @$_GET['debug'];
if( $debug ) { CoinAddress::set_debug(true); }

$reuse_keys = @$_GET['reuse_keys'];
if( $reuse_keys ) { CoinAddress::set_reuse_keys(true); }
$coins = @$_GET['coin'];

if( !$coins ) {
        web_form();
} else {
        web_results();
}

web_footer();


///////////////////////////////////////////////////////////////////
function web_form() {
        print '
<form action="web.php" method="GET"><pre>

<input type="submit" value="Create Public/Private Keys" />

<input type="checkbox" name="coin[]" value="bitcoin" /> Bitcoin
<input type="checkbox" name="coin[]" value="bitcoin_testnet" /> Bitcoin Testnet
<input type="checkbox" name="coin[]" value="litecoin" /> Litecoin
<input type="checkbox" name="coin[]" value="namecoin" /> Namecoin
<input type="checkbox" name="coin[]" value="ppcoin" /> PPCoin

<input type="checkbox" name="coin[]" value="bbqcoin" /> BBQcoin
<input type="checkbox" name="coin[]" value="bitbar" /> Bitbar
<input type="checkbox" name="coin[]" value="bytecoin" /> Bytecoin
<input type="checkbox" name="coin[]" value="chncoin" /> CHNCoin
<input type="checkbox" name="coin[]" value="devcoin" /> Devcoin
<input type="checkbox" name="coin[]" value="feathercoin" /> Feathercoin
<input type="checkbox" name="coin[]" value="freicoin" /> Freicoin
<input type="checkbox" name="coin[]" value="junkcoin" /> Junkcoin
<input type="checkbox" name="coin[]" value="mincoin" /> Mincoin
<input type="checkbox" name="coin[]" value="novacoin" /> Novacoin
<input type="checkbox" name="coin[]" value="onecoin" /> Onecoin
<input type="checkbox" name="coin[]" value="smallchange" /> Smallchange
<input type="checkbox" name="coin[]" value="terracoin" /> Terracoin
<input type="checkbox" name="coin[]" value="yacoin" /> Yacoin

  <input type="checkbox" name="reuse_keys" value="1" checked="checked" /> Re-use keys
  <input type="checkbox" name="debug" value="1" /> Debug

<input type="submit" value="Create Public/Private Keys" />

</pre></form>
';
}

///////////////////////////////////////////////////////////////////
function web_results() {

        global $coins;

        if (!$coins || !is_array($coins) ) { print "ERROR: no coin set"; exit; }

        print "<pre>RESULTS:\n";
        print "Re-use keys: " . ( CoinAddress::$reuse_keys ? 'true' : 'false' ) . "\n";
        print "Debug: " . ( CoinAddress::$debug ? 'true' : 'false' ) . "\n";
        print "Math lib: " . USE_EXT . "\n";

        while( list(,$coin) = each($coins) ) {
                print "\n$coin:\n";
                if( !method_exists('CoinAddress', $coin) ) {
                        print "ERROR: no PHPCoinAddress method found\n";
                        continue;
                }
                $keys = CoinAddress::$coin();
                print "Public (base58): " . $keys['public'] . "\n";
                print "Public (Hex)   : " . $keys['public_hex'] . "\n";
                print "Private (WIF)  : " . $keys['private'] . "\n";
                print "Private (Hex)  : " . $keys['private_hex'] . "\n";
        }
        print '</pre>';
}


///////////////////////////////////////////////////////////////////
function web_header() {
        print '<html><head><title>PHPCoinAddress</title></head><body>';
        print '<a href="web.php">PHPCoinAddress</a>:<hr />';
}

function web_footer() {
        print '<br /><hr /><a href="web.php">PHPCoinAddress</a>';
        print '</body></html>';
}

