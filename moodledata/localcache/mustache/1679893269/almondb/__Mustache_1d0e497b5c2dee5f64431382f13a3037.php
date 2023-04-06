<?php

class __Mustache_1d0e497b5c2dee5f64431382f13a3037 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block09 block09desing1 blockbgwhite">
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('block09');
        $buffer .= $this->sectionC51e02dfa7773fec5c026ea9e5577327($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBea26a865e9d666584055988d4c08186(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '  style="background-image: url({{{imgurl}}}); background-size: cover;"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '  style="background-image: url(';
                $value = $this->resolveValue($context->find('imgurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '); background-size: cover;"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section431f17e965a7e3fd3616f325bdce3649(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="background-color:{{bgcolor}};" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="background-color:';
                $value = $this->resolveValue($context->find('bgcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98356cba8263314c491fc915c0809a1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 37, {{catagoryname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' 37, ';
                $value = $this->resolveValue($context->find('catagoryname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC51e02dfa7773fec5c026ea9e5577327(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="col-12 col-md-6 m-auto col-lg-4 pb-4">
        <a class="text-decoration-none" href="{{catagoryURL}}">
          <div class="fdb-box fdb-touch " 
                    {{#imgurl}}  style="background-image: url({{{imgurl}}}); background-size: cover;"{{/imgurl}}
                    {{#bgcolor}} style="background-color:{{bgcolor}};" {{/bgcolor}}>
            <div class="block-text-box text-center">
              <h6>{{#shortentext}} 37, {{catagoryname}} {{/shortentext}}</h6>
              <h6>Over {{coursecount}} Courses</h6>
            </div>
          </div>
        </a>
      </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <div class="col-12 col-md-6 m-auto col-lg-4 pb-4">
';
                $buffer .= $indent . '        <a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('catagoryURL'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="fdb-box fdb-touch " 
';
                $buffer .= $indent . '                    ';
                $value = $context->find('imgurl');
                $buffer .= $this->sectionBea26a865e9d666584055988d4c08186($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('bgcolor');
                $buffer .= $this->section431f17e965a7e3fd3616f325bdce3649($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            <div class="block-text-box text-center">
';
                $buffer .= $indent . '              <h6>';
                $value = $context->find('shortentext');
                $buffer .= $this->section98356cba8263314c491fc915c0809a1e($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '              <h6>Over ';
                $value = $this->resolveValue($context->find('coursecount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' Courses</h6>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
