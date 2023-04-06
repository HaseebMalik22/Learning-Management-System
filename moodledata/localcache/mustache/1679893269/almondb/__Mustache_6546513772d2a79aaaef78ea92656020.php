<?php

class __Mustache_6546513772d2a79aaaef78ea92656020 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block11enabled');
        $buffer .= $this->section81d0cf515f96734f1bb4d1a6a4307f9e($context, $indent, $value);

        return $buffer;
    }

    private function sectionF6f2c7478f507b31a48a304fd0cfe3f6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block11_1 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block11_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2bcb2fe6f3716a5dd7855e05b46cd328(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block11_2 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block11_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81d0cf515f96734f1bb4d1a6a4307f9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block11">
    {{#block11desing1}}
        {{> theme_almondb/frontpage/block11_1 }}
    {{/block11desing1}}
    {{#block11desing2}}
        {{> theme_almondb/frontpage/block11_2 }}
    {{/block11desing2}}
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block11">
';
                $value = $context->find('block11desing1');
                $buffer .= $this->sectionF6f2c7478f507b31a48a304fd0cfe3f6($context, $indent, $value);
                $value = $context->find('block11desing2');
                $buffer .= $this->section2bcb2fe6f3716a5dd7855e05b46cd328($context, $indent, $value);
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
