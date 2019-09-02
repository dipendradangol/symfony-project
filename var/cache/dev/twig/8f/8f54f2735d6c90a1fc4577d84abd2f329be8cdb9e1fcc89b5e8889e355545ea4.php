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
        $__internal_b0eab0201382804e6a859cdaa2e0585be77d4fffb8cd37dd8418853112957fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0eab0201382804e6a859cdaa2e0585be77d4fffb8cd37dd8418853112957fbd->enter($__internal_b0eab0201382804e6a859cdaa2e0585be77d4fffb8cd37dd8418853112957fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_275dbcb00bad46463b44f5b0bb88f00ae7dc9de3324be879f9af911ed47b8256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275dbcb00bad46463b44f5b0bb88f00ae7dc9de3324be879f9af911ed47b8256->enter($__internal_275dbcb00bad46463b44f5b0bb88f00ae7dc9de3324be879f9af911ed47b8256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
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
        
        $__internal_b0eab0201382804e6a859cdaa2e0585be77d4fffb8cd37dd8418853112957fbd->leave($__internal_b0eab0201382804e6a859cdaa2e0585be77d4fffb8cd37dd8418853112957fbd_prof);

        
        $__internal_275dbcb00bad46463b44f5b0bb88f00ae7dc9de3324be879f9af911ed47b8256->leave($__internal_275dbcb00bad46463b44f5b0bb88f00ae7dc9de3324be879f9af911ed47b8256_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_871ff5e903e5bb09c131daaf95147be98036235e85715b50d8b71e73a90730cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871ff5e903e5bb09c131daaf95147be98036235e85715b50d8b71e73a90730cf->enter($__internal_871ff5e903e5bb09c131daaf95147be98036235e85715b50d8b71e73a90730cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab9b63cf70260043644df7f0505cf47f6961e8b2f4c923fef09e86bc928e5115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9b63cf70260043644df7f0505cf47f6961e8b2f4c923fef09e86bc928e5115->enter($__internal_ab9b63cf70260043644df7f0505cf47f6961e8b2f4c923fef09e86bc928e5115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Landon Hotel App";
        
        $__internal_ab9b63cf70260043644df7f0505cf47f6961e8b2f4c923fef09e86bc928e5115->leave($__internal_ab9b63cf70260043644df7f0505cf47f6961e8b2f4c923fef09e86bc928e5115_prof);

        
        $__internal_871ff5e903e5bb09c131daaf95147be98036235e85715b50d8b71e73a90730cf->leave($__internal_871ff5e903e5bb09c131daaf95147be98036235e85715b50d8b71e73a90730cf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bce49e015bfac85a372bc8ae40d3fa74777bdf9608a521d5680ce2af7eeae612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce49e015bfac85a372bc8ae40d3fa74777bdf9608a521d5680ce2af7eeae612->enter($__internal_bce49e015bfac85a372bc8ae40d3fa74777bdf9608a521d5680ce2af7eeae612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9b61d18567f1145315fc4db17f94508ed56fcdbedc7d9a615ff2b73eb67e84d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b61d18567f1145315fc4db17f94508ed56fcdbedc7d9a615ff2b73eb67e84d9->enter($__internal_9b61d18567f1145315fc4db17f94508ed56fcdbedc7d9a615ff2b73eb67e84d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b61d18567f1145315fc4db17f94508ed56fcdbedc7d9a615ff2b73eb67e84d9->leave($__internal_9b61d18567f1145315fc4db17f94508ed56fcdbedc7d9a615ff2b73eb67e84d9_prof);

        
        $__internal_bce49e015bfac85a372bc8ae40d3fa74777bdf9608a521d5680ce2af7eeae612->leave($__internal_bce49e015bfac85a372bc8ae40d3fa74777bdf9608a521d5680ce2af7eeae612_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_2307269fea0cf0f3e837c17025bf0c5f638cd6a20e819ec3e7f2f4ac0d61bebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2307269fea0cf0f3e837c17025bf0c5f638cd6a20e819ec3e7f2f4ac0d61bebe->enter($__internal_2307269fea0cf0f3e837c17025bf0c5f638cd6a20e819ec3e7f2f4ac0d61bebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67dc4c7647041ae1ae76a6a89e570449f83e7baec22e76fbeae2af2163b3c770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dc4c7647041ae1ae76a6a89e570449f83e7baec22e76fbeae2af2163b3c770->enter($__internal_67dc4c7647041ae1ae76a6a89e570449f83e7baec22e76fbeae2af2163b3c770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_67dc4c7647041ae1ae76a6a89e570449f83e7baec22e76fbeae2af2163b3c770->leave($__internal_67dc4c7647041ae1ae76a6a89e570449f83e7baec22e76fbeae2af2163b3c770_prof);

        
        $__internal_2307269fea0cf0f3e837c17025bf0c5f638cd6a20e819ec3e7f2f4ac0d61bebe->leave($__internal_2307269fea0cf0f3e837c17025bf0c5f638cd6a20e819ec3e7f2f4ac0d61bebe_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0478f5507bf5a374223e58db237b6d6b13e5c1d7440bd5f3a2def18b4e27766b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0478f5507bf5a374223e58db237b6d6b13e5c1d7440bd5f3a2def18b4e27766b->enter($__internal_0478f5507bf5a374223e58db237b6d6b13e5c1d7440bd5f3a2def18b4e27766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_576c4ffb81aa82fd1c747bb7d542ca21506a446aecb92bcbb8bbd9545c3dca35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576c4ffb81aa82fd1c747bb7d542ca21506a446aecb92bcbb8bbd9545c3dca35->enter($__internal_576c4ffb81aa82fd1c747bb7d542ca21506a446aecb92bcbb8bbd9545c3dca35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_576c4ffb81aa82fd1c747bb7d542ca21506a446aecb92bcbb8bbd9545c3dca35->leave($__internal_576c4ffb81aa82fd1c747bb7d542ca21506a446aecb92bcbb8bbd9545c3dca35_prof);

        
        $__internal_0478f5507bf5a374223e58db237b6d6b13e5c1d7440bd5f3a2def18b4e27766b->leave($__internal_0478f5507bf5a374223e58db237b6d6b13e5c1d7440bd5f3a2def18b4e27766b_prof);

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
        return array (  195 => 45,  178 => 31,  161 => 6,  143 => 5,  121 => 51,  117 => 50,  113 => 49,  109 => 48,  105 => 47,  100 => 46,  98 => 45,  83 => 32,  81 => 31,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">Clients</a></li>
            <li><a href=\"#\">Reservations</a></li>
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
