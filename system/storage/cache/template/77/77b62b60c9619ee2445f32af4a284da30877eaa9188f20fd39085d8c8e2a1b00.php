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

/* remart/template/extension/module/offerbanner.twig */
class __TwigTemplate_c4670b6a000c0866ac3e45a221ffd6863204bea06fe00e76d14690710d12e4f6 extends \Twig\Template
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
        echo "<div class=\"offerbnr\">
\t\t\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t\t\t<div class=\"sub-img-banner\">
\t\t\t\t<div class=\"beffect\">
\t\t\t\t  ";
            // line 5
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                // line 6
                echo "\t\t\t\t  \t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
                echo "\">
\t\t\t\t  \t\t<img src=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive center-block\" />
\t\t\t\t  \t</a>
\t\t\t\t  ";
            } else {
                // line 10
                echo "\t\t\t\t  \t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                echo "\" class=\"img-responsive center-block\" />";
            }
            // line 11
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/offerbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  70 => 11,  63 => 10,  55 => 7,  50 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/offerbanner.twig", "");
    }
}
