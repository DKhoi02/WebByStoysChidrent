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

/* home_page/productdetail.html.twig */
class __TwigTemplate_4e0a8ad2e25505ec124ece14d72289b51dd468708d6095c9cd1a1d7b05e5187d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/productdetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/productdetail.html.twig", 1);
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
        echo "<section class=\"h-100 h-custom\" style=\"background-color: #f7f7f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              
            <div class=\"col-lg-5 p-5\">         
                    <div class=\"image_selected ms-3\"><img src=\"../img/";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 12, $this->source); })()), "Productimage", [], "any", false, false, false, 12), "html", null, true);
        echo "\" alt=\"\" style=\"margin: auto;
                width: 80%;\"></div>
                </div>
                
                <div class=\"col-lg-7 p-5\">
                    <div class=\"product_description\">
                      <div class=\"product_name\">Product Name: ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "Productname", [], "any", false, false, false, 18), "html", null, true);
        echo "</div>
                        
                      <div> <span class=\"product_price\"></span>Price: ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "Price", [], "any", false, false, false, 20), "html", null, true);
        echo " VND</div>
                        
                      <div><span class=\"product_info\"><span>Decription: ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "Productdes", [], "any", false, false, false, 22), "html", null, true);
        echo "</div>   

                        <div><span class=\"product_info\"><span>Shop address: ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</div>                     
                        <hr class=\"singleline\">
                        <div class=\"card-body align-self-center\">
                          ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            // line 28
            echo "                          <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addcart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                          ";
        } else {
            // line 30
            echo "                          <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                          ";
        }
        // line 31
        echo " 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home_page/productdetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  108 => 30,  102 => 28,  100 => 27,  94 => 24,  89 => 22,  84 => 20,  79 => 18,  70 => 12,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<section class=\"h-100 h-custom\" style=\"background-color: #f7f7f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              
            <div class=\"col-lg-5 p-5\">         
                    <div class=\"image_selected ms-3\"><img src=\"../img/{{product.Productimage}}\" alt=\"\" style=\"margin: auto;
                width: 80%;\"></div>
                </div>
                
                <div class=\"col-lg-7 p-5\">
                    <div class=\"product_description\">
                      <div class=\"product_name\">Product Name: {{product.Productname}}</div>
                        
                      <div> <span class=\"product_price\"></span>Price: {{product.Price}} VND</div>
                        
                      <div><span class=\"product_info\"><span>Decription: {{product.Productdes}}</div>   

                        <div><span class=\"product_info\"><span>Shop address: {{address}}</div>                     
                        <hr class=\"singleline\">
                        <div class=\"card-body align-self-center\">
                          {% if app.user %}
                          <a href=\"{{ path('addcart', {'id' : product.id})}}\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                          {% else %}
                          <a href=\"{{ path('app_login')}}\" class=\"btn text-light\" style=\"background-color: rgb(255,105,180);\">Add to Cart <i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i></i></a>
                          {% endif %} 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}", "home_page/productdetail.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\home_page\\productdetail.html.twig");
    }
}
