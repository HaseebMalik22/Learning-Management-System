<?php

class __Mustache_65d160a879b9f35af06dbd53b82f07a4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('istrackeduser');
        $buffer .= $this->section57b731ba2d80d3602bdb2c9934fff123($context, $indent, $value);
        $value = $context->find('istrackeduser');
        if (empty($value)) {
            
            $buffer .= $indent . '    <span class="badge badge-pill badge-light" role="listitem">
';
            $buffer .= $indent . '        <span class="font-weight-normal">';
            $value = $this->resolveValue($context->find('description'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</span>
';
            $buffer .= $indent . '    </span>
';
        }

        return $buffer;
    }

    private function section9585d79f2064844c36246dac1d81a2a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $buffer .= 'aria-label="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaa615c60ed0f0ee22847ec6dd5c6af1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ee307b8c48447630945c918a4d275a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_automatic:done, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_automatic:done, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10a05a2d761cd8f9a6877527fc48fef9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-pill alert-success icon-no-margin" role="listitem" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}>
        {{#pix}}i/checked{{/pix}}
        <strong>{{#str}}completion_automatic:done, core_course{{/str}}</strong> <span class="font-weight-normal">{{description}}</span>
    </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="badge badge-pill alert-success icon-no-margin" role="listitem" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '        ';
                $value = $context->find('pix');
                $buffer .= $this->sectionAaa615c60ed0f0ee22847ec6dd5c6af1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section4ee307b8c48447630945c918a4d275a7($context, $indent, $value);
                $buffer .= '</strong> <span class="font-weight-normal">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section416c9f9e2a9534007ec1f8711ea14706(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/cancel';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/cancel';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8543523334d2fb6475b6b6e248a6f0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_automatic:failed, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_automatic:failed, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe4d1b8658532083b04a5acb38c4ae39(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-pill alert-danger icon-no-margin" role="listitem" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}>
        {{#pix}}e/cancel{{/pix}}
        <strong>{{#str}}completion_automatic:failed, core_course{{/str}}</strong> <span class="font-weight-normal">{{description}}</span>
    </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="badge badge-pill alert-danger icon-no-margin" role="listitem" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '        ';
                $value = $context->find('pix');
                $buffer .= $this->section416c9f9e2a9534007ec1f8711ea14706($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionC8543523334d2fb6475b6b6e248a6f0f($context, $indent, $value);
                $buffer .= '</strong> <span class="font-weight-normal">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section599533857fc3ed42fa4108b4c0e2f019(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completion_automatic:todo, core_course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completion_automatic:todo, core_course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1e4bbfe5606e4250389eedb5c889dc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="badge badge-pill badge-light" role="listitem" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}>
        <strong>{{#str}}completion_automatic:todo, core_course{{/str}}</strong> <span class="font-weight-normal">{{description}}</span>
    </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="badge badge-pill badge-light" role="listitem" ';
                $value = $context->find('accessibledescription');
                $buffer .= $this->section9585d79f2064844c36246dac1d81a2a2($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section599533857fc3ed42fa4108b4c0e2f019($context, $indent, $value);
                $buffer .= '</strong> <span class="font-weight-normal">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57b731ba2d80d3602bdb2c9934fff123(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#statuscomplete}}
    <span class="badge badge-pill alert-success icon-no-margin" role="listitem" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}>
        {{#pix}}i/checked{{/pix}}
        <strong>{{#str}}completion_automatic:done, core_course{{/str}}</strong> <span class="font-weight-normal">{{description}}</span>
    </span>
    {{/statuscomplete}}
    {{#statuscompletefail}}
    <span class="badge badge-pill alert-danger icon-no-margin" role="listitem" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}>
        {{#pix}}e/cancel{{/pix}}
        <strong>{{#str}}completion_automatic:failed, core_course{{/str}}</strong> <span class="font-weight-normal">{{description}}</span>
    </span>
    {{/statuscompletefail}}
    {{#statusincomplete}}
    <span class="badge badge-pill badge-light" role="listitem" {{!
        }}{{#accessibledescription}}{{!
            }}title="{{.}}" {{!
            }}aria-label="{{.}}" {{!
        }}{{/accessibledescription}}>
        <strong>{{#str}}completion_automatic:todo, core_course{{/str}}</strong> <span class="font-weight-normal">{{description}}</span>
    </span>
    {{/statusincomplete}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('statuscomplete');
                $buffer .= $this->section10a05a2d761cd8f9a6877527fc48fef9($context, $indent, $value);
                $value = $context->find('statuscompletefail');
                $buffer .= $this->sectionDe4d1b8658532083b04a5acb38c4ae39($context, $indent, $value);
                $value = $context->find('statusincomplete');
                $buffer .= $this->sectionB1e4bbfe5606e4250389eedb5c889dc2($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
