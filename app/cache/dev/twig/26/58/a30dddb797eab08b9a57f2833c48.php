<?php

/* SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig */
class __TwigTemplate_2658a30dddb797eab08b9a57f2833c48 extends Twig_Template
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

    // line 17
    public function block_title($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Connexion
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "  
    <div class=\"well span6 offset3\">
    <form method=\"post\" ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
         <legend >Ajout projet</legend>
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Créer\" />
    </form>
</div>
    
    ";
        // line 42
        echo "    
    ";
        // line 43
        if (array_key_exists("message", $context)) {
            // line 44
            echo "        <a style=\"color:red\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</a>
    ";
        }
        // line 46
        echo "    
   </div>
";
    }

    public function getTemplateName()
    {
        return "SuiviprojetAdministrateurBundle:Admin:creationProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 46,  64 => 44,  62 => 43,  59 => 42,  51 => 27,  46 => 25,  42 => 23,  39 => 22,  32 => 18,  29 => 17,);
    }
}
