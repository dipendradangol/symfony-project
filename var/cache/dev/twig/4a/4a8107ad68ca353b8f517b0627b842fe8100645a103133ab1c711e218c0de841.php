<?php

/* reservations/book.html.twig */
class __TwigTemplate_64c0cb274f827e5d938cbe7702f25fe23a40ed4a35a04d5324219e193814e3cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservations/book.html.twig", 1);
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
        $__internal_87420d915c25736a0b8f7bf355ab6a4d526c153fda2b5897b810505749caafe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87420d915c25736a0b8f7bf355ab6a4d526c153fda2b5897b810505749caafe6->enter($__internal_87420d915c25736a0b8f7bf355ab6a4d526c153fda2b5897b810505749caafe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $__internal_0d1e4201878e51d1bbce307dab51f879d5e0619eb168193db3700b8af0e02f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1e4201878e51d1bbce307dab51f879d5e0619eb168193db3700b8af0e02f43->enter($__internal_0d1e4201878e51d1bbce307dab51f879d5e0619eb168193db3700b8af0e02f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservations/book.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87420d915c25736a0b8f7bf355ab6a4d526c153fda2b5897b810505749caafe6->leave($__internal_87420d915c25736a0b8f7bf355ab6a4d526c153fda2b5897b810505749caafe6_prof);

        
        $__internal_0d1e4201878e51d1bbce307dab51f879d5e0619eb168193db3700b8af0e02f43->leave($__internal_0d1e4201878e51d1bbce307dab51f879d5e0619eb168193db3700b8af0e02f43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f60641eedd3a5079baf07a908fdb4ad5d3ab5c282b589bf540d41db5d865d15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60641eedd3a5079baf07a908fdb4ad5d3ab5c282b589bf540d41db5d865d15c->enter($__internal_f60641eedd3a5079baf07a908fdb4ad5d3ab5c282b589bf540d41db5d865d15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_066b3b7a6587dd96b0effde3ce5b50ae70a6acd1d6154c33a68aa2a947449c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066b3b7a6587dd96b0effde3ce5b50ae70a6acd1d6154c33a68aa2a947449c20->enter($__internal_066b3b7a6587dd96b0effde3ce5b50ae70a6acd1d6154c33a68aa2a947449c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: ";
        // line 8
        echo twig_escape_filter($this->env, ($context["id_client"] ?? $this->getContext($context, "id_client")), "html", null, true);
        echo "</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_066b3b7a6587dd96b0effde3ce5b50ae70a6acd1d6154c33a68aa2a947449c20->leave($__internal_066b3b7a6587dd96b0effde3ce5b50ae70a6acd1d6154c33a68aa2a947449c20_prof);

        
        $__internal_f60641eedd3a5079baf07a908fdb4ad5d3ab5c282b589bf540d41db5d865d15c->leave($__internal_f60641eedd3a5079baf07a908fdb4ad5d3ab5c282b589bf540d41db5d865d15c_prof);

    }

    public function getTemplateName()
    {
        return "reservations/book.html.twig";
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
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients/Booking</h4>
        <div class=\"medium-2  columns\">BOOKING FOR: {{ id_client }}</div>
        <div class=\"medium-2  columns\"><b>Client Name</b></div>
        <form action=\"\" method=\"post\">
          <div class=\"medium-1  columns\">FROM:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-1  columns\">TO:</div>
          <div class=\"medium-2  columns\"><input name=\"\" value=\"\" type=\"text\" class=\"datepicker\" /></div>
          <div class=\"medium-2  columns\"><input class=\"button\" type=\"submit\" value=\"SEARCH\" /></div>
        </form>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Room</th>
              <th width=\"200\">Availability</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
          <tbody>
          
            <tr>
              <td>101</td>
              <td>
                <div class=\"callout success\">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class=\"hollow button warning\" href=\"#\">BOOK NOW</a>
              </td>
            </tr>
          
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "reservations/book.html.twig", "/Users/admin/Desktop/symfony-project/app/Resources/views/reservations/book.html.twig");
    }
}
