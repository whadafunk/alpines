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

/* layout/parts/profile_selector.html.twig */
class __TwigTemplate_40fda9caeb85220cc039d5fa9d82dca4 extends Template
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
        // line 33
        echo "
";
        // line 34
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "
<div class=\"dropdown dropstart\">
    <button class=\"dropdown-item dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"ti ti-user-check\"></i>
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "name", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_0 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null)))) ? ((($__internal_compile_1 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["name"] ?? null) : null)) : (""))), "html", null, true);
        echo "
    </button>
    <div class=\"dropdown-menu\" data-bs-popper=\"none\">
        <span class=\"dropdown-header\">";
        // line 42
        echo twig_escape_filter($this->env, __("Profiles"), "html", null, true);
        echo "</span>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiprofiles"));
        foreach ($context['_seq'] as $context["profile_id"] => $context["profile"]) {
            // line 44
            echo "            <a class=\"dropdown-item ";
            echo ((($context["profile_id"] == (((twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile"), "id", [], "array", true, true, false, 44) &&  !(null === (($__internal_compile_2 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)))) ? ((($__internal_compile_3 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null)) : (0)))) ? ("active") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->indexPath(), "html", null, true);
            echo "?newprofile=";
            echo twig_escape_filter($this->env, $context["profile_id"], "html", null, true);
            echo "\">
                <i class=\"ti ti-user-check\"></i>
                ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_4 = $context["profile"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null)), "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['profile_id'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </div>
</div>

";
        // line 52
        $context["target"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/central.php");
        // line 53
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk")) {
            // line 54
            echo "    ";
            $context["target"] = $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("front/helpdesk.public.php");
        }
        // line 56
        echo "
";
        // line 57
        $context["current_entity"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_name"));
        // line 58
        $context["current_entity_short"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity_shortname"));
        // line 59
        if ((($context["current_entity"] ?? null) != ($context["current_entity_short"] ?? null))) {
            // line 60
            echo "    ";
            $context["current_entity_short"] = ("... > " . ($context["current_entity_short"] ?? null));
        }
        // line 62
        if ( !Session::isMultiEntitiesMode()) {
            // line 63
            echo "    <span class=\"dropdown-item dropdown-item-text\" title=\"";
            echo twig_escape_filter($this->env, ($context["current_entity"] ?? null), "html", null, true);
            echo "\">
        <i class=\"fa-fw ti ti-stack\"></i>
        ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["current_entity_short"] ?? null)), "truncate", [35, "..."], "method", false, false, false, 65), "html", null, true);
            echo "
    </span>
";
        } else {
            // line 68
            echo "    <div class=\"dropdown dropstart\" id=\"entity-tree-dropdown-";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
        <a href=\"#\" class=\"dropdown-item dropdown-toggle entity-dropdown-toggle\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" title=\"";
            // line 69
            echo twig_escape_filter($this->env, ($context["current_entity"] ?? null), "html", null, true);
            echo "\">
            <i class=\"fa-fw ti ti-stack\"></i>
            ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["current_entity_short"] ?? null)), "truncate", [35, "..."], "method", false, false, false, 71), "html", null, true);
            echo "
        </a>
        <div class=\"dropdown-menu p-3\">
            <h3>";
            // line 74
            echo twig_escape_filter($this->env, __("Select the desired entity"), "html", null, true);
            echo "</h3>

            <div class=\"alert alert-info\" role=\"alert\">
                ";
            // line 77
            $context["shortcut"] = __("Ctrl + Alt + E");
            // line 78
            echo "                ";
            if ((($context["platform"] ?? null) == twig_constant("donatj\\UserAgent\\Platforms::MACINTOSH"))) {
                // line 79
                echo "                    ";
                $context["shortcut"] = __("⌥ (option) + ⌘ (command) + E");
                // line 80
                echo "                ";
            }
            // line 81
            echo "                ";
            echo twig_sprintf(__("Tip: You can call this modal with %s keys combination"), (("<kbd>" . ($context["shortcut"] ?? null)) . "</kbd>"));
            echo "
            </div>
            <div class=\"alert alert-info\" role=\"alert\">
                <i class=\"fas fa-info-circle\"></i>
                <span class=\"ms-2\">
                ";
            // line 86
            ob_start(function () { return ''; });
            // line 87
            echo "                    <i class=\"fas fa-angle-double-down\" title=\"";
            echo twig_escape_filter($this->env, __("+ sub-entities"), "html", null, true);
            echo "\"></i>
                ";
            $context["recursive_icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 89
            echo "                ";
            echo twig_sprintf(__("Click on the %s icon to load the elements of the selected entity, as well as its sub-entities."), ($context["recursive_icon"] ?? null));
            echo "
                </span>
            </div>

            <form id=\"entsearchform";
            // line 93
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" name=\"entsearchtext\" id=\"entsearchtext";
            // line 95
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        placeholder=\"";
            // line 96
            echo twig_escape_filter($this->env, __("Search entity"), "html", null, true);
            echo "\" autocomplete=\"off\">
                <button type=\"submit\" class=\"btn btn-icon btn-primary\" title=\"";
            // line 97
            echo twig_escape_filter($this->env, __("Search"), "html", null, true);
            echo "\"
                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                    <i class=\"ti ti-search\"></i>
                </button>
                <a class=\"btn btn-icon btn-outline-secondary\" href=\"#\" id=\"entsearchtext";
            // line 101
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "_clear\"
                    title=\"";
            // line 102
            echo twig_escape_filter($this->env, __("Clear search"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                        <i class=\"ti ti-x\"></i>
                </a>
                <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "?active_entity=all\" class=\"btn btn-secondary\"
                    title=\"";
            // line 106
            echo twig_escape_filter($this->env, __("Select all"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                    <i class=\"ti ti-eye\"></i>
                </a>
                </div>
            </form>

            <div class=\"fancytree-grid-container flexbox-item-grow entity_tree\">
                <table id=\"tree_entity";
            // line 113
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                <colgroup>
                    <col></col>
                </colgroup>
                <thead>
                    <tr>
                        <th class=\"parent-path\"></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
                <div id=\"verticalScrollbar-";
            // line 125
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" style=\"height:100%;\"></div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
    \$(function() {
        var initTree";
            // line 132
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " = function() {
            if (\$.ui.fancytree.getTree(\"#tree_entity";
            // line 133
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\") !== null) {
                return;
            }

            \$('#tree_entity";
            // line 137
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').fancytree({
                // load plugins
                extensions: ['filter', 'glyph', 'grid'],

                // Scroll node into visible area, when focused by keyboard
                autoScroll: true,

                // enable font-awesome icons
                glyph: {
                    preset: \"awesome5\",
                    map: {}
                },

                // enable virtual dom, it requires the grid (table extension) plugin
                table: {
                    indentation: 20,       // indent 20px per node level
                    nodeColumnIdx: 0,      // render the node title into the 1st column
                    mergeStatusColumns: false,
                },
                grid: {
                    mergeStatusColumns: false,
                },
                viewport: {
                    enabled: true,
                    count: 15, // number of items to display at once
                },

                // translate strings
                strings: {
                    loading: __(\"Loading...\"),
                    loadError: __(\"Unexpected error.\"),
                    moreData: __(\"More...\"),
                    noData: __(\"No data found\")
                },

                // load data by ajax
                source: {
                    url:  '";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/entitytreesons.php"), "html", null, true);
            echo "',
                    cache: false
                },

                // filter plugin options
                filter: {
                    mode: \"hide\", // remove unmatched nodes
                    autoExpand: true, // if results found in children, auto-expand parent
                    nodata: '";
            // line 182
            echo twig_escape_filter($this->env, __("No entity found"), "html", null, true);
            echo "', // message when no data found
                    highlight: false, // do not highlight matches by wrapping inside tags (when true, this strip the a tag)
                    counter: false, // do not show counters when filtering entity tree
                },

                // load 3rd party scrollbar extension for viewport mode
                preInit: function(event, data) {
                    var tree = data.tree;

                    tree.verticalScrollbar = new PlainScrollbar({
                    alwaysVisible: true,
                    arrows: true,
                    orientation: \"vertical\",
                    onSet: function(numberOfItems) {
                        tree.setViewport({
                            start: Math.round(numberOfItems.start),
                        });
                    },
                    scrollbarElement: document.getElementById(\"verticalScrollbar-";
            // line 200
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"),
                    });
                },

                // update scrollbar when viewport is updated
                updateViewport: function(event, data) {
                    var tree = data.tree;

                    tree.verticalScrollbar.set({
                    start: tree.viewport.start,
                    total: tree.visibleNodeList.length,
                    visible: tree.viewport.count,
                    }, true);  // do not trigger `onSet`

                    initTooltips();
                },

                // update toolips on node expand
                expand: function(event, data) {
                    initTooltips();
                },
            });
        };

      // init Entities tree only when user ask for it (when dropdown is opened)
        document.getElementById('entity-tree-dropdown-";
            // line 225
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')
            .addEventListener('show.bs.dropdown', function (event) {
                initTree";
            // line 227
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "();
            });

        var searchTree = function() {
            var search_text = \$(\"#entsearchtext";
            // line 231
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").val();
            \$.ui.fancytree.getTree(\"#tree_entity";
            // line 232
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").filterBranches(search_text);
        }

        \$('#entsearchform";
            // line 235
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').submit(function(event) {
            // cancel submit of entity search form
            event.preventDefault();

            searchTree();
        });

        \$('#entsearchtext";
            // line 242
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').keyup(function () {
            var inputsearch = \$(this);
            typewatch(function () {
                if (inputsearch.val().length >= 3) {
                searchTree();
                }
            }, 500);
        }).focus();

        \$('#entsearchtext";
            // line 251
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "_clear').click(function () {
            \$('#entsearchtext";
            // line 252
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').val('');
            searchTree();
        });

        // when the shortcut for entity form is called
        hotkeys('ctrl+alt+e, option+command+e', async function(e) {
            e.stopPropagation();
            e.preventDefault();
            \$('.user-menu-dropdown-toggle').dropdown('show');
            await new Promise(r => setTimeout(r, 100));
            \$('.entity-dropdown-toggle').dropdown('show');
            \$('input[name=entsearchtext]').filter(\":visible\")[0].focus();
        });
    });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/parts/profile_selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 252,  403 => 251,  391 => 242,  381 => 235,  375 => 232,  371 => 231,  364 => 227,  359 => 225,  331 => 200,  310 => 182,  299 => 174,  259 => 137,  252 => 133,  248 => 132,  238 => 125,  223 => 113,  213 => 106,  209 => 105,  203 => 102,  199 => 101,  192 => 97,  188 => 96,  184 => 95,  179 => 93,  171 => 89,  165 => 87,  163 => 86,  154 => 81,  151 => 80,  148 => 79,  145 => 78,  143 => 77,  137 => 74,  131 => 71,  126 => 69,  121 => 68,  115 => 65,  109 => 63,  107 => 62,  103 => 60,  101 => 59,  99 => 58,  97 => 57,  94 => 56,  90 => 54,  88 => 53,  86 => 52,  81 => 49,  72 => 46,  62 => 44,  58 => 43,  54 => 42,  48 => 39,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/profile_selector.html.twig", "/var/www/glpi/templates/layout/parts/profile_selector.html.twig");
    }
}
