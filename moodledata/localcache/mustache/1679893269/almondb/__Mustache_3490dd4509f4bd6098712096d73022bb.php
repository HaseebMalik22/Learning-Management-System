<?php

class __Mustache_3490dd4509f4bd6098712096d73022bb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="d-flex flex-row-reverse mb-2">
';
        $buffer .= $indent . '    <a class="btn btn-secondary" href="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" title="';
        $value = $context->find('str');
        $buffer .= $this->section8a08f13399a7f51bb7527cbad8e8588f($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section8a08f13399a7f51bb7527cbad8e8588f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section8a08f13399a7f51bb7527cbad8e8588f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'exitactivity, mod_scorm';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'exitactivity, mod_scorm';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
