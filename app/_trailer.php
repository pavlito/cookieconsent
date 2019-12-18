<div id="trailer">
<script type="text/javascript">
    "use strict";

    var _ENVIRONMENT = 'development';

    var LAZYLOAD_PRELOAD_IMAGE = 'http://127.0.0.1:9914/public/images/loading.gif';

    
    var _CURRENT_PAGE_TRANSLATIONS = {"en": "/cookie-consent/"};
    
    window.siteLanguages = ['en', 'es'];

    var _BASE_URL = 'http://127.0.0.1:9914';

    var _MAIN_SHOW_DELAY = 50;
    var _MAIN_SHOW_FORCED = 4000;
    var _MAIN_LOAD_DELAY = 100;
    var _MAIN_LOAD_FORCED = 0;
    var _MAIN_LOAD_FRONTEND = 0;
    var _MAIN_LOAD_TRACKING = 500;

    var _MAIN_LOAD_SHARESALE = false;
    var _MAIN_LOAD_GA = false;

    

    var LCG_TRACKING_APPLICATION = "privacypolicies-website";
    var LCG_TRACKING_ENVIRONMENT = _ENVIRONMENT;
    var LCG_TRACKING_VARIANT = 'A';

    function _main_load_trigger() {
        if (_main_load_trigger_done) { return; } else { _main_load_trigger_done = true; }
        console.log ("[main.js]  loading...");
        _main_script_preload("/public/web/js/main.js");
    }
    var _main_load_trigger_done = false;

    function _main_show_trigger() {
        if (_main_show_trigger_done) { return; } else { _main_show_trigger_done = true; }
        console.log ("[main.js]  showing...");
        var _element = document.createElement("style");
        _element.type = "text/css";
        var _style = " #wrap { display: block; } .placeholder { display: none; } ";
        if (_element.styleSheet)
            _element.styleSheet.cssText = _style;
        else
            _element.appendChild(document.createTextNode(_style));
        document.getElementById("trailer").appendChild(_element);
    }
    var _main_show_trigger_done = false;

    function _main_script_preload(_url, _after) {
        var _element = document.createElement("script");
        _element.setAttribute("src", _url);
        _element.setAttribute("type", "text/javascript");
        if (_after)
            _element.onload = _after;
        document.getElementById("trailer").appendChild(_element);
    }

    function _main_script(_url) {
        _main_scripts_queue.push(_url);
        if (!_main_scripts_wait) {
            _main_scripts_wait = true;
            _main_scripts_continue_0();
        }
    }
    function _main_scripts_continue() {
        var _script = _main_scripts_queue.shift ();
        if (!_script) {
            _main_scripts_wait = false;
            return;
        }
        switch (typeof(_script)) {
            case "string" :
                console.log ("[main.js]  loading script (from url) from queue...", _script);
                _main_script_preload(_script, _main_scripts_continue_0);
                break;
            case "function" :
                console.log ("[main.js]  loading script (embedded) from queue...");
                _script();
                _main_scripts_continue_0();
                break;
            default :
                console.log ("[main.js]  invalid script in queue;  ignoring!", _script);
                _main_scripts_continue_0();
                break;
        }
    }
    function _main_scripts_continue_0() {
        setTimeout(_main_scripts_continue, 0);
    }
    var _main_scripts_queue = [];
    var _main_scripts_wait = true;

    var _MAIN_LOAD_FRONTEND_AFTER = _main_scripts_continue_0;

    if (false) {
        window.addEventListener("load", function() {
            if (_MAIN_LOAD_FRONTEND !== false) { _MAIN_LOAD_FRONTEND = 0; }
            if (_MAIN_LOAD_TRACKING !== false) { _MAIN_LOAD_TRACKING = 0; }
            if (_MAIN_LOAD_SHARESALE !== false) { _MAIN_LOAD_SHARESALE = 0; }
            if (_MAIN_LOAD_GA !== false) { _MAIN_LOAD_GA = 0; }
        });
    }

    if (_MAIN_LOAD_DELAY > 0) {
        window.addEventListener("load", function() {
            setTimeout (_main_load_trigger, _MAIN_LOAD_DELAY);
        });
        if (_MAIN_LOAD_FORCED > 0) {
            setTimeout (_main_load_trigger, _MAIN_LOAD_FORCED);
        }
    } else {
        _main_load_trigger();
    }

    if (_MAIN_SHOW_DELAY > 0) {
        window.addEventListener("load", function() {
            setTimeout (_main_show_trigger, _MAIN_SHOW_DELAY);
        });
        if (_MAIN_SHOW_FORCED > 0) {
            setTimeout (_main_show_trigger, _MAIN_SHOW_FORCED);
        }
    } else {
        _main_show_trigger();
    }

</script>
</div>