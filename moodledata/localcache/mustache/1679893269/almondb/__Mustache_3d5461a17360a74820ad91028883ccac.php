<?php

class __Mustache_3d5461a17360a74820ad91028883ccac extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block04enabled');
        $buffer .= $this->section39af5e7931623888a936b9075294c994($context, $indent, $value);

        return $buffer;
    }

    private function section1a4ae2ee96266b16949f13a1cd1b6cff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block04_1 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block04_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a40d4c62b7fb77b5b0843126d5358f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block04_2 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block04_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section39af5e7931623888a936b9075294c994(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block04">
    {{#block04desing1}}
        {{> theme_almondb/frontpage/block04_1 }}
    {{/block04desing1}}
    {{#block04desing2}}
        {{> theme_almondb/frontpage/block04_2 }}
    {{/block04desing2}}
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block04">
';
                $value = $context->find('block04desing1');
                $buffer .= $this->section1a4ae2ee96266b16949f13a1cd1b6cff($context, $indent, $value);
                $value = $context->find('block04desing2');
                $buffer .= $this->section8a40d4c62b7fb77b5b0843126d5358f1($context, $indent, $value);
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
