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

/* @Storefront/storefront/component/product/card/meta.html.twig */
class __TwigTemplate_c6d6993b4e627cd773fa9946b4e4ca2d3c59e7363e5c8055d343bec63fd1534f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_rich_snippets_inner' => [$this, 'block_component_product_box_rich_snippets_inner'],
            'component_product_box_rich_snippets_brand' => [$this, 'block_component_product_box_rich_snippets_brand'],
            'component_product_box_rich_snippets_gtin13' => [$this, 'block_component_product_box_rich_snippets_gtin13'],
            'component_product_box_rich_snippets_mpn' => [$this, 'block_component_product_box_rich_snippets_mpn'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_rich_snippets_inner', $context, $blocks);
    }

    public function block_component_product_box_rich_snippets_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $this->displayBlock('component_product_box_rich_snippets_brand', $context, $blocks);
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('component_product_box_rich_snippets_gtin13', $context, $blocks);
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('component_product_box_rich_snippets_mpn', $context, $blocks);
    }

    // line 2
    public function block_component_product_box_rich_snippets_brand($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <meta itemprop=\"brand\"
              content=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "manufacturer", [], "any", false, false, false, 4), "translated", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\"/>
    ";
    }

    // line 7
    public function block_component_product_box_rich_snippets_gtin13($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        ";
        $context["ean"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "ean", [], "any", false, false, false, 8);
        // line 9
        echo "        ";
        if (($context["ean"] ?? null)) {
            // line 10
            echo "            <meta itemprop=\"gtin13\"
                  content=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["ean"] ?? null), "html", null, true);
            echo "\"/>
        ";
        }
        // line 13
        echo "    ";
    }

    // line 15
    public function block_component_product_box_rich_snippets_mpn($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "        <meta itemprop=\"mpn\"
              content=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "productNumber", [], "any", false, false, false, 17), "html", null, true);
        echo "\"/>
    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  105 => 17,  102 => 16,  98 => 15,  94 => 13,  89 => 11,  86 => 10,  83 => 9,  80 => 8,  76 => 7,  70 => 4,  67 => 3,  63 => 2,  59 => 15,  56 => 14,  54 => 7,  51 => 6,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/meta.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/meta.html.twig");
    }
}
