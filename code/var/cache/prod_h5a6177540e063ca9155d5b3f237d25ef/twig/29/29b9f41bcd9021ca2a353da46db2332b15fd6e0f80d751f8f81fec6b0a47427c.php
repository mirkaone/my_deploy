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

/* @Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig */
class __TwigTemplate_3a16aca23edf4acfd29dc5a78221a0950f8c00bc99d7b9225f034cb0563be387 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_category_headline' => [$this, 'block_layout_navigation_offcanvas_navigation_category_headline'],
            'layout_navigation_offcanvas_navigation_category_headline_text' => [$this, 'block_layout_navigation_offcanvas_navigation_category_headline_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_headline', $context, $blocks);
    }

    public function block_layout_navigation_offcanvas_navigation_category_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <a class=\"nav-item nav-link navigation-offcanvas-headline\"
       href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parentId", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\"
       itemprop=\"url\">
        ";
        // line 5
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_headline_text', $context, $blocks);
        // line 10
        echo "    </a>
";
    }

    // line 5
    public function block_layout_navigation_offcanvas_navigation_category_headline_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <span itemprop=\"name\">
                ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "translated", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "
            </span>
        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  65 => 6,  61 => 5,  56 => 10,  54 => 5,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/active-item-link.html.twig");
    }
}
