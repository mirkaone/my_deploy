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

/* @Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig */
class __TwigTemplate_39417925218a33a00e83e075684c839f05c0b4d79800f241fd7eb672087c1bec extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_category_back_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_category_back_link_text'],
            'layout_utilities_offcanvas_close_icon' => [$this, 'block_layout_utilities_offcanvas_close_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<a class=\"nav-item nav-link is-back-link navigation-offcanvas-link js-navigation-offcanvas-link\"
   href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "parentId", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\"
   itemprop=\"url\"
   title=\"";
        // line 4
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back")), "html", null, true);
        echo "\">
    ";
        // line 5
        $this->displayBlock('layout_navigation_offcanvas_navigation_category_back_link_text', $context, $blocks);
        // line 16
        echo "</a>
";
    }

    // line 5
    public function block_layout_navigation_offcanvas_navigation_category_back_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        <span class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
            ";
        // line 7
        $this->displayBlock('layout_utilities_offcanvas_close_icon', $context, $blocks);
        // line 10
        echo "        </span>

        <span itemprop=\"name\">
            ";
        // line 13
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.back"));
        echo "
        </span>
    ";
    }

    // line 7
    public function block_layout_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", 8);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-left"]));
        // line 9
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  83 => 8,  79 => 7,  72 => 13,  67 => 10,  65 => 7,  62 => 6,  58 => 5,  53 => 16,  51 => 5,  47 => 4,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/back-link.html.twig");
    }
}
