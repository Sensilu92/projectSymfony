<?php

/* SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig */
class __TwigTemplate_b9940c364673a1994e08be8ee2f71548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "  
    <div class=\"span4 offset4\">
        <form method=\"POST\" class=\"connexion form-horizontal well\" action=\"\" onsubmit=\"return check('');\">
            <legend>Identification</legend>
   
            <div class=\"control-group\">
                <label class=\"control-label\">Identifiant : </label>
                <div class=\"controls\">
                    <input type=\"text\" name=\"identifiant\" />
                </div>
            </div>
            
            <div class=\"control-group\">
                <label class=\"control-label required\">Mot de passe : </label>
                <div class=\"controls\">
                    <input type=\"password\" name=\"password\" />
                </div>
            </div>
            <div class=\"control-group\">
                <div class=\"controls\">
                    <div class=\"form-buttons\">
                        <input class=\"btn\" type=\"submit\" value=\"Connexion\" name=\"connexion\"/>
                    </div>
                </div>
            </div>
        </form>
    
    ";
        // line 48
        if (array_key_exists("message", $context)) {
            // line 49
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 51
        echo "    
   </div>
";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:connexionVue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 51,  73 => 49,  71 => 48,  42 => 21,  39 => 20,  32 => 16,  29 => 15,);
    }
}
