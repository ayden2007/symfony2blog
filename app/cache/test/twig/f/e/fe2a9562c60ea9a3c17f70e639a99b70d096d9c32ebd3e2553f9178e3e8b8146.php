<?php

/* CoreBundle:Post:index.html.twig */
class __TwigTemplate_7f1ee85033fd26d2fbbf1f73d35de0564e78b4b9cdbb6266a9c6d083854cb823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreBundle:Post:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_426fb52fe89694e62002e20af312f3e38a2006af58c8dceca21adb3792785c36 = $this->env->getExtension("native_profiler");
        $__internal_426fb52fe89694e62002e20af312f3e38a2006af58c8dceca21adb3792785c36->enter($__internal_426fb52fe89694e62002e20af312f3e38a2006af58c8dceca21adb3792785c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426fb52fe89694e62002e20af312f3e38a2006af58c8dceca21adb3792785c36->leave($__internal_426fb52fe89694e62002e20af312f3e38a2006af58c8dceca21adb3792785c36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5968667813501123190bfabc43cbdf967dced7c7be6d06c7d4227cfdb96b571 = $this->env->getExtension("native_profiler");
        $__internal_d5968667813501123190bfabc43cbdf967dced7c7be6d06c7d4227cfdb96b571->enter($__internal_d5968667813501123190bfabc43cbdf967dced7c7be6d06c7d4227cfdb96b571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreBundle:Post:index";
        
        $__internal_d5968667813501123190bfabc43cbdf967dced7c7be6d06c7d4227cfdb96b571->leave($__internal_d5968667813501123190bfabc43cbdf967dced7c7be6d06c7d4227cfdb96b571_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd562e2d116a2f141c7b508fbf6a2c5f3a16ffc9716b57a4efe3ef3ff0af3140 = $this->env->getExtension("native_profiler");
        $__internal_bd562e2d116a2f141c7b508fbf6a2c5f3a16ffc9716b57a4efe3ef3ff0af3140->enter($__internal_bd562e2d116a2f141c7b508fbf6a2c5f3a16ffc9716b57a4efe3ef3ff0af3140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Post:index page</h1>
";
        
        $__internal_bd562e2d116a2f141c7b508fbf6a2c5f3a16ffc9716b57a4efe3ef3ff0af3140->leave($__internal_bd562e2d116a2f141c7b508fbf6a2c5f3a16ffc9716b57a4efe3ef3ff0af3140_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}CoreBundle:Post:index{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the Post:index page</h1>*/
/* {% endblock %}*/
/* */
