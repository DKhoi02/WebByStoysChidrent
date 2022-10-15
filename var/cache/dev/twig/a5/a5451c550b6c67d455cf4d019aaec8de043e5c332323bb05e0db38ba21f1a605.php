<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home_page/search.html.twig */
class __TwigTemplate_65cd615e6138017e3ad4ff7fcc78ace4b90ac5664957642810b797ade3c9a20e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/search.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
    <div class=\"container\">
  <H4>Found ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " result with key \" ";
        echo twig_escape_filter($this->env, (isset($context["mess"]) || array_key_exists("mess", $context) ? $context["mess"] : (function () { throw new RuntimeError('Variable "mess" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " \"</H4>
  <br>
  ";
        // line 10
        echo "  <div class=\"row\" style=\"background-color: aliceblue;\">
      <!-- product1 -->
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "        <div class=\"col-md-4\">
            <div class=\"card\">
              <img 
                src=\"./img/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productimage", [], "any", false, false, false, 16), "html", null, true);
            echo "\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto;
                width: 80%;\"
              />
              <div class=\"card-body align-self-center\">
                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productDetail", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\" class=\"text-decoration-none\"><h5 class=\"card-title text-center\" style=\"color: rgb(255,105,180);\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productname", [], "any", false, false, false, 22), "html", null, true);
            echo "</h5></a>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Price", [], "any", false, false, false, 23), "html", null, true);
            echo " VND</h6>
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
              </div>
            </div>
        </div>
      <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </div>  
</div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home_page/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  102 => 24,  98 => 23,  92 => 22,  83 => 16,  78 => 13,  74 => 12,  70 => 10,  63 => 7,  59 => 5,  52 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# serch page #}
{% extends 'base.html.twig' %}

{% block body %}
<main style=\"min-height: calc(100vh - 116px - 56px - 246px);\">
    <div class=\"container\">
  <H4>Found {{count}} result with key \" {{mess}} \"</H4>
  <br>
  {# all product #}
  <div class=\"row\" style=\"background-color: aliceblue;\">
      <!-- product1 -->
      {% for p in product %}
        <div class=\"col-md-4\">
            <div class=\"card\">
              <img 
                src=\"./img/{{p.Productimage}}\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto;
                width: 80%;\"
              />
              <div class=\"card-body align-self-center\">
                <a href=\"{{ path('productDetail', {'id' : p.id})}}\" class=\"text-decoration-none\"><h5 class=\"card-title text-center\" style=\"color: rgb(255,105,180);\">{{p.Productname}}</h5></a>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>{{p.Price}} VND</h6>
                <a href=\"{{ path('home_page', {'id' : p.id})}}\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
              </div>
            </div>
        </div>
      <br>
    {% endfor %}
  </div>  
</div>
</main>
{% endblock %}", "home_page/search.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\home_page\\search.html.twig");
    }
}
