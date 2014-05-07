<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_999f7cc15bc4fd67a9ff3cd82126a1e1ef28033e16e6e9ce5c1dee6b3cac8d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  75 => 28,  66 => 25,  62 => 24,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  335 => 133,  332 => 132,  328 => 128,  325 => 127,  320 => 119,  317 => 118,  284 => 29,  279 => 27,  275 => 26,  271 => 25,  267 => 24,  264 => 23,  261 => 22,  255 => 19,  251 => 18,  247 => 17,  243 => 16,  238 => 15,  235 => 14,  229 => 12,  203 => 134,  200 => 132,  198 => 127,  190 => 121,  188 => 118,  183 => 115,  180 => 114,  175 => 112,  172 => 111,  167 => 110,  162 => 109,  160 => 108,  157 => 107,  152 => 106,  148 => 105,  144 => 104,  139 => 103,  137 => 102,  128 => 100,  125 => 99,  118 => 95,  114 => 94,  110 => 93,  106 => 92,  99 => 88,  94 => 87,  92 => 86,  86 => 83,  82 => 82,  78 => 81,  70 => 26,  50 => 15,  48 => 22,  45 => 21,  43 => 14,  38 => 12,  25 => 1,  40 => 7,  32 => 6,  29 => 2,  83 => 30,  60 => 20,  52 => 15,  46 => 14,  42 => 12,  36 => 8,  34 => 7,  31 => 6,  28 => 5,);
    }
}
