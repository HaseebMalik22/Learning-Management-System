<?php

class __Mustache_ec995dd7b05967cf69c6e499dec66924 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation full-width-bottom-border">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('generalnavselector');
        $buffer .= $this->section70583f5a8fcc1cd4ae6828417b1997a8($context, $indent, $value);
        $value = $context->find('groupselector');
        $buffer .= $this->section8c2429ccb51f0a3ae9c7ccbcf261f0cc($context, $indent, $value);
        $value = $context->find('itemselector');
        $buffer .= $this->section8c2429ccb51f0a3ae9c7ccbcf261f0cc($context, $indent, $value);
        $value = $context->find('pagetoggler');
        $buffer .= $this->section86cdab40d670e0b3cf4c3be4c0034e48($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section70583f5a8fcc1cd4ae6828417b1997a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core/tertiary_navigation_selector}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/tertiary_navigation_selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8c2429ccb51f0a3ae9c7ccbcf261f0cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{{.}}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6663241c1a266ed4931cfd7e44a73463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
                            bulkactions.init();
                            });
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
';
                $buffer .= $indent . '                            bulkactions.init();
';
                $buffer .= $indent . '                            });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71d16afd0e51d11f0c0e03cddfbd2b75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="navitem-divider"></div>
                        <div class="navitem">{{{bulkactions}}}</div>
                        {{#js}}
                            require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
                            bulkactions.init();
                            });
                        {{/js}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="navitem-divider"></div>
';
                $buffer .= $indent . '                        <div class="navitem">';
                $value = $this->resolveValue($context->find('bulkactions'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $value = $context->find('js');
                $buffer .= $this->section6663241c1a266ed4931cfd7e44a73463($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section86cdab40d670e0b3cf4c3be4c0034e48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex ml-auto">
                {{#bulkactions}}
                        <div class="navitem-divider"></div>
                        <div class="navitem">{{{bulkactions}}}</div>
                        {{#js}}
                            require([\'gradereport_singleview/bulkactions\'], function(bulkactions) {
                            bulkactions.init();
                            });
                        {{/js}}
                {{/bulkactions}}
                <div class="navitem-divider"></div>
                <div class="navitem">
                    {{>gradereport_singleview/page_toggler}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex ml-auto">
';
                $value = $context->find('bulkactions');
                $buffer .= $this->section71d16afd0e51d11f0c0e03cddfbd2b75($context, $indent, $value);
                $buffer .= $indent . '                <div class="navitem-divider"></div>
';
                $buffer .= $indent . '                <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('gradereport_singleview/page_toggler')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
