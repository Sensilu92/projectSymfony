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
        return array (  160 => 59,  90 => 28,  204 => 71,  188 => 67,  185 => 68,  167 => 64,  164 => 63,  134 => 54,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  245 => 101,  238 => 97,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 72,  182 => 64,  158 => 56,  148 => 58,  140 => 49,  110 => 42,  86 => 29,  40 => 12,  53 => 15,  23 => 1,  82 => 23,  117 => 19,  97 => 23,  87 => 34,  69 => 20,  62 => 16,  56 => 13,  49 => 13,  209 => 73,  202 => 75,  195 => 74,  177 => 68,  174 => 67,  166 => 64,  156 => 62,  129 => 53,  113 => 40,  77 => 24,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 89,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 69,  181 => 70,  176 => 61,  170 => 60,  168 => 60,  146 => 59,  142 => 58,  128 => 45,  125 => 44,  107 => 14,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 37,  67 => 23,  61 => 13,  47 => 11,  105 => 24,  93 => 31,  76 => 28,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 39,  88 => 34,  79 => 23,  59 => 6,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 79,  191 => 70,  189 => 73,  186 => 72,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 48,  114 => 42,  104 => 35,  100 => 35,  78 => 21,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 60,  145 => 57,  139 => 57,  131 => 46,  123 => 50,  120 => 50,  115 => 44,  106 => 36,  101 => 37,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 15,  52 => 14,  50 => 10,  43 => 7,  41 => 30,  37 => 8,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 63,  157 => 60,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 56,  133 => 54,  130 => 53,  122 => 51,  119 => 45,  116 => 41,  111 => 15,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 29,  85 => 32,  81 => 24,  73 => 19,  64 => 10,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
