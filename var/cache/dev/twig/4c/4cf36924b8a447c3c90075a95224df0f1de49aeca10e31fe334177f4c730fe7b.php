<?php

/* reservations/index.html.twig */
class __TwigTemplate_ee463235539b69cc2e9539d7966d9f32fe53bacc1e659a0314b14f019bed78a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/index.html.twig", 1);
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
        $__internal_a5346a91f9cc890ed6c5bc16894f7610e6d9504b06c7b14374987490452383ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5346a91f9cc890ed6c5bc16894f7610e6d9504b06c7b14374987490452383ea->enter($__internal_a5346a91f9cc890ed6c5bc16894f7610e6d9504b06c7b14374987490452383ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $__internal_b3be0cc3533930f02084ec83b8bd2c521d783d6fc97ff17173b402c942c50fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3be0cc3533930f02084ec83b8bd2c521d783d6fc97ff17173b402c942c50fac->enter($__internal_b3be0cc3533930f02084ec83b8bd2c521d783d6fc97ff17173b402c942c50fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5346a91f9cc890ed6c5bc16894f7610e6d9504b06c7b14374987490452383ea->leave($__internal_a5346a91f9cc890ed6c5bc16894f7610e6d9504b06c7b14374987490452383ea_prof);

        
        $__internal_b3be0cc3533930f02084ec83b8bd2c521d783d6fc97ff17173b402c942c50fac->leave($__internal_b3be0cc3533930f02084ec83b8bd2c521d783d6fc97ff17173b402c942c50fac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98c49f5fb520fcc0ed5a248c07b94ce04b9b11258bc236855bba783340355dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c49f5fb520fcc0ed5a248c07b94ce04b9b11258bc236855bba783340355dcb->enter($__internal_98c49f5fb520fcc0ed5a248c07b94ce04b9b11258bc236855bba783340355dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5d5bb040b0a8f51d85e987cbc377073f036597e0a2ac42764fc461bab53af00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d5bb040b0a8f51d85e987cbc377073f036597e0a2ac42764fc461bab53af00->enter($__internal_a5d5bb040b0a8f51d85e987cbc377073f036597e0a2ac42764fc461bab53af00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_a5d5bb040b0a8f51d85e987cbc377073f036597e0a2ac42764fc461bab53af00->leave($__internal_a5d5bb040b0a8f51d85e987cbc377073f036597e0a2ac42764fc461bab53af00_prof);

        
        $__internal_98c49f5fb520fcc0ed5a248c07b94ce04b9b11258bc236855bba783340355dcb->leave($__internal_98c49f5fb520fcc0ed5a248c07b94ce04b9b11258bc236855bba783340355dcb_prof);

    }

    public function getTemplateName()
    {
        return "reservations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"medium-12 large-12 columns\">
        <h4>Reservations</h4>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">ROOM</th>
              <th width=\"200\">Name</th>
              <th width=\"200\">DATES</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/index.html.twig", "/Users/admin/Desktop/symfony-project/app/Resources/views/reservations/index.html.twig");
    }
}
