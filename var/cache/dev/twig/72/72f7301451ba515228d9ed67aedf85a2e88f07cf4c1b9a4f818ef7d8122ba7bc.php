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
        $__internal_9061911189877c96672b5b39e7af1879a22610075a85c56ec2237fcf8546665f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9061911189877c96672b5b39e7af1879a22610075a85c56ec2237fcf8546665f->enter($__internal_9061911189877c96672b5b39e7af1879a22610075a85c56ec2237fcf8546665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_e75fd9ffad79e91bcaccd319f524215acaac989edd81ebaeec45714892b3171b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75fd9ffad79e91bcaccd319f524215acaac989edd81ebaeec45714892b3171b->enter($__internal_e75fd9ffad79e91bcaccd319f524215acaac989edd81ebaeec45714892b3171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9061911189877c96672b5b39e7af1879a22610075a85c56ec2237fcf8546665f->leave($__internal_9061911189877c96672b5b39e7af1879a22610075a85c56ec2237fcf8546665f_prof);

        
        $__internal_e75fd9ffad79e91bcaccd319f524215acaac989edd81ebaeec45714892b3171b->leave($__internal_e75fd9ffad79e91bcaccd319f524215acaac989edd81ebaeec45714892b3171b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_693791de9b97143cf75ff96a894ef91e3d34500f983d1ae226c28604f6b6d7f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693791de9b97143cf75ff96a894ef91e3d34500f983d1ae226c28604f6b6d7f5->enter($__internal_693791de9b97143cf75ff96a894ef91e3d34500f983d1ae226c28604f6b6d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_939096b82614176bddac23c53efa8085f8cd86bf40c32d0e2dc9aee9df74a133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939096b82614176bddac23c53efa8085f8cd86bf40c32d0e2dc9aee9df74a133->enter($__internal_939096b82614176bddac23c53efa8085f8cd86bf40c32d0e2dc9aee9df74a133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("booking", array("id_client" => 1));
        echo "\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

";
        
        $__internal_939096b82614176bddac23c53efa8085f8cd86bf40c32d0e2dc9aee9df74a133->leave($__internal_939096b82614176bddac23c53efa8085f8cd86bf40c32d0e2dc9aee9df74a133_prof);

        
        $__internal_693791de9b97143cf75ff96a894ef91e3d34500f983d1ae226c28604f6b6d7f5->leave($__internal_693791de9b97143cf75ff96a894ef91e3d34500f983d1ae226c28604f6b6d7f5_prof);

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
        return array (  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
              <tr>
                <td>Mr. Roy Adams</td>
                <td>radams1v@xinhuanet.com</td>
                <td>
                  <a class=\"hollow button\" href=\"/client/edit/1\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"{{ path(\"booking\", { 'id_client': 1 }) }}\">BOOK A ROOM</a>
                </td>
              </tr>
              <tr>
                <td>Ms. Bonnie Clark</td>
                <td>bclark@bing.com</td>
                <td>
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>

{% endblock %}
", "clients/index.html.twig", "/Users/admin/Desktop/symfony-project/app/Resources/views/clients/index.html.twig");
    }
}
