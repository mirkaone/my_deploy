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

/* @Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig */
class __TwigTemplate_d4a98216d284f4c38460d63c7aa251c99f2037f739b0168933346064cce3d0d2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isActive"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == ($context["activeId"] ?? null));
        // line 2
        $context["hasChildren"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 2), "childCount", [], "any", false, false, false, 2) > 0);
        // line 3
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 3), "externalLink", [], "any", false, false, false, 3)) {
            // line 4
            echo "    ";
            $context["url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 4), "externalLink", [], "any", false, false, false, 4);
        } else {
            // line 6
            echo "    ";
            $context["url"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6)]);
        }
        // line 8
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 8), "translated", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8);
        // line 9
        echo "
<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 11
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link', $context, $blocks);
        // line 32
        echo "</li>
";
    }

    // line 11
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "        <a class=\"navigation-offcanvas-link nav-item nav-link";
        if (($context["isActive"] ?? null)) {
            echo " active";
        }
        if (($context["hasChildren"] ?? null)) {
            echo " js-navigation-offcanvas-link";
        }
        echo "\"
           href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"
            ";
        // line 14
        if (($context["hasChildren"] ?? null)) {
            // line 15
            echo "                data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\"
            ";
        }
        // line 17
        echo "           itemprop=\"url\"
           title=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 19
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_text', $context, $blocks);
        // line 30
        echo "        </a>
    ";
    }

    // line 19
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <span itemprop=\"name\">";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</span>
                ";
        // line 21
        if (($context["hasChildren"] ?? null)) {
            // line 22
            echo "                    ";
            $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon', $context, $blocks);
            // line 28
            echo "                ";
        }
        // line 29
        echo "            ";
    }

    // line 22
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "                        <span
                            class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            ";
        // line 25
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", 25);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-right"]));
        // line 26
        echo "                        </span>
                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 26,  136 => 25,  132 => 23,  128 => 22,  124 => 29,  121 => 28,  118 => 22,  116 => 21,  111 => 20,  107 => 19,  102 => 30,  100 => 19,  96 => 18,  93 => 17,  87 => 15,  85 => 14,  81 => 13,  71 => 12,  67 => 11,  62 => 32,  60 => 11,  56 => 9,  54 => 8,  50 => 6,  46 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/item-link.html.twig");
    }
}
