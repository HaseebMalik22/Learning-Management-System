<?php

class __Mustache_5ca79d182b87427d70594eb790a6421a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('helpicon');
        $buffer .= $this->section24e84f6009cc54b84b541a6503464693($context, $indent, $value);
        if ($partial = $this->mustache->loadPartial('core/search_input')) {
            $buffer .= $partial->renderInternal($context);
        }

        return $buffer;
    }

    private function section24e84f6009cc54b84b541a6503464693(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{>core/help_icon}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
