<?php

/* admin/index.html.twig */
class __TwigTemplate_811f2a1ba1a458f4cc309dde3eba8143027c8d96070b02c7e579dfd0591c693b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e651564f2fa88958786cf5d9da97f8a7e5568b84e557add41d7a563add327b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e651564f2fa88958786cf5d9da97f8a7e5568b84e557add41d7a563add327b5->enter($__internal_3e651564f2fa88958786cf5d9da97f8a7e5568b84e557add41d7a563add327b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_217f3aa856523bcbcb26fe47af9ece3263e9a3784b7b0aeda27a7a384c617e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217f3aa856523bcbcb26fe47af9ece3263e9a3784b7b0aeda27a7a384c617e1e->enter($__internal_217f3aa856523bcbcb26fe47af9ece3263e9a3784b7b0aeda27a7a384c617e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e651564f2fa88958786cf5d9da97f8a7e5568b84e557add41d7a563add327b5->leave($__internal_3e651564f2fa88958786cf5d9da97f8a7e5568b84e557add41d7a563add327b5_prof);

        
        $__internal_217f3aa856523bcbcb26fe47af9ece3263e9a3784b7b0aeda27a7a384c617e1e->leave($__internal_217f3aa856523bcbcb26fe47af9ece3263e9a3784b7b0aeda27a7a384c617e1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f424880f493a05f98ccb5e763ed96fddf4d548538db494cd4f510d920902fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f424880f493a05f98ccb5e763ed96fddf4d548538db494cd4f510d920902fe->enter($__internal_d5f424880f493a05f98ccb5e763ed96fddf4d548538db494cd4f510d920902fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b093b59378c8d9c24ebc6c278c8562a8fde8be2ca0b3ef7e26cef1b466cae78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b093b59378c8d9c24ebc6c278c8562a8fde8be2ca0b3ef7e26cef1b466cae78->enter($__internal_0b093b59378c8d9c24ebc6c278c8562a8fde8be2ca0b3ef7e26cef1b466cae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/attractions.jpg"), "html", null, true);
        echo "\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

";
        
        $__internal_0b093b59378c8d9c24ebc6c278c8562a8fde8be2ca0b3ef7e26cef1b466cae78->leave($__internal_0b093b59378c8d9c24ebc6c278c8562a8fde8be2ca0b3ef7e26cef1b466cae78_prof);

        
        $__internal_d5f424880f493a05f98ccb5e763ed96fddf4d548538db494cd4f510d920902fe->leave($__internal_d5f424880f493a05f98ccb5e763ed96fddf4d548538db494cd4f510d920902fe_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"row\">
      <div class=\"medium-6 columns\">
        <h4>Welcome to the Landon Hotel</h4>
        <img class=\"thumbnail\" src=\"{{ asset('images/attractions.jpg') }}\">
      </div>
      <div class=\"medium-6 large-5 columns\">
        <p>The original Landon perseveres after 50 years in the heart of West London. The West End neighborhood has something for everyone—from theater to dining to historic sights.</p>
        <p>And the not-to-miss Rooftop Cafe is a great place for travelers and locals to engage over drinks, food, and good conversation. </p>
        <p>To learn more about the Landon Hotel in the West End, browse our website and download our handy information sheet.</p>
      </div>
    </div>

{% endblock %}
", "admin/index.html.twig", "/Users/admin/Desktop/symfony-project/app/Resources/views/admin/index.html.twig");
    }
}
