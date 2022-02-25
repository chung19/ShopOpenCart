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

/* remart/template/common/language.twig */
class __TwigTemplate_25b679a8e2d4a4f0eb8812fcd07cee3b546759b8fce4645ef312228881ffb1f6 extends \Twig\Template
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
        // line 1
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 2
            echo "  <form action=\"";
            echo ($context["action"] ?? null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
    <div class=\"btn-group\">
      <button class=\"btn-link dropdown-toggle test\" data-toggle=\"dropdown\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 6) == ($context["code"] ?? null))) {
                    echo " 
      <img src=\"catalog/language/";
                    // line 7
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7);
                    echo "/";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 7);
                    echo ".png\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 7);
                    echo "\">
      ";
                }
                // line 9
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "      <span>";
            echo ($context["text_language"] ?? null);
            echo "</span>&nbsp;<i class=\"fa fa-angle-down\"></i></button>
      <ul class=\"dropdown-menu dropdown-menu-right langcdrop\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 13
                echo "        <li>
          <button class=\"btn btn-link language-select\" type=\"button\" name=\"";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 14);
                echo "\"><img src=\"catalog/language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 14);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 14);
                echo ".png\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 14);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 14);
                echo "\" /> ";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 14);
                echo "</button>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 20
            echo ($context["redirect"] ?? null);
            echo "\" />
  </form>
";
        }
    }

    public function getTemplateName()
    {
        return "remart/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  104 => 17,  85 => 14,  82 => 13,  78 => 12,  72 => 10,  66 => 9,  55 => 7,  50 => 6,  46 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/common/language.twig", "");
    }
}
