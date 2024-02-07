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

/* mascota/edad.html.twig */
class __TwigTemplate_c51b76711e8d6d66f5d9551fe4dbdaa9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mascota/edad.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mascota/edad.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Document</title>
</head>
<body>
  Hola ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nombreT"]) || array_key_exists("nombreT", $context) ? $context["nombreT"] : (function () { throw new RuntimeError('Variable "nombreT" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["edadT"]) || array_key_exists("edadT", $context) ? $context["edadT"] : (function () { throw new RuntimeError('Variable "edadT" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " años
  ";
        // line 10
        if (((isset($context["edadT"]) || array_key_exists("edadT", $context) ? $context["edadT"] : (function () { throw new RuntimeError('Variable "edadT" does not exist.', 10, $this->source); })()) > 18)) {
            // line 11
            echo "   mayor de edad
";
        } elseif ((        // line 12
(isset($context["edadT"]) || array_key_exists("edadT", $context) ? $context["edadT"] : (function () { throw new RuntimeError('Variable "edadT" does not exist.', 12, $this->source); })()) > 0)) {
            // line 13
            echo "   menor de edad
";
        } else {
            // line 15
            echo "   no nacido
";
        }
        // line 17
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mascota/edad.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  74 => 17,  70 => 15,  66 => 13,  64 => 12,  61 => 11,  59 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>Document</title>
</head>
<body>
  Hola {{nombreT}} de {{edadT}} años
  {% if edadT > 18 %}
   mayor de edad
{% elseif edadT > 0 %}
   menor de edad
{% else %}
   no nacido
{% endif %}
</body>
</html>", "mascota/edad.html.twig", "C:\\Visual\\Servidor\\Symfony\\proyectoSC\\templates\\mascota\\edad.html.twig");
    }
}
