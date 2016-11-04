<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a27e54ac5c52f72d6193a70bfd7f157a2348617f0f54ae38d78197d92849546d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58263996b48b52efd9c05a57aa806fcd7c520eea3338a0afa46141f5098bbc81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58263996b48b52efd9c05a57aa806fcd7c520eea3338a0afa46141f5098bbc81->enter($__internal_58263996b48b52efd9c05a57aa806fcd7c520eea3338a0afa46141f5098bbc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58263996b48b52efd9c05a57aa806fcd7c520eea3338a0afa46141f5098bbc81->leave($__internal_58263996b48b52efd9c05a57aa806fcd7c520eea3338a0afa46141f5098bbc81_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa3a984b5a681a340add077d309ef116dfa681c77cc1a4c05d1a872657d0595c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3a984b5a681a340add077d309ef116dfa681c77cc1a4c05d1a872657d0595c->enter($__internal_aa3a984b5a681a340add077d309ef116dfa681c77cc1a4c05d1a872657d0595c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_aa3a984b5a681a340add077d309ef116dfa681c77cc1a4c05d1a872657d0595c->leave($__internal_aa3a984b5a681a340add077d309ef116dfa681c77cc1a4c05d1a872657d0595c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a3af54e519dcd7f6b10167540ef046be81cc87279e354083dfada602093b6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a3af54e519dcd7f6b10167540ef046be81cc87279e354083dfada602093b6fa->enter($__internal_4a3af54e519dcd7f6b10167540ef046be81cc87279e354083dfada602093b6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a3af54e519dcd7f6b10167540ef046be81cc87279e354083dfada602093b6fa->leave($__internal_4a3af54e519dcd7f6b10167540ef046be81cc87279e354083dfada602093b6fa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b85bb3059ff3cb30f97fcb943fce060085ce94bb9f59914f1b9f40421202584b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85bb3059ff3cb30f97fcb943fce060085ce94bb9f59914f1b9f40421202584b->enter($__internal_b85bb3059ff3cb30f97fcb943fce060085ce94bb9f59914f1b9f40421202584b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b85bb3059ff3cb30f97fcb943fce060085ce94bb9f59914f1b9f40421202584b->leave($__internal_b85bb3059ff3cb30f97fcb943fce060085ce94bb9f59914f1b9f40421202584b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
