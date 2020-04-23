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

/* @Storefront/storefront/component/product/card/price-unit.html.twig */
class __TwigTemplate_7f414f0fab46223d1a2380a9710d3eaca2fa66607cd04a27b0eab1b99aaec20d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_price_info' => [$this, 'block_component_product_box_price_info'],
            'component_product_box_price_unit' => [$this, 'block_component_product_box_price_unit'],
            'component_product_box_price_purchase_unit' => [$this, 'block_component_product_box_price_purchase_unit'],
            'component_product_box_price_reference_unit' => [$this, 'block_component_product_box_price_reference_unit'],
            'component_product_box_price' => [$this, 'block_component_product_box_price'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_price_info', $context, $blocks);
    }

    public function block_component_product_box_price_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["purchaseUnit"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "purchaseUnit", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["listingPrice"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedListingPrice", [], "any", false, false, false, 3);
        // line 4
        echo "    ";
        $context["fromPrice"] = twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "from", [], "any", false, false, false, 4);
        // line 5
        echo "    ";
        $context["referncePrice"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 5), "referencePrice", [], "any", false, false, false, 5);
        // line 6
        echo "
    <div class=\"product-price-info\">
        ";
        // line 8
        $this->displayBlock('component_product_box_price_unit', $context, $blocks);
        // line 36
        echo "
        ";
        // line 37
        $this->displayBlock('component_product_box_price', $context, $blocks);
        // line 58
        echo "    </div>
";
    }

    // line 8
    public function block_component_product_box_price_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <p class=\"product-price-unit\">
                ";
        // line 11
        echo "                ";
        $this->displayBlock('component_product_box_price_purchase_unit', $context, $blocks);
        // line 21
        echo "
                ";
        // line 23
        echo "                ";
        $this->displayBlock('component_product_box_price_reference_unit', $context, $blocks);
        // line 34
        echo "            </p>
        ";
    }

    // line 11
    public function block_component_product_box_price_purchase_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                    ";
        if ((($context["purchaseUnit"] ?? null) && (($context["purchaseUnit"] ?? null) != 0))) {
            // line 13
            echo "                        <span class=\"product-unit-label\">
                            ";
            // line 14
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxUnitLabel"));
            echo "
                        </span>
                        <span class=\"price-unit-content\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, ($context["purchaseUnit"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 17), "translation", [0 => "name"], "method", false, false, false, 17), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 20
        echo "                ";
    }

    // line 23
    public function block_component_product_box_price_reference_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "                    ";
        if ( !(null === ($context["referncePrice"] ?? null))) {
            // line 25
            echo "                        <span class=\"price-unit-reference\">
                            ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 26)) {
                // line 27
                echo "                                (";
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.listingTextFrom"));
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "referenceUnit", [], "any", false, false, false, 27), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "referencePrice", [], "any", false, false, false, 27), "unitName", [], "any", false, false, false, 27), "html", null, true);
                echo ")
                            ";
            } else {
                // line 29
                echo "                                (";
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "price", [], "any", false, false, false, 29)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 29), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referncePrice"] ?? null), "unitName", [], "any", false, false, false, 29), "html", null, true);
                echo ")
                            ";
            }
            // line 31
            echo "                        </span>
                    ";
        }
        // line 33
        echo "                ";
    }

    // line 37
    public function block_component_product_box_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "            ";
        $context["listPrice"] = (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 38) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 38), "count", [], "any", false, false, false, 38) > 0))) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 38), "listPrice", [], "any", false, false, false, 38)));
        // line 39
        echo "
            <p class=\"product-price";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 40) > 0)) {
            echo " with-list-price";
        }
        echo "\">
                ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "priceRange", [], "any", false, false, false, 41)) {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["fromPrice"] ?? null), "unitPrice", [], "any", false, false, false, 42)), "html", null, true);
            echo "
                    -
                    ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["listingPrice"] ?? null), "to", [], "any", false, false, false, 44), "unitPrice", [], "any", false, false, false, 44)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 45
($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 45)) == 1)) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrices", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), "unitPrice", [], "any", false, false, false, 46)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "
                ";
        } else {
            // line 48
            echo "                    ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "calculatedPrice", [], "any", false, false, false, 48), "unitPrice", [], "any", false, false, false, 48)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo "

                    ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "percentage", [], "any", false, false, false, 50) > 0)) {
                // line 51
                echo "                        <span class=\"list-price\">
                            ";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["listPrice"] ?? null), "price", [], "any", false, false, false, 52)), "html", null, true);
                echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
                echo "
                        </span>
                    ";
            }
            // line 55
            echo "                ";
        }
        // line 56
        echo "            </p>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/price-unit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 56,  227 => 55,  220 => 52,  217 => 51,  215 => 50,  208 => 48,  201 => 46,  199 => 45,  194 => 44,  188 => 42,  186 => 41,  180 => 40,  177 => 39,  174 => 38,  170 => 37,  166 => 33,  162 => 31,  151 => 29,  138 => 27,  136 => 26,  133 => 25,  130 => 24,  126 => 23,  122 => 20,  114 => 17,  108 => 14,  105 => 13,  102 => 12,  98 => 11,  93 => 34,  90 => 23,  87 => 21,  84 => 11,  81 => 9,  77 => 8,  72 => 58,  70 => 37,  67 => 36,  65 => 8,  61 => 6,  58 => 5,  55 => 4,  52 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/price-unit.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/price-unit.html.twig");
    }
}
