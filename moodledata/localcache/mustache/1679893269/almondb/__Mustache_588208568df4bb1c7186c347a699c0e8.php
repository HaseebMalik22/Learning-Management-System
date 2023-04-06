<?php

class __Mustache_588208568df4bb1c7186c347a699c0e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block19enabled');
        $buffer .= $this->section22a6f2f415dcbb0a277736ad4fa5cbd8($context, $indent, $value);

        return $buffer;
    }

    private function section95334ad0c1be0ed806b604448a3e5754(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block19_1 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block19_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD43a4f8432fea6c181df877db2c6bbc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block19_2 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block19_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22a6f2f415dcbb0a277736ad4fa5cbd8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block19">
    {{#block19desing1}}
        {{> theme_almondb/frontpage/block19_1 }}
    {{/block19desing1}}
    {{#block19desing2}}
        {{> theme_almondb/frontpage/block19_2 }}
    {{/block19desing2}}
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block19">
';
                $value = $context->find('block19desing1');
                $buffer .= $this->section95334ad0c1be0ed806b604448a3e5754($context, $indent, $value);
                $value = $context->find('block19desing2');
                $buffer .= $this->sectionD43a4f8432fea6c181df877db2c6bbc8($context, $indent, $value);
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
