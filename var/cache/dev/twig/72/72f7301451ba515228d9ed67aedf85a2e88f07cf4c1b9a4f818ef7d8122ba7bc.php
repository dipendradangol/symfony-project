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
        $__internal_16f83a37102721741a3d756720ec1bc781283b1ed592aea41eb829efda80c272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f83a37102721741a3d756720ec1bc781283b1ed592aea41eb829efda80c272->enter($__internal_16f83a37102721741a3d756720ec1bc781283b1ed592aea41eb829efda80c272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $__internal_2430cccec11f4e13458c42bce9f70374095f59b62b099f443790c99f506d954e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2430cccec11f4e13458c42bce9f70374095f59b62b099f443790c99f506d954e->enter($__internal_2430cccec11f4e13458c42bce9f70374095f59b62b099f443790c99f506d954e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f83a37102721741a3d756720ec1bc781283b1ed592aea41eb829efda80c272->leave($__internal_16f83a37102721741a3d756720ec1bc781283b1ed592aea41eb829efda80c272_prof);

        
        $__internal_2430cccec11f4e13458c42bce9f70374095f59b62b099f443790c99f506d954e->leave($__internal_2430cccec11f4e13458c42bce9f70374095f59b62b099f443790c99f506d954e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba9ba0fca1830378730c94273225212e91237edd3cece5e391d2b945b07d063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ba9ba0fca1830378730c94273225212e91237edd3cece5e391d2b945b07d063->enter($__internal_8ba9ba0fca1830378730c94273225212e91237edd3cece5e391d2b945b07d063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_762f8055c13e5059d7d0388ca6aff8d581c06ebb75202a2019389a39a4f2a645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762f8055c13e5059d7d0388ca6aff8d581c06ebb75202a2019389a39a4f2a645->enter($__internal_762f8055c13e5059d7d0388ca6aff8d581c06ebb75202a2019389a39a4f2a645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
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
        
        $__internal_762f8055c13e5059d7d0388ca6aff8d581c06ebb75202a2019389a39a4f2a645->leave($__internal_762f8055c13e5059d7d0388ca6aff8d581c06ebb75202a2019389a39a4f2a645_prof);

        
        $__internal_8ba9ba0fca1830378730c94273225212e91237edd3cece5e391d2b945b07d063->leave($__internal_8ba9ba0fca1830378730c94273225212e91237edd3cece5e391d2b945b07d063_prof);

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
                  <a class=\"hollow button\" href=\"#\">EDIT</a>
                  <a class=\"hollow button warning\" href=\"#\">BOOK A ROOM</a>
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
