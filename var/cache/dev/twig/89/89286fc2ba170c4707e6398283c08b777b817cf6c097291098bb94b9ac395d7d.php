<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7db9032a528ac897a0aa9513cc3133c8d4ad9f605b092b4c3753ff5351bfb33d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c3168f5c7597aa49f5155d0fe70abadd90aacb34650f2ea128e7fb22717d3006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3168f5c7597aa49f5155d0fe70abadd90aacb34650f2ea128e7fb22717d3006->enter($__internal_c3168f5c7597aa49f5155d0fe70abadd90aacb34650f2ea128e7fb22717d3006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f09e281b90b94f33587fe953419485c3cd3a3d7b7654887a878316df8230bdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09e281b90b94f33587fe953419485c3cd3a3d7b7654887a878316df8230bdd0->enter($__internal_f09e281b90b94f33587fe953419485c3cd3a3d7b7654887a878316df8230bdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3168f5c7597aa49f5155d0fe70abadd90aacb34650f2ea128e7fb22717d3006->leave($__internal_c3168f5c7597aa49f5155d0fe70abadd90aacb34650f2ea128e7fb22717d3006_prof);

        
        $__internal_f09e281b90b94f33587fe953419485c3cd3a3d7b7654887a878316df8230bdd0->leave($__internal_f09e281b90b94f33587fe953419485c3cd3a3d7b7654887a878316df8230bdd0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b6dbaee70de3dc17bb3883565ff22da20b4555dc9ef5b528c75629efcc84ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6dbaee70de3dc17bb3883565ff22da20b4555dc9ef5b528c75629efcc84ebd->enter($__internal_1b6dbaee70de3dc17bb3883565ff22da20b4555dc9ef5b528c75629efcc84ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_424f4f8f15c4cbc2ff7c946c4465d5d90f93b966f9d5b09ce4cf47de9fb6a6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424f4f8f15c4cbc2ff7c946c4465d5d90f93b966f9d5b09ce4cf47de9fb6a6b2->enter($__internal_424f4f8f15c4cbc2ff7c946c4465d5d90f93b966f9d5b09ce4cf47de9fb6a6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_424f4f8f15c4cbc2ff7c946c4465d5d90f93b966f9d5b09ce4cf47de9fb6a6b2->leave($__internal_424f4f8f15c4cbc2ff7c946c4465d5d90f93b966f9d5b09ce4cf47de9fb6a6b2_prof);

        
        $__internal_1b6dbaee70de3dc17bb3883565ff22da20b4555dc9ef5b528c75629efcc84ebd->leave($__internal_1b6dbaee70de3dc17bb3883565ff22da20b4555dc9ef5b528c75629efcc84ebd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_82e6d11402e704cb101e0e39c6d6faacd4c7202c46f2b2f6b47cd27df82afd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e6d11402e704cb101e0e39c6d6faacd4c7202c46f2b2f6b47cd27df82afd1a->enter($__internal_82e6d11402e704cb101e0e39c6d6faacd4c7202c46f2b2f6b47cd27df82afd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01f3e2abaf0afe8f63313b3dfa34025ba6705381cdf97007cacfa5da59714a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f3e2abaf0afe8f63313b3dfa34025ba6705381cdf97007cacfa5da59714a64->enter($__internal_01f3e2abaf0afe8f63313b3dfa34025ba6705381cdf97007cacfa5da59714a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_01f3e2abaf0afe8f63313b3dfa34025ba6705381cdf97007cacfa5da59714a64->leave($__internal_01f3e2abaf0afe8f63313b3dfa34025ba6705381cdf97007cacfa5da59714a64_prof);

        
        $__internal_82e6d11402e704cb101e0e39c6d6faacd4c7202c46f2b2f6b47cd27df82afd1a->leave($__internal_82e6d11402e704cb101e0e39c6d6faacd4c7202c46f2b2f6b47cd27df82afd1a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51dfa92f8be36e2957c33c9ca82fad01725850573edb687c7677352524a3d59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51dfa92f8be36e2957c33c9ca82fad01725850573edb687c7677352524a3d59d->enter($__internal_51dfa92f8be36e2957c33c9ca82fad01725850573edb687c7677352524a3d59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_681458905d6e432e1f41cbe7f7b592eb5fcef75bc2b7408c2ea3f525131599d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681458905d6e432e1f41cbe7f7b592eb5fcef75bc2b7408c2ea3f525131599d6->enter($__internal_681458905d6e432e1f41cbe7f7b592eb5fcef75bc2b7408c2ea3f525131599d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_681458905d6e432e1f41cbe7f7b592eb5fcef75bc2b7408c2ea3f525131599d6->leave($__internal_681458905d6e432e1f41cbe7f7b592eb5fcef75bc2b7408c2ea3f525131599d6_prof);

        
        $__internal_51dfa92f8be36e2957c33c9ca82fad01725850573edb687c7677352524a3d59d->leave($__internal_51dfa92f8be36e2957c33c9ca82fad01725850573edb687c7677352524a3d59d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/admin/Desktop/symfony-project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
