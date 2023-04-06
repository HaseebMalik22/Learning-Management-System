<?php

class __Mustache_f0c07be55bd481b4964c218480fefad0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="zero-state mx-auto w-50 text-center my-6">
';
        $buffer .= $indent . '    <img src="';
        $value = $this->resolveValue($context->find('imglink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" alt="';
        $value = $context->find('str');
        $buffer .= $this->section7974629a9d578a311c0e4ce025936b1b($context, $indent, $value);
        $buffer .= '" aria-hidden="true" class="my-5">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->section7974629a9d578a311c0e4ce025936b1b($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    <p>';
        $value = $context->find('str');
        $buffer .= $this->section1ba2dbfbf398529fcbe2b9a3d9455fe5($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    <div class="justify-content-center d-flex">
';
        if ($partial = $this->mustache->loadPartial('gradereport_singleview/page_toggler')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section7974629a9d578a311c0e4ce025936b1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pluginname, gradereport_singleview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pluginname, gradereport_singleview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ba2dbfbf398529fcbe2b9a3d9455fe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewsingleuserorgradeitem, gradereport_singleview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewsingleuserorgradeitem, gradereport_singleview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
