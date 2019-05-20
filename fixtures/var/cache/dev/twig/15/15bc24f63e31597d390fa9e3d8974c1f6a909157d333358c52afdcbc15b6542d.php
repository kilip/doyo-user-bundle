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
use Twig\Source;

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eacf4951e48c91684c087af2b7da9d5ad69d31b7347a939222c4aa9b0e9ab20f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Framework/Form/form_errors.html.php'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Framework/Form/form_errors.html.php'));

        // line 1
        echo '<?php if (count($errors) > 0): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $view->escape($error->getMessage()) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
';

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    public function getTemplateName()
    {
        return '@Framework/Form/form_errors.html.php';
    }

    public function getDebugInfo()
    {
        return [41 => 1];
    }

    public function getSourceContext()
    {
        return new Source('<?php if (count($errors) > 0): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo $view->escape($error->getMessage()) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
', '@Framework/Form/form_errors.html.php', '/project/doyo/user-bundle/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php');
    }
}
