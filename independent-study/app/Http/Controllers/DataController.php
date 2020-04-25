<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    private function farmJsonData()
    {
        $dataString='{
                      "cols": [
                                {"id":"productionmethod","label":"Production Method","pattern":"","type":"string"},
                                {"id":"commodity","label":"Commodity","pattern":"","type":"string"},
                                {"id":"value","label":"Revenue (billions)","pattern":"","type":"number"}
                              ],
                      "rows": [
                                {"c":[{"v":"Farm","f":null},{"v":"Milk","f":null},{"v":2515,"f":null}]},
                                {"c":[{"v":"Farm","f":null},{"v":"Cattle","f":null},{"v":1376,"f":null}]},
                                {"c":[{"v":"Farm","f":null},{"v":"Potatoes","f":null},{"v":974,"f":null}]},
                                {"c":[{"v":"Farm","f":null},{"v":"Hay","f":null},{"v":717,"f":null}]},
                                {"c":[{"v":"Farm","f":null},{"v":"Wheat","f":null},{"v":426,"f":null}]},
                                {"c":[{"v":"Farm","f":null},{"v":"Sugarbeets","f":null},{"v":292,"f":null}]},
                                {"c":[{"v":"Dry Mill","f":null},{"v":"Wheat","f":null},{"v":12,"f":null}]},
                                {"c":[{"v":"Dry Mill","f":null},{"v":"Rice","f":null},{"v":8,"f":null}]},
                                {"c":[{"v":"Dry Mill","f":null},{"v":"Others","f":null},{"v":6,"f":null}]},
                                {"c":[{"v":"Bakery","f":null},{"v":"Bread","f":null},{"v":1,"f":null}]},
                                {"c":[{"v":"Bakery","f":null},{"v":"Cakes and Pasteries","f":null},{"v":2,"f":null}]},
                                {"c":[{"v":"Bakery","f":null},{"v":"Cookies","f":null},{"v":2,"f":null}]},
                                {"c":[{"v":"Bakery","f":null},{"v":"Others","f":null},{"v":3,"f":null}]},
                                {"c":[{"v":"Restaurant","f":null},{"v":"Full Service","f":null},{"v":65,"f":null}]},
                                {"c":[{"v":"Restaurant","f":null},{"v":"Limited Service","f":null},{"v":62,"f":null}]},
                                {"c":[{"v":"Restaurant","f":null},{"v":"Nonalcoholic Snack Bars","f":null},{"v":11,"f":null}]},
                                {"c":[{"v":"Restaurant","f":null},{"v":"Catering","f":null},{"v":3,"f":null}]},
                                {"c":[{"v":"Restaurant","f":null},{"v":"Bars and Taverns","f":null},{"v":6,"f":null}]},
                                {"c":[{"v":"Restaurant","f":null},{"v":"Other","f":null},{"v":54,"f":null}]}
                              ]
                      }';
        return $dataString;
    }
    private function siteJsonData()
    {
        $dataString='{
                      "cols": [
                                {"id":"","label":"Host","pattern":"","type":"string"},
                                {"id":"","label":"Page","pattern":"","type":"string"},
                                {"id":"","label":"Queries","pattern":"","type":"number"}
                              ],
                      "rows": [
                                {"c":[{"v":"iot.christopherreilly.me","f":null},{"v":"clear-session","f":null},{"v":1,"f":null}]},
                                {"c":[{"v":"iot.christopherreilly.me","f":null},{"v":"/","f":null},{"v":1,"f":null}]},
                                {"c":[{"v":"iot.christopherreilly.me","f":null},{"v":"/industry-classification","f":null},{"v":3,"f":null}]},
                                {"c":[{"v":"iot.christopherreilly.me","f":null},{"v":"/basic-networking","f":null},{"v":3,"f":null}]},
                                {"c":[{"v":"p2.christopherreilly.me","f":null},{"v":"/comment","f":null},{"v":1,"f":null}]},
                                {"c":[{"v":"p2.christopherreilly.me","f":null},{"v":"/","f":null},{"v":1,"f":null}]}
                              ]
                      }';
        return $dataString;
    }
    public function jsonData(Request $request)
    {
        return self::farmJsonData();
    }
}
