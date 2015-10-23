<?php

/* base.html.twig */
class __TwigTemplate_e399ff9ac543674295b574fc1ebc7517678ad849a8a456de15be29aa9e4ba853 extends Twig_Template
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
        $__internal_705b8f58e76239779564079b457b2e0075cb7a6f4d8ee297f8de43a54c49764c = $this->env->getExtension("native_profiler");
        $__internal_705b8f58e76239779564079b457b2e0075cb7a6f4d8ee297f8de43a54c49764c->enter($__internal_705b8f58e76239779564079b457b2e0075cb7a6f4d8ee297f8de43a54c49764c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_705b8f58e76239779564079b457b2e0075cb7a6f4d8ee297f8de43a54c49764c->leave($__internal_705b8f58e76239779564079b457b2e0075cb7a6f4d8ee297f8de43a54c49764c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0c5ce83e91b753f2e1c7f076795bd11a276488607a5ee6febe58969054c8efa = $this->env->getExtension("native_profiler");
        $__internal_c0c5ce83e91b753f2e1c7f076795bd11a276488607a5ee6febe58969054c8efa->enter($__internal_c0c5ce83e91b753f2e1c7f076795bd11a276488607a5ee6febe58969054c8efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c0c5ce83e91b753f2e1c7f076795bd11a276488607a5ee6febe58969054c8efa->leave($__internal_c0c5ce83e91b753f2e1c7f076795bd11a276488607a5ee6febe58969054c8efa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9bd14b8fa7a3423e2a7a03dc0a5984d39459be76a78753956d8d55450ade810 = $this->env->getExtension("native_profiler");
        $__internal_e9bd14b8fa7a3423e2a7a03dc0a5984d39459be76a78753956d8d55450ade810->enter($__internal_e9bd14b8fa7a3423e2a7a03dc0a5984d39459be76a78753956d8d55450ade810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9bd14b8fa7a3423e2a7a03dc0a5984d39459be76a78753956d8d55450ade810->leave($__internal_e9bd14b8fa7a3423e2a7a03dc0a5984d39459be76a78753956d8d55450ade810_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9668fc89adf1d822803dda5b5e3d8e38847b8fb5d1b4e6aedae954e48488c6fc = $this->env->getExtension("native_profiler");
        $__internal_9668fc89adf1d822803dda5b5e3d8e38847b8fb5d1b4e6aedae954e48488c6fc->enter($__internal_9668fc89adf1d822803dda5b5e3d8e38847b8fb5d1b4e6aedae954e48488c6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9668fc89adf1d822803dda5b5e3d8e38847b8fb5d1b4e6aedae954e48488c6fc->leave($__internal_9668fc89adf1d822803dda5b5e3d8e38847b8fb5d1b4e6aedae954e48488c6fc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b20a0fbc0f4cae91c5d5de79e7fed5e0ede45e922b10e181362ac1e4558e813 = $this->env->getExtension("native_profiler");
        $__internal_8b20a0fbc0f4cae91c5d5de79e7fed5e0ede45e922b10e181362ac1e4558e813->enter($__internal_8b20a0fbc0f4cae91c5d5de79e7fed5e0ede45e922b10e181362ac1e4558e813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8b20a0fbc0f4cae91c5d5de79e7fed5e0ede45e922b10e181362ac1e4558e813->leave($__internal_8b20a0fbc0f4cae91c5d5de79e7fed5e0ede45e922b10e181362ac1e4558e813_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
