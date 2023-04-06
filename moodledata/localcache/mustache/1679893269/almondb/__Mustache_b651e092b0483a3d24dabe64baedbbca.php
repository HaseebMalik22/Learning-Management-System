<?php

class __Mustache_b651e092b0483a3d24dabe64baedbbca extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<input type="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" value="';
        $value = $this->resolveValue($context->find('value'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" ';
        $value = $this->resolveValue($context->find('disabled'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' class="btn btn-secondary">
';

        return $buffer;
    }
}
