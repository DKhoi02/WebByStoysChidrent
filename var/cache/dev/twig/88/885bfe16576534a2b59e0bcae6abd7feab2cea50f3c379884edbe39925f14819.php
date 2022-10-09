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

/* cart/index.html.twig */
class __TwigTemplate_722fba7382bb4638352ed2dc7753d17a82395fdab80d01589ea5f582e5b5f9db extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        if ((0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })()), 1))) {
            // line 5
            echo "  <div class=\"alert alert-danger\">Please add a product to the cart before ordering!!!</div>
";
        }
        // line 7
        if ((0 === twig_compare((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), 2))) {
            // line 8
            echo "  <div class=\"alert alert-danger\">The product has reached the maximum quantity</div>
";
        }
        // line 10
        echo "    <section class=\"h-100 h-custom\" style=\"background-color: #f7f7f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              <div class=\"col-lg-8\">
                <div class=\"p-5\">
                  <div class=\"d-flex justify-content-between align-items-center mb-5\">
                    <h1 class=\"fw-bold mb-0 text-black\">Shopping Cart</h1>
                    <h6 class=\"mb-0 text-muted\"></h6>
                  </div>
";
        // line 24
        echo "                <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                  <div class=\"col-md-2 col-lg-2 col-xl-2\">
                    <h5>Images</h5>
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-3\">
                    <h5>Product Name</h5>
                  </div>
                  ";
        // line 34
        echo "                  <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                    <h5>Quantity</h5>
                  </div>
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                  </div>
                  <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                    <h5>Unit Price</h5>
                  </div>
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                  </div>
                </div>
                  <hr class=\"my-4\">
";
        // line 47
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 48
            echo "                <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                  <div class=\"col-md-2 col-lg-2 col-xl-2\">
                    <img 
                      src=\"../img/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Productimage", [], "any", false, false, false, 51), "html", null, true);
            echo "\"
                      class=\"img-fluid rounded-3\" alt=\"image not avaible\">
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-3\">
                    <h6 class=\"text-black mb-0\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Productname", [], "any", false, false, false, 55), "html", null, true);
            echo "</h6>
                  </div>
                  ";
            // line 60
            echo "                  <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                    <form class=\"d-flex\" method=\"GET\" action=\"/updatecart/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">
                    <input id=\"form1\" min=\"1\" name=\"quantity\" value = ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Productquantity", [], "any", false, false, false, 62), "html", null, true);
            echo " type=\"number\"
                      class=\"form-control form-control-sm\" style=\"width: 65px\"/>
                    <input class=\"btn text-light\" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Update\"/> 
                </form>                   
                  </div>
                  <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                    <h6 class=\"mb-0\"><span></span> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "Price", [], "any", false, false, false, 68), "html", null, true);
            echo " VND</h6>
                  </div>
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletecart", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"text-muted text-decoration-none\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: gray;\"></i></a>
                  </div>
                </div>
                <hr class=\"my-4\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  <div class=\"pt-5\">
                    <h6 class=\"mb-0\"><a class=\"text-body\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\"><i
                        class=\"fas fa-long-arrow-alt-left me-2\"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4 bg-grey\">
                <div class=\"p-5\">
                  <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                  <hr class=\"my-4\">
                  <div class=\"d-flex justify-content-between mb-5\">
                    <h5 class=\"text-uppercase\">Total price</h5>
                    <h5><span></span>";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 88, $this->source); })()), "html", null, true);
        echo " VND</h5>
                  </div>
                  <form class=\"d-flex\" method=\"\">
                    <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
        echo "\" class=\"btn text-light \" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Payment\" name=\"payment\">Order</a> 
                </form>
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
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 91,  181 => 88,  167 => 77,  164 => 76,  153 => 71,  147 => 68,  138 => 62,  134 => 61,  131 => 60,  126 => 55,  119 => 51,  114 => 48,  109 => 47,  95 => 34,  86 => 24,  71 => 10,  67 => 8,  65 => 7,  61 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{% if error == 1 %}
  <div class=\"alert alert-danger\">Please add a product to the cart before ordering!!!</div>
{% endif %}
{% if error == 2 %}
  <div class=\"alert alert-danger\">The product has reached the maximum quantity</div>
{% endif %}
    <section class=\"h-100 h-custom\" style=\"background-color: #f7f7f7;\">
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col-12\">
        <div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
          <div class=\"card-body p-0\">
            <div class=\"row g-0\">
              <div class=\"col-lg-8\">
                <div class=\"p-5\">
                  <div class=\"d-flex justify-content-between align-items-center mb-5\">
                    <h1 class=\"fw-bold mb-0 text-black\">Shopping Cart</h1>
                    <h6 class=\"mb-0 text-muted\"></h6>
                  </div>
{# title of row #}
                <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                  <div class=\"col-md-2 col-lg-2 col-xl-2\">
                    <h5>Images</h5>
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-3\">
                    <h5>Product Name</h5>
                  </div>
                  {# <div class=\"col-md-3 col-lg-3 col-xl-3\">
                    <h5>Unit price</h5>
                  </div> #}
                  <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                    <h5>Quantity</h5>
                  </div>
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                  </div>
                  <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                    <h5>Unit Price</h5>
                  </div>
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                  </div>
                </div>
                  <hr class=\"my-4\">
{# content of cart #}
      {% for c in cart %}
                <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
                  <div class=\"col-md-2 col-lg-2 col-xl-2\">
                    <img 
                      src=\"../img/{{c.Productimage}}\"
                      class=\"img-fluid rounded-3\" alt=\"image not avaible\">
                  </div>
                  <div class=\"col-md-3 col-lg-3 col-xl-3\">
                    <h6 class=\"text-black mb-0\">{{c.Productname}}</h6>
                  </div>
                  {# <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                    <h6 class=\"mb-0\"><span>&#8363;</span> {{c.Price}} </h6>
                  </div> #}
                  <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                    <form class=\"d-flex\" method=\"GET\" action=\"/updatecart/{{c.id}}\">
                    <input id=\"form1\" min=\"1\" name=\"quantity\" value = {{c.Productquantity}} type=\"number\"
                      class=\"form-control form-control-sm\" style=\"width: 65px\"/>
                    <input class=\"btn text-light\" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Update\"/> 
                </form>                   
                  </div>
                  <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                    <h6 class=\"mb-0\"><span></span> {{c.Price}} VND</h6>
                  </div>
                  <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                    <a href=\"{{ path('deletecart', {'id' : c.id})}}\" class=\"text-muted text-decoration-none\"><i class=\"fa fa-trash\" style=\"font-size: 20px; color: gray;\"></i></a>
                  </div>
                </div>
                <hr class=\"my-4\">
    {% endfor %}
                  <div class=\"pt-5\">
                    <h6 class=\"mb-0\"><a class=\"text-body\" href=\"{{path('home_page')}}\"><i
                        class=\"fas fa-long-arrow-alt-left me-2\"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-4 bg-grey\">
                <div class=\"p-5\">
                  <h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
                  <hr class=\"my-4\">
                  <div class=\"d-flex justify-content-between mb-5\">
                    <h5 class=\"text-uppercase\">Total price</h5>
                    <h5><span></span>{{total}} VND</h5>
                  </div>
                  <form class=\"d-flex\" method=\"\">
                    <a href=\"{{path('order')}}\" class=\"btn text-light \" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Payment\" name=\"payment\">Order</a> 
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}", "cart/index.html.twig", "C:\\Users\\KHOI\\OneDrive\\Documents\\Greenwich\\1644 - Cloud Computing\\ATN-Shop\\templates\\cart\\index.html.twig");
    }
}
