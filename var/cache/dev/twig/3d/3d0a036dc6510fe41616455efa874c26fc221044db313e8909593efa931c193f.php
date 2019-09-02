<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f6c271c6b89eebeeeb97b91625f1401b284b8c46b91a20034af872964b0a5c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bf695e2032c238553a0f6484df794f13c18416c63b59ea0fcc523470d32c66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf695e2032c238553a0f6484df794f13c18416c63b59ea0fcc523470d32c66a->enter($__internal_3bf695e2032c238553a0f6484df794f13c18416c63b59ea0fcc523470d32c66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ca3b16bd83c5d48b5adc438094e3b48e185ce24ab7906712416d9a8f27e5b012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3b16bd83c5d48b5adc438094e3b48e185ce24ab7906712416d9a8f27e5b012->enter($__internal_ca3b16bd83c5d48b5adc438094e3b48e185ce24ab7906712416d9a8f27e5b012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf695e2032c238553a0f6484df794f13c18416c63b59ea0fcc523470d32c66a->leave($__internal_3bf695e2032c238553a0f6484df794f13c18416c63b59ea0fcc523470d32c66a_prof);

        
        $__internal_ca3b16bd83c5d48b5adc438094e3b48e185ce24ab7906712416d9a8f27e5b012->leave($__internal_ca3b16bd83c5d48b5adc438094e3b48e185ce24ab7906712416d9a8f27e5b012_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42ecd9aea6fe3d935c119018052de74370f373b24840cd15d9900ea3f6927457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ecd9aea6fe3d935c119018052de74370f373b24840cd15d9900ea3f6927457->enter($__internal_42ecd9aea6fe3d935c119018052de74370f373b24840cd15d9900ea3f6927457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a02d506c64b1dce1216ff7e071dc67c882831702a72d3751a5e5f8c2f58d39b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02d506c64b1dce1216ff7e071dc67c882831702a72d3751a5e5f8c2f58d39b4->enter($__internal_a02d506c64b1dce1216ff7e071dc67c882831702a72d3751a5e5f8c2f58d39b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_a02d506c64b1dce1216ff7e071dc67c882831702a72d3751a5e5f8c2f58d39b4->leave($__internal_a02d506c64b1dce1216ff7e071dc67c882831702a72d3751a5e5f8c2f58d39b4_prof);

        
        $__internal_42ecd9aea6fe3d935c119018052de74370f373b24840cd15d9900ea3f6927457->leave($__internal_42ecd9aea6fe3d935c119018052de74370f373b24840cd15d9900ea3f6927457_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/admin/Desktop/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
