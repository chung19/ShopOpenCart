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

/* remart/template/product/review.twig */
class __TwigTemplate_cc238b4d33ef538323276b76187e2261efef6f933c815cd1ea43dac24ec6f961 extends \Twig\Template
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
        if (($context["reviews"] ?? null)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                echo "
   <div class=\"custreview\">
    <div>
      ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 7
                    echo "      ";
                    if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 7) < $context["i"])) {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    } else {
                        echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                    }
                    // line 8
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "      </div>

     <div class=\"crspc\"> <span><strong>";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 11);
                echo "</strong></span><span class=\"rsep\">|</span><span class=\"rdate\">";
                echo twig_get_attribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 11);
                echo "</span></div>
      <p>";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 12);
                echo "</p>
    </div>



";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "<div class=\"text-right\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
";
        } else {
            // line 20
            echo "<p>";
            echo ($context["text_no_reviews"] ?? null);
            echo "</p>
";
        }
        // line 21
        echo " ";
    }

    public function getTemplateName()
    {
        return "remart/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  93 => 20,  87 => 18,  75 => 12,  69 => 11,  65 => 9,  59 => 8,  52 => 7,  48 => 6,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/product/review.twig", "");
    }
}
