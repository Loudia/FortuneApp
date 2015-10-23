<?php

/* default/index.html.twig */
class __TwigTemplate_7ceea5667e1017cc6231dbb6113c372a19ba2a3a30439a63dd1c3f303ea28cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8d0687804b1d416a62ec59c66983ed501a7e4d5cfda2229e5435f7ee5a21d8f = $this->env->getExtension("native_profiler");
        $__internal_f8d0687804b1d416a62ec59c66983ed501a7e4d5cfda2229e5435f7ee5a21d8f->enter($__internal_f8d0687804b1d416a62ec59c66983ed501a7e4d5cfda2229e5435f7ee5a21d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d0687804b1d416a62ec59c66983ed501a7e4d5cfda2229e5435f7ee5a21d8f->leave($__internal_f8d0687804b1d416a62ec59c66983ed501a7e4d5cfda2229e5435f7ee5a21d8f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42a0ffd8cdd92771656198eb956ba50ecfc78f3485d885dfb9bcbe907e5f1cfa = $this->env->getExtension("native_profiler");
        $__internal_42a0ffd8cdd92771656198eb956ba50ecfc78f3485d885dfb9bcbe907e5f1cfa->enter($__internal_42a0ffd8cdd92771656198eb956ba50ecfc78f3485d885dfb9bcbe907e5f1cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"header\">
      <h1>H Y B R I S</h1>
      <hr>
      <ul>
        <li class=\"choice\"><a href=\"\">Top Stories</a></li>
        <li class=\"choice\"><a href=\"\">Worst Stories</a></li>
        <li class=\"choice\"><a href=\"\">Titre 3</a></li>
      </ul>
    </div>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fortunes"]) ? $context["fortunes"] : $this->getContext($context, "fortunes")));
        foreach ($context['_seq'] as $context["_key"] => $context["fortune"]) {
            // line 14
            echo "      <div class=\"article\">
        <div class=\"title\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("story", array("id" => $this->getAttribute($context["fortune"], "id", array()))), "html", null, true);
            echo "\"><h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fortune"], "title", array()), "html", null, true);
            echo "</h2></a></br></div>
        <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["fortune"], "content", array()), "html", null, true);
            echo "</p>
        <p class=\"author\">De <strong>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["fortune"], "author", array()), "html", null, true);
            echo "</strong> le <strong>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fortune"], "createAt", array()), "d/n/y H:i"), "html", null, true);
            echo "</strong></p>
        <p class=\"vote\"><a class=\"up\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vote_up", array("id" => $this->getAttribute($context["fortune"], "id", array()))), "html", null, true);
            echo "\">Upvote +";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fortune"], "getUpVote", array()), "html", null, true);
            echo "</a> <a class=\"down\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vote_down", array("id" => $this->getAttribute($context["fortune"], "id", array()))), "html", null, true);
            echo "\">Downvote -";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fortune"], "getDownVote", array()), "html", null, true);
            echo "</a></p>
      </div>
      <div class=\"space\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fortune'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "<div class=\"page\">";
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["fortunes"]) ? $context["fortunes"] : $this->getContext($context, "fortunes")));
        echo "</div>
";
        
        $__internal_42a0ffd8cdd92771656198eb956ba50ecfc78f3485d885dfb9bcbe907e5f1cfa->leave($__internal_42a0ffd8cdd92771656198eb956ba50ecfc78f3485d885dfb9bcbe907e5f1cfa_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d04cb5399d28c2d3e37b358692c3bee80c975ac93c6be2d9eeaad9f91a826af = $this->env->getExtension("native_profiler");
        $__internal_0d04cb5399d28c2d3e37b358692c3bee80c975ac93c6be2d9eeaad9f91a826af->enter($__internal_0d04cb5399d28c2d3e37b358692c3bee80c975ac93c6be2d9eeaad9f91a826af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "<style>
body{font-family:adobe garamond pro;background-color:#E9E6DB;}
.header hr{width:100%;color:black;margin-bottom: 80px;}
h1{text-align:center;font-size:2.8em;}
ul{width:100%;}
li{list-style:none;display:inline-block;}
p{line-height:25px;}
.article{width:650px;margin:auto;text-align:center;padding-bottom:50px;padding-left:10px;padding-right:10px;background-color:#DBE0E6;border:solid 1px #CFD4D9;border-radius:3px;}
.title{text-align:center;padding-top:50px;}
.title a{text-decoration:none;color:black;}
.author{float:right;padding-top:18px;}
.vote{text-align:initial;padding-top:35px;}
.vote a{text-decoration:none;}
.up{color:green;}
.down{color:red;}
.space{width:100%;height:60px;}
</style>
";
        
        $__internal_0d04cb5399d28c2d3e37b358692c3bee80c975ac93c6be2d9eeaad9f91a826af->leave($__internal_0d04cb5399d28c2d3e37b358692c3bee80c975ac93c6be2d9eeaad9f91a826af_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 26,  101 => 25,  91 => 22,  75 => 18,  69 => 17,  65 => 16,  59 => 15,  56 => 14,  52 => 13,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="header">*/
/*       <h1>H Y B R I S</h1>*/
/*       <hr>*/
/*       <ul>*/
/*         <li class="choice"><a href="">Top Stories</a></li>*/
/*         <li class="choice"><a href="">Worst Stories</a></li>*/
/*         <li class="choice"><a href="">Titre 3</a></li>*/
/*       </ul>*/
/*     </div>*/
/*     {% for fortune in fortunes %}*/
/*       <div class="article">*/
/*         <div class="title"><a href="{{ path("story", { id: fortune.id }) }}"><h2>{{ fortune.title }}</h2></a></br></div>*/
/*         <p>{{ fortune.content }}</p>*/
/*         <p class="author">De <strong>{{ fortune.author }}</strong> le <strong>{{ fortune.createAt|date("d/n/y H:i") }}</strong></p>*/
/*         <p class="vote"><a class="up" href="{{ path("vote_up", {id:fortune.id}) }}">Upvote +{{ fortune.getUpVote }}</a> <a class="down" href="{{ path("vote_down", {id:fortune.id}) }}">Downvote -{{ fortune.getDownVote }}</a></p>*/
/*       </div>*/
/*       <div class="space"></div>*/
/*     {% endfor %}*/
/* <div class="page">{{ pagerfanta(fortunes) }}</div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* body{font-family:adobe garamond pro;background-color:#E9E6DB;}*/
/* .header hr{width:100%;color:black;margin-bottom: 80px;}*/
/* h1{text-align:center;font-size:2.8em;}*/
/* ul{width:100%;}*/
/* li{list-style:none;display:inline-block;}*/
/* p{line-height:25px;}*/
/* .article{width:650px;margin:auto;text-align:center;padding-bottom:50px;padding-left:10px;padding-right:10px;background-color:#DBE0E6;border:solid 1px #CFD4D9;border-radius:3px;}*/
/* .title{text-align:center;padding-top:50px;}*/
/* .title a{text-decoration:none;color:black;}*/
/* .author{float:right;padding-top:18px;}*/
/* .vote{text-align:initial;padding-top:35px;}*/
/* .vote a{text-decoration:none;}*/
/* .up{color:green;}*/
/* .down{color:red;}*/
/* .space{width:100%;height:60px;}*/
/* </style>*/
/* {% endblock %}*/
/* */
