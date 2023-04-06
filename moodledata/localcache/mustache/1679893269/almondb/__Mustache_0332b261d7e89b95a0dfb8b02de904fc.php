<?php

class __Mustache_0332b261d7e89b95a0dfb8b02de904fc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="footer-popover bg-white classhide">
';
        $buffer .= $indent . '    <div data-region="footer-container-popover">
';
        $buffer .= $indent . '        <button class="btn btn-icon bg-secondary icon-no-margin btn-footer-popover" data-action="footer-popover" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section5a5198f26dc6ad191d1a18c314235d65($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            ';
        $value = $context->find('pix');
        $buffer .= $this->section46f926dcc61094038ebb3542556c1993($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="footer-content-popover container" data-region="footer-content-popover">
';
        $value = $context->findDot('output.has_popover_links');
        $buffer .= $this->sectionC7f9bf406c635764f31042d15474065b($context, $indent, $value);
        $buffer .= $indent . '        <div class="footer-section p-3 border-bottom">
';
        $buffer .= $indent . '            <div class="logininfo">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="footer-section p-3">
';
        $buffer .= $indent . '            <div>';
        $value = $context->find('str');
        $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
        $buffer .= '</div>
';
        $value = $context->findDot('output.moodle_release');
        $buffer .= $this->section73bb8cb2a5e4cb71f2710d52886fa70e($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light">
';
        $buffer .= $indent . '        <div class="container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '<div id="page-footer-frontpage">
';
        $value = $context->find('footerselect2');
        $buffer .= $this->section6b2e19d3baad22ade05fbf72b3ec3f51($context, $indent, $value);
        $value = $context->find('footerselect3');
        $buffer .= $this->section0bb7ffbd583485c7dc673d17e76454c7($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('footerselect1');
        $buffer .= $this->sectionC9152880ced923866f30ea5abd57054d($context, $indent, $value);
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);

        return $buffer;
    }

    private function section5a5198f26dc6ad191d1a18c314235d65(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showfooter, theme_boost';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showfooter, theme_boost';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46f926dcc61094038ebb3542556c1993(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'e/question, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'e/question, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section235cbcf578914b3b2a1ce102d5fef450(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.page_doc_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62a09bf45708b66afa4d9ff4a387ec76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.services_support_link }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD784f9753bc403a7af6901df3b368add(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>{{{ output.supportemail }}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7f9bf406c635764f31042d15474065b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="footer-section p-3 border-bottom">
                {{# output.page_doc_link }}
                    <div>{{{ output.page_doc_link }}}</div>
                {{/ output.page_doc_link }}

                {{# output.services_support_link }}
                    <div>{{{ output.services_support_link }}}</div>
                {{/ output.services_support_link }}

                {{# output.supportemail }}
                    <div>{{{ output.supportemail }}}</div>
                {{/ output.supportemail }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section235cbcf578914b3b2a1ce102d5fef450($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section62a09bf45708b66afa4d9ff4a387ec76($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->sectionD784f9753bc403a7af6901df3b368add($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section73bb8cb2a5e4cb71f2710d52886fa70e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6b2e19d3baad22ade05fbf72b3ec3f51(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/frontpage/block20 }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block20')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bb7ffbd583485c7dc673d17e76454c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> theme_almondb/footer_social }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('theme_almondb/footer_social')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC9152880ced923866f30ea5abd57054d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script>
        function ready() {
            "use strict";
            var x = document.getElementsByTagName("footer")[0];
            if (x.id === "page-footer") { 
                x.classList.add("classvisible");
            }
        }
        document.addEventListener("DOMContentLoaded", ready);
    </script>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <script>
';
                $buffer .= $indent . '        function ready() {
';
                $buffer .= $indent . '            "use strict";
';
                $buffer .= $indent . '            var x = document.getElementsByTagName("footer")[0];
';
                $buffer .= $indent . '            if (x.id === "page-footer") { 
';
                $buffer .= $indent . '                x.classList.add("classvisible");
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        document.addEventListener("DOMContentLoaded", ready);
';
                $buffer .= $indent . '    </script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
