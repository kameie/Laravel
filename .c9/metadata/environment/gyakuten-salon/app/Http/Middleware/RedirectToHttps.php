{"filter":false,"title":"RedirectToHttps.php","tooltip":"/gyakuten-salon/app/Http/Middleware/RedirectToHttps.php","undoManager":{"mark":30,"position":30,"stack":[[{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":17,"column":0},"end":{"row":17,"column":8},"action":"insert","lines":["        "]},{"start":{"row":17,"column":8},"end":{"row":18,"column":0},"action":"insert","lines":["",""]},{"start":{"row":18,"column":0},"end":{"row":18,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":8},"end":{"row":19,"column":86},"action":"insert","lines":["if(!$this->is_ssl() && config('app.env') === 'production'){","            return redirect('https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);"],"id":3}],[{"start":{"row":20,"column":8},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":4},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":21,"column":8},"end":{"row":21,"column":31},"action":"remove","lines":["return $next($request);"],"id":5}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":8},"action":"remove","lines":["    "],"id":6},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "]},{"start":{"row":20,"column":8},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "],"id":7}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "],"id":8},{"start":{"row":19,"column":86},"end":{"row":20,"column":4},"action":"remove","lines":["","    "]}],[{"start":{"row":20,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":22,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["","        ","    "],"id":10}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":31},"action":"insert","lines":["return $next($request);"],"id":11}],[{"start":{"row":23,"column":31},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":24,"column":0},"end":{"row":24,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":8},"action":"remove","lines":["    "],"id":13},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"remove","lines":["    "]},{"start":{"row":23,"column":31},"end":{"row":24,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":24,"column":5},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":4},"end":{"row":26,"column":0},"action":"insert","lines":["",""]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":26,"column":4},"end":{"row":49,"column":21},"action":"insert","lines":["public function is_ssl()","    {","        if ( isset($_SERVER['HTTPS']) === true ) // Apache","        {","            return ( $_SERVER['HTTPS'] === 'on' or $_SERVER['HTTPS'] === '1' );","        }","        elseif ( isset($_SERVER['SSL']) === true ) // IIS","        {","            return ( $_SERVER['SSL'] === 'on' );","        }","        elseif ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) === true ) // Reverse proxy","        {","            return ( strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https' );","        }","        elseif ( isset($_SERVER['HTTP_X_FORWARDED_PORT']) === true ) // Reverse proxy","        {","            return ( $_SERVER['HTTP_X_FORWARDED_PORT'] === '443' );","        }","        elseif ( isset($_SERVER['SERVER_PORT']) === true )","        {","            return ( $_SERVER['SERVER_PORT'] === '443' );","        }","","        return false;"],"id":15}],[{"start":{"row":21,"column":9},"end":{"row":22,"column":0},"action":"remove","lines":["",""],"id":16}],[{"start":{"row":23,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":["}"],"id":17}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"remove","lines":["{"],"id":18}],[{"start":{"row":16,"column":4},"end":{"row":16,"column":5},"action":"insert","lines":["{"],"id":19}],[{"start":{"row":16,"column":5},"end":{"row":18,"column":5},"action":"insert","lines":["","        ","    }"],"id":20}],[{"start":{"row":17,"column":4},"end":{"row":17,"column":8},"action":"remove","lines":["    "],"id":21},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    "]},{"start":{"row":16,"column":5},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":17,"column":4},"end":{"row":17,"column":5},"action":"remove","lines":["}"],"id":22}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"remove","lines":["    "],"id":23}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"insert","lines":["{"],"id":24}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"remove","lines":["{"],"id":25}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"insert","lines":["}"],"id":26}],[{"start":{"row":24,"column":5},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"remove","lines":["    "],"id":28},{"start":{"row":24,"column":5},"end":{"row":25,"column":0},"action":"remove","lines":["",""]},{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"remove","lines":["}"]}],[{"start":{"row":24,"column":4},"end":{"row":24,"column":5},"action":"insert","lines":["}"],"id":29}],[{"start":{"row":49,"column":21},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":50,"column":8},"end":{"row":52,"column":0},"action":"insert","lines":["}","}",""],"id":31},{"start":{"row":50,"column":0},"end":{"row":50,"column":8},"action":"remove","lines":["        "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":0},"end":{"row":51,"column":0},"action":"insert","lines":["",""],"id":32}]]},"ace":{"folds":[],"scrolltop":618,"scrollleft":0,"selection":{"start":{"row":54,"column":0},"end":{"row":54,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1627699226166,"hash":"42163a68f0651c8058004e41a520b074ff92ec1f"}