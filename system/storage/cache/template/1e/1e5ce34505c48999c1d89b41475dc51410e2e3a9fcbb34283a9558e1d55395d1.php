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

/* remart/template/extension/module/imgbanner.twig */
class __TwigTemplate_c7e42ae5e1198d989205a719616198e23adc0ee3596940df8c2fa49298e4f142 extends \Twig\Template
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
        echo "\t<div class=\"imgbanner hidden-lg-down\">
\t\t<div class=\"\">
\t\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "\t\t\t\t<div class=\"sub-img-banner\">
\t\t\t\t\t<div class=\"beffect\">
\t\t\t\t\t";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6)) {
                // line 7
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7);
                echo "\">
\t\t\t\t\t\t  \t\t<img src=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 8);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 11);
                echo "\">
\t\t\t\t\t\t  \t\t<img src=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/imgbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  77 => 15,  69 => 12,  64 => 11,  56 => 8,  51 => 7,  49 => 6,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/imgbanner.twig", "");
    }
}
