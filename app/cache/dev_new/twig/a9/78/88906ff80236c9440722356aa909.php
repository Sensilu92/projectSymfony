<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a97888906ff80236c9440722356aa909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => ""), array());
        // line 38
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (($this->getContext($context, "about") == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (($this->getContext($context, "about") == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  23 => 3,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  173 => 85,  166 => 82,  156 => 77,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  306 => 128,  301 => 125,  292 => 120,  289 => 119,  287 => 118,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  221 => 83,  215 => 79,  177 => 59,  209 => 77,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 121,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  140 => 42,  69 => 20,  134 => 54,  49 => 13,  254 => 101,  244 => 93,  238 => 97,  232 => 90,  214 => 82,  182 => 64,  167 => 64,  296 => 111,  276 => 95,  271 => 93,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  247 => 97,  231 => 88,  226 => 86,  222 => 76,  197 => 77,  193 => 68,  161 => 80,  150 => 75,  86 => 29,  56 => 39,  169 => 56,  97 => 23,  224 => 80,  217 => 83,  202 => 73,  199 => 69,  190 => 89,  188 => 66,  183 => 63,  164 => 63,  148 => 74,  87 => 40,  82 => 19,  77 => 18,  65 => 25,  117 => 51,  110 => 42,  40 => 6,  137 => 31,  112 => 52,  99 => 27,  62 => 27,  113 => 40,  280 => 114,  275 => 111,  269 => 92,  260 => 90,  255 => 88,  252 => 138,  250 => 86,  245 => 96,  241 => 82,  237 => 81,  233 => 81,  229 => 89,  220 => 79,  218 => 78,  211 => 81,  208 => 71,  204 => 94,  195 => 70,  187 => 63,  185 => 68,  174 => 58,  160 => 59,  129 => 58,  124 => 36,  90 => 41,  53 => 38,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 150,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 106,  282 => 115,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 87,  246 => 78,  240 => 93,  234 => 89,  228 => 87,  223 => 87,  219 => 70,  213 => 77,  207 => 95,  198 => 69,  181 => 87,  176 => 61,  170 => 60,  168 => 60,  146 => 44,  142 => 68,  128 => 45,  125 => 44,  107 => 27,  38 => 18,  144 => 73,  141 => 42,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 12,  61 => 12,  47 => 21,  105 => 51,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 3,  91 => 28,  84 => 23,  94 => 24,  88 => 20,  79 => 35,  59 => 23,  21 => 2,  44 => 11,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 73,  196 => 92,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 64,  172 => 64,  159 => 51,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 35,  118 => 32,  114 => 44,  104 => 35,  100 => 24,  78 => 28,  75 => 23,  71 => 20,  58 => 25,  34 => 8,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 13,  63 => 16,  46 => 34,  22 => 2,  163 => 81,  155 => 64,  152 => 52,  149 => 48,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 27,  101 => 33,  96 => 31,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 15,  52 => 14,  50 => 22,  43 => 16,  41 => 19,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 73,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 41,  133 => 55,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 31,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 21,  89 => 29,  85 => 39,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 16,  54 => 12,  51 => 37,  48 => 11,  45 => 13,  42 => 11,  39 => 10,  36 => 9,  33 => 10,  30 => 7,);
    }
}
