FirePHP Bundle for Laravel 3
==============

Use Christoph Dorn's FirePHP to log directly to the console. Requires FirePHP addon for Firefox.

FirePHP4Chrome and Webug Chrome extensions display basic messages in the console, but not the interactive popup explorer provided by FirePHP.


## Installation

Download and drop the `firephp` folder into your bundles directory.

## Bundle Registration

Open `application/bundles.php` and add the following:

    'firephp' => array('auto' => true),

## Configuration

**Logging is only enabled in the local environment**, which is defined in `paths.php`. (I found this [StackExchange](http://stackoverflow.com/a/13871792/920837) comment useful - see 'Bonus Tip').

See http://www.firephp.org/HQ/Use.htm for native FirePHP configuration.

## Usage

You can use the following logging commands in your code instead of dd().  As logging is only enabled in the local environment, the statements can remain in the code (beware performance hit if your objects are large!).

    FB::log( 'just a message' );
    FB::log( $array );
    FB::info( $object, 'message' );
    FB::warn( $object, 'message' );
    FB::error( $object, 'message' );
    FB::trace( $object );

The basics: http://www.firephp.org/HQ/Learn.htm

## Contributors

* [Tim Osborn](https://github.com/ptim)

## License

>    The MIT License
>
>    Copyright (C) 2013 by Tim Osborn <https://github.com/ptim>
>
>    Permission is hereby granted, free of charge, to any person obtaining a copy
>    of this software and associated documentation files (the "Software"), to deal
>    in the Software without restriction, including without limitation the rights
>    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
>    copies of the Software, and to permit persons to whom the Software is
>    furnished to do so, subject to the following conditions:
>
>    The above copyright notice and this permission notice shall be included in
>    all copies or substantial portions of the Software.
>
>    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
>    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
>    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
>    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
>    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
>    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
>    THE SOFTWARE.

## FirePHP license

>    Software License Agreement (New BSD License)
>
>    Copyright (c) 2006-2009, Christoph Dorn
>    All rights reserved.
>
>    Redistribution and use in source and binary forms, with or without modification,
>    are permitted provided that the following conditions are met:
>
>    - Redistributions of source code must retain the above copyright notice,
>      this list of conditions and the following disclaimer.
>
>    - Redistributions in binary form must reproduce the above copyright notice,
>      this list of conditions and the following disclaimer in the documentation
>      and/or other materials provided with the distribution.
>
>    - Neither the name of Christoph Dorn nor the names of its
>      contributors may be used to endorse or promote products derived from this
>      software without specific prior written permission.
>
>    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
>    ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
>    WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
>    DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
>    ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
>    (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
>    LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
>    ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
>    (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
>    SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
