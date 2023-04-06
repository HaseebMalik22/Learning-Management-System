<?php

class __Mustache_0e45e210cddc9ac9daa4564dc6192b61 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="filter pb-4 mb-3 border-bottom" data-filter-for="';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="filter-header d-flex align-items-start justify-content-between">
';
        $buffer .= $indent . '        <div class="filter-name">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('name'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';

        return $buffer;
    }
}
