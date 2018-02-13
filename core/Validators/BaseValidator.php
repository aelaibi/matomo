<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Validators;

abstract class BaseValidator
{

    public function getHtmlAttributes()
    {
        return array();
    }

    public function validate($value)
    {

    }
}