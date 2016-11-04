<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e579527c56794f663169331e48ac318b124728824097a41a2ce138557c43dfcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f29ba3ee342d5db20236e1c1b72da8c2dc68599d8a73babea40bc87dee9596d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29ba3ee342d5db20236e1c1b72da8c2dc68599d8a73babea40bc87dee9596d6->enter($__internal_f29ba3ee342d5db20236e1c1b72da8c2dc68599d8a73babea40bc87dee9596d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f29ba3ee342d5db20236e1c1b72da8c2dc68599d8a73babea40bc87dee9596d6->leave($__internal_f29ba3ee342d5db20236e1c1b72da8c2dc68599d8a73babea40bc87dee9596d6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_14015c218bde022dfb24b554e99078cbc237bdb81fcd71c5dd6ef6611da4e79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14015c218bde022dfb24b554e99078cbc237bdb81fcd71c5dd6ef6611da4e79c->enter($__internal_14015c218bde022dfb24b554e99078cbc237bdb81fcd71c5dd6ef6611da4e79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_14015c218bde022dfb24b554e99078cbc237bdb81fcd71c5dd6ef6611da4e79c->leave($__internal_14015c218bde022dfb24b554e99078cbc237bdb81fcd71c5dd6ef6611da4e79c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b0976f8af231f00298952697c869534b3239055f8b25e09947117acda515626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0976f8af231f00298952697c869534b3239055f8b25e09947117acda515626->enter($__internal_3b0976f8af231f00298952697c869534b3239055f8b25e09947117acda515626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3b0976f8af231f00298952697c869534b3239055f8b25e09947117acda515626->leave($__internal_3b0976f8af231f00298952697c869534b3239055f8b25e09947117acda515626_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0466625b5894eaa965910b48cd9551d199b8e6923ac1243592f6ca410a0b63df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0466625b5894eaa965910b48cd9551d199b8e6923ac1243592f6ca410a0b63df->enter($__internal_0466625b5894eaa965910b48cd9551d199b8e6923ac1243592f6ca410a0b63df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0466625b5894eaa965910b48cd9551d199b8e6923ac1243592f6ca410a0b63df->leave($__internal_0466625b5894eaa965910b48cd9551d199b8e6923ac1243592f6ca410a0b63df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
