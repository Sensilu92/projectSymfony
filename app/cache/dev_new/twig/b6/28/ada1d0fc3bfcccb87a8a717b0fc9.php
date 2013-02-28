<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_b628ada1d0fc3bfcccb87a8a717b0fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  140 => 49,  69 => 20,  134 => 54,  49 => 13,  254 => 98,  244 => 93,  238 => 97,  232 => 90,  214 => 82,  182 => 64,  167 => 64,  296 => 111,  276 => 95,  271 => 93,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  247 => 85,  231 => 80,  226 => 78,  222 => 76,  197 => 77,  193 => 66,  161 => 54,  150 => 61,  86 => 29,  56 => 13,  169 => 58,  97 => 43,  224 => 80,  217 => 83,  202 => 80,  199 => 69,  190 => 66,  188 => 67,  183 => 62,  164 => 63,  148 => 58,  87 => 34,  82 => 30,  77 => 24,  65 => 25,  117 => 51,  110 => 42,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 16,  113 => 40,  280 => 98,  275 => 93,  269 => 92,  260 => 90,  255 => 88,  252 => 105,  250 => 86,  245 => 101,  241 => 82,  237 => 81,  233 => 81,  229 => 89,  220 => 79,  218 => 78,  211 => 81,  208 => 71,  204 => 71,  195 => 70,  187 => 63,  185 => 68,  174 => 67,  160 => 59,  129 => 58,  124 => 36,  90 => 28,  53 => 21,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 106,  282 => 88,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 87,  246 => 78,  240 => 77,  234 => 74,  228 => 89,  223 => 87,  219 => 70,  213 => 77,  207 => 82,  198 => 69,  181 => 60,  176 => 61,  170 => 60,  168 => 60,  146 => 44,  142 => 68,  128 => 45,  125 => 44,  107 => 20,  38 => 7,  144 => 60,  141 => 42,  135 => 47,  126 => 36,  109 => 52,  103 => 45,  67 => 23,  61 => 51,  47 => 11,  105 => 51,  93 => 31,  76 => 36,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 24,  88 => 23,  79 => 23,  59 => 23,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 72,  205 => 71,  201 => 73,  196 => 80,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 64,  172 => 64,  159 => 51,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 35,  118 => 32,  114 => 44,  104 => 35,  100 => 35,  78 => 28,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 75,  155 => 64,  152 => 52,  149 => 48,  145 => 57,  139 => 67,  131 => 46,  123 => 53,  120 => 50,  115 => 44,  106 => 27,  101 => 40,  96 => 31,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 16,  52 => 14,  50 => 10,  43 => 16,  41 => 6,  37 => 5,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 57,  157 => 73,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 41,  133 => 55,  130 => 53,  122 => 51,  119 => 45,  116 => 41,  111 => 31,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 39,  89 => 29,  85 => 39,  81 => 24,  73 => 19,  64 => 16,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
