<?php

/* ::base.html.twig */
class __TwigTemplate_2d73ae8bbe2df0f250cdb1b8785fb330f4876ff2770c768e1335faebff5eaf7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3751dc634f8eb822d8451d5bb77d5f8e4afa1fbdecd04d42ff82ff19e5c36bde = $this->env->getExtension("native_profiler");
        $__internal_3751dc634f8eb822d8451d5bb77d5f8e4afa1fbdecd04d42ff82ff19e5c36bde->enter($__internal_3751dc634f8eb822d8451d5bb77d5f8e4afa1fbdecd04d42ff82ff19e5c36bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3751dc634f8eb822d8451d5bb77d5f8e4afa1fbdecd04d42ff82ff19e5c36bde->leave($__internal_3751dc634f8eb822d8451d5bb77d5f8e4afa1fbdecd04d42ff82ff19e5c36bde_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_545409a02309e9018fc8417f2289a40a41249eea606861c7322af0aa33157700 = $this->env->getExtension("native_profiler");
        $__internal_545409a02309e9018fc8417f2289a40a41249eea606861c7322af0aa33157700->enter($__internal_545409a02309e9018fc8417f2289a40a41249eea606861c7322af0aa33157700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_545409a02309e9018fc8417f2289a40a41249eea606861c7322af0aa33157700->leave($__internal_545409a02309e9018fc8417f2289a40a41249eea606861c7322af0aa33157700_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f51be301bf8d49646279b0339eaf79f78dc9492c32889913a44777035f6954b4 = $this->env->getExtension("native_profiler");
        $__internal_f51be301bf8d49646279b0339eaf79f78dc9492c32889913a44777035f6954b4->enter($__internal_f51be301bf8d49646279b0339eaf79f78dc9492c32889913a44777035f6954b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f51be301bf8d49646279b0339eaf79f78dc9492c32889913a44777035f6954b4->leave($__internal_f51be301bf8d49646279b0339eaf79f78dc9492c32889913a44777035f6954b4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_006abcc60c67be00d8d5cd37babd8f7034c69357f440bd504e2886346488992c = $this->env->getExtension("native_profiler");
        $__internal_006abcc60c67be00d8d5cd37babd8f7034c69357f440bd504e2886346488992c->enter($__internal_006abcc60c67be00d8d5cd37babd8f7034c69357f440bd504e2886346488992c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_006abcc60c67be00d8d5cd37babd8f7034c69357f440bd504e2886346488992c->leave($__internal_006abcc60c67be00d8d5cd37babd8f7034c69357f440bd504e2886346488992c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_787a2e3c5c8597cfb022b8205af51866eb8557f8e582c53da902daf2c4b0c7c3 = $this->env->getExtension("native_profiler");
        $__internal_787a2e3c5c8597cfb022b8205af51866eb8557f8e582c53da902daf2c4b0c7c3->enter($__internal_787a2e3c5c8597cfb022b8205af51866eb8557f8e582c53da902daf2c4b0c7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_787a2e3c5c8597cfb022b8205af51866eb8557f8e582c53da902daf2c4b0c7c3->leave($__internal_787a2e3c5c8597cfb022b8205af51866eb8557f8e582c53da902daf2c4b0c7c3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
