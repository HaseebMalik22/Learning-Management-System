<?php

class __Mustache_4cacb68994e1cf293509e6025af87cef extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block09enabled');
        $buffer .= $this->section0a7a6787295d6339728ce98b788019a4($context, $indent, $value);

        return $buffer;
    }

    private function section10817a497ffdcb7ff9a499a21af3a67c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_almondb/frontpage/block09_1 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block09_1')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA999067c45ac1a730bace357585dda22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_almondb/frontpage/block09_2 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block09_2')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a19144ce5d576475482b68fc5540056(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      {{> theme_almondb/frontpage/block09_3 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block09_3')) {
                    $buffer .= $partial->renderInternal($context, $indent . '      ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a7a6787295d6339728ce98b788019a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block09">
  <div class="block09">
    <div class="container blockbgwhite">
      <div class="row">
        <div class="col-lg-12 text-center ">
          <div class="section-title-fp hytext"> 
            <h4> 
              {{{block09header}}}
            </h4>
            {{block09caption}}
          </div>
        </div>
      </div>
    </div>
    {{#block09desing1}}
      {{> theme_almondb/frontpage/block09_1 }}
    {{/block09desing1}}
    {{#block09desing2}}
      {{> theme_almondb/frontpage/block09_2 }}
    {{/block09desing2}}
    {{#block09desing3}}
      {{> theme_almondb/frontpage/block09_3 }}
    {{/block09desing3}}
  </div>
</section>  
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block09">
';
                $buffer .= $indent . '  <div class="block09">
';
                $buffer .= $indent . '    <div class="container blockbgwhite">
';
                $buffer .= $indent . '      <div class="row">
';
                $buffer .= $indent . '        <div class="col-lg-12 text-center ">
';
                $buffer .= $indent . '          <div class="section-title-fp hytext"> 
';
                $buffer .= $indent . '            <h4> 
';
                $buffer .= $indent . '              ';
                $value = $this->resolveValue($context->find('block09header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </h4>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('block09caption'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '      </div>
';
                $buffer .= $indent . '    </div>
';
                $value = $context->find('block09desing1');
                $buffer .= $this->section10817a497ffdcb7ff9a499a21af3a67c($context, $indent, $value);
                $value = $context->find('block09desing2');
                $buffer .= $this->sectionA999067c45ac1a730bace357585dda22($context, $indent, $value);
                $value = $context->find('block09desing3');
                $buffer .= $this->section1a19144ce5d576475482b68fc5540056($context, $indent, $value);
                $buffer .= $indent . '  </div>
';
                $buffer .= $indent . '</section>  
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
