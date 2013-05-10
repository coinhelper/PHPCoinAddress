PHPCoinAddress
==============
PHPCoinAddress is a PHP object that creates public/private key pairs for:
Bitcoin, Namecoin, Litecoin, PPCoin and many other cryptocoins.

PHPCoinAddress is intended to be easy to integrate into other PHP projects. 

Version 0.1.9

* Info: https://github.com/zamgo/PHPCoinAddress
* Download ZIP: https://github.com/zamgo/PHPCoinAddress/archive/master.zip
* Git clone: https://github.com/zamgo/PHPCoinAddress.git
* Raw TXT: https://raw.github.com/zamgo/PHPCoinAddress/master/PHPCoinAddress.php
* Bitcointalk thread: https://bitcointalk.org/index.php?topic=200042.0

Example Usage:
==============
<pre>
require_once 'PHPCoinAddress.php';
// CoinAddress::set_debug(true);      // optional - show debugging messages
// CoinAddress::set_reuse_keys(true); // optional - use same key for all addresses
$coin = CoinAddress::bitcoin();  
print 'public (base58): ' . $coin['public'] . "\n";
print 'public (Hex)   : ' . $coin['public_hex'] . "\n";
print 'private (WIF)  : ' . $coin['private'] . "\n";
print 'private (Hex)  : ' . $coin['private_hex'] . "\n"; 
</pre>
* See [test.php](https://github.com/zamgo/PHPCoinAddress/blob/master/test.php) for more extensive tests.

Notes:
==============
* modded from https://gist.github.com/scintill/3549107
* includes Pure PHP Elliptic Curve Cryptography Library from https://github.com/mdanter/phpecc
* Requires GMP or bcmath extension (GMP preferred for better performance)

Prefix List:
=============
<pre>Key:
Pub Dec = Prefix for Public Key, Decimal
Pub Hex = Prefix for Public Key, Hexadecimal
Pub lead = leading character in Public Key
Priv Dec = Prefix for Private Key, Decimal 
Priv Hex = Prefix for Private Key, Hexadecimal
Priv lead = leading character in Private Key (Wallet Import Format)
test = Test results for importing PHPCoinAddress created keys into standard client
src = official source code repository

Note: tests are for uncompressed keys

                    Pub   Pub  Pub   Priv  Priv  Priv
Coin                Dec   Hex  lead   Dec   Hex  lead  test  src
=================  ====  ====  ====  ====  ====  ====  ====  ====
BITCOIN               0  0x00  1      128  0x80  5     OK    https://github.com/bitcoin/bitcoin
BBQCOIN              85  0x05  L      213  0xD5        -     https://github.com/overware/BBQCoin
BITBAR               25  0x19         153  0x99        -     https://github.com/aLQ/bitbar
BYTECOIN             18  0x12         128  0x80        -     https://github.com/bryan-mills/bytecoin
CHNCOIN              28  0x1C         156  0x9C        -     https://github.com/CHNCoin/CHNCoin
DEVCOIN               0  0x00  1      128  0x80  5     -     http://sourceforge.net/projects/galacticmilieu/files/DeVCoin/
FAIRBRIX                    ?                 ?        -     https://github.com/coblee/Fairbrix
FEATHERCOIN          14  0x0E         142  0x8E        -     https://github.com/FeatherCoin/FeatherCoin
FREICOIN              0  0x00  1      128  0x80  5     -     https://github.com/freicoin/freicoin
IXCOIN                      ?                 ?        -     https://github.com/ixcoin/ixcoin
JUNKCOIN             16  0x10  7      144  0x90  5     OK    https://github.com/js2082/JKC
LITECOIN             48  0x30  L      176  0xB0  6     OK    https://github.com/litecoin-project/litecoin
MINCOIN              50  0x32  m      178  0xB2        -     https://github.com/SandyCohen/mincoin
NAMECOIN             52  0x34  M,N    180  0xB4  7     -     https://github.com/namecoin/namecoin
NOVACOIN              8  0x08         136  0x88        -     https://github.com/CryptoManiac/novacoin
ONECOIN             115  0x73  o      243  0xF3        -     https://github.com/cre8r/onecoin
PPCOIN               55  0x37         183  0xB7        OK    https://github.com/ppcoin/ppcoin
ROYALCOIN                   ?                 ?        -     http://sourceforge.net/projects/royalcoin/
SMALLCHANGE          62  0x3E  S      190  0xBE        -     https://github.com/bfroemel/smallchange
TERRACOIN             0  0x00  1      128  0x80  5     -     https://github.com/terracoin/terracoin
YACOIN               77  0x4D         205  0xCD        -     https://github.com/pocopoco/yacoin

                    Pub   Pub   Pub  Priv  Priv  Priv
TESTNET Coin        Dec   Hex  lead   Dec   Hex  lead  test 
=================  ====  ====  ====  ====  ====  ====  ==== 
BITCOIN TESTNET     111  0x6F  m,n    239  0xEF  9     OK
BBQCOIN TESTNET      25  0x19         153  0x99        -
BITBAR TESTNET      115  0x73         243  0xF3        -
FAIRBRIX TESTENET           ?                 ?        -
IXCOIN TESTNET              ?                 ?        -
NAMECOIN TESTNET            ?                 ?        -
ROYALCOIN TESTNET           ?                 ?        -

TESTNET Coins using BITCOIN TESTNET prefixes:
BYTECOIN, CHNCOIN, DEVCOIN, FEATHERCOIN, FREICOIN, JUNKCOIN, LITECOIN
MINCOIN, NOVACOIN, ONECOIN, PPCOIN, TERRACOIN, SMALLCHANGE, YACOIN
</pre>

Roadmap:
==============
* confirm prefix settings for all coin types
* add compressed private key in Hexadecimal
* add coin types: IXcoin, Fairbrix, royalcoin, etc
* improved error checking + return values

MIT License:
==============
Copyright (C) 2013 PHPCoinAddress Developers

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the "Software"),
to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense,
and/or sell copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.

