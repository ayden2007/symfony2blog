<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f36e2496eff473ca01a697d3411c733d5e954556be2116306afab3c462e70b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea6c463dcf81dc4a586451e489445cb8e59a502356e81560f5058c49e47019f7 = $this->env->getExtension("native_profiler");
        $__internal_ea6c463dcf81dc4a586451e489445cb8e59a502356e81560f5058c49e47019f7->enter($__internal_ea6c463dcf81dc4a586451e489445cb8e59a502356e81560f5058c49e47019f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6c463dcf81dc4a586451e489445cb8e59a502356e81560f5058c49e47019f7->leave($__internal_ea6c463dcf81dc4a586451e489445cb8e59a502356e81560f5058c49e47019f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a05259ff665af889d5bf23523c2fe22105ceffbbeb3d18f99fc432a43458cd90 = $this->env->getExtension("native_profiler");
        $__internal_a05259ff665af889d5bf23523c2fe22105ceffbbeb3d18f99fc432a43458cd90->enter($__internal_a05259ff665af889d5bf23523c2fe22105ceffbbeb3d18f99fc432a43458cd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a05259ff665af889d5bf23523c2fe22105ceffbbeb3d18f99fc432a43458cd90->leave($__internal_a05259ff665af889d5bf23523c2fe22105ceffbbeb3d18f99fc432a43458cd90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a057f53eae185a2671cd512c4b5b237f4d81df29c1d8274ac5195570a71ad80c = $this->env->getExtension("native_profiler");
        $__internal_a057f53eae185a2671cd512c4b5b237f4d81df29c1d8274ac5195570a71ad80c->enter($__internal_a057f53eae185a2671cd512c4b5b237f4d81df29c1d8274ac5195570a71ad80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a057f53eae185a2671cd512c4b5b237f4d81df29c1d8274ac5195570a71ad80c->leave($__internal_a057f53eae185a2671cd512c4b5b237f4d81df29c1d8274ac5195570a71ad80c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e37be0d43658ed2e58923e98533dec47593ed4a2755771bb8bf21624e4ec42c5 = $this->env->getExtension("native_profiler");
        $__internal_e37be0d43658ed2e58923e98533dec47593ed4a2755771bb8bf21624e4ec42c5->enter($__internal_e37be0d43658ed2e58923e98533dec47593ed4a2755771bb8bf21624e4ec42c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e37be0d43658ed2e58923e98533dec47593ed4a2755771bb8bf21624e4ec42c5->leave($__internal_e37be0d43658ed2e58923e98533dec47593ed4a2755771bb8bf21624e4ec42c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
