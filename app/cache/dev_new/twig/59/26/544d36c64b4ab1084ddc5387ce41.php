<?php

/* WebProfilerBundle:Collector:request.html.twig */
class __TwigTemplate_5926544d36c64b4ab1084ddc5387ce41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "collector", true), "controller", array(), "any", false, true), "class", array(), "any", true, true)) {
            // line 6
            echo "            ";
            $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "controller"), "file"), $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "controller"), "line"));
            // line 7
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "controller"), "class"));
            echo "</span>
            <span class=\"sf-toolbar-info-method\" onclick=\"";
            // line 8
            if ($this->getContext($context, "link")) {
                echo "window.location='";
                echo twig_escape_filter($this->env, $this->getContext($context, "link"), "html", null, true);
                echo "';window.event.stopPropagation();return false;";
            }
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "controller"), "method"), "html", null, true);
            echo "
            </span>
        ";
        } else {
            // line 12
            echo "            <span class=\"sf-toolbar-info-class sf-toolbar-info-with-next-pointer\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "controller"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        $context["request_status_code_color"] = (((400 > $this->getAttribute($this->getContext($context, "collector"), "statuscode"))) ? ((((200 == $this->getAttribute($this->getContext($context, "collector"), "statuscode"))) ? ("green") : ("yellow"))) : ("red"));
        // line 16
        echo "    ";
        $context["request_route"] = (($this->getAttribute($this->getContext($context, "collector"), "route")) ? ($this->getAttribute($this->getContext($context, "collector"), "route")) : ("NONE"));
        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <img width=\"28\" height=\"28\" alt=\"Request\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAACvElEQVR42tVTbUhTYRTerDCnKVoUUr/KCZmypA9Koet0bXNLJ5XazDJ/WFaCUY0pExRZXxYiJgsxWWjkaL+yK+po1gjyR2QfmqWxtBmaBtqWGnabT++c11Fu4l/P4VzOPc95zoHznsNZodIbLDdRcKnc1Bu8DAK45ZsOnykQNMopsNooLxCknb0cDq5vml9FtHiIgpBR0R6iihYyFMTDt2Lg56ObPkI6TMGXSof1EV67IqCwisJSWliFAG/E0CfFIiebdNypcxi/1zgyFiIiZ3sJQr0RQx5frLa6k7SOKRo3oMFNR5t62h2rttKXEOKFqDCxtXNmmBokO2KKTlp3IdWuT2dYRNGKwEXEBCcL172G5FG0aIxC0kR9PBTVH1kkwQn+IqJnCE33EalVzT9GJQS1tAdD3CKicJYFrxqx7W2ejCEdZy1FiC5tZxHhLJKOZaRdQJAyV/YAvDliySALHxmxR4Hqe2iwvaOR/CEuZYJFSgYhVbZRkA8KGdEktrqnqra90NndCdkt77fjIHIhexOrfO6O3bbbOj/rqu5IptgyR3sU93QbOYhquZK4MCDp0Ina/PLsu5JvbCTRaapUdUmIV/RzoMdsk/0hWRNdAvKOmvqlN0drsJbJf1P4YsQ5lGrJeuosiOUgbOC8cto3LfOXTdVd7BqZsQKbse+0jUL6WPcesqs4MNSUTQAxGjwFiC8m3yzmqwHJBWYKBJ9WNqW/dHkpU/osch1Yj5RJfXPfSEe/2UPsN490NPfZG5CKyJmcV5ayHyzy7BMqsXfuHhGK/cjAIeSpR92gehR55D8TcQhDEKJwytBJ4fr4NULvrEM8NszfJPyxDoHYAQ1oPCWmIX4gifmDS/DV2DKeb25FHWr76yEG7/9L4YFPeiQQ4/8LkgJ8Et+NncTCsYqzXAEXa7CWdPZzGWdlyV+vST0JanfPvwAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "request_status_code_color"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "statuscode"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "request_handler"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">on <i>";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "request_route"), "html", null, true);
        echo "</i></span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        ob_start();
        // line 25
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Status Code</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "request_status_code_color"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "statuscode"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                ";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "request_handler"), "html", null, true);
        echo "
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "request_route"), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "sessionmetadata"))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 43
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 46
    public function block_menu($context, array $blocks = array())
    {
        // line 47
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/request.png"), "html", null, true);
        echo "\" alt=\"Request\" /></span>
    <strong>Request</strong>
</span>
";
    }

    // line 53
    public function block_panel($context, array $blocks = array())
    {
        // line 54
        echo "    <h2>Request GET Parameters</h2>

    ";
        // line 56
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "requestquery"), "all"))) {
            // line 57
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getContext($context, "collector"), "requestquery")));
            // line 58
            echo "    ";
        } else {
            // line 59
            echo "        <p>
            <em>No GET parameters</em>
        </p>
    ";
        }
        // line 63
        echo "
    <h2>Request POST Parameters</h2>

    ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "requestrequest"), "all"))) {
            // line 67
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getContext($context, "collector"), "requestrequest")));
            // line 68
            echo "    ";
        } else {
            // line 69
            echo "        <p>
            <em>No POST parameters</em>
        </p>
    ";
        }
        // line 73
        echo "
    <h2>Request Attributes</h2>

    ";
        // line 76
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "requestattributes"), "all"))) {
            // line 77
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getContext($context, "collector"), "requestattributes")));
            // line 78
            echo "    ";
        } else {
            // line 79
            echo "        <p>
            <em>No attributes</em>
        </p>
    ";
        }
        // line 83
        echo "
    <h2>Request Cookies</h2>

    ";
        // line 86
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "collector"), "requestcookies"), "all"))) {
            // line 87
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getContext($context, "collector"), "requestcookies")));
            // line 88
            echo "    ";
        } else {
            // line 89
            echo "        <p>
            <em>No cookies</em>
        </p>
    ";
        }
        // line 93
        echo "
    <h2>Request Headers</h2>

    ";
        // line 96
        $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getContext($context, "collector"), "requestheaders")));
        // line 97
        echo "
    <h2>Request Content</h2>

    ";
        // line 100
        if (($this->getAttribute($this->getContext($context, "collector"), "content") == false)) {
            // line 101
            echo "        <p><em>Request content not available (it was retrieved as a resource).</em></p>
    ";
        } elseif ($this->getAttribute($this->getContext($context, "collector"), "content")) {
            // line 103
            echo "        <pre>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "content"), "html", null, true);
            echo "</pre>
    ";
        } else {
            // line 105
            echo "        <p><em>No content</em></p>
    ";
        }
        // line 107
        echo "
    <h2>Request Server Parameters</h2>

    ";
        // line 110
        $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getContext($context, "collector"), "requestserver")));
        // line 111
        echo "
    <h2>Response Headers</h2>

    ";
        // line 114
        $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getContext($context, "collector"), "responseheaders")));
        // line 115
        echo "
    <h2>Session Metadata</h2>

    ";
        // line 118
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "sessionmetadata"))) {
            // line 119
            echo "    ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "sessionmetadata")));
            // line 120
            echo "    ";
        } else {
            // line 121
            echo "    <p>
        <em>No session metadata</em>
    </p>
    ";
        }
        // line 125
        echo "
    <h2>Session Attributes</h2>

    ";
        // line 128
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "sessionattributes"))) {
            // line 129
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "sessionattributes")));
            // line 130
            echo "    ";
        } else {
            // line 131
            echo "        <p>
            <em>No session attributes</em>
        </p>
    ";
        }
        // line 135
        echo "
    <h2>Flashes</h2>

    ";
        // line 138
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "flashes"))) {
            // line 139
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "flashes")));
            // line 140
            echo "    ";
        } else {
            // line 141
            echo "        <p>
            <em>No flashes</em>
        </p>
    ";
        }
        // line 145
        echo "
    ";
        // line 146
        if ($this->getAttribute($this->getContext($context, "profile"), "parent")) {
            // line 147
            echo "        <h2><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute($this->getContext($context, "profile"), "parent"), "token"))), "html", null, true);
            echo "\">Parent request: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "profile"), "parent"), "token"), "html", null, true);
            echo "</a></h2>

        ";
            // line 149
            $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "profile"), "parent"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "profile"), "children"))) {
            // line 153
            echo "        <h2>Sub requests</h2>

        ";
            // line 155
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "profile"), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo "            <h3><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute($this->getContext($context, "child"), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "child"), "token"), "html", null, true);
                echo "</a></h3>
            ";
                // line 157
                $this->env->loadTemplate("WebProfilerBundle:Profiler:bag.html.twig")->display(array("bag" => $this->getAttribute($this->getAttribute($this->getContext($context, "child"), "getcollector", array(0 => "request"), "method"), "requestattributes")));
                // line 158
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 159
            echo "    ";
        }
        // line 160
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  306 => 128,  301 => 125,  292 => 120,  289 => 119,  287 => 118,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  221 => 83,  215 => 79,  177 => 59,  209 => 77,  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 121,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  140 => 42,  69 => 20,  134 => 54,  49 => 13,  254 => 101,  244 => 93,  238 => 97,  232 => 90,  214 => 82,  182 => 64,  167 => 64,  296 => 111,  276 => 95,  271 => 93,  266 => 91,  262 => 90,  256 => 89,  253 => 88,  247 => 97,  231 => 88,  226 => 86,  222 => 76,  197 => 77,  193 => 68,  161 => 54,  150 => 61,  86 => 29,  56 => 13,  169 => 56,  97 => 23,  224 => 80,  217 => 83,  202 => 73,  199 => 69,  190 => 67,  188 => 66,  183 => 63,  164 => 63,  148 => 46,  87 => 34,  82 => 19,  77 => 24,  65 => 25,  117 => 51,  110 => 42,  40 => 6,  137 => 31,  112 => 21,  99 => 27,  62 => 16,  113 => 40,  280 => 114,  275 => 111,  269 => 92,  260 => 90,  255 => 88,  252 => 100,  250 => 86,  245 => 96,  241 => 82,  237 => 81,  233 => 81,  229 => 89,  220 => 79,  218 => 78,  211 => 81,  208 => 71,  204 => 71,  195 => 70,  187 => 63,  185 => 68,  174 => 58,  160 => 59,  129 => 58,  124 => 36,  90 => 28,  53 => 21,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 150,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 130,  308 => 129,  304 => 95,  297 => 91,  293 => 90,  284 => 106,  282 => 115,  277 => 86,  267 => 85,  263 => 91,  257 => 81,  251 => 87,  246 => 78,  240 => 93,  234 => 89,  228 => 87,  223 => 87,  219 => 70,  213 => 77,  207 => 76,  198 => 69,  181 => 60,  176 => 61,  170 => 60,  168 => 60,  146 => 44,  142 => 68,  128 => 45,  125 => 44,  107 => 27,  38 => 7,  144 => 60,  141 => 42,  135 => 47,  126 => 36,  109 => 52,  103 => 25,  67 => 14,  61 => 12,  47 => 8,  105 => 51,  93 => 31,  76 => 17,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 24,  88 => 20,  79 => 18,  59 => 23,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 73,  196 => 69,  194 => 79,  191 => 70,  189 => 77,  186 => 76,  180 => 64,  172 => 64,  159 => 51,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 35,  118 => 32,  114 => 44,  104 => 35,  100 => 24,  78 => 28,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 6,  24 => 1,  25 => 14,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 75,  155 => 64,  152 => 52,  149 => 48,  145 => 57,  139 => 67,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 27,  101 => 40,  96 => 31,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 9,  52 => 14,  50 => 10,  43 => 16,  41 => 6,  37 => 5,  35 => 6,  32 => 5,  29 => 3,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 73,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 41,  133 => 55,  130 => 39,  122 => 51,  119 => 45,  116 => 31,  111 => 31,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 29,  85 => 39,  81 => 24,  73 => 16,  64 => 16,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 10,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
