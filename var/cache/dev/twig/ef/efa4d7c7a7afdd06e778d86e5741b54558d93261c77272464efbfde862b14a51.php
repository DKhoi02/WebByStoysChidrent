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
class __TwigTemplate_050b1db50aa317f3cdb85a6e09593d9eb9c100742e3d18d732fc2c67bef7b6d0 extends Template
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
        echo "
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
      <img src=\"../img/samsung_galaxy_s22_ultra_banner.jpg\" class=\"rounded mx-auto d-block w-70\"  alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/xiaomi_12_pro_baner.jpg\" class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/iphone_13_pro_max_banner_hd.jpg\" class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
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
            // line 41
            echo "        <div class=\"col-md-4\">
            <div class=\"card\">
              <img 
                src=\"./img/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productimage", [], "any", false, false, false, 44), "html", null, true);
            echo "\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto;
                width: 80%;\"
              />
              <div class=\"card-body align-self-center\">
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productDetail", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"text-decoration-none\"><h5 class=\"card-title text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Productname", [], "any", false, false, false, 50), "html", null, true);
            echo "</h5></a>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "Price", [], "any", false, false, false, 51), "html", null, true);
            echo " VND</h6>
                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"btn btn-outline-danger\">Like <i class=\"fa fa-heart-o\"></i></a>
                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
              </div>
            </div>
        </div>
      <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </div>  
  ";
        // line 61
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
        return array (  146 => 61,  143 => 59,  131 => 53,  127 => 52,  123 => 51,  117 => 50,  108 => 44,  103 => 41,  99 => 40,  95 => 38,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

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
      <img src=\"../img/samsung_galaxy_s22_ultra_banner.jpg\" class=\"rounded mx-auto d-block w-70\"  alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/xiaomi_12_pro_baner.jpg\" class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"../img/iphone_13_pro_max_banner_hd.jpg\" class=\"rounded mx-auto d-block w-70\" alt=\"Image not available\">
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
              <img 
                src=\"./img/{{p.Productimage}}\"
                class=\"card-img-top\"
                alt=\"Not image available\" style=\"margin: auto;
                width: 80%;\"
              />
              <div class=\"card-body align-self-center\">
                <a href=\"{{ path('productDetail', {'id' : p.id})}}\" class=\"text-decoration-none\"><h5 class=\"card-title text-center\">{{p.Productname}}</h5></a>
                <h6 class=\"card-subtitle mb-2 text-muted text-center\"><span></span>{{p.Price}} VND</h6>
                <a href=\"{{ path('home_page', {'id' : p.id})}}\" class=\"btn btn-outline-danger\">Like <i class=\"fa fa-heart-o\"></i></a>
                <a href=\"{{ path('home_page', {'id' : p.id})}}\" class=\"btn btn-primary\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
              </div>
            </div>
        </div>
      <br>
    {% endfor %}
  </div>  
  {# all product #}

</div>
{% endblock %}", "home_page/index.html.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\home_page\\index.html.twig");
    }
}
