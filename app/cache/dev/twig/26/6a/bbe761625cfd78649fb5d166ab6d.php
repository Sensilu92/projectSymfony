<?php

/* ::menu.html.twig */
class __TwigTemplate_266abbe761625cfd78649fb5d166ab6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"menu\">
        
        ";
        // line 3
        $this->displayBlock('menu', $context, $blocks);
        // line 8
        echo "    </div>
";
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        echo " 
           <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blacklog_product_creation_userstories"), "html", null, true);
        echo "\">User storie</a>
           <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suiviprojet_administrateur_creation_compte_client"), "html", null, true);
        echo "\">Compte client</a>
           <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sprint_validation_user_stories_sprint"), "html", null, true);
        echo "\">Validation user storie</a>
        ";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  31 => 3,  26 => 8,  24 => 3,  20 => 1,  121 => 29,  116 => 26,  111 => 24,  106 => 22,  98 => 13,  93 => 26,  88 => 24,  83 => 22,  80 => 21,  75 => 13,  68 => 6,  65 => 5,  59 => 30,  57 => 29,  52 => 26,  49 => 13,  44 => 6,  42 => 5,  38 => 3,  35 => 2,);
    }
}
