<?php

namespace Adelphia\Coinconnect;

use Illuminate\Support\Facades\Facade;

class CoinconnectFacades extends Facade {

    protected static function getFacadeAccessor() { return 'Coinconnect'; }

}
