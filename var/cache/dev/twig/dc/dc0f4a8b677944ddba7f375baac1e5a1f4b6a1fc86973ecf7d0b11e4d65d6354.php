<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4d4feffea5edcccc51cda82847fdd83d69a97886366809a7595d4698e3f2af24 extends Twig_Template
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
        $__internal_01ae11677ac9c0885b8a52a3801de3ce07f2fed660e13f73b2734b1209e08fce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ae11677ac9c0885b8a52a3801de3ce07f2fed660e13f73b2734b1209e08fce->enter($__internal_01ae11677ac9c0885b8a52a3801de3ce07f2fed660e13f73b2734b1209e08fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_349cd2d8c7d1e475731c2a7c9ac29eea143b4702127f69ccf70738b464601051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349cd2d8c7d1e475731c2a7c9ac29eea143b4702127f69ccf70738b464601051->enter($__internal_349cd2d8c7d1e475731c2a7c9ac29eea143b4702127f69ccf70738b464601051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ae11677ac9c0885b8a52a3801de3ce07f2fed660e13f73b2734b1209e08fce->leave($__internal_01ae11677ac9c0885b8a52a3801de3ce07f2fed660e13f73b2734b1209e08fce_prof);

        
        $__internal_349cd2d8c7d1e475731c2a7c9ac29eea143b4702127f69ccf70738b464601051->leave($__internal_349cd2d8c7d1e475731c2a7c9ac29eea143b4702127f69ccf70738b464601051_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02a983189b5eff30e99fc9e08c4c2053ae8c935edb34bee79cbbcf8ae7417f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a983189b5eff30e99fc9e08c4c2053ae8c935edb34bee79cbbcf8ae7417f28->enter($__internal_02a983189b5eff30e99fc9e08c4c2053ae8c935edb34bee79cbbcf8ae7417f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72aa2ef1a6a52a242bb249c73e1f9187cfeabede538b4055d7156f3945cea747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72aa2ef1a6a52a242bb249c73e1f9187cfeabede538b4055d7156f3945cea747->enter($__internal_72aa2ef1a6a52a242bb249c73e1f9187cfeabede538b4055d7156f3945cea747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72aa2ef1a6a52a242bb249c73e1f9187cfeabede538b4055d7156f3945cea747->leave($__internal_72aa2ef1a6a52a242bb249c73e1f9187cfeabede538b4055d7156f3945cea747_prof);

        
        $__internal_02a983189b5eff30e99fc9e08c4c2053ae8c935edb34bee79cbbcf8ae7417f28->leave($__internal_02a983189b5eff30e99fc9e08c4c2053ae8c935edb34bee79cbbcf8ae7417f28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de131cedd109690b9b0f4c3602efdd0ee505000012d6c56c361309516859b0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de131cedd109690b9b0f4c3602efdd0ee505000012d6c56c361309516859b0fc->enter($__internal_de131cedd109690b9b0f4c3602efdd0ee505000012d6c56c361309516859b0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e337d186d29d0898dbfb23d4fb6d966dc194ceff4a0e3faa72362095f3519cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e337d186d29d0898dbfb23d4fb6d966dc194ceff4a0e3faa72362095f3519cd->enter($__internal_7e337d186d29d0898dbfb23d4fb6d966dc194ceff4a0e3faa72362095f3519cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e337d186d29d0898dbfb23d4fb6d966dc194ceff4a0e3faa72362095f3519cd->leave($__internal_7e337d186d29d0898dbfb23d4fb6d966dc194ceff4a0e3faa72362095f3519cd_prof);

        
        $__internal_de131cedd109690b9b0f4c3602efdd0ee505000012d6c56c361309516859b0fc->leave($__internal_de131cedd109690b9b0f4c3602efdd0ee505000012d6c56c361309516859b0fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_011dccf7cf3834e283f30e24c6e9caa59b34971baa513bdfeedf25a57d75d05d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_011dccf7cf3834e283f30e24c6e9caa59b34971baa513bdfeedf25a57d75d05d->enter($__internal_011dccf7cf3834e283f30e24c6e9caa59b34971baa513bdfeedf25a57d75d05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f22a1e5c517dba4c36dcaf93da7a5d75e353e0725975d29f51bff2d8e576c57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22a1e5c517dba4c36dcaf93da7a5d75e353e0725975d29f51bff2d8e576c57b->enter($__internal_f22a1e5c517dba4c36dcaf93da7a5d75e353e0725975d29f51bff2d8e576c57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f22a1e5c517dba4c36dcaf93da7a5d75e353e0725975d29f51bff2d8e576c57b->leave($__internal_f22a1e5c517dba4c36dcaf93da7a5d75e353e0725975d29f51bff2d8e576c57b_prof);

        
        $__internal_011dccf7cf3834e283f30e24c6e9caa59b34971baa513bdfeedf25a57d75d05d->leave($__internal_011dccf7cf3834e283f30e24c6e9caa59b34971baa513bdfeedf25a57d75d05d_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/Users/admin/Desktop/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
