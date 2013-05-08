PHPCoinAddress
==============

PHPCoinAddress is a PHP object that creates public/private address key pairs for Bitcoin, Namecoin, Litecoin and other cyrptocoins.

Version 0.1.7

* Info: https://github.com/zamgo/PHPCoinAddress
* Download ZIP: https://github.com/zamgo/PHPCoinAddress/archive/master.zip
* Git clone: https://github.com/zamgo/PHPCoinAddress.git


Usage:
==============
<pre>
require_once 'PHPCoinAddress.php'; 
// CoinAddress::set_debug(true);      // optional - show debugging messages 
// CoinAddress::set_reuse_keys(true); // optional - use same key for all addresses 
$coin = CoinAddress::bitcoin();  
print "\nBITCOIN: (uncompressed)\n";
print 'public: ' . $coin['public'] . "\n";
print 'public (Hexadecimal): ' . $coin['public_hex'] . "\n";
print 'private (Wallet Import Format): ' . $coin['private'] . "\n";
print 'private (Hexadecimal): ' . $coin['private_hex'] . "\n"; 
</pre>

Notes:
==============
* modded from https://gist.github.com/scintill/3549107
* includes Pure PHP Elliptic Curve Cryptography Library from https://github.com/mdanter/phpecc
* Requires GMP or bcmath extension (GMP preferred for better performance)

Prefixes:
=============
<pre>
Coin Pub/Pri        Int    Hex     lead  
==================  ===    ====    ====
BITCOIN PUB           0    0x00    1  
BITCOIN PRI         128    0x80    5
BITCOIN TEST PUB    111    0x6F    m,n
BITCOIN TEST PRI    239    0xEF    9          
NAMECOIN PUB         52    0x34    M,N
NAMECOIN PRI        180    0xB4    7
NAMECOIN TEST         ?
LITECOIN PUB         48    0x30    L
LITECOIN PRI        176    0xB0    6
LITECOIN TEST       *BT
PPCOIN PUB           55    0x37
PPCOIN PRI          183    0xB7
PPCOIN TEST         *BT
DEVCOIN              *B
DEVCOIN TEST        *BT
FEATHERCOIN PUB      14    0x0E
FEATHERCOIN PRI     142    0x8E
FEATHERCOIN TEST    *BT
JUNKCOIN PUB         16    0x10    7
JUNKCOIN PRI        144    0x90    5
JUNKCOIN TEST       *BT
CHNCOIN PUB          28    0x1C
CHNCOIN PRI         156    0x9C
CHNCOIN TEST        *BT
BYTECOIN PUB         18    0x12 
BYTECOIN PRI        128    0x80 
BYTECOIN TEST       *BT
YACOIN PUB           77    0x4D
YACOIN PRI          205    0xCD
YACOIN TEST         *BT

*B = BITCOIN prefixes
*BT = BITCOIN TEST prefixes
** All are uncompressed
</pre>

Roadmap:
==============
* Compressed key support for all prefixes
* confirm prefix settings for all coin types
* add coin types: Friecoin, Feathercoin, IXcoin, Terracoin, Novacoin, Bytecoin, Bitbar, Yacoin, etc


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

