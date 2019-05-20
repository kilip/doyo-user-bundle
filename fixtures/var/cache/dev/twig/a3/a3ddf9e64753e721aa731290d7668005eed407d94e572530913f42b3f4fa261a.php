<?php

/*
 * This file is part of the DoyoUserBundle project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* @Twig/Exception/exception.txt.twig */
class __TwigTemplate_47d3d26a193e0939ca74870ea7726d42bc80999473129a800a8330c0f96df712 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/exception.txt.twig'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/exception.txt.twig'));

        // line 1
        echo '[exception] ';
        echo((((isset($context['status_code']) || array_key_exists('status_code', $context) ? $context['status_code'] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 1, $this->source); })()).' | ').(isset($context['status_text']) || array_key_exists('status_text', $context) ? $context['status_text'] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 1, $this->source); })())).' | ').twig_get_attribute($this->env, $this->source, (isset($context['exception']) || array_key_exists('exception', $context) ? $context['exception'] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 1, $this->source); })()), 'class', [], 'any', false, false, false, 1);
        echo '
[message] ';
        // line 2
        echo twig_get_attribute($this->env, $this->source, (isset($context['exception']) || array_key_exists('exception', $context) ? $context['exception'] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 2, $this->source); })()), 'message', [], 'any', false, false, false, 2);
        echo '
';
        // line 3
        $context['_parent'] = $context;
        $context['_seq']    = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context['exception']) || array_key_exists('exception', $context) ? $context['exception'] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 3, $this->source); })()), 'toarray', [], 'any', false, false, false, 3));
        foreach ($context['_seq'] as $context['i'] => $context['e']) {
            // line 4
            echo '[';
            echo $context['i'] + 1;
            echo '] ';
            echo twig_get_attribute($this->env, $this->source, $context['e'], 'class', [], 'any', false, false, false, 4);
            echo ': ';
            echo twig_get_attribute($this->env, $this->source, $context['e'], 'message', [], 'any', false, false, false, 4);
            echo '
';
            // line 5
            echo twig_include($this->env, $context, '@Twig/Exception/traces.txt.twig', ['exception' => $context['e']], false);
            echo '

';
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    public function getTemplateName()
    {
        return '@Twig/Exception/exception.txt.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [63 => 5,  54 => 4,  50 => 3,  46 => 2,  41 => 1];
    }

    public function getSourceContext()
    {
        return new Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", '@Twig/Exception/exception.txt.twig', '/project/doyo/user-bundle/vendor/symfony/twig-bundle/Resources/views/Exception/exception.txt.twig');
    }
}