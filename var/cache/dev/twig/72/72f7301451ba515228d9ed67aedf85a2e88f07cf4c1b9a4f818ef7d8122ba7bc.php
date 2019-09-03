<?php

/* clients/index.html.twig */
class __TwigTemplate_01553599b1627482f7dcac53533ad427a13e26fde9cc797f725c5f6906645da7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/index.html.twig", 1);
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
        $__internal_4671a202b7865a3c5cb41bb5f8987a2a572146ce98b32dd4ae61af8c6594001e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4671a202b7865a3c5cb41bb5f8987a2a572146ce98b32dd4ae61af8c6594001e->enter($__internal_4671a202b7865a3c5cb41bb5f8987a2a572146ce98b32dd4ae61af8c6594001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_02d8ba2674d1da5442de8361e3d92b14fe4359575665642a06bda5bc0c9a54c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d8ba2674d1da5442de8361e3d92b14fe4359575665642a06bda5bc0c9a54c0->enter($__internal_02d8ba2674d1da5442de8361e3d92b14fe4359575665642a06bda5bc0c9a54c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4671a202b7865a3c5cb41bb5f8987a2a572146ce98b32dd4ae61af8c6594001e->leave($__internal_4671a202b7865a3c5cb41bb5f8987a2a572146ce98b32dd4ae61af8c6594001e_prof);

        
        $__internal_02d8ba2674d1da5442de8361e3d92b14fe4359575665642a06bda5bc0c9a54c0->leave($__internal_02d8ba2674d1da5442de8361e3d92b14fe4359575665642a06bda5bc0c9a54c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a62309f5a5439577782b1188b40e4a5ad6a874fc6c6b3b8d46762ceef255fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a62309f5a5439577782b1188b40e4a5ad6a874fc6c6b3b8d46762ceef255fbe->enter($__internal_9a62309f5a5439577782b1188b40e4a5ad6a874fc6c6b3b8d46762ceef255fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_16d98b5b473b87b2eda533a9295598293d4a5d0016d353082e062567c2360973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d98b5b473b87b2eda533a9295598293d4a5d0016d353082e062567c2360973->enter($__internal_16d98b5b473b87b2eda533a9295598293d4a5d0016d353082e062567c2360973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"row\">
      <div class=\"medium-12 large-12 columns\">
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 19
            echo "              <tr>
                <td>
                ";
            // line 21
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "title", array())), "html", null, true);
            echo ".
                ";
            // line 22
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "first", array())), "html", null, true);
            echo "
                ";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "name", array()), "last", array())), "html", null, true);
            echo "
                </td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => 1));
            echo "\">BOOK A ROOM</a>
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_16d98b5b473b87b2eda533a9295598293d4a5d0016d353082e062567c2360973->leave($__internal_16d98b5b473b87b2eda533a9295598293d4a5d0016d353082e062567c2360973_prof);

        
        $__internal_9a62309f5a5439577782b1188b40e4a5ad6a874fc6c6b3b8d46762ceef255fbe->leave($__internal_9a62309f5a5439577782b1188b40e4a5ad6a874fc6c6b3b8d46762ceef255fbe_prof);

    }

    public function getTemplateName()
    {
        return "clients/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  92 => 28,  86 => 25,  81 => 23,  77 => 22,  73 => 21,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
        <h4>Clients</h4>
        <div class=\"medium-2  columns\"><a class=\"button\" href=\"#\">ADD NEW CLIENT</a></div>

        <table class=\"stack\">
          <thead>
            <tr>
              <th width=\"200\">Name</th>
              <th width=\"200\">Email</th>
              <th width=\"200\">Action</th>
            </tr>
          </thead>
              {% for client in clients %}
              <tr>
                <td>
                {{ client.name.title | capitalize }}.
                {{ client.name.first | capitalize }}
                {{ client.name.last | capitalize }}
                </td>
                <td>{{ client.email }}</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': 1 }) }}\">BOOK A ROOM</a>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/admin/Desktop/symfony-project/app/Resources/views/clients/index.html.twig");
    }
}
