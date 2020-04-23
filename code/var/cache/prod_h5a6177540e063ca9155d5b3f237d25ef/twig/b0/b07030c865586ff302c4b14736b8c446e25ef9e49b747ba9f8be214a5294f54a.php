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

/* @Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig */
class __TwigTemplate_cadeabb3afd6177749885f256aa9b3d20077efe9317056ddbe1b28c367cc6b9a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_current_category_item_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "translated", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1);
        // line 2
        echo "<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 3
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_link', $context, $blocks);
        // line 15
        echo "</li>
";
    }

    // line 3
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "        <a class=\"nav-item nav-link navigation-offcanvas-link is-current-category\"
           href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.navigation.page", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\"
           itemprop=\"url\"
           title=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 8
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_current_category_item_text', $context, $blocks);
        // line 13
        echo "        </a>
    ";
    }

    // line 8
    public function block_layout_navigation_offcanvas_navigation_categories_list_current_category_item_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "                <span itemprop=\"name\">
                    ";
        // line 10
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.showCategory", ["%category%" => ($context["name"] ?? null)]));
        echo "
                </span>
            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 10,  78 => 9,  74 => 8,  69 => 13,  67 => 8,  63 => 7,  58 => 5,  55 => 4,  51 => 3,  46 => 15,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/show-active-link.html.twig");
    }
}
