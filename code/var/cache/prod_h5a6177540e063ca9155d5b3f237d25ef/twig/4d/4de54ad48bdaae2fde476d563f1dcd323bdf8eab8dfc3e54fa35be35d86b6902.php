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

/* @Storefront/storefront/component/product/card/badges.html.twig */
class __TwigTemplate_6a3e12dd4769befc06c782c69cbe83db70f893e390dfb614c515ac3b6f8ec7ec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_badges' => [$this, 'block_component_product_badges'],
            'component_product_badges_discount' => [$this, 'block_component_product_badges_discount'],
            'component_product_badges_topseller' => [$this, 'block_component_product_badges_topseller'],
            'component_product_badges_new' => [$this, 'block_component_product_badges_new'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_badges', $context, $blocks);
    }

    public function block_component_product_badges($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"product-badges\">
        ";
        // line 3
        $this->displayBlock('component_product_badges_discount', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('component_product_badges_topseller', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('component_product_badges_new', $context, $blocks);
        // line 28
        echo "    </div>
";
    }

    // line 3
    public function block_component_product_badges_discount($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "            ";
        $context["listPrice"] = (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 4) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 4), "count", [], "any", false, false, false, 4) > 0))) ? (null) : ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 4), "listPrice", [], "any", false, false, false, 4), "percentage", [], "any", false, false, false, 4) > 0)));
        // line 5
        echo "
            ";
        // line 6
        if (($context["listPrice"] ?? null)) {
            // line 7
            echo "                <div class=\"badge badge-danger badge-discount\">
                    <span>&#37;</span>
                </div>
            ";
        }
        // line 11
        echo "        ";
    }

    // line 13
    public function block_component_product_badges_topseller($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "markAsTopseller", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div>
                    <span class=\"badge badge-warning badge-topseller\">";
            // line 16
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelTopseller"));
            echo "</span>
                </div>
            ";
        }
        // line 19
        echo "        ";
    }

    // line 21
    public function block_component_product_badges_new($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isNew", [], "any", false, false, false, 22)) {
            // line 23
            echo "                <div>
                    <span class=\"badge badge-success badge-new\">";
            // line 24
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxLabelNew"));
            echo "</span>
                </div>
            ";
        }
        // line 27
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/badges.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  120 => 24,  117 => 23,  114 => 22,  110 => 21,  106 => 19,  100 => 16,  97 => 15,  94 => 14,  90 => 13,  86 => 11,  80 => 7,  78 => 6,  75 => 5,  72 => 4,  68 => 3,  63 => 28,  61 => 21,  58 => 20,  56 => 13,  53 => 12,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/badges.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/badges.html.twig");
    }
}
