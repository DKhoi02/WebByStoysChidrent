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

/* base.html.twig */
class __TwigTemplate_516ef1c8dc3956b4b70243d8daa18bf5a2ee2ffad7eaad937a97a537e79040db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>KTK_shop</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 
        viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 9
        echo "        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" 
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"../public/style.css\"
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Google Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
        <!-- Bootstrap -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"></script>

  <!-- My Script -->
  <script src=\"script.js\"></script>
        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "
        
    </head>
    <body>
        ";
        // line 34
        $this->displayBlock('nav', $context, $blocks);
        // line 95
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 145
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 35
        echo "         <nav class=\"navbar navbar-expand-lg\" style=\"background-color: rgba(26,148,255,255);\">
    <div class=\"container\">
        <a class=\"navbar-brand text-light\" href=\"#\"><img src=\"./img/Logo_KTK_Shop.png\" width=\"160\" height=\"90\" alt=\"Image not available\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\">
            <a class=\"nav-link text-light\" href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">Home</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                Management
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"#\">Account Management</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Order Management</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Category Management</a></li>
                <li><a class=\"dropdown-item\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pro_manage");
        echo "\">Product Management</a></li>
                </ul>
            </li> 
            <li class=\"nav-item\">
            <a class=\"nav-link text-light\" href=\"#\">Product compare</a>
            </li>
            <li class=\"nav-item\">
                <form class=\"d-flex\" method=\"POST\" action=\"#\">
                    <input class=\"form-control me-2 \" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" name=\"search\" value=\"\">
                    <input class=\"btn text-light\" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Search\"/> 
                </form>
            </li>
        </ul>

        <div class=\"navbar-nav ms-auto\">
           
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        echo "\">Cart</a>
                    </li>
                    
           
                    <a href=\"#\" class=\"nav-item nav-link text-light\">Login</a>
                    <a href=\"#\" class=\"nav-item nav-link text-light\">Register</a>  

                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Welcome, KTT_shop</a>  
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <li><a class=\"dropdown-item\" href=\"#\">Order history</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Update account</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Log out</a></li>
                    </ul>
                    </li>
            
        </div>

        </div>
    </div>
    
    </nav>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 98
        echo "    <div class=\" text-center text-lg-start text-light\" style=\"background-color: rgba(26,148,255,255);\">
     <!-- Grid container -->
  <div class=\"container p-4 \" >
    <!--Grid row-->
    <div class=\"row\">
      <!--Grid column-->
      <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
        <h5 class=\"text-uppercase text-light\">Information</h5>

        <p>
            KTK mobile store specializes in selling high-quality smartphones with reasonable prices, and reputable warranty policies. 
            You can buy all phones of brands like Apple, Samsung, VIVO, NOKIA, OPPO, BPhone, etc.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
        <h5 class=\"text-uppercase text-light\">Address</h5>

        <p>
            No. 160, 30/4 Street, An Phu Ward, Ninh Kieu District, Can Tho City
        </p>
        ";
        // line 122
        echo "        <div class = \"btn-social-icon\">
            <h5 class=\"text-uppercase text-light\">Contact</h5>
            <button type=\"button\" class=\"btn btn-social-icon btn-facebook\" style=\"background-color: #243996; color: aliceblue;\"><i class=\"fa fa-facebook\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-youtube\" style=\"background-color: #e71212; color: aliceblue;\"><i class=\"fa fa-youtube\"></i></button>                                        
            <button type=\"button\" class=\"btn btn-social-icon btn-twitter\" style=\"background-color: #50d0e0; color: aliceblue;\"><i class=\"fa fa-twitter\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-dribbble\" style=\"background-color: #e050cdf1; color: aliceblue;\"><i class=\"fa fa-dribbble\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-linkedin\" style=\"background-color: #100797; color: aliceblue;\"><i class=\"fa fa-linkedin\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-instagram\" style=\"background-color: #f7672e; color: aliceblue;\"><i class=\"fa fa-instagram\"></i></button>
        </div>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class=\"text-center p-3 text-light\" style=\"background-color: rgba(26,148,255,255);\">© 2022 Copyright:
    <a class=\"text-light\" href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_page");
        echo "\">KTK_shop.Com</a>
  </div>
  <!-- Copyright -->
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  282 => 140,  262 => 122,  237 => 98,  230 => 97,  223 => 96,  216 => 95,  185 => 71,  165 => 54,  152 => 44,  141 => 35,  134 => 34,  124 => 28,  117 => 27,  107 => 24,  100 => 23,  91 => 145,  88 => 97,  85 => 95,  83 => 34,  77 => 30,  75 => 27,  72 => 26,  70 => 23,  54 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>KTK_shop</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 
        viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" 
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"../public/style.css\"
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <!-- Google Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
        <!-- Bootstrap -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"></script>

  <!-- My Script -->
  <script src=\"script.js\"></script>
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}

        
    </head>
    <body>
        {% block nav %}
         <nav class=\"navbar navbar-expand-lg\" style=\"background-color: rgba(26,148,255,255);\">
    <div class=\"container\">
        <a class=\"navbar-brand text-light\" href=\"#\"><img src=\"./img/Logo_KTK_Shop.png\" width=\"160\" height=\"90\" alt=\"Image not available\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\">
            <a class=\"nav-link text-light\" href=\"{{path('home_page')}}\">Home</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                Management
                </a>
                <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <li><a class=\"dropdown-item\" href=\"#\">Account Management</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Order Management</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Category Management</a></li>
                <li><a class=\"dropdown-item\" href=\"{{path('app_pro_manage')}}\">Product Management</a></li>
                </ul>
            </li> 
            <li class=\"nav-item\">
            <a class=\"nav-link text-light\" href=\"#\">Product compare</a>
            </li>
            <li class=\"nav-item\">
                <form class=\"d-flex\" method=\"POST\" action=\"#\">
                    <input class=\"form-control me-2 \" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" name=\"search\" value=\"\">
                    <input class=\"btn text-light\" style= \"background-color: rgba(13,92,182,255);\" type=\"submit\" value=\"Search\"/> 
                </form>
            </li>
        </ul>

        <div class=\"navbar-nav ms-auto\">
           
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" href=\"{{path('app_cart')}}\">Cart</a>
                    </li>
                    
           
                    <a href=\"#\" class=\"nav-item nav-link text-light\">Login</a>
                    <a href=\"#\" class=\"nav-item nav-link text-light\">Register</a>  

                    <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle text-light\"  href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    Welcome, KTT_shop</a>  
                    <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                    <li><a class=\"dropdown-item\" href=\"#\">Order history</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Update account</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Log out</a></li>
                    </ul>
                    </li>
            
        </div>

        </div>
    </div>
    
    </nav>
        {% endblock %}
        {% block body %}
        {% endblock %}
        {% block footer %}
    <div class=\" text-center text-lg-start text-light\" style=\"background-color: rgba(26,148,255,255);\">
     <!-- Grid container -->
  <div class=\"container p-4 \" >
    <!--Grid row-->
    <div class=\"row\">
      <!--Grid column-->
      <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
        <h5 class=\"text-uppercase text-light\">Information</h5>

        <p>
            KTK mobile store specializes in selling high-quality smartphones with reasonable prices, and reputable warranty policies. 
            You can buy all phones of brands like Apple, Samsung, VIVO, NOKIA, OPPO, BPhone, etc.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
        <h5 class=\"text-uppercase text-light\">Address</h5>

        <p>
            No. 160, 30/4 Street, An Phu Ward, Ninh Kieu District, Can Tho City
        </p>
        {# button social media icons #}
        <div class = \"btn-social-icon\">
            <h5 class=\"text-uppercase text-light\">Contact</h5>
            <button type=\"button\" class=\"btn btn-social-icon btn-facebook\" style=\"background-color: #243996; color: aliceblue;\"><i class=\"fa fa-facebook\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-youtube\" style=\"background-color: #e71212; color: aliceblue;\"><i class=\"fa fa-youtube\"></i></button>                                        
            <button type=\"button\" class=\"btn btn-social-icon btn-twitter\" style=\"background-color: #50d0e0; color: aliceblue;\"><i class=\"fa fa-twitter\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-dribbble\" style=\"background-color: #e050cdf1; color: aliceblue;\"><i class=\"fa fa-dribbble\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-linkedin\" style=\"background-color: #100797; color: aliceblue;\"><i class=\"fa fa-linkedin\"></i></button>
            <button type=\"button\" class=\"btn btn-social-icon btn-instagram\" style=\"background-color: #f7672e; color: aliceblue;\"><i class=\"fa fa-instagram\"></i></button>
        </div>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class=\"text-center p-3 text-light\" style=\"background-color: rgba(26,148,255,255);\">© 2022 Copyright:
    <a class=\"text-light\" href=\"{{path('home_page')}}\">KTK_shop.Com</a>
  </div>
  <!-- Copyright -->
    </div>
    {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\KHOI\\Downloads\\KTK-Shop\\templates\\base.html.twig");
    }
}
