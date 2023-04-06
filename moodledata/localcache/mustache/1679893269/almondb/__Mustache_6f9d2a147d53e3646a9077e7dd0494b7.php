<?php

class __Mustache_6f9d2a147d53e3646a9077e7dd0494b7 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block20enabled');
        $buffer .= $this->section277094d77a8ba74ba5e85435778582dc($context, $indent, $value);

        return $buffer;
    }

    private function section8a2f99e28c81a6ff6d77e3578195d317(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' style="background-color: {{footerbackgroundcolor}};"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' style="background-color: ';
                $value = $this->resolveValue($context->find('footerbackgroundcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section598178325940ff06eab60246ba935dd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}">
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->findDot('output.get_compact_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ed581c64868a958502861f693b43dc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#output.get_compact_logo_url}}
                                <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}">
                            {{/output.get_compact_logo_url}} 
                            {{^output.get_compact_logo_url}}
                                <div class="widget-title footer-site-name">
                                    {{{block20col1header}}}
                                </div>
                            {{/output.get_compact_logo_url}}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('output.get_compact_logo_url');
                $buffer .= $this->section598178325940ff06eab60246ba935dd5($context, $indent, $value);
                $value = $context->findDot('output.get_compact_logo_url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div class="widget-title footer-site-name">
';
                    $buffer .= $indent . '                                    ';
                    $value = $this->resolveValue($context->find('block20col1header'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8edec1f4b7377369400277b3e15b1709(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '     
                                <img src="{{output.get_logo_url}}" alt="{{sitename}}">
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <img src="';
                $value = $this->resolveValue($context->findDot('output.get_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE59e3a570fdfbcdeac9e54bf3c78bed5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#output.get_logo_url}}     
                                <img src="{{output.get_logo_url}}" alt="{{sitename}}">
                            {{/output.get_logo_url}} 
                            {{^output.get_logo_url}}
                                <div class="widget-title footer-site-name">
                                    {{{block20col1header}}}
                                </div> 
                            {{/output.get_logo_url}} 
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('output.get_logo_url');
                $buffer .= $this->section8edec1f4b7377369400277b3e15b1709($context, $indent, $value);
                $value = $context->findDot('output.get_logo_url');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div class="widget-title footer-site-name">
';
                    $buffer .= $indent . '                                    ';
                    $value = $this->resolveValue($context->find('block20col1header'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                </div> 
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf3ce063c58e0028e6090dcfb0d5b686(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'd-lg-block d-xl-block';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'd-lg-block d-xl-block';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfc6bf7c0c932ad7df5a3e2d13e6b91b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="setupbutton d-none d-sm-none d-md-none {{#block20moodle}}d-lg-block d-xl-block{{/block20moodle}}">
            <a role="button" href="#" class="btn btn-danger" data-toggle="modal" data-target="#setup1Modal">
                <i class="icon fa fa-cog fa-fw"></i>
            </a>
        </div> 
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="setupbutton d-none d-sm-none d-md-none ';
                $value = $context->find('block20moodle');
                $buffer .= $this->sectionBf3ce063c58e0028e6090dcfb0d5b686($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '            <a role="button" href="#" class="btn btn-danger" data-toggle="modal" data-target="#setup1Modal">
';
                $buffer .= $indent . '                <i class="icon fa fa-cog fa-fw"></i>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section277094d77a8ba74ba5e85435778582dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<section id="block20">
    <footer class="footer-header-underline hy-pt-60 hy-pb-20 black-bg" {{#footerbackgroundcolor}} style="background-color: {{footerbackgroundcolor}};"{{/footerbackgroundcolor}} >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            {{#block20logosmall}}
                            {{#output.get_compact_logo_url}}
                                <img src="{{output.get_compact_logo_url}}" alt="{{sitename}}">
                            {{/output.get_compact_logo_url}} 
                            {{^output.get_compact_logo_url}}
                                <div class="widget-title footer-site-name">
                                    {{{block20col1header}}}
                                </div>
                            {{/output.get_compact_logo_url}}
                            {{/block20logosmall}}

                            {{#block20logologo}}
                            {{#output.get_logo_url}}     
                                <img src="{{output.get_logo_url}}" alt="{{sitename}}">
                            {{/output.get_logo_url}} 
                            {{^output.get_logo_url}}
                                <div class="widget-title footer-site-name">
                                    {{{block20col1header}}}
                                </div> 
                            {{/output.get_logo_url}} 
                            {{/block20logologo}}

                            {{^block20logosmall}}
                            {{^block20logologo}}
                            <div class="widget-title footer-site-name">
                                {{{block20col1header}}}
                            </div> 
                            {{/block20logologo}} 
                            {{/block20logosmall}}  
                            <div class="footer-dec">
                            <p>{{{block20col1caption}}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <div class="footer-widget">
                        <div class="widget-title footer-header-underline">
                            <h6>{{{block20col4header}}}</h6>
                        </div>
                        <div class="address-line">
                            <p>{{{block20col4caption}}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title footer-header-underline">
                            <h6>{{{block20col2header}}}</h6>
                        </div>
                        <ul class="footer-menu">
                            {{{block20col2links}}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title footer-header-underline">
                            <h6>{{{block20col3header}}}</h6>
                        </div>
                        <ul class="footer-menu">
                        {{{block20col3links}}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area black-bg">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center hy-pt-10 social-links">
                    {{{block20social}}}
                </div>
                <div class="col-12 text-center">
                    <div class="copyright-area ">
                        <small>
                            {{{block20copyright}}}
                        </small>
                    </div>
                </div>
            </div>
        </div>
        {{#userlogin}}
        <div class="setupbutton d-none d-sm-none d-md-none {{#block20moodle}}d-lg-block d-xl-block{{/block20moodle}}">
            <a role="button" href="#" class="btn btn-danger" data-toggle="modal" data-target="#setup1Modal">
                <i class="icon fa fa-cog fa-fw"></i>
            </a>
        </div> 
        {{/userlogin}}
        {{> theme_almondb/frontpage/theme}}
    </div>
</section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<section id="block20">
';
                $buffer .= $indent . '    <footer class="footer-header-underline hy-pt-60 hy-pb-20 black-bg" ';
                $value = $context->find('footerbackgroundcolor');
                $buffer .= $this->section8a2f99e28c81a6ff6d77e3578195d317($context, $indent, $value);
                $buffer .= ' >
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                <div class="col-lg-3 col-md-6">
';
                $buffer .= $indent . '                    <div class="footer-widget">
';
                $buffer .= $indent . '                        <div class="footer-logo">
';
                $value = $context->find('block20logosmall');
                $buffer .= $this->section8ed581c64868a958502861f693b43dc2($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('block20logologo');
                $buffer .= $this->sectionE59e3a570fdfbcdeac9e54bf3c78bed5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('block20logosmall');
                if (empty($value)) {
                    
                    $value = $context->find('block20logologo');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                            <div class="widget-title footer-site-name">
';
                        $buffer .= $indent . '                                ';
                        $value = $this->resolveValue($context->find('block20col1header'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '
';
                        $buffer .= $indent . '                            </div> 
';
                    }
                }
                $buffer .= $indent . '                            <div class="footer-dec">
';
                $buffer .= $indent . '                            <p>';
                $value = $this->resolveValue($context->find('block20col1caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-lg-3 col-md-6 ">
';
                $buffer .= $indent . '                    <div class="footer-widget">
';
                $buffer .= $indent . '                        <div class="widget-title footer-header-underline">
';
                $buffer .= $indent . '                            <h6>';
                $value = $this->resolveValue($context->find('block20col4header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="address-line">
';
                $buffer .= $indent . '                            <p>';
                $value = $this->resolveValue($context->find('block20col4caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-lg-3 col-md-6">
';
                $buffer .= $indent . '                    <div class="footer-widget">
';
                $buffer .= $indent . '                        <div class="widget-title footer-header-underline">
';
                $buffer .= $indent . '                            <h6>';
                $value = $this->resolveValue($context->find('block20col2header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <ul class="footer-menu">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('block20col2links'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-lg-3 col-md-6">
';
                $buffer .= $indent . '                    <div class="footer-widget">
';
                $buffer .= $indent . '                        <div class="widget-title footer-header-underline">
';
                $buffer .= $indent . '                            <h6>';
                $value = $this->resolveValue($context->find('block20col3header'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <ul class="footer-menu">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('block20col3links'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </ul>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </footer>
';
                $buffer .= $indent . '    <div class="copyright-area black-bg">
';
                $buffer .= $indent . '        <div class="container">
';
                $buffer .= $indent . '            <div class="row ">
';
                $buffer .= $indent . '                <div class="col-12 text-center hy-pt-10 social-links">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('block20social'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-12 text-center">
';
                $buffer .= $indent . '                    <div class="copyright-area ">
';
                $buffer .= $indent . '                        <small>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('block20copyright'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </small>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $value = $context->find('userlogin');
                $buffer .= $this->sectionCfc6bf7c0c932ad7df5a3e2d13e6b91b($context, $indent, $value);
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/theme')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
