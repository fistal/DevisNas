<?php

/* NasAppBundle:Form:collectionHonoraires.html.twig */
class __TwigTemplate_cda684ee2e917a4f4bca6d34d0b863f1dbe6fb3206f9f2d19a06a54db67aaed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'my_widget' => array($this, 'block_my_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('my_widget', $context, $blocks);
        // line 24
        $this->displayBlock('collection_widget', $context, $blocks);
    }

    // line 1
    public function block_my_widget($context, array $blocks = array())
    {
        // line 2
        echo " 
 <table class=\"table table-hover\">
      <thead>
        <tr>
          <th>Honoraire</th>
          <th>Pourcentage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "prototype"), "type"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t  </td>
          <td>
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "prototype"), "pourcentageFacture"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t  </td>
        </tr>
      </tbody>
</table>
 
 
";
    }

    // line 24
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 25
        ob_start();
        // line 26
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 27
            echo "        ";
            $context["attr"] = twig_array_merge($this->getContext($context, "attr"), array("data-prototype" => $this->renderBlock("my_widget", $context, $blocks)));
            // line 28
            echo "    ";
        }
        // line 29
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "NasAppBundle:Form:collectionHonoraires.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 24,  228 => 120,  207 => 108,  200 => 104,  104 => 41,  167 => 91,  65 => 22,  58 => 18,  100 => 54,  53 => 26,  124 => 41,  114 => 38,  90 => 31,  81 => 29,  343 => 135,  340 => 134,  336 => 130,  333 => 129,  328 => 121,  325 => 120,  292 => 31,  287 => 29,  282 => 27,  274 => 25,  270 => 24,  267 => 23,  250 => 17,  232 => 12,  206 => 136,  191 => 120,  186 => 96,  178 => 114,  175 => 113,  170 => 112,  165 => 111,  160 => 109,  155 => 94,  113 => 95,  97 => 89,  84 => 32,  70 => 27,  148 => 82,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 26,  268 => 85,  264 => 22,  258 => 19,  252 => 80,  247 => 78,  241 => 15,  229 => 73,  220 => 70,  214 => 112,  177 => 110,  169 => 60,  140 => 104,  132 => 59,  128 => 43,  107 => 46,  61 => 24,  273 => 96,  269 => 94,  254 => 18,  243 => 88,  240 => 86,  238 => 14,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 116,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 92,  159 => 61,  143 => 56,  135 => 53,  119 => 52,  102 => 34,  71 => 19,  67 => 15,  63 => 22,  59 => 21,  38 => 6,  94 => 32,  89 => 85,  85 => 25,  75 => 29,  68 => 14,  56 => 9,  87 => 25,  21 => 1,  26 => 5,  93 => 35,  88 => 45,  78 => 41,  46 => 10,  27 => 1,  44 => 9,  31 => 5,  28 => 3,  201 => 129,  196 => 90,  183 => 116,  171 => 61,  166 => 102,  163 => 110,  158 => 67,  156 => 72,  151 => 107,  142 => 64,  138 => 75,  136 => 56,  121 => 97,  117 => 96,  105 => 40,  91 => 40,  62 => 23,  49 => 16,  24 => 4,  25 => 1,  19 => 1,  79 => 30,  72 => 28,  69 => 27,  47 => 9,  40 => 6,  37 => 10,  22 => 2,  246 => 16,  157 => 88,  145 => 46,  139 => 45,  131 => 60,  123 => 47,  120 => 53,  115 => 43,  111 => 62,  108 => 36,  101 => 32,  98 => 33,  96 => 36,  83 => 31,  74 => 28,  66 => 26,  55 => 16,  52 => 21,  50 => 60,  43 => 13,  41 => 7,  35 => 12,  32 => 3,  29 => 2,  209 => 82,  203 => 134,  199 => 67,  193 => 100,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 84,  149 => 68,  147 => 106,  144 => 86,  141 => 48,  133 => 78,  130 => 41,  125 => 55,  122 => 70,  116 => 41,  112 => 48,  109 => 94,  106 => 35,  103 => 49,  99 => 41,  95 => 88,  92 => 21,  86 => 30,  82 => 42,  80 => 30,  73 => 28,  64 => 25,  60 => 6,  57 => 20,  54 => 10,  51 => 14,  48 => 22,  45 => 21,  42 => 7,  39 => 6,  36 => 5,  33 => 3,  30 => 2,);
    }
}
