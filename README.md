PHPCoinAddress
==============
PHPCoinAddress is a PHP object that creates public/private address key pairs for:
Bitcoin, Namecoin, Litecoin, PPCoin and many other cryptocoins.

Version 0.1.8

* Info: https://github.com/zamgo/PHPCoinAddress
* Download ZIP: https://github.com/zamgo/PHPCoinAddress/archive/master.zip
* Git clone: https://github.com/zamgo/PHPCoinAddress.git

Example Usage:
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
                   Pub     Pub     Pub    Priv    Priv    Priv
Coin               Dec     Hex     lead   Dec     Hex     lead   tested
===============    ====    ====    ====   ====    ====    ====   ======
BITCOIN               0    0x00    1       128    0x80    5
BYTECOIN             18    0x12            128    0x80    
CHNCOIN              28    0x1C            156    0x9C 
DEVCOIN              *B
FEATHERCOIN          14    0x0E            142    0x8E
FREICOIN             *B
JUNKCOIN             16    0x10    7       144    0x90    5      OK
LITECOIN             48    0x30    L       176    0xB0    6
NAMECOIN             52    0x34    M,N     180    0xB4    7
NOVACOIN              8    0x08            136    0x88
PPCOIN               55    0x37            183    0xB7
YACOIN               77    0x4D            205    0xCD
      
                   Pub     Pub     Pub    Priv    Priv    Priv
Coin               Dec     Hex     lead   Dec     Hex     lead   tested
===============    ====    ====    ====   ====    ====    ====   ======
BITCOIN TEST        111    0x6F    m,n     239    0xEF    9 
BYTECOIN TEST       *BT 
CHNCOIN TEST        *BT
DEVCOIN TEST        *BT
FEATHERCOIN TEST    *BT
FREICOIN TEST       *BT
JUNKCOIN TEST       *BT
LITECOIN TEST       *BT
NAMECOIN TEST         ?
NOVACOIN TEST       *BT
PPCOIN TEST         *BT
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

