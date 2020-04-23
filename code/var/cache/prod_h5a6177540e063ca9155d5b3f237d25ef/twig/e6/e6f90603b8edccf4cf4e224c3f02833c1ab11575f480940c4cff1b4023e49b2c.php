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

/* @Storefront/storefront/component/sorting.html.twig */
class __TwigTemplate_43135879eb2a5e53f8b7f18df95f96dedcb599a8dc68aca3d4166c1a1fb77a7f extends \Twig\Template
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
        $context["config"] = ["sorting" => ($context["current"] ?? null)];
        // line 2
        echo "
<div class=\"sorting\" data-listing-sorting=\"true\" data-listing-sorting-options='";
        // line 3
        echo twig_escape_filter($this->env, json_encode(($context["config"] ?? null)), "html", null, true);
        echo "'>
    <select class=\"sorting custom-select\" aria-label=\"";
        // line 4
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.sortingLabel")), "html", null, true);
        echo "\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sorting"]) {
            // line 6
            echo "            ";
            $context["key"] = twig_get_attribute($this->env, $this->source, $context["sorting"], "key", [], "any", false, false, false, 6);
            // line 7
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
            echo "\"";
            if ((($context["key"] ?? null) == ($context["current"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["sorting"], "snippet", [], "any", false, false, false, 7)));
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorting'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 9,  57 => 7,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/sorting.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/sorting.html.twig");
    }
}
