<?php

class __Mustache_ec4ef305669d9bdb762354595fc58f41 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block08enabled');
        $buffer .= $this->section2a250cf83b1453a363668bf7c2e730e5($context, $indent, $value);

        return $buffer;
    }

    private function sectionCcd146367465acd9ac2dd3ff43b2a067(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_almondb/frontpage/block08_1 }}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block08_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36879489830db7dd0e33cb8e9004d860(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_almondb/frontpage/block08_2 }}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block08_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07a016b896ff8546201296442cbe55e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_almondb/frontpage/block08_3 }}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block08_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section125fa617e97b6eea64d06ee7f5935dc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_almondb/frontpage/block08_4 }}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block08_4')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70bcd02a925969ff81fe896616887b11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> theme_almondb/frontpage/block08_5 }}
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block08_5')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a250cf83b1453a363668bf7c2e730e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block08">
  {{#block08desing1}}
    {{> theme_almondb/frontpage/block08_1 }}
  {{/block08desing1}} 
  {{#block08desing2}}
    {{> theme_almondb/frontpage/block08_2 }}
  {{/block08desing2}}
  {{#block08desing3}}
    {{> theme_almondb/frontpage/block08_3 }}
  {{/block08desing3}}
  {{#block08desing4}}
    {{> theme_almondb/frontpage/block08_4 }}
  {{/block08desing4}}
  {{#block08desing5}}
    {{> theme_almondb/frontpage/block08_5 }}
  {{/block08desing5}}
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block08">
';
                $value = $context->find('block08desing1');
                $buffer .= $this->sectionCcd146367465acd9ac2dd3ff43b2a067($context, $indent, $value);
                $value = $context->find('block08desing2');
                $buffer .= $this->section36879489830db7dd0e33cb8e9004d860($context, $indent, $value);
                $value = $context->find('block08desing3');
                $buffer .= $this->section07a016b896ff8546201296442cbe55e6($context, $indent, $value);
                $value = $context->find('block08desing4');
                $buffer .= $this->section125fa617e97b6eea64d06ee7f5935dc5($context, $indent, $value);
                $value = $context->find('block08desing5');
                $buffer .= $this->section70bcd02a925969ff81fe896616887b11($context, $indent, $value);
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
