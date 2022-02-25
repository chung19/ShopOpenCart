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

/* remart/template/extension/module/leftbanner.twig */
class __TwigTemplate_9c379c63f689d43be2cafcb84ee339773921f64b8c0bae9dea23d95fddac40c3 extends \Twig\Template
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
        echo "<div class=\"leftbnr\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t<div class=\"beffect\">
\t  ";
            // line 4
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 4)) {
                // line 5
                echo "\t  \t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                echo "\">
\t  \t\t<img src=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 6);
                echo "\" class=\"img-responsive center-block\" />
\t  \t</a>
\t  ";
            } else {
                // line 9
                echo "\t  \t<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 9);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
                echo "\" class=\"img-responsive center-block\" />";
            }
            // line 10
            echo "\t</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/leftbanner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 12,  69 => 10,  62 => 9,  54 => 6,  49 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/leftbanner.twig", "");
    }
}
