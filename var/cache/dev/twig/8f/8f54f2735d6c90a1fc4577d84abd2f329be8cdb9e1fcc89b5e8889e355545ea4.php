<?php

/* base.html.twig */
class __TwigTemplate_e1a21658618236c3ad4315e62836718610e2a7f3b7eb5435e504531ee60882fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba710649bdfea6810b197096c13b97ec8bf29a7fcc1b00ef4aef9167db874e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba710649bdfea6810b197096c13b97ec8bf29a7fcc1b00ef4aef9167db874e36->enter($__internal_ba710649bdfea6810b197096c13b97ec8bf29a7fcc1b00ef4aef9167db874e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2547dd07ad0faef7058bd2f84075a071294b98c854aa275366bc0f1b47347b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2547dd07ad0faef7058bd2f84075a071294b98c854aa275366bc0f1b47347b6d->enter($__internal_2547dd07ad0faef7058bd2f84075a071294b98c854aa275366bc0f1b47347b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/foundation.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/themes/default.date.css"), "html", null, true);
        echo "\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index_clients");
        echo "\">Clients</a></li>
            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservations");
        echo "\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/what-input.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/foundation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("pickadate/lib/picker.date.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
";
        
        $__internal_ba710649bdfea6810b197096c13b97ec8bf29a7fcc1b00ef4aef9167db874e36->leave($__internal_ba710649bdfea6810b197096c13b97ec8bf29a7fcc1b00ef4aef9167db874e36_prof);

        
        $__internal_2547dd07ad0faef7058bd2f84075a071294b98c854aa275366bc0f1b47347b6d->leave($__internal_2547dd07ad0faef7058bd2f84075a071294b98c854aa275366bc0f1b47347b6d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b377c89f69ff81f728e85fb5502653a6bafc548e0c61ae7fedf60cc611e808d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b377c89f69ff81f728e85fb5502653a6bafc548e0c61ae7fedf60cc611e808d1->enter($__internal_b377c89f69ff81f728e85fb5502653a6bafc548e0c61ae7fedf60cc611e808d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8b426a1ae8bc84d9a5a98e086acc432a1156a94db6207ae92b62fbc7b296349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b426a1ae8bc84d9a5a98e086acc432a1156a94db6207ae92b62fbc7b296349->enter($__internal_c8b426a1ae8bc84d9a5a98e086acc432a1156a94db6207ae92b62fbc7b296349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_c8b426a1ae8bc84d9a5a98e086acc432a1156a94db6207ae92b62fbc7b296349->leave($__internal_c8b426a1ae8bc84d9a5a98e086acc432a1156a94db6207ae92b62fbc7b296349_prof);

        
        $__internal_b377c89f69ff81f728e85fb5502653a6bafc548e0c61ae7fedf60cc611e808d1->leave($__internal_b377c89f69ff81f728e85fb5502653a6bafc548e0c61ae7fedf60cc611e808d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef371fdbc26b867110fcaabe53dd650803789bf020ab4f153aed00ca5ddc2ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef371fdbc26b867110fcaabe53dd650803789bf020ab4f153aed00ca5ddc2ef4->enter($__internal_ef371fdbc26b867110fcaabe53dd650803789bf020ab4f153aed00ca5ddc2ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ec7c929e3416fd81406ec0d50c3c3aaa9fe04385136bda7d8c09c1051a3b7890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7c929e3416fd81406ec0d50c3c3aaa9fe04385136bda7d8c09c1051a3b7890->enter($__internal_ec7c929e3416fd81406ec0d50c3c3aaa9fe04385136bda7d8c09c1051a3b7890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ec7c929e3416fd81406ec0d50c3c3aaa9fe04385136bda7d8c09c1051a3b7890->leave($__internal_ec7c929e3416fd81406ec0d50c3c3aaa9fe04385136bda7d8c09c1051a3b7890_prof);

        
        $__internal_ef371fdbc26b867110fcaabe53dd650803789bf020ab4f153aed00ca5ddc2ef4->leave($__internal_ef371fdbc26b867110fcaabe53dd650803789bf020ab4f153aed00ca5ddc2ef4_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_50da64f4fadb00ab84296038f13a8396ce2c4b70518ab02eaace52a5360ea696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50da64f4fadb00ab84296038f13a8396ce2c4b70518ab02eaace52a5360ea696->enter($__internal_50da64f4fadb00ab84296038f13a8396ce2c4b70518ab02eaace52a5360ea696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d85d131b41f5101b68e64725af951430101f3bc60548b6746f86e9d8e1b44d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85d131b41f5101b68e64725af951430101f3bc60548b6746f86e9d8e1b44d77->enter($__internal_d85d131b41f5101b68e64725af951430101f3bc60548b6746f86e9d8e1b44d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d85d131b41f5101b68e64725af951430101f3bc60548b6746f86e9d8e1b44d77->leave($__internal_d85d131b41f5101b68e64725af951430101f3bc60548b6746f86e9d8e1b44d77_prof);

        
        $__internal_50da64f4fadb00ab84296038f13a8396ce2c4b70518ab02eaace52a5360ea696->leave($__internal_50da64f4fadb00ab84296038f13a8396ce2c4b70518ab02eaace52a5360ea696_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20240b4c722633627fae177d076a71d5b8a622cdac9bc4f57d54ab974a741026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20240b4c722633627fae177d076a71d5b8a622cdac9bc4f57d54ab974a741026->enter($__internal_20240b4c722633627fae177d076a71d5b8a622cdac9bc4f57d54ab974a741026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_10f3b01051c102d22fc4b33061a0e24f72b046bb2a9cecc606b40c1cfaacb444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f3b01051c102d22fc4b33061a0e24f72b046bb2a9cecc606b40c1cfaacb444->enter($__internal_10f3b01051c102d22fc4b33061a0e24f72b046bb2a9cecc606b40c1cfaacb444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10f3b01051c102d22fc4b33061a0e24f72b046bb2a9cecc606b40c1cfaacb444->leave($__internal_10f3b01051c102d22fc4b33061a0e24f72b046bb2a9cecc606b40c1cfaacb444_prof);

        
        $__internal_20240b4c722633627fae177d076a71d5b8a622cdac9bc4f57d54ab974a741026->leave($__internal_20240b4c722633627fae177d076a71d5b8a622cdac9bc4f57d54ab974a741026_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 45,  187 => 31,  170 => 6,  152 => 5,  130 => 51,  126 => 50,  122 => 49,  118 => 48,  114 => 47,  109 => 46,  107 => 45,  92 => 32,  90 => 31,  78 => 22,  74 => 21,  70 => 20,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Landon Hotel App{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('css/foundation.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('pickadate/lib/themes/default.date.css') }}\">
    </head>
    <body>

        <!-- Start Top Bar -->
    <div class=\"top-bar\">
      <div class=\"row\">
        <div class=\"top-bar-left\">
          <ul class=\"dropdown menu\" data-dropdown-menu>
            <li><a href=\"{{ path(\"home\") }}\">Home</a></li>
            <li><a href=\"{{ path(\"index_clients\") }}\">Clients</a></li>
            <li><a href=\"{{ path(\"reservations\") }}\">Reservations</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    {% block body %}{% endblock %}
    

    <div class=\"row column\">
      <hr>
      <ul class=\"menu\">
        <li class=\"float-right\">Copyright 2017</li>
      </ul>
    </div>

    <script>
      \$(document).foundation();
    </script>

        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/vendor/jquery.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/what-input.js') }}\"></script>
        <script src=\"{{ asset('js/vendor/foundation.js') }}\"></script>
        <script src=\"{{ asset('js/app.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.js') }}\"></script>
        <script src=\"{{ asset('pickadate/lib/picker.date.js') }}\"></script>
        <script>
            \$('.datepicker').pickadate(
              { 
                format: 'yyyy-mm-dd',
                formatSubmit: 'yyyy-mm-dd' 
              }
              );
        </script>
    </body>
</html>
", "base.html.twig", "/Users/admin/Desktop/symfony-project/app/Resources/views/base.html.twig");
    }
}
