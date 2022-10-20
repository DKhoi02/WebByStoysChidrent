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

/* home_page/index.html.twig */
class __TwigTemplate_e17286e4a620b651a686d123c7686521e2d87f6b9374d5b1c08de850367cc96b extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <br>
  <div class=\"container\">
  <H2>New Product</H2>
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
  </div>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"../img/LiveShow1.jpg\" class=\"rounded mx-auto d-block w-70\"  alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/LiveShow2.jpg\" class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/LiveShow3.jpg\"class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
</div>
<br>
<div class=\"container\">
  <H2>All Product</H2>
  <br>
  ";
        // line 38
        echo "  <div class=\"row\" style=\"background-color: aliceblue;\">
      <!-- product1 -->     
      ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo " 
        <div class=\"col-md-4\">
            <div class=\"card\">
               <br>
              <img 
                src=\"./img/";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productimage", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto; width: 80%;\"/>
              <div class=\"card-body align-self-center text-center\">
                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productDetail", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            echo "\" class=\"text-decoration-none\"><h5 class=\"card-title text-center\" style=\"color: rgb(255,105,180);\" width=\"382px\" height=\"48px\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productname", [], "any", false, false, false, 49), "html", null, true);
            echo "</h5></a>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Price", [], "any", false, false, false, 50), "html", null, true);
            echo " VND</h6>
                ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51)) {
                // line 52
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addcart", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                ";
            } else {
                // line 54
                echo "                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                ";
            }
            // line 55
            echo "  
              </div>
            </div>
            <br>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "  </div>  
  ";
        // line 63
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 63,  151 => 61,  140 => 55,  134 => 54,  128 => 52,  126 => 51,  122 => 50,  116 => 49,  109 => 45,  99 => 40,  95 => 38,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <br>
  <div class=\"container\">
  <H2>New Product</H2>
  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
  </div>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"../img/LiveShow1.jpg\" class=\"rounded mx-auto d-block w-70\"  alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/LiveShow2.jpg\" class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/LiveShow3.jpg\"class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
    </div>
  </div>
  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>
</div>
<br>
<div class=\"container\">
  <H2>All Product</H2>
  <br>
  {# all product #}
  <div class=\"row\" style=\"background-color: aliceblue;\">
      <!-- product1 -->     
      {% for p in product %} 
        <div class=\"col-md-4\">
            <div class=\"card\">
               <br>
              <img 
                src=\"./img/{{p.Productimage}}\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto; width: 80%;\"/>
              <div class=\"card-body align-self-center text-center\">
                <a href=\"{{ path('productDetail', {'id' : p.id})}}\" class=\"text-decoration-none\"><h5 class=\"card-title text-center\" style=\"color: rgb(255,105,180);\" width=\"382px\" height=\"48px\">{{p.Productname}}</h5></a>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>{{p.Price}} VND</h6>
                {% if app.user %}
                <a href=\"{{ path('addcart', {'id' : p.id})}}\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                {% else %}
                <a href=\"{{ path('app_login')}}\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                {% endif %}  
              </div>
            </div>
            <br>
        </div>
    {% endfor %}
  </div>  
  {# all product #}

</div>
{% endblock %}", "home_page/index.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\home_page\\index.html.twig");
    }
}
