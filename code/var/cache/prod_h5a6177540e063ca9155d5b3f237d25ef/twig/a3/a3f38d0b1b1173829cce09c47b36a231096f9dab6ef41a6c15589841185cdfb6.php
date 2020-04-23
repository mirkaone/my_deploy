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

/* @Storefront/storefront/component/product/card/action.html.twig */
class __TwigTemplate_24706a99396b9b8bf9256f25a3f4aeee508b8751e0c401fccdfe3c331f879272 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_action_inner' => [$this, 'block_component_product_box_action_inner'],
            'component_product_box_action_buy' => [$this, 'block_component_product_box_action_buy'],
            'component_product_box_action_buy_csrf' => [$this, 'block_component_product_box_action_buy_csrf'],
            'component_product_box_action_form' => [$this, 'block_component_product_box_action_form'],
            'component_product_box_action_buy_redirect_input' => [$this, 'block_component_product_box_action_buy_redirect_input'],
            'page_product_detail_buy_product_buy_info' => [$this, 'block_page_product_detail_buy_product_buy_info'],
            'component_product_box_action_detail' => [$this, 'block_component_product_box_action_detail'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_action_inner', $context, $blocks);
    }

    public function block_component_product_box_action_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 2);
        // line 3
        echo "
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 4), "core", [], "any", false, false, false, 4), "listing", [], "any", false, false, false, 4), "allowBuyInListing", [], "any", false, false, false, 4)) {
            // line 5
            echo "        <div class=\"product-action\">
            ";
            // line 6
            $context["isVariant"] =  !(null === twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "parentId", [], "any", false, false, false, 6));
            // line 7
            echo "            ";
            $context["isParent"] = (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "childCount", [], "any", false, false, false, 7) > 0);
            // line 8
            echo "            ";
            $context["isAvailable"] = ( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isCloseout", [], "any", false, false, false, 8) || (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "availableStock", [], "any", false, false, false, 8) >= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "minPurchase", [], "any", false, false, false, 8)));
            // line 9
            echo "
            ";
            // line 10
            if (((($context["isAvailable"] ?? null) &&  !($context["isParent"] ?? null)) &&  !($context["isVariant"] ?? null))) {
                // line 11
                echo "
                ";
                // line 12
                $this->displayBlock('component_product_box_action_buy', $context, $blocks);
                // line 59
                echo "            ";
            } else {
                // line 60
                echo "                ";
                $this->displayBlock('component_product_box_action_detail', $context, $blocks);
                // line 67
                echo "            ";
            }
            // line 68
            echo "        </div>
    ";
        }
    }

    // line 12
    public function block_component_product_box_action_buy($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "                    ";
        // line 14
        echo "                       <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.add");
        echo "\"
                              method=\"post\"
                              class=\"buy-widget\"
                              data-add-to-cart=\"true\">

                            ";
        // line 19
        $this->displayBlock('component_product_box_action_buy_csrf', $context, $blocks);
        // line 22
        echo "
                            ";
        // line 23
        $this->displayBlock('component_product_box_action_form', $context, $blocks);
        // line 57
        echo "                        </form>
                ";
    }

    // line 19
    public function block_component_product_box_action_buy_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.add");
        echo "
                            ";
    }

    // line 23
    public function block_component_product_box_action_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
                                ";
        // line 25
        $this->displayBlock('component_product_box_action_buy_redirect_input', $context, $blocks);
        // line 30
        echo "
                                ";
        // line 31
        $this->displayBlock('page_product_detail_buy_product_buy_info', $context, $blocks);
        // line 51
        echo "
                                <button class=\"btn btn-block btn-buy\"
                                        title=\"";
        // line 53
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct")), "html", null, true);
        echo "\">
                                    ";
        // line 54
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxAddProduct"));
        echo "
                                </button>
                            ";
    }

    // line 25
    public function block_component_product_box_action_buy_redirect_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                                    <input type=\"hidden\"
                                           name=\"redirectTo\"
                                           value=\"frontend.cart.offcanvas\"/>
                                ";
    }

    // line 31
    public function block_page_product_detail_buy_product_buy_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 33
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][id]\"
                                           value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 36
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][referencedId]\"
                                           value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 39
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][type]\"
                                           value=\"product\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 42
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][stackable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 45
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][removable]\"
                                           value=\"1\">
                                    <input type=\"hidden\"
                                           name=\"lineItems[";
        // line 48
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "][quantity]\"
                                           value=\"1\">
                                ";
    }

    // line 60
    public function block_component_product_box_action_detail($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                    <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["id"] ?? null)]), "html", null, true);
        echo "\"
                       class=\"btn btn-block btn-light\"
                       title=\"";
        // line 63
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails")), "html", null, true);
        echo "\">
                        ";
        // line 64
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("listing.boxProductDetails"));
        echo "
                    </a>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/action.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  237 => 64,  233 => 63,  227 => 61,  223 => 60,  216 => 48,  210 => 45,  204 => 42,  198 => 39,  193 => 37,  189 => 36,  184 => 34,  180 => 33,  177 => 32,  173 => 31,  166 => 26,  162 => 25,  155 => 54,  151 => 53,  147 => 51,  145 => 31,  142 => 30,  140 => 25,  137 => 24,  133 => 23,  126 => 20,  122 => 19,  117 => 57,  115 => 23,  112 => 22,  110 => 19,  101 => 14,  99 => 13,  95 => 12,  89 => 68,  86 => 67,  83 => 60,  80 => 59,  78 => 12,  75 => 11,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  62 => 6,  59 => 5,  57 => 4,  54 => 3,  51 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/action.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/action.html.twig");
    }
}
