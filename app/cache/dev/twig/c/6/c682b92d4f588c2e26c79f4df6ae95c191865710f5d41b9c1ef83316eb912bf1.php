<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b62253a93b3de4613006abe72fd62984e422e1a6b5a9eb564806abae2dbc2815 extends Twig_Template
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
        $__internal_fa6ce1665a413f2809846f49ddb0eaed22b649a4afd3e1ec784100d92e266f6c = $this->env->getExtension("native_profiler");
        $__internal_fa6ce1665a413f2809846f49ddb0eaed22b649a4afd3e1ec784100d92e266f6c->enter($__internal_fa6ce1665a413f2809846f49ddb0eaed22b649a4afd3e1ec784100d92e266f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6ce1665a413f2809846f49ddb0eaed22b649a4afd3e1ec784100d92e266f6c->leave($__internal_fa6ce1665a413f2809846f49ddb0eaed22b649a4afd3e1ec784100d92e266f6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fb8397b80979831acdd671ae0b3bbd4f15ed6965f0e5a582f9f34cf8757ed47 = $this->env->getExtension("native_profiler");
        $__internal_1fb8397b80979831acdd671ae0b3bbd4f15ed6965f0e5a582f9f34cf8757ed47->enter($__internal_1fb8397b80979831acdd671ae0b3bbd4f15ed6965f0e5a582f9f34cf8757ed47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1fb8397b80979831acdd671ae0b3bbd4f15ed6965f0e5a582f9f34cf8757ed47->leave($__internal_1fb8397b80979831acdd671ae0b3bbd4f15ed6965f0e5a582f9f34cf8757ed47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de53863e32a4eb77cd2079781a03aa79fe5aeab906af22e71dd582441ddab11c = $this->env->getExtension("native_profiler");
        $__internal_de53863e32a4eb77cd2079781a03aa79fe5aeab906af22e71dd582441ddab11c->enter($__internal_de53863e32a4eb77cd2079781a03aa79fe5aeab906af22e71dd582441ddab11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de53863e32a4eb77cd2079781a03aa79fe5aeab906af22e71dd582441ddab11c->leave($__internal_de53863e32a4eb77cd2079781a03aa79fe5aeab906af22e71dd582441ddab11c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f4033e4664e17a7bb468326bc8cd52b8be860956ab7fb59ae1d72824085742f = $this->env->getExtension("native_profiler");
        $__internal_1f4033e4664e17a7bb468326bc8cd52b8be860956ab7fb59ae1d72824085742f->enter($__internal_1f4033e4664e17a7bb468326bc8cd52b8be860956ab7fb59ae1d72824085742f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1f4033e4664e17a7bb468326bc8cd52b8be860956ab7fb59ae1d72824085742f->leave($__internal_1f4033e4664e17a7bb468326bc8cd52b8be860956ab7fb59ae1d72824085742f_prof);

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
